@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <input class="form-control" id="search" name="search" placeholder="Start typing here" type="text" data-list=".list" autofocus>
        @foreach(DB::table('clients')->get() as $filter)
            <ul class="list">
                <span>Name: <a href="/b/{{ $filter->name}}?csrf={{ $filter->id }}">{{ $filter->username }}</a>&nbsp;Address: {{ $filter->PresentAddress }}</span>
            </ul>
        @endforeach
        <br><br>
        <br><br>
        @foreach($profile as $pro)
        <form action="/b/{{ $pro->name }}" method="get">
            <input type="hidden" name="csrf" value="{{ $pro->id }}">
            <div class="col-xs-12">
                <h3 id="pageMTiles">Bill Receipt</h3>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <div class="form-group has-feedback">
                            {{--<span class="input-group-addon">--}}
                                {{--<span>Credential</span>--}}
                                {{--&nbsp;--}}
                                {{--<span class="glyphicon glyphicon-info-sign"></span>--}}
                                {{--<span class="fa fa-info-circle fa-lg"></span>--}}
                            {{--</span>--}}
                            <div class="form-group">
                                <p class="form-control"> <b>User Name: </b> <i>{{ $pro->username }}</i></p>
                            </div>
                            <br>
                            <div class="form-group">
                                <p class="form-control"> <b>Password: </b> <i>{{ $pro->password }}</i></p>
                            </div>
                            {{--<div class="input-group">--}}
                                {{--<input type="username" class="form-control" id="username" placeholder="User Name" value="{{ $pro->username }}">--}}
                                {{--<span class="input-group-addon">--}}
                                    {{--<span>User Name</span>--}}
                                    {{--&nbsp;--}}
                                    {{--<span class="glyphicon glyphicon-info-sign"></span>--}}
                                    {{--<span class="fa fa-info-circle fa-lg"></span>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                            {{--<br>--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" id="password" placeholder="Password" value="{{ $pro->password }}">--}}
                                {{--<span class="input-group-addon">--}}
                                    {{--<span>Password</span>--}}
                                    {{--&nbsp;--}}
                                    {{--<span class="glyphicon glyphicon-info-sign"></span>--}}
                                    {{--<span class="fa fa-info-circle fa-lg"></span>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    {{--<div class="col-lg-1">--}}
                        {{--<button type="button" class="btn btn-default">FIND</button>--}}
                    {{--</div>--}}

                </div>
                <br>
                <hr>
                <br>
                <div class="form-group input-group has-feedback">
                    {{csrf_field()}}
                    <input type="number" min="0" minlength="5" class="form-control" id="receiptno" name="receipt" placeholder="Receipt No.">
                    <span class="input-group-addon">
                        <span>Receipt No.</span>
                        &nbsp;
                        <span class="fa fa-sticky-note" aria-hidden="true"></span>
                    </span>
                </div>

                <br>
                <h4 id="pageMTiles" >Bill Payment</h4>
                <br>
                {{--<div class="input-group date">--}}
                    {{--@if (Auth::check(['email' => 'shanewasahmed@gmail.com']))--}}
                        {{--<input type="text" class="form-control" placeholder="Billing Date " value="{{ $pro->payment }}">--}}
                        {{--<input type="text" class="form-control" placeholder="Billing Date " id="billingdatepicker" value="{{ $pro->payment }}">--}}
                    {{--@else--}}
                        {{--<input type="text" disabled class="form-control" placeholder="Billing Date " id="billingdatepicker">--}}
                    {{--@endif--}}
                    {{--<span class="input-group-addon">--}}
                        {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                    {{--</span>--}}
                {{--</div>--}}
                <div class="form-group">
                    <?php
                        $dates = date("Y/M/d");
                        list($year, $month, $day) = mb_split( '[/.-]', $dates);
                    ?>
                    <p class="form-control"> <b>Payment Date: </b> {{ $pro->payment }}<i>'th</i> {{$month}} {{$year}}</p>
                </div>

                {{--<div class="input-group">--}}
                    {{--<input type="number" class="form-control" id="payment" placeholder="Payment Date" value="{{ $pro -> payment }}">--}}
                    {{--<select class="form-control selectpicker" id="payday" onchange="genericSelectDisabler(payday,payment)">--}}
                        {{--<option>--- Bill Payment Date ---</option>--}}
                        {{--@for($i=1;$i<=31;$i++)--}}
                            {{--<option value={{$i}}>{{$i}}</option>";--}}
                        {{--@endfor--}}
                    {{--</select>--}}
                    {{--<span class="input-group-addon">--}}
                        {{--<span>Monthly Bill Payment Date</span>--}}
                        {{--&nbsp;--}}
                        {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                    {{--</span>--}}
                {{--</div>--}}
                <br>
                <h4 id="pageMTiles">Method</h4>
                <br>
                {{csrf_field()}}
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="method" id="optionsRadios1" value="cash" checked>
                        Cash
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" name="method" id="optionsRadios1" value="bkash">
                        Bkash
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" name="method" id="optionsRadios1" value="bank">
                        Bank
                    </label>
                </div>
                <br>
                <h4 id="pageMTiles">Type</h4>
                <br>
                {{csrf_field()}}
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="type" id="monthcheck" onchange="Check('monthcheck', '{{ $pro->bill }}' ,'amount')" value="monthly" checked>
                        Monthly Bill
                    </label>
                    &nbsp;
                    <label>
                        <input type="checkbox" name="type" id="linecheck" onchange="Check('linecheck', '1000' ,'amount')" value="line">
                        Line Charge
                    </label>
                </div>

                <br>
                {{csrf_field()}}
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="number" min="1" max="1000000" name="bill" class="form-control" id="amount" placeholder="Amount" value="{{ $pro-> bill }}">
                    <div class="input-group-addon">.00</div>
                </div>
                <br>
                <select class="form-control selectpicker" name="Month">
                    <option>--- Select Month ---</option>
                    <option value="january">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <br>
                {{csrf_field()}}
                <div class="input-group date">
                    <input type="text" class="form-control" placeholder="Bill Entry Date" name="billentrydate" id="billentrydatepicker">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <br>

                {{--Date: <div id="datepicker"></div>--}}

                <hr>
                <br>
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <textarea class="form-control" name="comment" id="comments" cols="155" rows="10" placeholder="write some comments here ...">
                        {{ $pro->comment }}
                    </textarea>
                    {{--<i class="form-control-feedback fa fa-sticky-note" aria-hidden="true"></i>--}}
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-default pull-right" style="font-size: large">Submit</button>
            </div>
        </form>
        @endforeach
    </div>
    <script>
        $(document).ready(function() {
            $('#search').hideseek({
                hidden_mode: true,
                highlight: true
            });
        });
    </script>
@endsection