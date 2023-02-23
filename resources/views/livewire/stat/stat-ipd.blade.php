<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'ตึก 1')

@section('activemenu_stat', 'mm-active')
@section('activemenu_stat_ipd', 'mm-active')
@section('activemenu_stat_ipd_1', 'mm-active')

@section('header-script')

@endsection

<div class="app-page-title app-page-title-simple">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title-head center-elem">
                    <span class="d-inline-block pe-2">
                        <i class="fa fa-bed opacity-9"></i>
                    </span>
                    <span class="d-inline-block">@yield('pagetitle')</span>
                </div>
                <div class="page-title-subheading opacity-10">
                    <nav class="" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a>
                                    <i aria-hidden="true" class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                ข้อมูลและสถิติ
                            </li>
                            <li class="active breadcrumb-item" aria-current="page">
                                ผู้ป่วยใน
                            </li>
                            <li class="active breadcrumb-item" aria-current="page">
                                @yield('pagetitle')
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn-dashed btn btn-outline-primary">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="fa fa-calendar fa-w-20"></i>
                    </span>
                    ปีงบประมาณ {{ $year }}
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.ipd') }}/?year=2566">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-danger">2566</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.ipd') }}/?year=2565">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-primary">2565</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.ipd') }}/?year=2564">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-primary">2564</div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <button type="button" data-bs-toggle="tooltip" data-bs-placement="left"
                class="btn btn-primary" title="@yield('pagetitle')">
                <i class="fa fa-info"></i>
            </button>
        </div>
    </div>
</div>

<div class="mb-3 card">
    <div class="card-header">
        <i class="header-icon pe-7s-graph3 btn-icon-wrapper font-size-xlg me-2"></i>
        <h5 class="mt-2">ข้อมูลและสถิติ@yield('pagetitle') (1 ต.ค.2565 - 11 ก.พ.2566)</h5>
        <div class="btn-actions-pane-right">
            <div class="nav">
                <a data-bs-toggle="tab" href="#tab-eg6-3" class="me-1 pe-7s-info btn-dashed btn btn-outline-secondary"> อื่นๆ</a>
                <a data-bs-toggle="tab" href="#tab-eg6-2" class="me-1 pe-7s-folder btn-dashed btn btn-outline-danger"> ข้อมูล</a>
                <a data-bs-toggle="tab" href="#tab-eg6-1" class="me-1 pe-7s-print btn-dashed btn btn-outline-primary"> รายงาน</a>
                <a data-bs-toggle="tab" href="#tab-eg6-0" class="active pe-7s-graph btn-dashed btn btn-outline-primary"> สรุป</a>
            </div>
        </div>
    </div>

</div>

<div class="tab-content">
    <div class="tab-pane active" id="tab-eg6-0" role="tabpanel">



    </div>
    <div class="tab-pane" id="tab-eg6-1" role="tabpanel">

        {{-- DatePicker --}}
        <div class="row g-3">
            <div class="col-auto">
                <h5 class="mt-1">เลือกช่วงวันที่</h5>
            </div>
            <div class="col-auto">
                <div class="input-group">
                    <button class="mb-2 me-2 btn-icon btn-shadow btn-dashed btn btn-outline-primary"  id="reportrange">
                        <i class="pe-7s-date btn-icon-wrapper"></i>
                        <span></span>
                        <i class="fa ps-1 fa-caret-down"></i>
                    </button>
                </div>
            </div>
            <div class="col-auto">
                <form action="#">
                    <button type="submit" class="btn btn-primary mb-3">ประมวลผล</button>
                </form>
            </div>
        </div>

        <p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>
    </div>
    <div class="tab-pane" id="tab-eg6-2" role="tabpanel">
        <p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>
    </div>
    <div class="tab-pane" id="tab-eg6-3" role="tabpanel">
        <p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>
    </div>
</div>

@section('footer-script')

<script type="text/javascript" src="{{asset('assets/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-components/datepicker.js') }}"></script>

<script type="text/javascript" src="{{asset('assets/vendors/select2/dist/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-components/input-select.js') }}"></script>

@endsection

</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
