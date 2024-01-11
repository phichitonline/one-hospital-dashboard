<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'One Province One Hospital')

@section('activemenu_dashboard', 'mm-active')
@section('activemenu_dashboard_home', 'mm-active')

{{-- @section('content') --}}

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-ambulance icon-gradient bg-malibu-beach"></i>
            </div>
            <div>
                <h3>@yield('pagetitle')</h3>
                <div class="page-title-subheading">ระบบสารสนเทศเพื่อการบริหารข้อมูลโรงพยาบาล {{ $hospital_name['setting_value'] }}</div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="Dashboard"
                data-bs-placement="bottom" class="btn-shadow me-3 btn btn-primary">
                <i class="fa fa-star"></i>
            </button>
        </div>
    </div>
</div>

{{-- สรุปผู้ป่วยนอก --}}
<div class="row">
    <div class="col-md-4">
        <a href="{{ route('stat.opd') }}" data-bs-toggle="tooltip" title="ข้อมูลผู้ป่วยนอก">
        <div class="card mb-3 widget-chart widget-chart2 bg-plum-plate text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยนอกวันนี้</div>
                        <div class="widget-subtitle text-white opacity-7">เดือนที่แล้ว {{ number_format($pt_opd_vn_lastm,0) }} ครั้ง</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ number_format($pt_opd_today,0) }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <span class="pe-1">{{ number_format($opd_percent,0) }}%</span>
                            <i class="fa fa-angle-up"></i>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{ $opd_percent }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $opd_percent }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('stat.ipd') }}" data-bs-toggle="tooltip" title="ข้อมูลผู้ป่วยใน">
        <div class="card mb-3 widget-chart widget-chart2 bg-warm-flame text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยในวันนี้</div>
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($ptm_ipd_an_lastm,0) }} ครั้ง</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ number_format($pt_ipd_today,0) }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-angle-down"></i>
                            <span class="ps-1">{{ number_format($ptm_ipd_hn * 100 / $ptm_ipd_an_lastm,0) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-success"
                            role="progressbar" aria-valuenow="{{ $ptm_ipd_hn * 100 / $ptm_ipd_an_lastm }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $ptm_ipd_an * 100 / $ptm_ipd_an_lastm }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($ptm_ipd_hn,0) }} คน/{{ number_format($ptm_ipd_an,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('stat.er') }}" data-bs-toggle="tooltip" title="ข้อมูลอุบัติเหตุ">
        <div class="card mb-3 widget-chart widget-chart2 bg-mixed-hopes text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยอุบัติเหตุวันนี้</div>
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($ptm_er_vn_lastm,0) }} ครั้ง</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ number_format($pt_er_today,0) }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-angle-down"></i>
                            <span class="ps-1">{{ number_format($pt_er_hn * 100 / $ptm_er_vn_lastm,0) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $pt_er_vn * 100 / $ptm_er_vn_lastm }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $pt_er_vn * 100 / $ptm_er_vn_lastm }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_er_hn,0) }} คน/{{ number_format($pt_er_vn,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
    </div>
    </a>

</div>

{{-- <div class="row">
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
</div> --}}

<div class="row">
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">ผ่าตัดวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($ptm_or_hn,0) }} คน/{{ number_format($ptm_or_vn,0) }} ครั้ง (OPD={{ number_format($ptm_or_opd,0) }} IPD={{ number_format($ptm_or_ipd,0) }})</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger">
                        <span>{{ number_format($pt_or_today,0) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Admit อยู่ (เตียง)</div>
                    {{-- <div class="widget-subheading">เดือนนี้ {{ number_format($ptm_ipd_hn,0) }} คน/{{ number_format($ptm_ipd_an,0) }} ครั้ง</div> --}}
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-success">
                        <span>{{ number_format($ipt_admit,0) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">เตียงว่าง</div>
                    {{-- <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div> --}}
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-primary">
                        <span>{{ number_format($empty_bed,0) }}/{{ number_format($bed_count,0) }}</span>
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
                            <div class="widget-heading">ส่ง Refer นอกจังหวัดวันนี้</div>
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


{{-- กราฟผู้ป่วยนอก --}}

<div class="main-card mb-3 card">
    <div class="widget-content">
        <div class="widget-content-outer">
            <div id="container-opd"></div>
        </div>
    </div>
</div>

{{-- @endsection --}}

{{-- กราฟผู้ป่วยใน --}}



{{-- @endsection --}}


@section('footer-script')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<script type="text/javascript">

    var year = {{ Js::from($byear) }};
    var ermonth =  {{ Js::from($count_er_month) }};
    var erdril10 =  {{ Js::from($count_er_dril10) }};
    var erdril11 =  {{ Js::from($count_er_dril11) }};
    var erdril12 =  {{ Js::from($count_er_dril12) }};
    var erdril1 =  {{ Js::from($count_er_dril1) }};
    var erdril2 =  {{ Js::from($count_er_dril2) }};
    var erdril3 =  {{ Js::from($count_er_dril3) }};
    var erdril4 =  {{ Js::from($count_er_dril4) }};
    var erdril5 =  {{ Js::from($count_er_dril5) }};
    var erdril6 =  {{ Js::from($count_er_dril6) }};
    var erdril7 =  {{ Js::from($count_er_dril7) }};
    var erdril8 =  {{ Js::from($count_er_dril8) }};
    var erdril9 =  {{ Js::from($count_er_dril9) }};

    Highcharts.chart('container-opd', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ผู้รับบริการอุบัติเหตุและฉุกเฉิน ปีงบประมาณ '+year
        },
        subtitle: {
            text: 'ผู้รับบริการรายเดือน {{ $hospital_name['setting_value'] }}'
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
                "name": "ผู้รับบริการ ER",
                "colorByPoint": true,
                "data": ermonth
            }
        ],
        "drilldown": {
            // "series": erdril

            "series": [
                {
                    "name": "ตุลาคม",
                    "id": "ตุลาคม",
                    "data": erdril10
                },
                {
                    "name": "พฤศจิกายน",
                    "id": "พฤศจิกายน",
                    "data": erdril11
                },
                {
                    "name": "ธันวาคม",
                    "id": "ธันวาคม",
                    "data": erdril12
                },
                {
                    "name": "มกราคม",
                    "id": "มกราคม",
                    "data": erdril1
                },
                {
                    "name": "กุมภาพันธ์",
                    "id": "กุมภาพันธ์",
                    "data": erdril2
                },
                {
                    "name": "มีนาคม",
                    "id": "มีนาคม",
                    "data": erdril3
                },
                {
                    "name": "เมษายน",
                    "id": "เมษายน",
                    "data": erdril4
                },
                {
                    "name": "พฤษภาคม",
                    "id": "พฤษภาคม",
                    "data": erdril5
                },
                {
                    "name": "มิถุนายน",
                    "id": "มิถุนายน",
                    "data": erdril6
                },
                {
                    "name": "กรกฎาคม",
                    "id": "กรกฎาคม",
                    "data": erdril7
                },
                {
                    "name": "สิงหาคม",
                    "id": "สิงหาคม",
                    "data": erdril8
                },
                {
                    "name": "กันยายน",
                    "id": "กันยายน",
                    "data": erdril9
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
