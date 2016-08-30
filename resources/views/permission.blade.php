@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="text-align: center">Assign Permissions</h2>
        <br>
        <p style="text-align: center">Assign permission to clients to certain activities</p>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="table-responsive">
            <table id="CInfo" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Password&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    {{--<th>Email&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>--}}
                    {{--<th>Is Admin&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>--}}
                    {{--<th>Is Client&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>--}}
                    {{--<th>Is Collector&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>--}}
                    <th>Report Permission&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Bill Permission&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Update Permission&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th>Update Changes&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
                </tr>
                </thead>
                <tbody style="text-align: center">
                @foreach($users as $user)
                    <tr>
                        <form action="/permission" method="GET">
                            {{csrf_field()}}
                            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            {{csrf_field()}}
                            <td>
                                <input type="text" name="password" placeholder=" New Password">
                            </td>
                            {{--<td><a href="/p/{{ $user->name }}?csrf={{ $user->id }}">{{ $user->email }}</a></td>--}}
                            {{--<td>--}}
                                {{--<div class="checkbox">--}}
                                    {{--@if( $user->admin == 1)--}}
                                        {{--<label><input type="checkbox" name="admin" checked></label>--}}
                                    {{--@else--}}
                                        {{--<label><input type="checkbox" name="admin"></label>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<div class="checkbox">--}}
                                    {{--@if( $user->clients == 1)--}}
                                        {{--<label><input type="checkbox" name="clients" checked></label>--}}
                                    {{--@else--}}
                                        {{--<label><input type="checkbox" name="clients"></label>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<div class="checkbox">--}}
                                    {{--@if( $user->collector == 1)--}}
                                        {{--<label><input type="checkbox" name="collector" checked></label>--}}
                                    {{--@else--}}
                                        {{--<label><input type="checkbox" name="collector"></label>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            <td>
                                <div class="checkbox">
                                    @if( $user->hasReport == 1)
                                        <label><input type="checkbox" name="hasReport" checked></label>
                                    @else
                                        <label><input type="checkbox" name="hasReport"></label>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    @if( $user->hasBill == 1)
                                        <label><input type="checkbox" name="hasBill" checked></label>
                                    @else
                                        <label><input type="checkbox" name="hasBill"></label>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    @if( $user->hasUpdate == 1)
                                        <label><input type="checkbox" name="hasUpdate" checked></label>
                                    @else
                                        <label><input type="checkbox" name="hasUpdate"></label>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-default">Update Permission</button>
                            </td>
                        </form>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{--<script>--}}
        {{--function check($ultra) {--}}
            {{--$hold = $('#'+$ultra).val();--}}
{{--//            if ($hold == on)--}}
{{--//                $('#'+$ultra).val();--}}
{{--//            else--}}
{{--//                $('#'+$ultra).val(0)--}}
            {{--alert ($hold);--}}
        {{--}--}}
    {{--</script>--}}

@endsection