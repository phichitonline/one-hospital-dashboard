<div class="app-sidebar sidebar-shadow">

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>

                <li class="@yield('activemenu_dashboard')">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Dashboard
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/" class="@yield('activemenu_dashboard_home')">
                                <i class="metismenu-icon"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.opd') }}" class="@yield('activemenu_dashboard_opd')">
                                <i class="metismenu-icon"></i>
                                ผู้ป่วยนอก
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.ipd') }}" class="@yield('activemenu_dashboard_ipd')">
                                <i class="metismenu-icon"></i>
                                ผู้ป่วยใน
                            </a>
                        </li>
                    </ul>
                </li>
                @guest
                @else
                <li class="@yield('activemenu_setting')">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-config"></i>
                        Setting
                    </a>
                </li>
                <li class="@yield('activemenu_profile')">
                    <a href="/profile">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Profile
                    </a>
                </li>
                <li class="app-sidebar__heading">Status</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-global"></i>
                        สถานะการเชื่อมต่อ
                    </a>
                </li>
                @endguest


                <li class="app-sidebar__heading">About me.</li>
                <li>
                    <a target="_blank" href="https://mis.ppho.go.th/team">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Phichit Admin Team
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
