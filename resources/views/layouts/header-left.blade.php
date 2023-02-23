<div class="app-header-left">

    <div id="hamburger_b1" class="header__pane ms-auto">
        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar" onclick="myFunctionLogoMini()">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div style="display:none" id="hamburger_b2" class="header__pane ms-auto">
        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar" onclick="myFunctionLogoFull()">
                <i class="fa fa-times"></i>
        </button>
    </div>

    <div class="header-dots ms-3">
        <a href="/" type="button" class="p-0 me-2 btn btn-link">
            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                <span class="icon-wrapper-bg bg-primary"></span>
                <i class="metismenu-icon pe-7s-home"></i>
            </span>
        </a>
    </div>

    {{-- <div class="search-wrapper ms-3">
        <div class="input-holder">
            <input type="text" class="search-input" placeholder="ค้นหา">
            <button class="search-icon">
                <span></span>
            </button>
        </div>
        <button class="btn-close"></button>
    </div> --}}

    <div class="header__pane ms-auto mt-2">
        <h5>{{ $hospital_name['setting_value'] }}</h5>
    </div>

</div>
