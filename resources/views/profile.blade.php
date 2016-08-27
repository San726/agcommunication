@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <br><br>
        @foreach($profile as $pro)
            <form action="/p/{{ $pro->name }}?csrf={{ $pro->id }}" method="post">
                <div class="col-xs-12">
                    <h3 id="pageMTiles">User Profile</h3>
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group input-group">
                        <input id="areaValue" type="text" name="area" class="form-control" value="{{ $pro->area }}">
                        <select id="changeArea" onchange="genericSelectDisabler(changeArea, areaValue)" class="form-control selectpicker">
                            <option>--- Select Area ---</option>
                            <option value="Ibrahimpur">Ibrahimpur</option>
                            <option value="Kafrul">Kafrul</option>
                            <option value="Mirpur">Mirpur</option>
                        </select>
                        <span class="input-group-addon">
                            <span>Area</span>
                            &nbsp;
                        </span>
                    </div>
                    <br>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="username" class="form-control" name="username" id="name" placeholder="User Name" value="{{ $pro->username }}">
                        <span class="input-group-addon">
                            <span>User Name</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="text" class="form-control" name="password" id="password"  placeholder="Password" value="{{ $pro->password }}">
                        <span class="input-group-addon">
                            <span>Password</span>
                            &nbsp;
                            <span class="fa fa-user-secret fa-lg"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="text" class="form-control" id="fullname" name="name" placeholder="Full Name" value="{{ $pro->name }}">
                        <span class="input-group-addon">
                            <span>Full Name</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="name" class="form-control" id="name" name="Father" placeholder="Father's Name/ Husband's Name" value="{{ $pro->Father}}">
                        <span class="input-group-addon">
                            <span>Father's Name / Husband's Name</span>
                            &nbsp;
                            <span class="fa fa-male fa-lg"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="name" class="form-control" id="name" name="Mother" placeholder="Mother's Name" value="{{ $pro->Mother }}">
                        <span class="input-group-addon">
                            <span>Mother's Name</span>
                            &nbsp;
                            <span class="fa fa-female fa-lg"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="name" class="form-control" id="name" name="Company" placeholder="Company Name" value="{{ $pro->Company }}">
                        <span class="input-group-addon">
                            <span>Company's Name</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-briefcase"></span>
                        </span>
                    </div>
                    <br>
                    {{--<div class="radio form-control" disabled>--}}
                    {{--<label>--}}
                    {{--<input type="radio" name="gender" id="gender" value="female">--}}
                    {{--Female--}}
                    {{--</label>--}}
                    {{--&nbsp;--}}
                    {{--<label>--}}
                    {{--<input type="radio" name="gender" id="gender" value="male">--}}
                    {{--Male--}}
                    {{--</label>--}}
                    {{--&nbsp;&nbsp;--}}
                    {{--<label>--}}
                    {{--<input type="radio" name="gender" id="gender" value="other">--}}
                    {{--Other--}}
                    {{--</label>--}}
                    {{--<i class="form-control-feedback fa fa-transgender fa-lg" aria-hidden="true"></i>--}}
                    {{--</div>--}}
                    <div class="form-group has-feedback input-group">
                        <input data-toggle="tooltip" data-placement="left" name="gender" title="gender" type="text" class="form-control"
                               placeholder="gender" value="{{ $pro->gender }}">
                        <span class="input-group-addon">
                            <span>Gender</span>
                            &nbsp;
                            <span class="fa fa-transgender fa-lg"></span>
                        </span>
                    </div>
                    <br>
                    <div class="input-group date" disabled>
                        <input type="text" class="form-control" name="dob" placeholder="Date of Birth" value="{{ $pro->dob }}">
                        <span class="input-group-addon">
                            <span>Date Of Birth</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <br>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="address" class="form-control" id="Preaddress" name="PresentAddress" placeholder="Enter Present Address" value="{{ $pro->PresentAddress }}">
                        <span class="input-group-addon">
                            <span>Present Address</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="username" class="form-control" id="Peraddress" name="PermanentAddress" placeholder="Enter Permanent Address" value="{{ $pro->PermanentAddress }}">
                        <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
                        <span class="input-group-addon">
                            <span>Permanent Address</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                    </div>
                    <br>
                    <div class="input-group date">
                        <input type="text" class="form-control" placeholder="Connected From" name="connectedFrom" id="connecteddatepicker" value="{{ $pro-> connectedFrom }}">
                        <span class="input-group-addon">
                            <span>Connected From</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <br>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ $pro-> phone }}">
                        <span class="input-group-addon">
                            <span>Phone Number</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-phone"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group has-feedback input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ $pro->email }}">
                        <span class="input-group-addon">
                            <span>Email</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-inbox"></span>
                        </span>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="number" min="1" max="1000000" class="form-control" name="bill" id="amount" placeholder="Monthly Bill" value="{{ $pro->bill }}">
                        <select class="form-control selectpicker" id="billScheme" onchange="genericSelectDisabler(billScheme, amount)">
                            <option value="default">-- Select Bill Scheme --</option>
                            <option value="000">Free</option>
                            <option value="500">500</option>
                            <option value="800">800</option>
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                            <option value="5000">5000</option>
                        </select>
                        <div class="input-group-addon">.00 Tk</div>
                        <span class="input-group-addon">
                            <span>Monthly Bill</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-usd"></span>
                        </span>
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <input type="number" class="form-control" id="payment" name="payment" placeholder="Payment Date" value="{{ $pro -> payment }}">
                        <select class="form-control selectpicker" id="payday" onchange="genericSelectDisabler(payday,payment)">
                            <option>--- Bill Payment Date ---</option>
                            @for($i=1;$i<=31;$i++)
                                <option value={{$i}}>{{$i}}</option>";
                            @endfor
                        </select>
                        <span class="input-group-addon">
                            <span>Monthly Bill Payment Date</span>
                            &nbsp;
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <input type="number" min="1" max="1000000" class="form-control" id="bandwidth" name="dataScheme" placeholder="Connection speed" value="{{ $pro->dataScheme }}">
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
                        <span class="input-group-addon">
                            <span>Data Scheme</span>
                        </span>

                    </div>
                    <br>
                    <br>
                    <div class="form-group input-group">
                        <input id="statusValue" type="text" class="form-control" name="status" value="{{ $pro->status }}">
                        <select id="ChangeStatus" onchange="genericSelectDisabler(ChangeStatus,statusValue)" class="form-control selectpicker">
                            <option>-- Connection Status --</option>
                            <option value="Active">Active</option>
                            <option value="Free">Free</option>
                            <option value="Stop">Stop</option>
                            <option value="Close">Close</option>
                        </select>
                        <span class="input-group-addon">
                            <span>Connection Status</span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group input-group">
                         {{--{{ $pro->paid }}--}}
                        <input id="paidstatusValue" type="text" class="form-control" name="paidStatus" value="{{ $pro -> paidStatus }}">
                        <select id="paidChangeStatus" onchange="genericSelectDisabler(paidChangeStatus,paidstatusValue)" class="form-control selectpicker">
                            <option>-- Payment Status --</option>
                            <option value="due">Not Paid Yet</option>
                            <option value="paid">Paid</option>
                        </select>
                        <span class="input-group-addon">
                            <span>Connection Status</span>
                        </span>
                    </div>

                    {{--Date: <div id="datepicker"></div>--}}
                    <br>
                    <br>
                    <div class="form-group has-feedback">
                        <textarea class="form-control" name="comments" id="comments" cols="155" rows="10" placeholder="write some comments here ..." >
                            {{ $pro->comment }}
                        </textarea>
                        {{--<i class="form-control-feedback fa fa-sticky-note" aria-hidden="true"></i>--}}
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-9"></div>
                        <div class="col-lg-1">
                            @if (Auth::check(['email' => 'shanewasahmed@gmail.com']))
                                <button type="button" onclick="enable()" class="btn btn-danger btn-lg pull-right">Edit</button>
                            @endif
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-success btn-lg pull-right">Submit</button>
                        </div>
                    </div>
                    <br>
                </div>
            </form>
        @endforeach
    </div>

    <script src="{{ elixir('js/profile_control.js') }}"></script>

    {{--<script>--}}
    {{--function loadstatus(){--}}
    {{--alert($('#tovale').val());--}}
    {{--$('#vale').val($('#tovale').val());--}}
    {{--}--}}
    {{--</script>--}}
@endsection