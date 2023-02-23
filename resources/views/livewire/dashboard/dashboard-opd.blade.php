<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'ผู้ป่วยนอก')

@section('activemenu_dashboard', 'mm-active')
@section('activemenu_dashboard_opd', 'mm-active')

{{-- @section('content') --}}

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-user-md icon-gradient bg-warm-flame"></i>
            </div>
            <div>
                <h3>@yield('pagetitle')</h3>
                <div class="page-title-subheading">ระบบสารสนเทศเพื่อการจัดการข้อมูลโรงพยาบาล</div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="Dashboard"
                data-bs-placement="bottom" class="btn-shadow me-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span> Inbox</span>
                                <div class="ms-auto badge rounded-pill bg-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span> Book</span>
                                <div class="ms-auto badge rounded-pill bg-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span> Picture</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span> File Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="/opd" data-bs-toggle="tooltip" title="ข้อมูลผู้ป่วยนอก">
        <div class="card mb-3 widget-chart widget-chart2 bg-plum-plate text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยนอกวันนี้</div>
                        <div class="widget-subtitle text-white opacity-7">เดือนที่แล้ว {{ number_format($pt_opd_vn_lastm,0) }}</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ $pt_opd_today }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <span class="pe-1">{{ number_format($pt_opd_vnm * 100 / $pt_opd_vn_lastm,0) }}%</span>
                            <i class="fa fa-angle-up "></i>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{ $pt_opd_vnm * 100 / $pt_opd_vn_lastm }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $pt_opd_vnm * 100 / $pt_opd_vn_lastm }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="/ipd" data-bs-toggle="tooltip" title="ข้อมูลผู้ป่วยใน">
        <div class="card mb-3 widget-chart widget-chart2 bg-warm-flame text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยในวันนี้</div>
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($pt_opd_vn_lastm,0) }}</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>7</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-angle-up "></i>
                            <span class="ps-1">{{ number_format($pt_opd_vnm * 100 / $pt_opd_vn_lastm,0) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-success"
                            role="progressbar" aria-valuenow="{{ $pt_opd_vnm * 100 / $pt_opd_vn_lastm }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $pt_opd_vnm * 100 / $pt_opd_vn_lastm }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="/er" data-bs-toggle="tooltip" title="ข้อมูลอุบัติเหตุ">
        <div class="card mb-3 widget-chart widget-chart2 bg-mixed-hopes text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยอุบัติเหตุวันนี้</div>
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($pt_opd_vn_lastm,0) }}</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>9</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-arrow-right "></i>
                            <span class="ps-1">{{ number_format($pt_opd_vnm * 100 / $pt_opd_vn_lastm,0) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $pt_opd_vnm * 100 / $pt_opd_vn_lastm }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $pt_opd_vnm * 100 / $pt_opd_vn_lastm }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
    </div>
    </a>

</div>

<div class="row">
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">ทันตกรรมวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white">
                        <span>18</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">แพทย์แผนไทย</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers">
                        <span>24</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content bg-night-fade">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">ผ่าตัดวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white">
                        <span>13</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">LAB วันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-success">
                        <span>128</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">X-RAY วันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-primary">
                        <span>54</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">กายภาพบำบัดวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger">
                        <span>15</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-card mb-3 card">
    <div class="row">
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">รับ Refer วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ 345 คน/234 ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning">34</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43"
                                aria-valuemin="0" aria-valuemax="100" style="width: 43%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว 123</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">ส่ง Refer วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ 345 คน/234 ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">27</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว 123</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">คลินิก ARI วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ 345 คน/234 ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">48</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว 123</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
