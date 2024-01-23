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

@foreach ($h11456['data'] as $data)
@php
    $h11456_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h11456_ptm_ipd_an = $data['ptm_ipd_an'];
    $h11456_pt_ipd_today = $data['pt_ipd_today'];
    $h11456_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h11456_ipt_admit = $data['ipt_admit'];
    $h11456_empty_bed = $data['empty_bed'];
    $h11456_bed_count = $data['bed_count'];
@endphp
@endforeach

@foreach ($h11263['data'] as $data)
@php
    $h11263_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h11263_ptm_ipd_an = $data['ptm_ipd_an'];
    $h11263_pt_ipd_today = $data['pt_ipd_today'];
    $h11263_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h11263_ipt_admit = $data['ipt_admit'];
    $h11263_empty_bed = $data['empty_bed'];
    $h11263_bed_count = $data['bed_count'];
@endphp
@endforeach

@foreach ($h10726['data'] as $data)
@php
    $h10726_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h10726_ptm_ipd_an = $data['ptm_ipd_an'];
    $h10726_pt_ipd_today = $data['pt_ipd_today'];
    $h10726_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h10726_ipt_admit = $data['ipt_admit'];
    $h10726_empty_bed = $data['empty_bed'];
    $h10726_bed_count = $data['bed_count'];
@endphp
@endforeach

@foreach ($h11258['data'] as $data)
@php
    $h11258_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h11258_ptm_ipd_an = $data['ptm_ipd_an'];
    $h11258_pt_ipd_today = $data['pt_ipd_today'];
    $h11258_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h11258_ipt_admit = $data['ipt_admit'];
    $h11258_empty_bed = $data['empty_bed'];
    $h11258_bed_count = $data['bed_count'];
@endphp
@endforeach

@foreach ($h27978['data'] as $data)
@php
    $h27978_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h27978_ptm_ipd_an = $data['ptm_ipd_an'];
    $h27978_pt_ipd_today = $data['pt_ipd_today'];
    $h27978_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h27978_ipt_admit = $data['ipt_admit'];
    $h27978_empty_bed = 0;
    $h27978_bed_count = 0;
@endphp
@endforeach

@foreach ($h27979['data'] as $data)
@php
    $h27979_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h27979_ptm_ipd_an = $data['ptm_ipd_an'];
    $h27979_pt_ipd_today = $data['pt_ipd_today'];
    $h27979_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h27979_ipt_admit = $data['ipt_admit'];
    $h27979_empty_bed = $data['empty_bed'];
    $h27979_bed_count = $data['bed_count'];
@endphp
@endforeach

@foreach ($h11260['data'] as $data)
@php
    $h11260_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h11260_ptm_ipd_an = $data['ptm_ipd_an'];
    $h11260_pt_ipd_today = $data['pt_ipd_today'];
    $h11260_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h11260_ipt_admit = $data['ipt_admit'];
    $h11260_empty_bed = $data['empty_bed'];
    $h11260_bed_count = $data['bed_count'];
@endphp
@endforeach

@foreach ($h11631['data'] as $data)
@php
    $h11631_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h11631_ptm_ipd_an = $data['ptm_ipd_an'];
    $h11631_pt_ipd_today = $data['pt_ipd_today'];
    $h11631_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h11631_ipt_admit = $data['ipt_admit'];
    $h11631_empty_bed = $data['empty_bed'];
    $h11631_bed_count = $data['bed_count'];
@endphp
@endforeach

{{-- @foreach ($h11261['data'] as $data) --}}
@php
    $h11261_ptm_ipd_hn = 0;
    $h11261_ptm_ipd_an = 0;
    $h11261_pt_ipd_today = 0;
    $h11261_ptm_ipd_vn_last = 0;
    $h11261_ipt_admit = 0;
    $h11261_empty_bed = 0;
    $h11261_bed_count = 0;
@endphp
{{-- @endforeach --}}

{{-- @foreach ($h11262['data'] as $data) --}}
@php
    $h11262_ptm_ipd_hn = 0;
    $h11262_ptm_ipd_an = 0;
    $h11262_pt_ipd_today = 0;
    $h11262_ptm_ipd_vn_last = 0;
    $h11262_ipt_admit = 0;
    $h11262_empty_bed = 0;
    $h11262_bed_count = 0;
@endphp
{{-- @endforeach --}}

