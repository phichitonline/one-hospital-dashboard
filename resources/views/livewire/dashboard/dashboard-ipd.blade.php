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

<div class="row">
    <div class="col-sm-12 col-md-7">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                    <div class="widget-chat-wrapper-outer">
                        <div class="widget-chart-content">
                            <h6 class="widget-subheading">Income</h6>
                            <div class="widget-chart-flex">
                                <div class="widget-numbers mb-0 w-100">
                                    <div class="widget-chart-flex">
                                        <div class="fsize-4">
                                            <small class="opacity-5">$</small>
                                            5,456
                                        </div>
                                        <div class="ms-auto">
                                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                                <span class="text-success ps-2">+14%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                    <div class="widget-chat-wrapper-outer">
                        <div class="widget-chart-content">
                            <h6 class="widget-subheading">Expenses</h6>
                            <div class="widget-chart-flex">
                                <div class="widget-numbers mb-0 w-100">
                                    <div class="widget-chart-flex">
                                        <div class="fsize-4 text-danger">
                                            <small class="opacity-5 text-muted">$</small>
                                            4,764
                                        </div>
                                        <div class="ms-auto">
                                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                                <span class="text-danger ps-2">
                                                    <span class="pe-1">
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
                                                    8%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                    <div class="widget-chat-wrapper-outer">
                        <div class="widget-chart-content">
                            <h6 class="widget-subheading">Spendings</h6>
                            <div class="widget-chart-flex">
                                <div class="widget-numbers mb-0 w-100">
                                    <div class="widget-chart-flex">
                                        <div class="fsize-4">
                                            <span class="text-success pe-2">
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                            <small class="opacity-5">$</small>
                                            1.5M
                                        </div>
                                        <div class="ms-auto">
                                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                                <span class="text-success ps-2">
                                                    <span class="pe-1">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                    15%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                    <div class="widget-chat-wrapper-outer">
                        <div class="widget-chart-content">
                            <h6 class="widget-subheading">Totals</h6>
                            <div class="widget-chart-flex">
                                <div class="widget-numbers mb-0 w-100">
                                    <div class="widget-chart-flex">
                                        <div class="fsize-4">
                                            <small class="opacity-5">$</small>
                                            31,564
                                        </div>
                                        <div class="ms-auto">
                                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                                <span class="text-warning ps-2">+76%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-5">
        <div class="mb-3 card">
            <div class="card-body">
                <div class="widget-chart widget-chart2 text-start p-0">
                    <div class="widget-chat-wrapper-outer">
                        <div class="widget-chart-content">
                            <div class="widget-chart-flex">
                                <div class="widget-numbers mt-0">
                                    <div class="widget-chart-flex">
                                        <div>
                                            <small class="opacity-5">$</small>
                                            <span>628</span>
                                        </div>
                                        <div class="widget-title ms-2 opacity-5 font-size-lg text-muted">Total Expenses Today</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                            <div id="dashboard-sparkline-carousel-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-card mb-3 card">
    <div class="card-header">
        <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Company Agents Status
        </div>
        <div class="btn-actions-pane-right">
            <button type="button" id="PopoverCustomT-1" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm">
                Actions Menu
                <span class="ps-2 align-middle opactiy-7">
                    <i class="fa fa-angle-down"></i>
                </span>
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Avatar</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Company</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Due Date</th>
                    <th class="text-center">Target Achievement</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#54</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="images/avatars/1.jpg" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Juan C. Cargill</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Micro Electronics</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-danger">Canceled</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-danger">71%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                aria-valuenow="71" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 71%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#55</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="images/avatars/2.jpg" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Johnathan Phelan</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Hatchworks</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-info">On Hold</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-warning">54%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                aria-valuenow="54" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 54%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="images/avatars/3.jpg" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Darrell Lowe</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Riddle Electronics</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-warning">In Progress</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-success">97%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                aria-valuenow="97" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 97%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="images/avatars/4.jpg" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">George T. Cottrell</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Pixelcloud</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-success">Completed</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-info">88%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                aria-valuenow="88" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 88%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-block p-4 text-center card-footer">
        <a href="#" class="mb-2 me-2 btn-icon btn-pill btn btn-outline-danger">
            <i class="fa fa-bed btn-icon-wrapper"></i>ข้อมูลผู้ป่วยใน
        </a>
        {{-- <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-dark btn-lg">
            <span class="me-2 opacity-7">
                <i class="fa fa-cog fa-spin"></i>
            </span>
            <span class="me-1">ข้อมูลผู้ป่วยใน</span>
        </button> --}}
    </div>
</div>

</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
