
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
                        ปีงบประมาณ {{ $year }}
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
            <h5 class="mt-2">ข้อมูลและสถิติ@yield('pagetitle') (1 ต.ค.2565 - 11 ก.พ.2566)</h5>
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
            <div class="card-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    <input wire:model="search" type="text" placeholder="ค้นหา..."/>
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

                        @foreach($users as $user)
                        <tr>
                            <td class="text-center text-muted" style="width: 80px;">#{{ $user->id }}</td>
                            <td class="text-center" style="width: 80px;">
                                <img width="40" class="rounded-circle" src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)">{{ $user->username }}</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)">{{ $user->email }}</a>
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
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-block p-4 text-center card-footer">
                <a href="#" class="mb-2 me-2 btn-icon btn-pill btn btn-outline-danger">
                    <i class="fa fa-bed btn-icon-wrapper"></i>ข้อมูลผู้ป่วยใน
                </a>
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

    <script type="text/javascript" src="{{asset('assets/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/form-components/datepicker.js') }}"></script>

    <script type="text/javascript" src="{{asset('assets/vendors/select2/dist/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/form-components/input-select.js') }}"></script>

    @endsection

    </div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