{{-- @foreach ($h11259['data'] as $data) --}}
@php
    $h11259_ptm_ipd_hn = 0;
    $h11259_ptm_ipd_an = 0;
    $h11259_pt_ipd_today = 0;
    $h11259_ptm_ipd_vn_last = 0;
    $h11259_ipt_admit = 0;
    $h11259_empty_bed = 0;
    $h11259_bed_count = 0;
@endphp
{{-- @endforeach --}}

@foreach ($h27980['data'] as $data)
@php
    $h27980_ptm_ipd_hn = $data['ptm_ipd_hn'];
    $h27980_ptm_ipd_an = $data['ptm_ipd_an'];
    $h27980_pt_ipd_today = $data['pt_ipd_today'];
    $h27980_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
    $h27980_ipt_admit = $data['ipt_admit'];
    $h27980_empty_bed = $data['empty_bed'];
    $h27980_bed_count = $data['bed_count'];
@endphp
@endforeach

@php
    $ptm_ipd_hn = $h11263_ptm_ipd_hn + $h11456_ptm_ipd_hn + $h10726_ptm_ipd_hn + $h11258_ptm_ipd_hn + $h27978_ptm_ipd_hn + $h27979_ptm_ipd_hn + $h11260_ptm_ipd_hn + $h11631_ptm_ipd_hn + $h11261_ptm_ipd_hn + $h11262_ptm_ipd_hn + $h11259_ptm_ipd_hn + $h27980_ptm_ipd_hn;
    $ptm_ipd_an = $h11263_ptm_ipd_an + $h11456_ptm_ipd_an + $h10726_ptm_ipd_an + $h11258_ptm_ipd_an + $h27978_ptm_ipd_an + $h27979_ptm_ipd_an + $h11260_ptm_ipd_an + $h11631_ptm_ipd_an + $h11261_ptm_ipd_an + $h11262_ptm_ipd_an + $h11259_ptm_ipd_an + $h27980_ptm_ipd_an;
    $pt_ipd_today = $h11263_pt_ipd_today + $h11456_pt_ipd_today + $h10726_pt_ipd_today + $h11258_pt_ipd_today + $h27978_pt_ipd_today + $h27979_pt_ipd_today + $h11260_pt_ipd_today + $h11631_pt_ipd_today + $h11261_pt_ipd_today + $h11262_pt_ipd_today + $h11259_pt_ipd_today + $h27980_pt_ipd_today;
    $ptm_ipd_vn_last = $h11263_ptm_ipd_vn_last + $h11456_ptm_ipd_vn_last + $h10726_ptm_ipd_vn_last + $h11258_ptm_ipd_vn_last + $h27978_ptm_ipd_vn_last + $h27979_ptm_ipd_vn_last + $h11260_ptm_ipd_vn_last + $h11631_ptm_ipd_vn_last + $h11261_ptm_ipd_vn_last + $h11262_ptm_ipd_vn_last + $h11259_ptm_ipd_vn_last + $h27980_ptm_ipd_vn_last;
    $ipt_admit = $h11263_ipt_admit + $h11456_ipt_admit + $h10726_ipt_admit + $h11258_ipt_admit + $h27978_ipt_admit + $h27979_ipt_admit + $h11260_ipt_admit + $h11631_ipt_admit + $h11261_ipt_admit + $h11262_ipt_admit + $h11259_ipt_admit + $h27980_ipt_admit;
    $empty_bed = $h11263_empty_bed + $h11456_empty_bed + $h10726_empty_bed + $h11258_empty_bed + $h27978_empty_bed + $h27979_empty_bed + $h11260_empty_bed + $h11631_empty_bed + $h11261_empty_bed + $h11262_empty_bed + $h11259_empty_bed + $h27980_empty_bed;
    $bed_count = $h11263_bed_count + $h11456_bed_count + $h10726_bed_count + $h11258_bed_count + $h27978_bed_count + $h27979_bed_count + $h11260_bed_count + $h11631_bed_count + $h11261_bed_count + $h11262_bed_count + $h11259_bed_count + $h27980_bed_count;
@endphp

{{-- สรุป OPD,IPD,ER --}}
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
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($ptm_ipd_vn_last,0) }} ครั้ง</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ number_format($pt_ipd_today,0) }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-angle-down"></i>
                            <span class="ps-1">{{ number_format($ptm_ipd_hn * 100 / $ptm_ipd_vn_last,0) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-success"
                            role="progressbar" aria-valuenow="{{ $ptm_ipd_hn * 100 / $ptm_ipd_vn_last }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $ptm_ipd_an * 100 / $ptm_ipd_vn_last }}%;">
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
