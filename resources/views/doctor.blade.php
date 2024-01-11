@extends('layouts.theme')

@section('pagetitle', 'รายชื่อแพทย์')

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

<h1>{{ $message }}</h1>
<h4>Version : {{ $version }}</h4>
<h4>Last update : {{ $last_update }}</h4>

<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>doctor code</th>
                    <th>fullname</th>
                    <th>licence</th>
                    <th>cid</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วันเกิด</th>
                    <th>ตำแหน่ง</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item['doctorcode'] }}</td>
                    <td>{{ $item['fullname'] }}</td>
                    <td>{{ $item['licence'] }}</td>
                    <td>{{ $item['cid'] }}</td>
                    <td>{{ $item['pname'] }}{{ $item['fname'] }} {{ $item['lname'] }}</td>
                    <td>{{ $item['birth_date'] }}</td>
                    <td>{{ $item['position'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('footer-script')

<script type="text/javascript" src="{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<script type="text/javascript" src="{{asset('assets/js/tables.js') }}"></script>

@endsection
