<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down "
                    src="{{ asset('app-assets/images/logo/materialize-logo.png') }}" alt="materialize logo" /><img
                    class="show-on-medium-and-down hide-on-med-and-up"
                    src="{{ asset('app-assets/images/logo/materialize-logo-color.png') }}"
                    alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Buce</span></a><a
                class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="accordion">
        <li class="bold">
            <a class="waves-effect waves-cyan @yield('dashboard')" href="{{ route('admin') }}">
                <i class="material-icons">settings_input_svideo</i>Dashboard</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan @yield('famili')" href="{{ route('famili.index') }}">
                <i class="material-icons">person_outline</i>Famili</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan @yield('bagian')" href="{{ route('bagian.index') }}">
                <i class="material-icons">invert_colors</i>Bagian</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan @yield('tumbuhan')" href="{{ route('tumbuhan.index') }}">
                <i class="material-icons">crop_original</i>Tumbuhan</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan @yield('lokasi')" href="{{ route('lokasi.index') }}">
                <i class="material-icons">image_aspect_ratio</i>Lokasi</span>
            </a>
        </li>
    </ul>
</aside>
<!-- END: SideNav-->
