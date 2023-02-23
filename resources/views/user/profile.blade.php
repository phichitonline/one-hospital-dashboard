@extends('layouts.theme')

@section('pagetitle', 'Profile')

@section('activemenu_profile', 'mm-active')

@section('content')


    <div class="app-page-title app-page-title-simple">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="page-title-head center-elem">
                        <span class="d-inline-block pe-2">
                            <i class="lnr-apartment opacity-6"></i>
                        </span>
                        <span class="d-inline-block">Profile</span>
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
                                    Profile
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Minimal Home Example
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                {{-- <div class="d-inline-block pe-3">
                    <select id="custom-inp-top" type="select" class="form-select">
                        <option>Select period...</option>
                        <option>Last Week</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                    </select>
                </div> --}}
                <button type="button" data-bs-toggle="tooltip" data-bs-placement="left"
                    class="btn btn-primary" title="@yield('pagetitle')">
                    <i class="fa fa-info"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">หัวข้อ</h5>
                    <div>
                        <h1>ส่วนของเนื้อหา</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
