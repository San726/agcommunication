@extends('layouts.app')

@section('content')
    <div id="noPrint" class="container">
        <br><br>
        <br><br>
        <form action="/monthly_report" method="GET">
            {{ csrf_field() }}
            <div class="row">
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
                <br><br>
                <br><br>
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
        <h3>
            @if(!empty($_GET['areabybill']) && $_GET['areabybill'] != "default")
                Area : {{ $_GET['areabybill'] }}
                <br>
                <br>
                Date: {{ \Carbon\Carbon::now() }}
            @endif
        </h3>
        <br>
        <br>
        <div class="table-responsive">
            <?php
            $sum = 0;
            $paid = 0;
            $due = 0;
            ?>
                {{--id="CInfo"--}}
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th id="noPrint">Area&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Full Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Present Address&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Phone Number&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>User Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Password&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Monthly Bill&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th id="noPrint">Payment Date&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th id="noPrint">Data Scheme&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Status&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Payment&nbsp;Status<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Remarks<i class="fa fa-sort" aria-hidden="true"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td id="noPrint">{{ $user->area }}</td>
                        <td><a href="/p/{{ $user->name }}?csrf={{ $user->id }}">{{ $user->name }}</a></td>
                        <td>{{ $user->PresentAddress }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->bill }}&nbsp;Tk</td>
                        <td id="noPrint">{{ $user->payment }}</td>
                        <td id="noPrint">{{ $user->dataScheme }}&nbsp;Mbps</td>
                        <td>{{ $user->status }}</td>
                        <td>
                            @if($user->paidStatus == "paid")
                                <p style="text-decoration: none; color: darkgreen">
                                    {{ $user -> paidStatus }}
                                </p>
                            @else
                                <p>
                                    <a style="text-decoration: none; color: red" href="/b/{{ $user->name }}?csrf={{ $user -> id }}">
                                        {{ $user -> paidStatus }}
                                    </a>
                                </p>
                            @endif
                        </td>
                        <td></td>
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
                    <H3 id="noPrint" class="header pull-right">Bill Paid: {{ $paid }}</H3>
                </div>
                <div class="col-lg-12">
                    <H3 id="noPrint" class="header pull-right">Bill Due: {{ $due }}</H3>
                </div>
                <div class="col-lg-12">
                    <H3 class="header pull-right">Total Bill: {{ $sum }}</H3>
                </div>
            </div>
        </div>
    </div>
@endsection