@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <br><br>
        <form action="">
            <div class="col-xs-12">
                <h3 id="pageMTiles">Create User Profile</h3>
                <br>
                <select class="form-control selectpicker">
                    <option>--- Select Area ---</option>
                    <option value="january">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                </select>
                <br>
                <br>
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" id="name" placeholder="User Name">
                    <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
                </div>
                <br>
                <div class="form-group has-feedback">
                    <input type="name" class="form-control" id="name" placeholder="Full Name">
                    <i class="form-control-feedback glyphicon glyphicon-user"></i>
                </div>
                <br>
                <div class="form-group has-feedback">
                    <input type="name" class="form-control" id="name" placeholder="Father's Name/ Husband's Name">
                    <i class="form-control-feedback fa fa-male fa-lg"></i>
                </div>
                <br>
                <div class="form-group has-feedback">
                    <input type="name" class="form-control" id="name" placeholder="Mother's Name">
                    <i class="form-control-feedback fa fa-female fa-lg"></i>
                </div>
                <br>
                <div class="form-group has-feedback">
                    <input type="name" class="form-control" id="name" placeholder="Company Name">
                    <i class="form-control-feedback glyphicon glyphicon-briefcase"></i>
                </div>
                <br>
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
                <br>
                <div class="input-group date">
                    <input type="text" class="form-control" placeholder="Date of Birth" id="birthdatepicker">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <br>
                <br>
                <div class="form-group has-feedback">
                    <input type="address" class="form-control" id="Preaddress" placeholder="Enter Present Address">
                    <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
                </div>
                <br>
                <div class="form-group" id="pageMTiles">
                    <input type="checkbox" name="address" id="address" onclick="requiredPermanentAddress()">
                    &nbsp;Check if Present Address and Permanent Address are the Same.
                </div>
                {{--<div id="address" onclick="requiredPermanentAddress()">click here</div>--}}
                <br>
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" id="Peraddress" placeholder="Enter Permanent Address">
                    <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
                </div>
                <br>
                <div class="input-group date">
                    <input type="text" class="form-control" placeholder="Connected From" id="connecteddatepicker">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                {{--Date: <div id="datepicker"></div>--}}

                <hr>
                <br>
                <div class="form-group has-feedback">
                    <textarea class="form-control" name="comments" id="comments" cols="155" rows="10" placeholder="write some comments here ..."></textarea>
                    {{--<i class="form-control-feedback fa fa-sticky-note" aria-hidden="true"></i>--}}
                </div>
            </div>
        </form>
    </div>

@endsection