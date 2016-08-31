@extends('layouts.app')

@section('content')
    @foreach($profile as $pro)
        <div class="container">
            <div class="row">
                <?php
                $dates = date("Y/M/d");
                list($year, $month, $day) = mb_split( '[/.-]', $dates);
                ?>
                <div class="col-xs-8 pull-left">
                    <h2>Personal Info</h2>
                    <div class="col-xs-12"><h4><b>User Name:</b> {{ $pro->username }}</h4></div>
                    <div class="col-xs-12"><h4><b>Password:</b> {{ $pro->password }}</h4></div>
                    <div class="col-xs-12"><h4><b>Present Address:</b> {{ $pro->PresentAddress }}</h4></div>
                    <div class="col-xs-12"><h4><b>Phone Number:</b> {{ $pro->phone }}</h4></div>
                    <div class="col-xs-12"><h4><b>Connected From:</b> {{ $pro->connectedFrom }}</h4></div>
                </div>
                <div class="col-xs-4 pull-right">
                    <h2>Billing info</h2>
                    <div class="col-xs-12"><h4><b>Line:</b> {{ $pro->status }}</h4></div>
                    <div class="col-xs-12"><h4><b>Monthly Bill:</b> {{ $pro->bill }} Tk.</h4></div>
                    <div class="col-xs-12"><h4><b>Payment Date:</b> {{ $pro->payment }}<i>'th</i> {{$month}} {{$year}}</h4></div>
                    <div class="col-xs-12"><h4><b>Bandwidth Scheme:</b> {{ $pro->dataScheme }} Mbps</h4></div>
                    <div class="col-xs-12"><h4><b>Payment Status:</b> {{ $pro->paidStatus }}</h4></div>
                </div>
            </div>
            <br><br>
            <div class="table-responsive">
                <table id="CInfo" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Receipt No.&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Billing Method&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Bill (TK.)&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Billing Month&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($profile as $u)
                        @foreach ($u as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->receipt }}</td>
                                <td>{{ $user->method }}</td>
                                <td>{{ $user->bill }}</td>
                                <td>{{ $user->Month }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
    <script>
        $(document).ready(function() {
            $('#search').hideseek({
                hidden_mode: true,
                highlight: true
            });
        });
    </script>

    {{--<script src="{{ elixir('js/profile_control.js') }}"></script>--}}

    {{--<script>--}}
    {{--function loadstatus(){--}}
    {{--alert($('#tovale').val());--}}
    {{--$('#vale').val($('#tovale').val());--}}
    {{--}--}}
    {{--</script>--}}
@endsection