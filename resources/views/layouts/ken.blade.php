<?php
/**
 * Created by IntelliJ IDEA.
 * User: tunde
 * Date: 2/21/2019
 * Time: 3:58 PM
 */

?>
@inject('request', 'Illuminate\Http\Request')
    <!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    @if(Auth::check()) @else
        <script type="text/javascript">
            window.location = "{{ url('/login') }}";
        </script> @endif
<!--begin::Page Vendors Styles -->
    <link href="{{ url('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles -->
    <link href="{{ url('assets/app/css/bundle/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

<!--begin::Layout Skins -->
    <link href="{{ url('assets/skins/header/base/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/skins/brand/navy.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/skins/aside/navy.css') }}" rel="stylesheet" type="text/css"/>

    <!--Begin other Styles -->
    @yield('style')

<!--end::Layout Skins -->

    <link href="{{ url('assets/app/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ url('assets/media/logos/logo.png') }}"/>
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="k-header--fixed k-header-mobile--fixed k-aside--enabled k-aside--fixed">

<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="k_header_mobile" class="k-header-mobile  k-header-mobile--fixed">
    <div class="k-header-mobile__logo">
        <a>
            <img alt="Logo" src="{{ url('assets/media/logos/logo_white.png') }}"/>
        </a>
    </div>
    <div class="k-header-mobile__toolbar">
        <button class="k-header-mobile__toolbar-toggler k-header-mobile__toolbar-toggler--left" id="k_aside_mobile_toggler"><span></span></button>
        <button class="k-header-mobile__toolbar-topbar-toggler" id="k_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->

