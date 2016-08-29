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
        {{--@foreach($profile as $pro)--}}
            <form action="">
                <div class="col-xs-12">
                    <h3 id="pageMTiles">Bill Receipt</h3>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group has-feedback">
                                {{--<span class="input-group-addon">--}}
                                {{--<span>Credential</span>--}}
                                {{--&nbsp;--}}
                                {{--<span class="glyphicon glyphicon-info-sign"></span>--}}
                                {{--<span class="fa fa-info-circle fa-lg"></span>--}}
                                {{--</span>--}}
                                <div class="input-group">
                                    <input type="username" class="form-control" id="username" placeholder="User Name">
                                    <span class="input-group-addon">
                                    <span>User Name</span>
                                    &nbsp;
                                        {{--<span class="glyphicon glyphicon-info-sign"></span>--}}
                                        <span class="fa fa-info-circle fa-lg"></span>
                                </span>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="password" placeholder="Password">
                                    <span class="input-group-addon">
                                    <span>Password</span>
                                    &nbsp;
                                        {{--<span class="glyphicon glyphicon-info-sign"></span>--}}
                                        <span class="fa fa-info-circle fa-lg"></span>
                                </span>
                                </div>
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
                        <input type="number" min="0" minlength="5" class="form-control" id="receiptno" placeholder="Receipt No.">
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
                    <div class="input-group">
                        <input type="number" class="form-control" id="payment" placeholder="Payment Date">
                        <select class="form-control selectpicker" id="payday" onchange="genericSelectDisabler(payday,payment)">
                            <option>--- Bill Payment Date ---</option>
                            @for($i=1;$i<=31;$i++)
                                <option value={{$i}}>{{$i}}</option>";
                            @endfor
                        </select>
                        <span class="input-group-addon">
                        <span>Monthly Bill Payment Date</span>
                        &nbsp;
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <br>
                    <h4 id="pageMTiles">Method</h4>
                    <br>
                    <div class="radio form-control">
                        <label>
                            <input type="radio" name="BillMethod" id="optionsRadios1" value="cash">
                            Cash
                        </label>
                        &nbsp;
                        <label>
                            <input type="radio" name="BillMethod" id="optionsRadios1" value="bkash">
                            Bkash
                        </label>
                        &nbsp;
                        <label>
                            <input type="radio" name="BillMethod" id="optionsRadios1" value="bank">
                            Bank
                        </label>
                    </div>
                    <br>
                    <h4 id="pageMTiles">Type</h4>
                    <br>
                    <div class="checkbox form-control">
                        <label>
                            <input type="checkbox" name="BillTypo" id="monthcheck" value="cash">
                            Monthly Bill
                        </label>
                        &nbsp;
                        <label>
                            <input type="checkbox" name="BillTypo" id="linecheck" value="bkash">
                            Line Charge
                        </label>
                    </div>

                    <br>
                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="number" min="1" max="1000000" class="form-control" id="amount" placeholder="Amount">
                        <div class="input-group-addon">.00</div>
                    </div>
                    <br>
                    <select class="form-control selectpicker">
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

                    <div class="input-group date">
                        <input type="text" class="form-control" placeholder="Bill Entry Date " id="billentrydatepicker">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <br>

                    {{--Date: <div id="datepicker"></div>--}}

                    <hr>
                    <br>
                    <div class="form-group has-feedback">
                    <textarea class="form-control" name="comments" id="comments" cols="155" rows="10" placeholder="write some comments here ...">
                    </textarea>
                        {{--<i class="form-control-feedback fa fa-sticky-note" aria-hidden="true"></i>--}}
                    </div>
                </div>
            </form>
        {{--@endforeach--}}
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