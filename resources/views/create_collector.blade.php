@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <form action="/create_collector" method="post" name="collector">
                {{csrf_field()}}
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Enter User Name to Create Collector</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="User Name">

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection