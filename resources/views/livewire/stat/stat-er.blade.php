<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'อุบัติเหตุฉุกเฉิน')

@section('activemenu_stat', 'mm-active')
@section('activemenu_stat_er', 'mm-active')

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

            {{-- <select wire:model='year' name="year" id="year" class="btn-shadow dropdown-toggle btn-dashed btn btn-outline-primary">
                <option value="2566">ปีงบประมาณ 2566</option>
                <option value="2565">ปีงบประมาณ 2565</option>
                <option value="2564">ปีงบประมาณ 2564</option>
            </select> --}}

            <div class="d-inline-block dropdown">

                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn-dashed btn btn-outline-primary">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="fa fa-calendar fa-w-20"></i>
                    </span>
                    ปีงบประมาณ {{ $myeare+543 }}
                </button>

                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.er') }}/?year=2566">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-danger">2566</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.er') }}/?year=2565">
                                <i class="nav-link-icon lnr-calendar-full"></i>
                                <span> ปีงบประมาณ </span>
                                <div class="ms-auto badge rounded-pill bg-primary">2565</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stat.er') }}/?year=2564">
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
            <div class="g-0 row">
                <div class="col-md-4">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">อุบัติเหตุ</div>
                                                <div class="widget-subheading">Last year expenses</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">{{ number_format($count_er_type2,0) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Refer อุบัติเหตุ</div>
                                                <div class="widget-subheading">Total Clients Profit</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">456</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">อุบัติเหตุจราจร</div>
                                                <div class="widget-subheading">People Interested</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger">{{ number_format($count_er_type5,0) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Refer อุบัติเหตุจราจร</div>
                                                <div class="widget-subheading">Total revenue streams</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger">123</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">ฉุกเฉิน</div>
                                                <div class="widget-subheading">Last year expenses</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-primary">{{ number_format($count_er_type1,0) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Refer ฉุกเฉิน</div>
                                                <div class="widget-subheading">Total Clients Profit</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-primary">123</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div id="container-er-month"></div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div id="container-er-pttype"></div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="row">
                <div class="col-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div id="container2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div id="container3"></div>
                        </div>
                    </div>
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
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>$235,500</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>$324,050</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>$164,500</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>$109,850</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>$645,750</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2011/02/03</td>
                            <td>$234,500</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>$87,500</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>$138,575</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>$75,650</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>$356,250</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>$103,500</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>$86,500</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>
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

    Highcharts.chart('container-er-month', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ผู้รับบริการแผนกอุบัติเหตุและฉุกเฉิน ปีงบประมาณ {{ $myeare+543 }}'
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

    var erpttype =  {{ Js::from($count_er_pttype) }};
    var pttdril1 =  {{ Js::from($count_er_pttdril1) }};
    var pttdril2 =  {{ Js::from($count_er_pttdril2) }};
    var pttdril3 =  {{ Js::from($count_er_pttdril3) }};
    var pttdril4 =  {{ Js::from($count_er_pttdril4) }};
    var pttdril5 =  {{ Js::from($count_er_pttdril5) }};

    Highcharts.chart('container-er-pttype', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ผู้รับบริการแผนกอุบัติเหตุและฉุกเฉิน ปีงบประมาณ {{ $myeare+543 }}'
        },
        subtitle: {
            text: '(ผู้รับบริการแยกประเภทผู้ป่วย)<br>{{ $hospital_name['setting_value'] }}'
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
                "name": "ประเภทผู้รับบริการ ER",
                "colorByPoint": true,
                "data": erpttype
            }
        ],
        "drilldown": {
            // "series": erdril

            "series": [
                {
                    "name": "ผู้ป่วยอุบัติเหตุ",
                    "id": "ผู้ป่วยอุบัติเหตุ",
                    "data": pttdril1
                },
                {
                    "name": "ผู้ป่วยอุบัติเหตุจราจร",
                    "id": "ผู้ป่วยอุบัติเหตุจราจร",
                    "data": pttdril2
                },
                {
                    "name": "ผู้ป่วยฉุกเฉิน",
                    "id": "ผู้ป่วยฉุกเฉิน",
                    "data": pttdril3
                },
                {
                    "name": "ผู้ป่วยตรวจโรคทั่วไป",
                    "id": "ผู้ป่วยตรวจโรคทั่วไป",
                    "data": pttdril4
                },
                {
                    "name": "ผู้ป่วยรับบริการอื่น ๆ",
                    "id": "ผู้ป่วยรับบริการอื่น ๆ",
                    "data": pttdril5
                }
            ]

        }
    });

    Highcharts.chart('container2', {
        title: {
            text: 'New User Growth, 2022'
        },
        subtitle: {
            text: 'Source: itsolutionstuff.com.com'
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: [1,2,3,2,1,2]
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

    Highcharts.chart('container3', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares in May, 2020',
            align: 'left'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
            valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
            name: 'Chrome',
            y: 70.67,
            sliced: true,
            selected: true
            }, {
            name: 'Edge',
            y: 14.77
            },  {
            name: 'Firefox',
            y: 4.86
            }, {
            name: 'Safari',
            y: 2.63
            }, {
            name: 'Internet Explorer',
            y: 1.53
            },  {
            name: 'Opera',
            y: 1.40
            }, {
            name: 'Sogou Explorer',
            y: 0.84
            }, {
            name: 'QQ',
            y: 0.51
            }, {
            name: 'Other',
            y: 2.6
            }]
        }]
    });

</script>

<script type="text/javascript" src="{{asset('assets/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-components/datepicker.js') }}"></script>

<script type="text/javascript" src="{{asset('assets/vendors/select2/dist/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-components/input-select.js') }}"></script>

<script src="{{asset('assets/js/datatables.bundle.js') }}"></script>
<script src="{{asset('assets/js/button-export.js') }}"></script>

{{-- <script type="text/javascript" src="{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script> --}}

<script type="text/javascript" src="{{asset('assets/js/tables.js') }}"></script>

@endsection


</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
