<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'ผู้ป่วยใน')

@section('activemenu_dashboard', 'mm-active')
@section('activemenu_dashboard_ipd', 'mm-active')

{{-- @section('content') --}}

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-bed icon-gradient bg-warm-flame"></i>
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

<div class="mb-3 card">
    <div class="tabs-lg-alternate card-header">
        <ul class="nav nav-justified">
            <li class="nav-item">
                <a href="#tab-minimal-1" data-bs-toggle="tab" class="nav-link minimal-tab-btn-1">
                    <div class="widget-number">
                        <span>9 | 15</span>
                    </div>
                    <div class="tab-subheading">
                        รับใหม่ | จำหน่าย
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#tab-minimal-2" data-bs-toggle="tab" class="nav-link active minimal-tab-btn-2">
                    <div class="widget-number text-danger">
                        <span>79</span>
                    </div>
                    <div class="tab-subheading">
                        Admit อยู่
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#tab-minimal-3" data-bs-toggle="tab" class="nav-link minimal-tab-btn-3">
                    <div class="widget-number text-success">
                        <span>69</span>
                    </div>
                    <div class="tab-subheading">
                        เตียงว่าง
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane" id="tab-minimal-1">
            <div class="card-body">
                รับใหม่/จำหน่าย
            </div>
        </div>
        <div class="tab-pane fade active show" id="tab-minimal-2">
            <div class="card-body">
                Admit อยู่
            </div>
        </div>
        <div class="tab-pane fade" id="tab-minimal-3">
            <div class="card-body">
                เตียงว่าง
            </div>
        </div>
    </div>
</div>


</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
