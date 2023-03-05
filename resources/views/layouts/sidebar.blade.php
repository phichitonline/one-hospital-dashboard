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
                @endguest
                <li class="@yield('activemenu_stat')">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-graph3"></i>
                        ข้อมูลและสถิติ
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('stat.opd') }}" class="@yield('activemenu_stat_opd')">
                                <i class="metismenu-icon"></i>
                                ผู้ป่วยนอก
                            </a>
                        </li>
                        <li class="@yield('activemenu_stat_ipd')">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                ผู้ป่วยใน
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('stat.ipd') }}" class="@yield('activemenu_stat_ipd_1')">
                                        <i class="metismenu-icon"></i>
                                        ตึก 1
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('stat.ipd') }}" class="@yield('activemenu_stat_ipd_2')">
                                        <i class="metismenu-icon"></i>
                                        ตึก 2
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('stat.ipd') }}" class="@yield('activemenu_stat_ipd_3')">
                                        <i class="metismenu-icon"></i>
                                        ตึก 3
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('stat.ipd') }}" class="@yield('activemenu_stat_ipd_4')">
                                        <i class="metismenu-icon"></i>
                                        ตึก 4
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('stat.er') }}" class="@yield('activemenu_stat_er')">
                                <i class="metismenu-icon"></i>
                                อุบัติเหตุและฉุกเฉิน
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('stat.dent') }}" class="@yield('activemenu_stat_dent')">
                                <i class="metismenu-icon"></i>
                                ทันตกรรม
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_ppt')">
                                <i class="metismenu-icon"></i>
                                แพทย์แผนไทย
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_or')">
                                <i class="metismenu-icon"></i>
                                ผ่าตัดและวิสัญญี
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_pts')">
                                <i class="metismenu-icon"></i>
                                กายภาพบำบัด
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_lab')">
                                <i class="metismenu-icon"></i>
                                ชันสูตรสาธารณสุข
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_xray')">
                                <i class="metismenu-icon"></i>
                                รังสีวินิจฉัย
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_cd')">
                                <i class="metismenu-icon"></i>
                                โรคติดต่อ CD
                            </a>
                        </li>
                        <li>
                            <a href="#" class="@yield('activemenu_stat_ncd')">
                                <i class="metismenu-icon"></i>
                                โรคไม่ติดต่อ NCD
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="@yield('activemenu_report')">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>
                        รายงาน
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Hospital Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('report') }}" class="@yield('activemenu_report_enduser')">
                                <i class="metismenu-icon"></i>
                                รายงาน End User
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="app-sidebar__heading">ตัวชี้วัด KPI</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-graph"></i>
                        จัดการตัวชี้วัด KPI
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-way"></i>
                        สรุปตัวชี้วัดรายหน่วยงาน
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ball"></i>
                        สรุปตัวชี้วัดรายเดือน
                    </a>
                </li>

                <li class="app-sidebar__heading">อื่นๆ</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-search"></i>
                        ค้นผล LAB
                    </a>
                </li>
                <li class="app-sidebar__heading">About me.</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Dr.GHOST Developer
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
