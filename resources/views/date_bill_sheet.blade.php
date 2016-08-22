@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <br><br>
        <form action="/bill-by-date" method="post">
        <div class="row">
                <div class="col-xs-12">
                        <div class="input-group date">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" name="datebybill" placeholder="Connected From" id="connecteddatepicker_Bill">
                            <span class="input-group-addon">
                                <span></span>
                                &nbsp;
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-xs-12 pull-right">
                    <button type="submit" class="btn btn-default">Show Bill</button>
                </div>
        </div>
        </form>
    </div>
@endsection