<div class="k-grid k-grid--hor k-grid--root">
    <div class="k-grid__item k-grid__item--fluid k-grid k-grid--ver k-page">
        <!-- begin:: Aside -->
        <div class="k-aside k-aside--fixed k-grid__item k-grid k-grid--desktop k-grid--hor-desktop" id="k_aside">
            <!-- begin:: Aside Brand -->
            <div class="k-aside__brand k-grid__item" id="k_aside_brand">
                <div class="k-aside__brand-logo">
                    <a><img alt="Logo" src="{{ url('assets/media/logos/logo_white.png') }}" width="120px"/></a>
                </div>
                <div class="k-aside__brand-tools">
                    <button class="k-aside__brand-aside-toggler k-aside__brand-aside-toggler--left" id="k_aside_toggler"><span></span></button>
                </div>
            </div>
            <!-- end:: Aside Brand -->

            <!-- begin:: Aside Menu -->
        @yield('drawer')
        <!-- end:: Aside Menu -->
            <!-- begin:: Aside Footer -->
            <div class="k-aside__footer k-grid__item" id="k_aside_footer">
                <div class="k-aside__footer-nav">
                    <div class="k-aside__footer-item">
                        <a href="{{ url('/') }}" class="btn btn-icon"><i class="flaticon2-graph-1"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="{{ route('admin.tasks.index') }}" class="btn btn-icon"><i class="flaticon2-calendar-3"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-icon"><i class="flaticon2-open-text-book"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="{{ url('/') }}" class="btn btn-icon"><i class="flaticon2-pie-chart-4"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="{{ url('/') }}" class="btn btn-icon"><i class="flaticon2-gear"></i></a>
                    </div>
                </div>
            </div>
            <!-- end:: Aside Footer -->
        </div>
        <!-- end:: Aside -->

        <div class="k-grid__item k-grid__item--fluid k-grid k-grid--hor k-wrapper" id="k_wrapper">
            <!-- begin:: Header -->
            <div id="k_header" class="k-header k-grid__item k-header--fixed">
                <!-- begin: Header Menu -->
                <button class="k-header-menu-wrapper-close" id="k_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                <div class="k-header-menu-wrapper" id="k_header_menu_wrapper">
                    @yield('topmenu')
                </div>
                <!-- end: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="k-header__topbar">
                    <!--begin: Search -->
                    <div class="k-header__topbar-item k-header__topbar-item--search dropdown">
                        <div class="k-header__topbar-wrapper" id="k_offcanvas_toolbar_search_toggler_btn">
                            <span class="k-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                    </div>
                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="k-header__topbar-item dropdown">
                        <div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px -2px">
                            <span class="k-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                            <span class="k-badge k-badge--dot k-badge--notify k-badge--sm k-badge--brand"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <div class="k-head" style="background-image: url(/assets/media/misc/head_bg_sm.jpg)">
                                <h3 class="k-head__title">User Notifications</h3>
                                <div class="k-head__sub"><span class="k-head__desc">
{{--                                        @php($notificationCount = \Auth::user()->internalNotifications()->where('read_at', null)->count())--}}
                                        {{--                                        @if($notificationCount > 0)--}}
                                        {{--                                            {{ $notificationCount. ' new notifications' }}--}}
                                        {{--                                            @else{{ 'No new notifications' }}--}}
                                        {{--                                        @endif--}}
                                    </span>
                                </div>
                            </div>
                            <div class="k-notification k-margin-t-30 k-margin-b-20 k-scroll" data-scroll="true"
                                 data-height="270" data-mobile-height="220">
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-line-chart k-font-success"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New order has been received
                                        </div>
                                        <div class="k-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-box-1 k-font-brand"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="k-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-chart2 k-font-danger"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            Application has been approved
                                        </div>
                                        <div class="k-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-image-file k-font-warning"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New file has been uploaded
                                        </div>
                                        <div class="k-notification__item-time">
                                            5 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-bar-chart k-font-info"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New user feedback received
                                        </div>
                                        <div class="k-notification__item-time">
                                            8 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-pie-chart-2 k-font-success"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            System reboot has been successfully completed
                                        </div>
                                        <div class="k-notification__item-time">
                                            12 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-favourite k-font-focus"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New order has been placed
                                        </div>
                                        <div class="k-notification__item-time">
                                            15 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item k-notification__item--read">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-safe k-font-primary"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            Company meeting canceled
                                        </div>
                                        <div class="k-notification__item-time">
                                            19 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-psd k-font-success"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New report has been received
                                        </div>
                                        <div class="k-notification__item-time">
                                            23 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon-download-1 k-font-danger"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            Finance report has been generated
                                        </div>
                                        <div class="k-notification__item-time">
                                            25 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon-security k-font-warning"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New customer comment recieved
                                        </div>
                                        <div class="k-notification__item-time">
                                            2 days ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-pie-chart k-font-focus"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="k-notification__item-time">
                                            3 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end: Notifications -->

                    <!--begin: Quick actions -->
                    <div class="k-header__topbar-item dropdown">
                        <div class="k-header__topbar-wrapper" id="k_offcanvas_toolbar_quick_actions_toggler_btn">
                            <span class="k-header__topbar-icon"><i class="flaticon2-gear"></i></span>
                        </div>
                    </div>
                    <!--end: Quick actions -->

                    <!--begin: User bar -->
                    <div class="k-header__topbar-item k-header__topbar-item--user">
                        <div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px -2px">
                            <div class="k-header__topbar-user">
                                <span class="k-header__topbar-welcome k-hidden-mobile">Hi,</span>
                                <span class="k-header__topbar-username k-hidden-mobile">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                <img alt="Pic" src="{{ url('assets/media/users/default.png') }}"/>
                                <!--use below badge element instead the user avatar to display username's first letter(remove k-hidden class to display it) -->
                                <span class="k-badge k-badge--username k-badge--lg k-badge--brand k-hidden">D</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-md">
                            <div class="k-user-card k-margin-b-50 k-margin-b-30-tablet-and-mobile"
                                 style="background-image: url(/assets/media/misc/head_bg_sm.jpg)">
                                <div class="k-user-card__wrapper">
                                    <div class="k-user-card__pic">
                                        <img alt="Pic" src="{{ url('assets/media/users/default.png') }}"/>
                                    </div>
                                    <div class="k-user-card__details">
                                        <div class="k-user-card__name">{{ Auth::user()->name }}</div>
                                        <div class="k-user-card__position">@if(isset(Auth::user()->email))
                                                {{ Auth::user()->email }}
                                            @else {{ Auth::user()->name }} @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="k-nav k-margin-b-10">
                                <li class="k-nav__item">
                                    <a href="{{ url('') }}" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                                        <span class="k-nav__link-text">My Profile</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="{{ url('/') }}" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                                        <span class="k-nav__link-text">My Tasks</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="{{ url('/') }}" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-mail"></i></span>
                                        <span class="k-nav__link-text">Messages</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="{{ url('/') }}" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-gear"></i></span>
                                        <span class="k-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                {{--                                <li class="k-nav__item k-nav__item--custom k-margin-t-15">--}}
                                {{--                                    <a href="#logout" onclick="$('#logout').submit();" class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">Sign Out</a>--}}
                                {{--                                </li>--}}
                                <li class="k-nav__item k-nav__item--custom k-margin-t-15">
                                    <a href="#logout" onclick="$('#logout').submit();"
                                       class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">
                                        <i class="fa fa-lock"></i>
                                        <span class="title">@lang('global.app_logout')</span>
                                    </a>
                                    {{--<a href="#" target="_blank" class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">Sign Out</a>--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end: User bar -->

                    <!--begin: Quick panel toggler -->
                    <div class="k-header__topbar-item k-header__topbar-item--quick-panel" data-toggle="k-tooltip"
                         title="Quick panel" data-placement="right">
                        <span class="k-header__topbar-icon" id="k_quick_panel_toggler_btn">
                            <i class="flaticon2-grids"></i>
                        </span>
                    </div>
                    <!--end: Quick panel toggler -->
                </div>
                <!-- end:: Header Topbar -->
            </div>
            <!-- end:: Header -->

            <!-- begin:: Content -->
            <div class="k-content	k-grid__item k-grid__item--fluid k-grid k-grid--hor" id="k_content">
                <div class="row">
                    <div class="col-md-12">
                        @if (Session::has('message'))
                            <?php \RealRashid\SweetAlert\Facades\Alert::info('Error!!!', Session::get('message'))
                                ->showCloseButton()
                                ->autoClose(5000) ?>
                        @endif

                        @if ($errors->count() > 0)
                            @foreach($errors->all() as $error)
                                <?php \RealRashid\SweetAlert\Facades\Alert::error('Error!!!', $error)
                                    ->showCloseButton()
                                    ->autoClose(5000) ?>
                            @endforeach
                        @endif
                    </div>
                </div>
                @yield('content')
            </div>
            <!-- end:: Content -->

            <!-- begin:: Footer -->
            <div class="k-footer k-grid__item k-grid k-grid--desktop k-grid--ver-desktop">
                <div class="k-footer__copyright">
                    <script>d = new Date();
                        document.write(d.getFullYear().toString());</script> &copy;&nbsp
                    <a href="" target="_blank" class="k-link">ipaySuite</a>
                </div>
                <div class="k-footer__menu">
                    <a href="" target="_blank" class="k-footer__menu-link k-link">About</a>
                    <a href="" target="_blank" class="k-footer__menu-link k-link">Team</a>
                    <a href="" target="_blank" class="k-footer__menu-link k-link">Contact</a>
                </div>
            </div>
            <!-- end:: Footer -->
        </div>
    </div>
</div>
<!-- end:: Page -->


<!-- begin:: Topbar Offcanvas Panels -->
<!-- begin::Offcanvas Toolbar Search -->
<div id="k_offcanvas_toolbar_search" class="k-offcanvas-panel">
    <div class="k-offcanvas-panel__head">
        <h3 class="k-offcanvas-panel__title">
            Search
        </h3>
        <a href="#" class="k-offcanvas-panel__close" id="k_offcanvas_toolbar_search_close"><i
                class="flaticon2-delete"></i></a>
    </div>
    <div class="k-offcanvas-panel__body">
        <div class="k-search">
            <div class="k-search__form">
                <form action="#" method="get">
                    <input type="text" name="query" class="form-control" placeholder="Type here...">
                </form>
            </div>

            <div class="k-search__result">
                <div class="k-search__section">
                    Documents
                </div>
                <div class="k-search__item">
                    <div class="k-search__item-img k-search__item-img--file">
                        <img src="{{ url('assets/media/files/doc.svg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            AirPlus Requirements
                        </a>
                        <div class="k-search__item-desc">
                            by Grog John
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img k-search__item-img--file">
                        <img src="{{ url('assets/media/files/pdf.svg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            TechNav Documentation
                        </a>
                        <div class="k-search__item-desc">
                            by Mary Broun
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img k-search__item-img--file">
                        <img src="{{ url('assets/media/files/zip.svg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            All Framework Docs
                        </a>
                        <div class="k-search__item-desc">
                            by Grog John
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img k-search__item-img--file">
                        <img src="{{ url('assets/media/files/xml.svg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            AirPlus Requirements
                        </a>
                        <div class="k-search__item-desc">
                            by Grog John
                        </div>
                    </div>
                </div>

                <div class="k-search__section">
                    Members
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img">
                        <img src="{{ url('assets/media/users/300_14.jpg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            Jimmy Curry
                        </a>
                        <div class="k-search__item-desc">
                            Software Developer
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img">
                        <img src="{{ url('assets/media/users/300_20.jpg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            Milena Gibson
                        </a>
                        <div class="k-search__item-desc">
                            UI Designer
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img">
                        <img src="{{ url('assets/media/users/300_21.jpg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            Stefan JohnStefan
                        </a>
                        <div class="k-search__item-desc">
                            Marketing Manager
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-img">
                        <img src="{{ url('assets/media/users/300_2.jpg') }}" alt=""/>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            Anna Strong
                        </a>
                        <div class="k-search__item-desc">
                            Software Developer
                        </div>
                    </div>
                </div>

                <div class="k-search__section">
                    Files
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-icon">
                        <i class="flaticon2-box k-font-danger"></i>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            2 New items submitted
                        </a>
                        <div class="k-search__item-desc">
                            Marketing Manager
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-icon">
                        <i class="flaticon-psd k-font-brand"></i>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            79 PSD files generated
                        </a>
                        <div class="k-search__item-desc">
                            by Grog John
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-icon">
                        <i class="flaticon2-supermarket k-font-warning"></i>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            $2900 worth products sold
                        </a>
                        <div class="k-search__item-desc">
                            Total 234 items
                        </div>
                    </div>
                </div>

                <div class="k-search__item">
                    <div class="k-search__item-icon">
                        <i class="flaticon-safe-shield-protection k-font-info"></i>
                    </div>
                    <div class="k-search__item-wrapper">
                        <a href="#" class="k-search__item-title">
                            4 New items submitted
                        </a>
                        <div class="k-search__item-desc">
                            Marketing Manager
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Offcanvas Toolbar Search -->

<!-- begin::Offcanvas Toolbar Quick Actions -->
<div id="k_offcanvas_toolbar_quick_actions" class="k-offcanvas-panel">
    <div class="k-offcanvas-panel__head">
        <h3 class="k-offcanvas-panel__title">
            Quick Actions
        </h3>
        <a href="#" class="k-offcanvas-panel__close" id="k_offcanvas_toolbar_quick_actions_close"><i
                class="flaticon2-delete"></i></a>
    </div>
    <div class="k-offcanvas-panel__body">
        <div class="k-grid-nav-v2">
            <a href="#" class="k-grid-nav-v2__item">
                <div class="k-grid-nav-v2__item-icon"><i class="flaticon2-box"></i></div>
                <div class="k-grid-nav-v2__item-title">Payrolls</div>
            </a>
            <a href="#" class="k-grid-nav-v2__item">
                <div class="k-grid-nav-v2__item-icon"><i class="flaticon-download-1"></i></div>
                <div class="k-grid-nav-v2__item-title">Uploades</div>
            </a>
            <a href="#" class="k-grid-nav-v2__item">
                <div class="k-grid-nav-v2__item-icon"><i class="flaticon2-supermarket"></i></div>
                <div class="k-grid-nav-v2__item-title">Products</div>
            </a>
            <a href="#" class="k-grid-nav-v2__item">
                <div class="k-grid-nav-v2__item-icon"><i class="flaticon2-avatar"></i></div>
                <div class="k-grid-nav-v2__item-title">Employees</div>
            </a>
            <a href="#" class="k-grid-nav-v2__item">
                <div class="k-grid-nav-v2__item-icon"><i class="flaticon2-list"></i></div>
                <div class="k-grid-nav-v2__item-title">Blog Posts</div>
            </a>
            <a href="#" class="k-grid-nav-v2__item">
                <div class="k-grid-nav-v2__item-icon"><i class="flaticon2-settings"></i></div>
                <div class="k-grid-nav-v2__item-title">Settings</div>
            </a>
        </div>
    </div>
</div>
<!-- end::Offcanvas Toolbar Quick Actions -->
<!-- end:: Topbar Offcanvas Panels -->

<!-- begin::Quick Panel -->
<div id="k_quick_panel" class="k-quick-panel">
    <div class="k-quick-panel__nav">
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#k_quick_panel_tab_notifications" role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#k_quick_panel_tab_actions" role="tab">Actions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#k_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>

        <button class="k-quick-panel__close" id="k_quick_panel_close_btn"><i class="la la-close"></i></button>
    </div>

    <div class="k-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show k-scroll active" id="k_quick_panel_tab_notifications" role="tabpanel">
                <!--Begin::Timeline -->
                <div class="k-timeline">
                    <!--Begin::Item -->
                    <div class="k-timeline__item k-timeline__item--success">
                        <div class="k-timeline__item-section">
                            <div class="k-timeline__item-section-border">
                                <div class="k-timeline__item-section-icon">
                                    <i class="flaticon-feed k-font-success"></i>
                                </div>
                            </div>
                            <span class="k-timeline__item-datetime">02:30 PM</span>
                        </div>

                        <a href="#" class="k-timeline__item-text">
                            ipaySuite created new layout whith tens of new options for Admin panel
                        </a>
                        <div class="k-timeline__item-info">
                            HTML,CSS,VueJS
                        </div>
                    </div>
                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="k-timeline__item k-timeline__item--danger">
                        <div class="k-timeline__item-section">
                            <div class="k-timeline__item-section-border">
                                <div class="k-timeline__item-section-icon">
                                    <i class="flaticon-safe-shield-protection k-font-danger"></i>
                                </div>
                            </div>
                            <span class="k-timeline__item-datetime">01:20 AM</span>
                        </div>

                        <a href="#" class="k-timeline__item-text">
                            New secyrity alert by Firewall & order to take aktion on User Preferences
                        </a>
                        <div class="k-timeline__item-info">
                            Security, Fieewall
                        </div>
                    </div>
                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="k-timeline__item k-timeline__item--brand">
                        <div class="k-timeline__item-section">
                            <div class="k-timeline__item-section-border">
                                <div class="k-timeline__item-section-icon">
                                    <i class="flaticon2-box k-font-brand"></i>
                                </div>
                            </div>
                            <span class="k-timeline__item-datetime">Yestardey</span>
                        </div>

                        <a href="#" class="k-timeline__item-text">
                            FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
                        </a>
                        <div class="k-timeline__item-info">
                            PSD, Sketch, AJ
                        </div>
                    </div>
                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="k-timeline__item k-timeline__item--warning">
                        <div class="k-timeline__item-section">
                            <div class="k-timeline__item-section-border">
                                <div class="k-timeline__item-section-icon">
                                    <i class="flaticon-pie-chart-1 k-font-warning"></i>
                                </div>
                            </div>
                            <span class="k-timeline__item-datetime">Aug 13,2018</span>
                        </div>

                        <a href="#" class="k-timeline__item-text">
                            Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br>
                            England, BA12FJ
                        </a>
                        <div class="k-timeline__item-info">
                            Meeting, Customer
                        </div>
                    </div>
                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="k-timeline__item k-timeline__item--info">
                        <div class="k-timeline__item-section">
                            <div class="k-timeline__item-section-border">
                                <div class="k-timeline__item-section-icon">
                                    <i class="flaticon-notepad k-font-info"></i>
                                </div>
                            </div>
                            <span class="k-timeline__item-datetime">May 09, 2018</span>
                        </div>

                        <a href="#" class="k-timeline__item-text">
                            ipaySuite created new layout with tens of new options for Admin panel
                        </a>
                        <div class="k-timeline__item-info">
                            HTML,CSS,VueJS
                        </div>
                    </div>
                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="k-timeline__item k-timeline__item--accent">
                        <div class="k-timeline__item-section">
                            <div class="k-timeline__item-section-border">
                                <div class="k-timeline__item-section-icon">
                                    <i class="flaticon-bell k-font-accent"></i>
                                </div>
                            </div>
                            <span class="k-timeline__item-datetime">01:20 AM</span>
                        </div>

                        <a href="#" class="k-timeline__item-text">
                            New secyrity alert by Firewall & order to take action on User Preferences
                        </a>
                        <div class="k-timeline__item-info">
                            Security, Fieewall
                        </div>
                    </div>
                    <!--End::Item -->
                </div>
                <!--End::Timeline -->
            </div>
            <div class="tab-pane fade k-scroll" id="k_quick_panel_tab_actions" role="tabpanel">
                <!--begin::Portlet-->
                <div class="k-portlet k-portlet--solid-success">
                    <div class="k-portlet__head">
                        <div class="k-portlet__head-label">
                            <span class="k-portlet__head-icon k-hide"><i class="flaticon-stopwatch"></i></span>
                            <h3 class="k-portlet__head-title">Recent Bills</h3>
                        </div>
                        <div class="k-portlet__head-toolbar">
                            <div class="k-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="k-portlet__body">
                        <div class="k-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="k-portlet__foot k-portlet__foot--sm k-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>
                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="k-portlet k-portlet--solid-focus">
                    <div class="k-portlet__head">
                        <div class="k-portlet__head-label">
                            <span class="k-portlet__head-icon k-hide"><i class="flaticon-stopwatch"></i></span>
                            <h3 class="k-portlet__head-title">Latest Payrolls</h3>
                        </div>
                        <div class="k-portlet__head-toolbar">
                            <div class="k-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="k-portlet__body">
                        <div class="k-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="k-portlet__foot k-portlet__foot--sm k-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>
                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="k-portlet k-portlet--solid-info">
                    <div class="k-portlet__head">
                        <div class="k-portlet__head-label">
                            <h3 class="k-portlet__head-title">Latest Invoices</h3>
                        </div>
                        <div class="k-portlet__head-toolbar">
                            <div class="k-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="k-portlet__body">
                        <div class="k-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="k-portlet__foot k-portlet__foot--sm k-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>
                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="k-portlet k-portlet--solid-warning">
                    <div class="k-portlet__head">
                        <div class="k-portlet__head-label">
                            <h3 class="k-portlet__head-title">New Comments</h3>
                        </div>
                        <div class="k-portlet__head-toolbar">
                            <div class="k-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="k-portlet__body">
                        <div class="k-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="k-portlet__foot k-portlet__foot--sm k-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>
                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="k-portlet k-portlet--solid-brand">
                    <div class="k-portlet__head">
                        <div class="k-portlet__head-label">
                            <h3 class="k-portlet__head-title">Recent Posts</h3>
                        </div>
                        <div class="k-portlet__head-toolbar">
                            <div class="k-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="k-portlet__body">
                        <div class="k-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="k-portlet__foot k-portlet__foot--sm k-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>
                <!--end::Portlet-->
            </div>
            <div class="tab-pane fade k-scroll" id="k_quick_panel_tab_settings" role="tabpanel">
                <form class="k-form">
                    <div class="k-heading k-heading--space-sm">Notifications</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable notifications:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_1">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable audit log:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm">
                                <label>
                                    <input type="checkbox" name="quick_panel_notifications_2">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Notify on new Payrolls:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_2">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>

                    <div class="k-separator k-separator--space-md k-separator--border-dashed"></div>

                    <div class="k-heading k-heading--space-sm">Payrolls</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Payrolls tracking:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm k-switch--danger">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_3">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Payrolls reports:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm k-switch--danger">
                                <label>
                                    <input type="checkbox" name="quick_panel_notifications_3">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Allow order status auto update:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm k-switch--danger">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_4">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>

                    <div class="k-separator k-separator--space-md k-separator--border-dashed"></div>

                    <div class="k-heading k-heading--space-sm">Employees</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable customer singup:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm k-switch--success">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_5">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Employees reporting:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm k-switch--success">
                                <label>
                                    <input type="checkbox" name="quick_panel_notifications_5">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Notifiy on new customer registration:</label>
                        <div class="col-4 k-align-right">
                            <span class="k-switch k-switch--sm k-switch--success">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_6">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Panel -->
<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<!-- begin::Scrolltop -->
<div id="k_scrolltop" class="k-scrolltop">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<!-- begin::Global Config -->
<script>
    var KAppOptions = {
        "colors": {
            "state": {
                "brand": "#478a66",
                "metal": "#c4c5d6",
                "light": "#ffffff",
                "accent": "#00c5dc",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995",
                "focus": "#9816f4"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle -->
<script src="{{ url('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/app/scripts/bundle/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="{{ url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
{{--<script src="{{ url('assets/vendors/custom/datatables/dataTables.buttons.min.js') }}" type="text/javascript"></script>--}}
<script src="{{ url('assets/vendors/custom/datatables/buttons.colVis.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/vendors/custom/mustache/mustache.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/vendors/custom/moment/moment.min.js') }}" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts -->
@yield('script')

<!--end::Page Scripts -->

<!--begin::Global App Bundle -->
<script src="{{ url('assets/app/scripts/bundle/app.bundle.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/dataTables.hideEmptyColumns.min.js') }}"></script>
<!--end::Global App Bundle -->
<script>
    window._token = '{{ csrf_token() }}';
</script>
</body>
<!-- end::Body -->

</html>
