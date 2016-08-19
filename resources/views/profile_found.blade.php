@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" id="username" placeholder="User Name">
                    <i class="form-control-feedback glyphicon glyphicon-user"></i>
                </div>
            </div>

            <div class="col-lg-1">
                <button type="button" class="btn btn-default">FIND</button>
            </div>

        </div>
    </div>
@endsection