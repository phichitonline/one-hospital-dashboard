@extends('layouts.theme')

@section('pagetitle', 'Dashboard')

@section('activemenu_dashboard', 'mm-active')
@section('activemenu_dashboard_home', 'mm-active')

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-ambulance icon-gradient bg-malibu-beach"></i>
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

<div class="main-card mb-3 card">
    <div class="card-header">
        <div class="card-header-title font-size-lg text-capitalize fw-normal">
            {{ $message }}
        </div>
        <div class="btn-actions-pane-right">
            <button type="button" id="PopoverCustomT-1" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm">
                Version : {{ $version }} ({{ $last_update }})

            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
            <thead>
                <tr>
                    <th class="text-center">HN</th>
                    <th class="text-center">Pre name</th>
                    <th class="text-center">First name</th>
                    <th class="text-center">Last name</th>
                    <th class="text-center">CID</th>
                    <th class="text-center">Birth Date</th>
                    <th class="text-center">Father name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $data)

                {{-- @if ($data['hn'] == "000035634") --}}
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">{{ $data['hn'] }}</td>
                    <td class="text-left">
                        <a href="javascript:void(0)">{{ $data['pname'] }}</a>
                    </td>
                    <td class="text-left">
                        <a href="javascript:void(0)">{{ $data['fname'] }}</a>
                    </td>
                    <td class="text-left">
                        <a href="javascript:void(0)">{{ $data['lname'] }}</a>
                    </td>
                    <td class="text-left">
                        <a href="javascript:void(0)">{{ $data['cid'] }}</a>
                    </td>
                    <td class="text-left">
                        <a href="javascript:void(0)">{{ $data['birthday'] }}</a>
                    </td>
                    <td class="text-left">
                        <a href="javascript:void(0)">{{ $data['fathername'] }}</a>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                {{-- @endif --}}

                @endforeach
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

@endsection

