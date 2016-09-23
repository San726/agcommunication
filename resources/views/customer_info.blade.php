@extends('layouts.app')

@section('content')
    <div id="noPrint" class="container">
        <br><br>
        <br><br>
        <form action="/bill_by_date" method="POST">
            <div class="row">
                <div class="col-xs-12">
                    {{--<div class="input-group date">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<input type="text" class="form-control" name="datebybill" placeholder="Search By Payment Date" id="connecteddatepicker">--}}
                        {{--<span class="input-group-addon">&nbsp;--}}
                            {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                    {{csrf_field()}}
                    <div class="input-group">
                        {{--<input type="number" class="form-control" id="payment" placeholder="Payment Date">--}}
                        <select class="form-control selectpicker" name="datebybill" id="payday" onchange="genericSelectDisabler(payday,payment)">
                            <option value="default">--- Select a Bill Payment Date ---</option>
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
                </div>
                <br>
                <br>
                <br>
                <div class="col-xs-12">
                    <div class="input-group">
                        <select class="form-control selectpicker" name="areabybill" id="areabybill">
                            <option value="default">--- Select an Area ---</option>
                            @foreach(DB::table('areas')->get() as $area)
                                <option value={{$area->area}}>{{$area->area}}</option>";
                            @endforeach
                        </select>
                        <span class="input-group-addon">
                            <span>Area</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-road"></span>
                        </span>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-xs-12">
                    <div class="input-group">
                        <select class="form-control selectpicker" name="BillStatus" id="BillStatus">
                            <option value="default">--- Select Payment Status ---</option>
                            <option value="paid">Paid</option>
                            <option value="due">Due</option>
                        </select>
                        <span class="input-group-addon">
                            <span>Payment Status</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
                {{--<div class="col-xs-12">--}}
                    {{--<div class="radio form-control" style="text-align: center">--}}
                        {{--<label>--}}
                            {{--<input type="radio" name="BillStatus" id="paid" value="paid">--}}
                            {{--Paid--}}
                        {{--</label>--}}
                        {{--&nbsp;--}}
                        {{--&nbsp;--}}
                        {{--<label>--}}
                            {{--<input type="radio" name="BillStatus" id="due" value="due">--}}
                            {{--Due--}}
                        {{--</label>--}}
                        {{--&nbsp;--}}
                        {{--&nbsp;--}}
                        {{--<label>--}}
                            {{--<input type="radio" name="BillStatus" id="none" value="none">--}}
                            {{--None--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <br><br>
                <br><br>
                {{--<input type="text" name="uri" value="{{ $request->path() }}">--}}
                <div class="col-xs-12 pull-right">
                    <button type="submit" class="btn btn-block btn-default">Show Bill Sheet</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="table-responsive">
                <?php
                    $sum = 0;
                    $paid = 0;
                    $due = 0;
                    $i = 1;
                ?>
                <table id="CInfo" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th id="noPrint">Area&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Full Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>User Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Password&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Monthly Bill&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th id="noPrint">Payment Date&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th id="noPrint">Data Scheme&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Phone Number&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Present Address&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th id="noPrint">Status&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        {{--<th id="noPrint">Payment&nbsp;Status<i class="fa fa-sort" aria-hidden="true"></i></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td id="noPrint">{{ $user->area }}</td>
                                <td><a href="/p/{{ $user->name }}?csrf={{ $user->id }}">{{ $user->name }}</a></td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->bill }}&nbsp;Tk</td>
                                <td id="noPrint">{{ $user->payment }}</td>
                                <td id="noPrint">{{ $user->dataScheme }}&nbsp;Mbps</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->PresentAddress }}</td>
                                <td id="noPrint">{{ $user->status }}</td>
                                {{--<td id="noPrint">--}}
                                    {{--@if($user->paidStatus == "paid")--}}
                                        {{--<p style="text-decoration: none; color: darkgreen">--}}
                                            {{--{{ $user -> paidStatus }}--}}
                                        {{--</p>--}}
                                    {{--@else--}}
                                        {{--<p>--}}
                                            {{--<a style="text-decoration: none; color: red" href="/b/{{ $user->name }}?csrf={{ $user -> id }}">--}}
                                                {{--{{ $user -> paidStatus }}--}}
                                            {{--</a>--}}
                                        {{--</p>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                            </tr>
                            @if ($user -> paidStatus == 'paid')
                                <input type="hidden" value="{{ $paid = $paid + $user->bill }}">
                            @elseif($user -> paidStatus == 'due')
                                <input type="hidden" value="{{ $due = $due + $user->bill }}">
                            @endif
                            <input type="hidden" value="{{ $sum = $sum + $user->bill }}">
                        @endforeach
                    </tbody>
                </table>
            </div>
        <br>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <H3 class="header pull-right">Bill Paid: {{ $paid }}</H3>
                </div>
                <div class="col-lg-12">
                    <H3 class="header pull-right">Bill Due: {{ $due }}</H3>
                </div>
                <div class="col-lg-12">
                    <H3 class="header pull-right">Total Bill: {{ $sum }}</H3>
                </div>
            </div>
        </div>
    </div>
@endsection