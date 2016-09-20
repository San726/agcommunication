@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <input class="form-control" id="search" name="search" placeholder="Start typing here" type="text" data-list=".list" autofocus>
        @foreach(DB::table('clients')->get() as $filter)
            <ul class="list">
                <span><b>Name:</b> {{ $filter->name }} <b>U</b>ser Name: <a href="/s/{{ $filter->name}}?csrf={{ $filter->id }}">{{ $filter->username }}</a>&nbsp;<b>A</b>ddress: {{ $filter->PresentAddress }}</span>
            </ul>
        @endforeach
    </div>
    <script>
        $(document).ready(function() {
            $('#search').hideseek({
                hidden_mode: true,
                highlight: true
            });
        });
    </script>

    {{--<script src="{{ elixir('js/profile_control.js') }}"></script>--}}

    {{--<script>--}}
    {{--function loadstatus(){--}}
    {{--alert($('#tovale').val());--}}
    {{--$('#vale').val($('#tovale').val());--}}
    {{--}--}}
    {{--</script>--}}
@endsection