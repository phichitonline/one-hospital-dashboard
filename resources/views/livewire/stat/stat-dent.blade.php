<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

    @section('pagetitle', 'ทันตกรรม')

    @section('activemenu_stat', 'mm-active')
    @section('activemenu_stat_dent', 'mm-active')

    @section('header-script')
        <link href="{{asset('assets/styles/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
    @endsection

    {{-- @section('content') --}}

    <div class="app-page-title app-page-title-simple">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="page-title-head center-elem">
                        <span class="d-inline-block pe-2">
                            <i class="fa fa-ambulance opacity-9"></i>
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

                <select wire:model='year' name="year" id="year" class="btn-shadow dropdown-toggle btn-dashed btn btn-outline-primary">
                    <option value="2566">ปีงบประมาณ 2566</option>
                    <option value="2565">ปีงบประมาณ 2565</option>
                    <option value="2564">ปีงบประมาณ 2564</option>
                </select>

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
            <h5 class="mt-2">ข้อมูลและสถิติ@yield('pagetitle') ปีงบประมาณ {{ $myeare+543 }} (1 ต.ค.{{ $myearb+543 }} - {{ $enddate2 }}{{ $myeare+543 }})</h5>
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
                <div class="widget-content">
                    <div class="widget-content-outer">
                        <div id="container-dent"></div>
                    </div>
                </div>
            </div>


        </div>
        <div class="tab-pane" id="tab-eg6-1" role="tabpanel">

            {{-- DatePicker --}}
            <div class="row g-3">
                <div class="col-auto">
                    <h5 class="mt-1">เลือกช่วงวันที่</h5>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <button class="mb-2 me-2 btn-icon btn-shadow btn-dashed btn btn-outline-primary"  id="reportrange">
                            <i class="pe-7s-date btn-icon-wrapper"></i>
                            <span></span>
                            <i class="fa ps-1 fa-caret-down"></i>
                        </button>
                    </div>
                </div>
                <div class="col-auto">
                    <form action="#">
                        <button type="submit" class="btn btn-primary mb-3">ประมวลผล</button>
                    </form>
                </div>
            </div>

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Table bordered</h5>
                    <table class="mb-0 table table-bordered table-hover">
                        <thead>
                            <tr class="bg-primary text-white opacity-7">
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="tab-eg6-2" role="tabpanel">

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Table bordered</h5>
                    <table style="width: 100%;" id="DataTableExport" class="table table-hover table-bordered table-condensed">
                        <thead>
                            <tr class="bg-primary text-white opacity-7">
                                <th class='text-center'>ชื่อ</th>
                                <th class='text-center'>ที่อยู่</th>
                                <th class='text-center'>ที่ทำงาน</th>
                                <th class='text-center'>อายุ(ปี)</th>
                                <th class='text-center'>Start date</th>
                                <th class='text-center'>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="tab-eg6-3" role="tabpanel">

            <div id="accordion" class="main-card mb-3 card">
                <div class="card">
                    <div id="headingOne" class="card-header">
                        <button type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne1" aria-expanded="true"
                            aria-controls="collapseOne" class="text-start m-0 p-0 btn btn-link btn-block">
                            <h5 class="m-0 p-0">คำอธิบาย</h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapseOne1"
                        aria-labelledby="headingOne" class="collapse show">
                        <div class="card-body">
                            ข้อมูลและสถิติ
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="headingTwo" class="b-radius-0 card-header">
                        <button type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne2" aria-expanded="false"
                            aria-controls="collapseTwo" class="text-start m-0 p-0 btn btn-link btn-block">
                            <h5 class="m-0 p-0">
                                SQL
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapseOne2" class="collapse">
                        <div class="card-body">
                            Query ประมวลผลข้อมูล
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="headingThree" class="card-header">
                        <button type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne3" aria-expanded="false"
                            aria-controls="collapseThree" class="text-start m-0 p-0 btn btn-link btn-block">
                            <h5 class="m-0 p-0">
                                ข้อเสนอแนะ
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapseOne3" class="collapse">
                        <div class="card-body">
                            ติดต่อเพื่อติชม แนะนำ ให้กำลังใจผู้พัฒนา ในการสร้างสรรผลงานดีๆต่อไปครับ
                            Dr.GHOST Tel,LineID 0619921666
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {{-- @endsection --}}

    @section('footer-script')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

    <script type="text/javascript">

    // Livewire.emit('year')

        document.addEventListener('year', event => {

            var year = event.detail.year;
            var ermonth = event.detail.count_er_month;
            var erdril10 = event.detail.count_er_dril10;
            var erdril11 = event.detail.count_er_dril11;
            var erdril12 = event.detail.count_er_dril12;
            var erdril1 = event.detail.count_er_dril1;
            var erdril2 = event.detail.count_er_dril2;
            var erdril3 = event.detail.count_er_dril3;
            var erdril4 = event.detail.count_er_dril4;
            var erdril5 = event.detail.count_er_dril5;
            var erdril6 = event.detail.count_er_dril6;
            var erdril7 = event.detail.count_er_dril7;
            var erdril8 = event.detail.count_er_dril8;
            var erdril9 = event.detail.count_er_dril9;

            Highcharts.chart('container-dent', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'ผู้รับบริการแผนกอุบัติเหตุและฉุกเฉิน ปีงบประมาณ '+year
                },
                subtitle: {
                    text: '(ผู้รับบริการรายเดือน)<br>{{ $hospital_name['setting_value'] }}'
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

        });

        var year = "2566";
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

        Highcharts.chart('container-dent', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'ผู้รับบริการแผนกอุบัติเหตุและฉุกเฉิน ปีงบประมาณ '+year
            },
            subtitle: {
                text: '(ผู้รับบริการรายเดือน)<br>{{ $hospital_name['setting_value'] }}'
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

    // });

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
