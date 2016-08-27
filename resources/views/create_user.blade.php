@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <br><br>
        <form action="/user" method="post">
            {{csrf_field()}}
            <div class="col-xs-12">
            <h3 id="pageMTiles">Create User Profile</h3>
            <br>
            <select class="form-control selectpicker" name="area">
                <option>--- Select Area ---</option>
                @foreach($areas as $area)
                    <option value="{{ $area->area }}">{{ $area->area }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <div class="form-group has-feedback">
            <input type="username" class="form-control" name="username" id="name" placeholder="User Name">
            <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
            </div>
            <br>
            <div class="form-group has-feedback">
            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
            <i class="form-control-feedback fa fa-user-secret fa-lg"></i>
            </div>
            <br>
            <div class="form-group has-feedback">
            <input type="name" class="form-control" name="name" id="name" placeholder="Full Name">
            <i class="form-control-feedback glyphicon glyphicon-user"></i>
            </div>
            <br>
            <div class="form-group has-feedback">
            <input type="name" class="form-control" id="name" name="Father" placeholder="Father's Name/ Husband's Name">
            <i class="form-control-feedback fa fa-male fa-lg"></i>
            </div>
            <br>
            <div class="form-group has-feedback">
            <input type="name" class="form-control" id="name" name="Mother" placeholder="Mother's Name">
            <i class="form-control-feedback fa fa-female fa-lg"></i>
            </div>
            <br>
            <div class="form-group has-feedback">
            <input type="name" class="form-control" id="name" name="Company" placeholder="Occupation">
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
            <input type="text" class="form-control" name="dob" placeholder="Date of Birth" id="birthdatepicker">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
            <br>
            <br>
            <div class="form-group has-feedback">
            <input type="address" class="form-control" name="PresentAddress" id="Preaddress" placeholder="Enter Present Address">
            <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
            </div>
            <br>
            <div class="form-group" id="pageMTiles">
            <input type="checkbox" name="address" id="address" onclick="genericCheckBoxDisabler(address, Peraddress, Preaddress)">
            &nbsp;Check if Present Address and Permanent Address are the Same.
            </div>
            {{--<div id="address" onclick="requiredPermanentAddress()">click here</div>--}}
            <br>
            <div class="form-group has-feedback">
            <input type="username" class="form-control" name="PermanentAddress" id="Peraddress" placeholder="Enter Permanent Address">
            <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
            </div>
            <br>
            <div class="input-group date">
            <input type="text" class="form-control" name="connectedFrom" placeholder="Connected From" id="connecteddatepicker">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
            <br>
            <br>
            <div class="form-group has-feedback">
            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
            <i class="form-control-feedback glyphicon glyphicon-phone"></i>
            </div>
            <br>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                <i class="form-control-feedback glyphicon glyphicon-inbox"></i>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-addon">$</div>
                <input type="number" min="1" max="1000000" class="form-control" name="bill" id="amount" placeholder="Monthly Bill">
                <select class="form-control selectpicker" id="billScheme" onchange="genericSelectDisabler(billScheme, amount)">
                    <option value="default">-- Select Bill Scheme --</option>
                    <option value="000">Free</option>
                    <option value="500">500</option>
                    <option value="800">800</option>
                    <option value="1000">1000</option>
                    <option value="2000">2000</option>
                    <option value="5000">5000</option>
                </select>
                <div class="input-group-addon">.00</div>
            </div>
            <br>
            <br>
            <select class="form-control selectpicker" name="payment">
            <option>--- Bill Payment Date ---</option>
            @for($i=1;$i<=31;$i++)
            <option value={{$i}}>{{$i}}</option>";
            @endfor
            </select>
            <br>
            <br>
            <div class="input-group">
            <input type="number" min="1" max="1000000" class="form-control" name="dataScheme" id="bandwidth" placeholder="Connection speed">
            <select class="form-control selectpicker" id="fixedSpeed" onchange="genericSelectDisabler(fixedSpeed,bandwidth)">
            <option value="default">-- Select Subscription Scheme (Speed/Bandwidth) --</option>
            <option value="512">512 kbps</option>
            <option value="1">1 Mbps</option>
            <option value="1.5">1.5 Mbps</option>
            <option value="2">2 Mbps</option>
            <option value="3">3 Mbps</option>
            <option value="5">5 Mbps</option>
            </select>
            <div class="input-group-addon">Mbps</div>
            </div>
            <br>
            <br>
            <select class="form-control selectpicker" name="status">
            <option>-- Connection Status --</option>
            <option value="Active">Active</option>
            <option value="Free">Free</option>
            <option value="Stop">Stop</option>
            <option value="Close">Close</option>
            </select>

            {{--Date: <div id="datepicker"></div>--}}
            <br>
            <br>
            <div class="form-group has-feedback">
            <textarea class="form-control" name="comments" id="comments" cols="155" rows="10" placeholder="write some comments here ..."></textarea>
            {{--<i class="form-control-feedback fa fa-sticky-note" aria-hidden="true"></i>--}}
            </div>
            <br>
            <div class="row">
            <div class="col-lg-12">
            <button type="submit" class="btn btn-default btn-lg pull-right">Submit</button>
            </div>
            </div>
            <br>
            </div>
        </form>
    </div>
@endsection
{{--@yield('form_disable_js')--}}
