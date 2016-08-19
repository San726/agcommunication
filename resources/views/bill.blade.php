@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <br><br>
        <form action="">
            <div class="col-xs-12">
                <h3 id="pageMTiles">Bill Receipt</h3>
                <br>
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
                <br>
                <hr>
                <br>
                <div class="form-group has-feedback">
                    <input type="number" min="0" minlength="5" class="form-control" id="receiptno" placeholder="Receipt No.">
                    <i class="form-control-feedback fa fa-sticky-note" aria-hidden="true"></i>
                </div>

                <br>
                <h4 id="pageMTiles" >Bill Payment</h4>
                <br>
                <div class="input-group date">
                    @if (Auth::check(['email' => 'shanewasahmed@gmail.com']))
                        <input type="text" class="form-control" placeholder="Billing Date " id="billingdatepicker">
                    @else
                        <input type="text" disabled class="form-control" placeholder="Billing Date " id="billingdatepicker">
                    @endif
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <br>
                <h4 id="pageMTiles">Method</h4>
                <br>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="BillMethod" id="optionsRadios1" value="cash" checked>
                        Cash
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" name="BillMethod" id="optionsRadios1" value="bkash">
                        Bkash
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" name="BillMethod" id="optionsRadios1" value="bank">
                        Bank
                    </label>
                </div>
                <br>
                <h4 id="pageMTiles">Type</h4>
                <br>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="BillTypo" id="optionsRadios1" value="cash" checked>
                        Monthly Bill
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" name="BillTypo" id="optionsRadios1" value="bkash">
                        Line Charge
                    </label>
                </div>

                <br>
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="number" min="1" max="1000000" class="form-control" id="amount" placeholder="Amount">
                    <div class="input-group-addon">.00</div>
                </div>
                <br>
                <select class="form-control selectpicker">
                    <option>--- Select Month ---</option>
                    <option value="january">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <br>

                <div class="input-group date">
                    <input type="text" class="form-control" placeholder="Bill Entry Date " id="billentrydatepicker">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <br>

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