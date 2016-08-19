@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <table id="CInfo" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Area&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Full Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>User Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Password&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Monthly Bill&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Payment Date&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Data Scheme&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Phone Number&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Present Address&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Status&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>To Payment&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paid as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->area }}</td>
                            <td><a href="/profile/{{ $user->id }}">{{ $user->name }}</a></td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->bill }}&nbsp;Tk</td>
                            <td>{{ $user->payment }}</td>
                            <td>{{ $user->dataScheme }}&nbsp;Mbps</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->PresentAddress }}</td>
                            <td>{{ $user->status }}</td>
                            <td><button type="button" class="btn btn-default">
                                    <a style="text-decoration: none; color: black" href="/bill/{{ $user -> id }}">Bill of {{ $user -> name }}</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection