<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AG Communication</title>

    <link rel="shortcut icon" href="{{ url('/image/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&subset=bengali" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" crossorigin="anonymous"></script>


    {{--<script>--}}
        {{--$('.dropdown-toggle').dropdown()--}}
    {{--</script>--}}

    <style>
        body {
            font-family: 'Space Mono', monospace;
            /*font-family: 'Poiret One', cursive;*/
            /*font-family: 'Lato';*/
            /*font-family: 'Hind Siliguri', sans-serif;*/
        }

        /*.fa-btn {*/
            /*margin-right: 6px;*/
        /*}*/
        .modal-dialog {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 5%;
        }

        .modal-content {
            height: auto;
            min-height: 100%;
            border-radius: 0;
        }

        li { cursor: pointer; cursor: hand; }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top header">
        <div class="container wrapper">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    AG Communication
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">


                @if (Auth::guest())
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/#') }}">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                Torrents
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://172.27.27.5/" target="_blank">Best Torrent</a></li>
                                <li><a href="http://172.27.27.4/" target="_blank">Darkstar Torrent</a></li>
                                <li><a href="http://www.crazyhd.com/" target="_blank">CrazyHD</a></li>
                                <li><a href="www.azibtorrent.com" target="_blank">Azib Torrent</a></li>
                                <li><a href="http://www.torrentbd.com/torrent/index.php" target="_blank">TorrentBD</a></li>
                                <li><a href="http://www.ontohinbd.com/torrent/" target="_blank">OntohinBD</a></li>
                                <li><a href="http://www.naturalbd.com/index.php" target="_blank">Naturalbd</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                Media
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://172.16.50.5//" target="_blank">SAM ONLINE</a></li>
                                <li><a href="http://172.27.27.83/home/" target="_blank">KS Network </a></li>
                                <li><a href="http://media.dfnbd.net/dm/" target="_blank">Dhaka Fiber Net</a></li>
                                <li><a href="http://15.1.1.1/" target="_blank">Circle Netwrok</a></li>
                                <li><a href="http://bdixbd.com/" target="_blank">BDIX BD</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                Live TV
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://10.16.100.244/entertainment/index.htm" target="_blank">ICC TV</a></li>
                                <li><a href="http://ebox.live/" target="_blank">Live TV</a></li>
                                <li><a href="http://172.27.27.183/html/" target="_blank">IPL</a></li>
                                <li><a href="http://www.jagobd.com/" target="_blank">JagoBD TV</a></li>
                                <li><a href="http://172.27.27.5/tv/" target="_blank">Dhaka TV</a></li>
                                <li><a href="http://dhakasports.com" target="_blank">Dhaka Sports</a></li>
                                <li><a href="http://www.atnmusic.tv/" target="_blank">ATN Music</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                Contact us
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="contact1.html">Corporate Office</a></li>
                                <li><a href="contact2.html">Client Support(Ibrahimpur)</a></li>
                            </ul>
                        </li>
                @else
                        <li><a href="{{ url('/user') }}">Create User</a></li>
                        {{--<li><a href="{{ url('/profile') }}">Profile</a></li>--}}
                        <li><a href="{{ url('/area') }}">Add Area</a></li>
                        {{--<li><a href="{{ url('/Add Customer Info') }}">Password Change</a></li>--}}
                        {{--<li><a href="{{ url('/customerInfo') }}">Customer Info</a></li>--}}
                        {{--<li><a href="{{ url('/bill') }}">Bill Receive</a></li>--}}
                        <li><a href="{{ url('/b/demo?csrf=0') }}">Bill Receive</a></li>
                        {{--<li><a href="{{ url('customer_info') }}">Report</a></li>--}}

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                Reports
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('customer_info') }}">Customer Report</a></li>
                                <li><a href="{{ url('monthly_report') }}">Monthly Report</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                                Payments Status
                                <span class="caret"></span>
                            </a>
                        <ul class="dropdown-menu">
                                {{--<li><a href="{{ url('customer_info') }}">All Customer info</a></li>--}}
                                {{--<li><a href="{{ url('area_bill') }}">Area wise billing sheet</a></li>--}}
                                <li><a href="{{ url('due') }}">Payments Due list</a></li>
                                <li><a href="{{ url('paid') }}">Payment Paid list</a></li>
                                {{--<li><a href="{{ url('bill_by_date') }}">Date wise Billi sheet</a></li>--}}
                                <li><a href="{{ url('statement') }}">Customer Personal statements</a></li>
                                {{--<li><a href="contact2.html"> Date wise bill paid sheet</a></li>--}}
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="row">
            <hr>
            <div class="col-lg-12">
                <div class="col-md-8">
                    <a href="#">Terms of Service</a> | <a href="#">Privacy</a>
                </div>
                <div class="col-md-4">
                    <p class="muted pull-right">© 2016 Ag Communication. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScripts -->
    {{--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>--}}
    <script src="{{ elixir('js/all.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    {{--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>--}}
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
