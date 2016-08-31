


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
        <li><a href="{{ url('/login') }}">login</a></li>
    @else
        <li><a href="{{ url('/user') }}">Create User</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                Adding
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/area') }}">Add Area</a></li>
                <li><a href="{{ url('/create_collector') }}">Add Collector</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/permission') }}">Permission</a></li>
        <li><a href="{{ url('/b/demo?csrf=0') }}">Bill Receive</a></li>
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
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <?php
                foreach (DB::table('clients')->where('username',Auth::user()->name)->get() as $csrf) {
                    $id = $csrf->id;
                    $name = $csrf->name;
                }
                ?>
                @if(Auth::user()->clients != 1)
                    <li><a href="{{ url('statement') }}">Customer Personal statements</a></li>
                @else
                    <li><a href="/s/{{ $name }}?csrf={{ $id }}">P R O F I L E</a></li>
                    <hr>
                @endif
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>
    @endif
</ul>