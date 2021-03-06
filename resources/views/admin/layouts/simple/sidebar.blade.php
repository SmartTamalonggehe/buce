<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <h5>Menu</h5>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href=""><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}"
                                alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav @yield('dashboard')"
                            href="{{ route('admin') }}"><i data-feather="credit-card">
                            </i><span>Dahboard</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav @yield('famili')"
                            href="{{ route('famili.index') }}"><i data-feather="heart">
                            </i><span>Famili</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav @yield('bagian')"
                            href="{{ route('bagian.index') }}"><i data-feather="crop">
                            </i><span>Bagian</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav @yield('tumbuhan')"
                            href="{{ route('tumbuhan.index') }}"><i data-feather="feather">
                            </i><span>Tumbuhan</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav @yield('lokasi')"
                            href="{{ route('lokasi.index') }}"><i data-feather="map-pin">
                            </i><span>Lokasi</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
