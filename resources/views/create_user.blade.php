@extends('profile_template')

@section('head_describe')
    <h3 id="pageMTiles">Create User Profile</h3>
@endsection

@section('full_name')
    <div class="form-group has-feedback">
        <input type="name" class="form-control" id="name" placeholder="Full Name">
        <i class="form-control-feedback glyphicon glyphicon-user"></i>
    </div>
@endsection

@section('gender')
    <div class="radio form-control">
        <label>
            <input type="radio" name="gender" id="gender" value="female">
            Female
        </label>
        &nbsp;
        <label>
            <input type="radio" name="gender" id="gender" value="male">
            Male
        </label>
        &nbsp;&nbsp;
        <label>
            <input type="radio" name="gender" id="gender" value="other">
            Other
        </label>
        <i class="form-control-feedback fa fa-transgender fa-lg" aria-hidden="true"></i>
    </div>
@endsection

@section('DOB')
    <div class="input-group date">
        <input type="text" class="form-control" placeholder="Date of Birth" id="birthdatepicker">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
@endsection

@section('address')
    <div class="form-group has-feedback">
        <input type="address" class="form-control" id="Preaddress" placeholder="Enter Present Address">
        <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
    </div>
    <br>
    <div class="form-group" id="pageMTiles">
        <input type="checkbox" name="address" id="address" onclick="genericCheckBoxDisabler(address, Peraddress)">
        &nbsp;Check if Present Address and Permanent Address are the Same.
    </div>
    {{--<div id="address" onclick="requiredPermanentAddress()">click here</div>--}}
    <br>
    <div class="form-group has-feedback">
        <input type="username" class="form-control" id="Peraddress" placeholder="Enter Permanent Address">
        <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
    </div>
@endsection

@section('button')
    <div class="col-lg-12">
        <button type="button" class="btn btn-default btn-lg pull-right">Submit</button>
    </div>
@endsection