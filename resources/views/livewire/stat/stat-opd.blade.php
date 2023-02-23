<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'ผู้ป่วยนอก')

@section('activemenu_stat', 'mm-active')
@section('activemenu_stat_opd', 'mm-active')

@section('header-script')

@endsection

{{-- @section('content') --}}

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
                    ปีงบประมาณ {{ $myeare+543 }}
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.opd') }}/?year=2566">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-danger">2566</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.opd') }}/?year=2565">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-primary">2565</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.opd') }}/?year=2564">
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
        <h5 class="mt-2">ข้อมูลและสถิติ@yield('pagetitle') (1 ต.ค.{{ $myearb+543 }} - {{ $enddate2 }}{{ $myeare+543 }})</h5>
        <div class="btn-actions-pane-right">
            <div class="nav">
                <a data-bs-toggle="tab" href="#tab-eg6-3" class="me-1 btn-dashed btn btn-outline-secondary">[ อื่นๆ ]</a>
                <a data-bs-toggle="tab" href="#tab-eg6-2" class="me-1 btn-dashed btn btn-outline-danger">[ ข้อมูล ]</a>
                <a data-bs-toggle="tab" href="#tab-eg6-1" class="me-1 btn-dashed btn btn-outline-info">[ รายงาน ]</a>
                <a data-bs-toggle="tab" href="#tab-eg6-0" class="active btn-dashed btn btn-outline-primary">[ สรุป ]</a>
            </div>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="tab-eg6-0" role="tabpanel">

        <div class="main-card mb-3 card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div id="container-er-pttype"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="tab-pane" id="tab-eg6-1" role="tabpanel">
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

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<script type="text/javascript">

    var erpttype =  {{ Js::from($count_er_pttype) }};
    var pttdril1 =  {{ Js::from($count_er_pttdril1) }};
    var pttdril2 =  {{ Js::from($count_er_pttdril2) }};
    var pttdril3 =  {{ Js::from($count_er_pttdril3) }};
    var pttdril4 =  {{ Js::from($count_er_pttdril4) }};
    var pttdril5 =  {{ Js::from($count_er_pttdril5) }};

    Highcharts.chart('container-er-pttype', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ผู้รับบริการแผนกอุบัติเหตุและฉุกเฉิน ปีงบประมาณ {{ $myeare+543 }}'
        },
        subtitle: {
            text: '(ผู้รับบริการแยกประเภทผู้ป่วย)<br>{{ $hospital_name['setting_value'] }}'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'จำนวน(ราย)'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b><br/>'
        },

        "series": [
            {
                "name": "ประเภทผู้รับบริการ ER",
                "colorByPoint": true,
                "data": erpttype
            }
        ],
        "drilldown": {
            // "series": erdril

            "series": [
                {
                    "name": "ผู้ป่วยอุบัติเหตุ",
                    "id": "ผู้ป่วยอุบัติเหตุ",
                    "data": pttdril1
                },
                {
                    "name": "ผู้ป่วยอุบัติเหตุจราจร",
                    "id": "ผู้ป่วยอุบัติเหตุจราจร",
                    "data": pttdril2
                },
                {
                    "name": "ผู้ป่วยฉุกเฉิน",
                    "id": "ผู้ป่วยฉุกเฉิน",
                    "data": pttdril3
                },
                {
                    "name": "ผู้ป่วยตรวจโรคทั่วไป",
                    "id": "ผู้ป่วยตรวจโรคทั่วไป",
                    "data": pttdril4
                },
                {
                    "name": "ผู้ป่วยรับบริการอื่น ๆ",
                    "id": "ผู้ป่วยรับบริการอื่น ๆ",
                    "data": pttdril5
                }
            ]

        }
    });

</script>

<script type="text/javascript" src="{{asset('assets/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-components/datepicker.js') }}"></script>

<script type="text/javascript" src="{{asset('assets/vendors/select2/dist/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-components/input-select.js') }}"></script>

<script src="{{asset('assets/js/datatables.bundle.js') }}"></script>
<script src="{{asset('assets/js/button-export.js') }}"></script>

<script type="text/javascript" src="{{asset('assets/js/tables.js') }}"></script>

@endsection


</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
