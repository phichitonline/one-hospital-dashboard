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

        </div>
    </div>
</div>



</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
