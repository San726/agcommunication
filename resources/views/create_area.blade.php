@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Active Area</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ibrahimpur</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kazipara</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PoliceLine</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button onclick="trigger_create()" class="btn btn-warning pull-right">Create Area</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Welcome to AG Communication</h4>
                </div>
                <div class="modal-body">

                    <form role="form">
                        <div class="form-group">
                            <label for="text">Create Area</label>
                            <input type="text" class="form-control" id="area_text">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        #footer {
            /*background:#ffab62;*/
            width:100%;
            height:100px;
            position:absolute;
            bottom:0;
            left:0;
        }
    </style>

    <script>
        function trigger_create() {
            $("#myModal").modal();
        }
//        $( document ).ready(function() {
//            $("#myModal").modal();
//        });

    </script>
@endsection