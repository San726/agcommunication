@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <br><br>
        @foreach($profile as $pro)
        <form action="">
            <div class="col-xs-12">
                @yield('head_describe')
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
                    <input type="username" class="form-control" id="name" placeholder="User Name" value="{{ $pro->username }}">
                    <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
                </div>
                <br>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password" placeholder="Password" value="{{ $pro->password }}">
                    <i class="form-control-feedback fa fa-user-secret fa-lg"></i>
                </div>
                <br>
                @yield('full_name')
                <br>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                    <i class="form-control-feedback glyphicon glyphicon-inbox"></i>
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
                @yield('gender')
                <br>
                @yield('DOB')
                <br>
                <br>
                @yield('address')
                <br>
                <div class="input-group date">
                    <input type="text" class="form-control" placeholder="Connected From" id="connecteddatepicker">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <br>
                <br>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Phone Number">
                    <i class="form-control-feedback glyphicon glyphicon-phone"></i>
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="number" min="1" max="1000000" class="form-control" id="amount" placeholder="Monthly Bill">
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
                <select class="form-control selectpicker">
                    <option>--- Bill Payment Date ---</option>
                    @for($i=1;$i<=31;$i++)
                        <option value={{$i}}>{{$i}}</option>";
                    @endfor
                </select>
                <br>
                <br>
                <div class="input-group">
                    <input type="number" min="1" max="1000000" class="form-control" id="speed" placeholder="Connection speed">
                    <select class="form-control selectpicker" id="fixedSpeed" onchange="genericSelectDisabler(fixedSpeed,speed)">
                        <option value="default">-- Select Subscription Scheme (Speed/Bandwidth) --</option>
                        <option value="512">512 kbps</option>
                        <option value="1 Mbps">1 Mbps</option>
                        <option value="1.5 Mbps">1.5 Mbps</option>
                        <option value="2 Mbps">2 Mbps</option>
                        <option value="3 Mbps">3 Mbps</option>
                        <option value="5 Mbps">5 Mbps</option>
                    </select>
                    <div class="input-group-addon">Mbps</div>
                </div>
                <br>
                <br>
                <select class="form-control selectpicker">
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
                    @yield('button')
                </div>
                <br>
            </div>
        </form>
        @endforeach
    </div>

    @yield('form_disable_js')

@endsection