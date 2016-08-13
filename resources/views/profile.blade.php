@extends('profile_template')

@section('head_describe')
    <h3 id="pageMTiles">User Profile</h3>
@endsection

@section('full_name')
    <div class="form-group has-feedback">
        <input type="name" class="form-control" id="fullname" placeholder="Full Name" disabled>
        <i class="form-control-feedback glyphicon glyphicon-user"></i>
    </div>
@endsection

@section('gender')
    <div class="radio form-control" disabled>
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
    <div class="input-group date" disabled>
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
    <div class="form-group has-feedback">
        <input type="username" class="form-control" id="Peraddress" placeholder="Enter Permanent Address" disabled>
        <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
    </div>
@endsection

@section('button')
    <div class="col-lg-9"></div>
    <div class="col-lg-1">
        @if (Auth::check(['email' => 'shanewasahmed@gmail.com']))
            <button type="button" onclick="enable()" class="btn btn-danger btn-lg pull-right">Edit</button>
        @endif
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-1">
        <button type="button" class="btn btn-success btn-lg pull-right">Submit</button>
    </div>
@endsection

@section('form_disable_js')
    <script>
        $('input').attr('disabled',true);
        $('select').attr('disabled',true);
        $('textarea').attr('disabled',true);

        function enable() {
            $('input').attr('disabled',false);
            $('select').attr('disabled',false);
            $('textarea').attr('disabled',false);
            $('#fullname').attr('disabled',true);
            $('#Peraddress').attr('disabled',true);
            $('#birthdatepicker').attr('disabled',true);
        }
    </script>
@endsection

