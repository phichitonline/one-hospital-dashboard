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

<h2>tghdata</h2>
@foreach ($tgh['data'] as $tghdata)
{{$tghdata['type']}}  || OPD : {{$tghdata['opd']}} ER : {{$tghdata['er']}}
<br>
@endforeach
<br>
<br>

<h2>tphcpdata</h2>
@foreach ($tphcp['data'] as $tphcpdata)
{{$tphcpdata['type']}}   || OPD : {{$tphcpdata['opd']}} ER : {{$tphcpdata['er']}}
<br>
@endforeach


{{-- สรุปผู้ป่วยนอก --}}
{{-- <div class="row">
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

</div> --}}



{{-- <div class="main-card mb-3 card">
    <div class="row">
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">รับ Refer วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ xxx คน/xxx ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning">xxx</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43"
                                aria-valuemin="0" aria-valuemax="100" style="width: 43%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว xxx</div>
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
                            <div class="widget-subheading">เดือนนี้ xxx คน/xxx ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">xxx</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว xxx</div>
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
                            <div class="widget-subheading">เดือนนี้ xxx คน/xxx ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">xxx</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว xxx</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- กราฟผู้ป่วยนอก --}}

{{-- <div class="main-card mb-3 card">
    <div class="widget-content">
        <div class="widget-content-outer">
            <div id="container-opd"></div>
        </div>
    </div>
</div> --}}

{{-- @endsection --}}

{{-- กราฟผู้ป่วยใน --}}



{{-- @endsection --}}


@section('footer-script')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>


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
