<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        @yield('title')
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->

    <link href="{{ url('metro/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('metro/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!--end::Page Vendors -->
    <link href="{{ url('metro/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    {{-- <link href="{{ url('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ url('metro/assets/demo/demo2/base/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('metro/assets/vendors/custom/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('metro/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles metro/assets/vendors/custom/datetimepicker/bootstrap-datetimepicker.min.css-->
    <link rel="shortcut icon" href="{{ url('metro/assets/demo/demo2/media/img/logo/logo.ico') }}"/>
    <!--end::Base Styles -->

    @yield('css')
    <style>
        .dataTables_filter{
            float: right !important;
            width: 40% !important;
        }
        .error {
    color: red;
    font-size: 90%;
}

    </style>
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- begin::Header -->
        <header class="m-grid__item		m-header " data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200">
            <div class="m-header__top">
                <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- begin::Brand -->
                        <!-- begin::Brand -->
                    <div class="m-stack__item m-brand">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="{{ url('/admin') }}" class="m-brand__logo-wrapper">
                                    <img alt="" src="{{ url('metro/assets/demo/demo2/media/img/logo/logo_white.png') }}"
                                         height="80"/>
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- begin::Responsive Header Menu Toggler-->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                                   class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- end::Responsive Header Menu Toggler-->
                                <!-- begin::Topbar Toggler-->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                                   class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!--end::Topbar Toggler-->
                            </div>
                        </div>
                    </div>
                        <!-- end::Brand -->
                        <!-- begin::Topbar -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                        data-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic m--hide">
                                                <img src="{{ url('metro/assets/app/media/img/users/user4.jpg') }}"
                                                     class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                            </span>
                                            <span class="m-topbar__welcome">
                                                Hello,&nbsp;
                                            </span>
                                            <span class="m-topbar__username">
                                               @if(Auth::check())  {{ Auth::user()->name }} @else Annonymous @endif
                                            </span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center"
                                                     style="background: {{ url('assets/app/media/img/misc/user_profile_bg.jpg') }}; background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img
                                                                @if(! Auth::user()->picture == null)
                                                                src="{{ url(Auth::user()->picture->url) }}"
                                                                @else
                                                                    src="metro/assets/app/media/img/users/user4.jpg"
                                                                @endif
                                                                class="m--img-rounded m--marginless" alt="Picture"/>
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">
                                                                @if(Auth::check())  {{ Auth::user()->name }} @else
                                                                    Annonymous @endif
                                                            </span>
                                                            <a href=""
                                                               class="m-card-user__email m--font-weight-300 m-link">
                                                                @if(Auth::check())  {{ Auth::user()->email }} @else
                                                                    Annonymous@email.com @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
                                                                <span class="m-nav__section-text">
                                                                    Section
                                                                </span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ url('/admin/users/'. Auth::id()) }}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                My Profile
                                                                            </span>
                                                                            <span class="m-nav__link-badge">
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ url('/admin/my-tasks') }}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                Tasks
                                                                            </span>
                                                                            <span class="m-nav__link-badge">
                                                                                <span
                                                                                    class="m-badge m-badge--success">
                                                                                    {{ \App\Task::whereHas('assinged_tos',
                                                                                        function ($query)  {
                                                                                            $query->where('id', Auth::id());
                                                                                        })->count() }}
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ url('/admin/my-tasks') }}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                Projects
                                                                            </span>
                                                                            <span class="m-nav__link-badge">
                                                                                <span class="m-badge m-badge--success">
                                                                                    {{ \App\Project::whereHas('team_members',
                                                                                        function ($query)  {
                                                                                            $query->where('id', Auth::id());
                                                                                        })->count() }}
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ url('/admin/project-reports') }}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                       Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <a href="#"
                                                                   onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                                                                   class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                    Logout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                        <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
                                            <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                                <span class="m-nav__link-icon">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-music-2"></i>
														</span>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: {{ url('assets/app/media/img/misc/notification_bg.jpg') }}; background-size: cover;">
                                                        <span class="m-dropdown__header-title">
																9 New
															</span>
                                                        <span class="m-dropdown__header-subtitle">
																User Notifications
															</span>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																			Alerts
																		</a>
                                                                </li>
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
																			Events
																		</a>
                                                                </li>
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
																			Logs
																		</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                    <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                                                            <div class="m-list-timeline__items">
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                    <span class="m-list-timeline__text">
																							12 new users registered
																						</span>
                                                                                    <span class="m-list-timeline__time">
																							Just now
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
																							System shutdown
																							<span class="m-badge m-badge--success m-badge--wide">
																								pending
																							</span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
																							14 mins
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
																							New invoice received
																						</span>
                                                                                    <span class="m-list-timeline__time">
																							20 mins
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
																							DB overloaded 80%
																							<span class="m-badge m-badge--info m-badge--wide">
																								settled
																							</span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
																							1 hr
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
																							System error -
																							<a href="#" class="m-link">
																								Check
																							</a>
																						</span>
                                                                                    <span class="m-list-timeline__time">
																							2 hrs
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span href="" class="m-list-timeline__text">
																							New order received
																							<span class="m-badge m-badge--danger m-badge--wide">
																								urgent
																							</span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
																							7 hrs
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
																							Production server down
																						</span>
                                                                                    <span class="m-list-timeline__time">
																							3 hrs
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
																							Production server up
																						</span>
                                                                                    <span class="m-list-timeline__time">
																							5 hrs
																						</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                    <div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                                                            <div class="m-list-timeline__items">
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                    <a href="" class="m-list-timeline__text">
																							New order received
																						</a>
                                                                                    <span class="m-list-timeline__time">
																							Just now
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                    <a href="" class="m-list-timeline__text">
																							New invoice received
																						</a>
                                                                                    <span class="m-list-timeline__time">
																							20 mins
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                    <a href="" class="m-list-timeline__text">
																							Production server up
																						</a>
                                                                                    <span class="m-list-timeline__time">
																							5 hrs
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
																							New order received
																						</a>
                                                                                    <span class="m-list-timeline__time">
																							7 hrs
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
																							System shutdown
																						</a>
                                                                                    <span class="m-list-timeline__time">
																							11 mins
																						</span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
																							Production server down
																						</a>
                                                                                    <span class="m-list-timeline__time">
																							3 hrs
																						</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                    <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                        <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                            <span class="">
																					All caught up!
																					<br>
																					No new logs.
																				</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
                                            data-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                                <span class="m-nav__link-icon">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-share"></i>
														</span>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: {{ url('assets/app/media/img/misc/quick_actions_bg.jpg') }}; background-size: cover;">
                                                        <span class="m-dropdown__header-title">
																Quick Actions
															</span>
                                                        <span class="m-dropdown__header-subtitle">
																Shortcuts
															</span>
                                                    </div>
                                                    <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                        <div class="m-dropdown__content">
                                                            <div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
                                                                <div class="m-nav-grid m-nav-grid--skin-light">
                                                                    <div class="m-nav-grid__row">
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-file"></i>
                                                                            <span class="m-nav-grid__text">
																					Generate Report
																				</span>
                                                                        </a>
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-time"></i>
                                                                            <span class="m-nav-grid__text">
																					Add New Event
																				</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="m-nav-grid__row">
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                            <span class="m-nav-grid__text">
																					Create New Task
																				</span>
                                                                        </a>
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                            <span class="m-nav-grid__text">
																					Completed Tasks
																				</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-icon m-nav__link-icon--aside-toggle">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-grid-menu"></i>
														</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end::Topbar -->
                    </div>
                </div>
            </div>
            <div class="m-header__bottom">
                <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- begin::Horizontal Menu -->
                        <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item"  aria-haspopup="true">
                                        <a href="{{ url('/') }}" class="m-menu__link ">
                                            @yield('active_arrow_one')
                                            <span class="m-menu__link-text">
													Dashboard
												</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item m-menu__item--submenu m-menu__item--rel" aria-haspopup="true">
                                        <a href="{{ url('admin/view_project') }}" class="m-menu__link">
                                            @yield('active_arrow_two')
                                            <span class="m-menu__link-text">
													Project Management
												</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item m-menu__item--submenu m-menu__item--rel" aria-haspopup="true" style="onhover:">
                                        <a href="{{ url('admin/view_task') }}" class="m-menu__link">
                                            @yield('active_arrow_three')
                                            <span class="m-menu__link-text">
													Task Management
											</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <i class="m-menu__link-icon flaticon-more-v3"></i>
                                            <span class="m-menu__link-text"></span>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                    <a href="{{ route('admin.payroll-letters.create') }}" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-business"></i>
                                                        <span class="m-menu__link-text">
                                                            Create Letter
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                    <a href="{{ route('admin.payroll-letters.index') }}" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">
                                                                    List Letters
                                                                </span>
                                                                <span class="m-menu__link-badge">
                                                                    <span class="m-badge m-badge--success">3</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end::Horizontal Menu -->
                        <!--begin::Search-->
                        <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch"
                            data-search-type="default">
                            <!--begin::Search Form -->
                            <form class="m-header-search__form">
                                <div class="m-header-search__wrapper">
                                    <span class="m-header-search__icon-search" id="m_quicksearch_search">
											<i class="la la-search"></i>
										</span>
                                    <span class="m-header-search__input-wrapper">
											<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
										</span>
                                    <span class="m-header-search__icon-close" id="m_quicksearch_close">
											<i class="la la-remove"></i>
										</span>
                                    <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
											<i class="la la-remove"></i>
										</span>
                                </div>
                            </form>
                            <!--end::Search Form -->
                            <!--begin::Search Results -->
                            <div class="m-dropdown__wrapper">
                                <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__scrollable m-scrollable" data-max-height="300" data-mobile-max-height="200">
                                            <div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search Results -->
                        </div>
                        <!--end::Search-->
                    </div>
                </div>
            </div>
        </header>
        <!-- end::Header -->
                <!-- begin::Body -->
                <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop
                m-container m-container--responsive m-container--xxl m-page__container m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close m-aside-left-close--skin-light" id="m_aside_left_close_btn">
                        <i class="la la-close"></i>
                    </button>
                <div  id="m_aside_left" class="m-grid__item m-aside-left" style="width: 15%; margin-left: -4%;">
                    <!-- BEGIN: Aside Menu -->
                    <div id="m_ver_menu"   class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                        <ul  class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    SECTION
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            @can('user_management_access')
                                <li class="m-menu__item  m-menu__item--submenu {{ request()->is('admin/clients*') ? 'menu-open' : '' }} {{ request()->is('admin/client-portals*') ? 'menu-open' : '' }}"" aria-haspopup="true" data-menu-submenu-toggle="hover">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-user"></i>
                                        <span class="m-menu__link-text">
                                                User Mgt
                                            </span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            @can('permission_access')
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">

                                                    <a href="{{ route('admin.permissions.index') }}" class="m-menu__link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
                                                            Permissions
                                                        </span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('role_access')
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="{{ route('admin.roles.index') }}" class="m-menu__link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                        <span class="m-menu__link-text">
                                                                Roles
                                                            </span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('user_access')
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="{{ route('admin.users.index') }}" class="m-menu__link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}"">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                        <span class="m-menu__link-text">
                                                                Users
                                                            </span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('audit_log_access')
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="{{ route('admin.audit-logs.index') }}" class="m-menu__link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                        <span class="m-menu__link-text">
                                                                Audit Logs
                                                            </span>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </div>
                                </li>
                            @endcan

                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                                <a href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-book"></i>
                                    <span class="m-menu__link-text">
                                            Letter Mgt
                                        </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">

                                                <a href="{{ route('admin.letter-types.index') }}" class="m-menu__link">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-text">
                                                        Letter Type
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="{{ route('admin.payroll-letters.index') }}" class="m-menu__link">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                    <span class="m-menu__link-text">
                                                            Payroll Letter
                                                        </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="{{ route('admin.services-fees.index') }}" class="m-menu__link">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                    <span class="m-menu__link-text">
                                                            Services Fees
                                                        </span>
                                                </a>
                                            </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover" data-redirect="true">
                                <a href="{{ url('/admin/client_dashboard') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-users"></i>
                                    <span class="m-menu__link-text">
                                            Client Mgt
                                        </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                <a href="{{ url('admin/view-calendar') }}" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-calendar"></i>
                                    <span class="m-menu__link-text">
                                        Calendar
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                <a href="#" class="m-menu__link " onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                    <i class="m-menu__link-icon flaticon-logout"></i>
                                    <span class="m-menu__link-text">
                                        Logout
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END: Aside Menu -->
                </div>
                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper" style="width: 100%">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                    @yield('header')
                                </h3>
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                <strong>@yield('sub_header')</strong>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->

                        <div class="m-content container" style="width: 100%; box-sizing: border-box" data-select2-id="6">
                            <!-- Inner page content goes here -->
                            @yield('content')
                        </div>
                    </div>
            </div>
        <!-- end::Body -->
      <!-- begin::Footer -->
    <footer class="m-grid__item m-footer ">
        <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
            <div class="m-footer__wrapper">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								{{ date('Y') }} &copy; Stransact Services
								{{-- <a href="https://keenthemes.com" class="m-link">
									Keen themes
								</a> --}}
							</span>
                    </div>
                    <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                        <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">About</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="https://stransact.us" class="m-nav__link">
                                    <span class="m-nav__link-text">Stransact LLP</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="https://stransact.com/ng" class="m-nav__link">
                                    <span class="m-nav__link-text">Stransact Partners</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="https://ipaysuite.com" class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        iPaySuite
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__item m-nav__item--last">
                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center"
                                   data-placement="left">
                                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->
    </div>
    <!-- end:: Page -->

    <!--begin create project modal -->
    <div class="modal fade bd-example-modal-lg" style="margin-top:80px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="postData">

                  <div class="form-group">
                      <label>Select Project</label>
                      <select id="project-list" class="form-control"></select>
                  </div>

                  <div class="form-group">
                      <label for="create-project-subtype">Create Project Subtype</label>
                      <input type="text" class="form-control" id="create-project-subtype" placeholder="Enter Project Subtype">
                  </div>


                  <input type="submit" class="btn btn-primary  float-right" value="Submit">

              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
      </div>
    <!--end create project modal -->
    <!-- begin::Quick Sidebar -->
    <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
        <div class="m-quick-sidebar__content m--hide">
            <span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
				<i class="la la-close"></i>
			</span>
            <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
						Settings
					</a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
						Logs
					</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                    <div class="m-list-settings">
                        <div class="m-list-settings__group">
                            <div class="m-list-settings__heading">
                                General Settings
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Email Notifications
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Site Tracking
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									SMS Alerts
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Backup Storage
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Audit Logs
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                        </div>
                        <div class="m-list-settings__group">
                            <div class="m-list-settings__heading">
                                System Settings
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									System Logs
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Error Reporting
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Applications Logs
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Backup Servers
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                            <div class="m-list-settings__item">
                                <span class="m-list-settings__item-label">
									Audit Logs
								</span>
                                <span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
                                </label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                    <div class="m-list-timeline">
                        <div class="m-list-timeline__group">
                            <div class="m-list-timeline__heading">
                                System Logs
                            </div>
                            <div class="m-list-timeline__items">
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										12 new users registered
										<span class="m-badge m-badge--warning m-badge--wide">
											important
										</span>
									</a>
                                    <span class="m-list-timeline__time">
										Just now
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										System shutdown
									</a>
                                    <span class="m-list-timeline__time">
										11 mins
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                    <a href="" class="m-list-timeline__text">
										New invoice received
									</a>
                                    <span class="m-list-timeline__time">
										20 mins
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                    <a href="" class="m-list-timeline__text">
										Database overloaded 89%
										<span class="m-badge m-badge--success m-badge--wide">
											resolved
										</span>
									</a>
                                    <span class="m-list-timeline__time">
										1 hr
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										System error
									</a>
                                    <span class="m-list-timeline__time">
										2 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										Production server down
										<span class="m-badge m-badge--danger m-badge--wide">
											pending
										</span>
									</a>
                                    <span class="m-list-timeline__time">
										3 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										Production server up
									</a>
                                    <span class="m-list-timeline__time">
										5 hrs
									</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-list-timeline__group">
                            <div class="m-list-timeline__heading">
                                Applications Logs
                            </div>
                            <div class="m-list-timeline__items">
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										New order received
										<span class="m-badge m-badge--info m-badge--wide">
											urgent
										</span>
									</a>
                                    <span class="m-list-timeline__time">
										7 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										12 new users registered
									</a>
                                    <span class="m-list-timeline__time">
										Just now
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										System shutdown
									</a>
                                    <span class="m-list-timeline__time">
										11 mins
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                    <a href="" class="m-list-timeline__text">
										New invoices received
									</a>
                                    <span class="m-list-timeline__time">
										20 mins
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                    <a href="" class="m-list-timeline__text">
										Database overloaded 89%
									</a>
                                    <span class="m-list-timeline__time">
										1 hr
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										System error
										<span class="m-badge m-badge--info m-badge--wide">
											pending
										</span>
									</a>
                                    <span class="m-list-timeline__time">
										2 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										Production server down
									</a>
                                    <span class="m-list-timeline__time">
										3 hrs
									</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-list-timeline__group">
                            <div class="m-list-timeline__heading">
                                Server Logs
                            </div>
                            <div class="m-list-timeline__items">
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										Production server up
									</a>
                                    <span class="m-list-timeline__time">
										5 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										New order received
									</a>
                                    <span class="m-list-timeline__time">
										7 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										12 new users registered
									</a>
                                    <span class="m-list-timeline__time">
										Just now
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										System shutdown
									</a>
                                    <span class="m-list-timeline__time">
										11 mins
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                    <a href="" class="m-list-timeline__text">
										New invoice received
									</a>
                                    <span class="m-list-timeline__time">
										20 mins
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                    <a href="" class="m-list-timeline__text">
										Database overloaded 89%
									</a>
                                    <span class="m-list-timeline__time">
										1 hr
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										System error
									</a>
                                    <span class="m-list-timeline__time">
										2 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										Production server down
									</a>
                                    <span class="m-list-timeline__time">
										3 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                    <a href="" class="m-list-timeline__text">
										Production server up
									</a>
                                    <span class="m-list-timeline__time">
										5 hrs
									</span>
                                </div>
                                <div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                    <a href="" class="m-list-timeline__text">
										New order received
									</a>
                                    <span class="m-list-timeline__time">
										1117 hrs
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500"
data-scroll-speed="300">
<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!-- begin::Quick Nav -->

<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{ asset('metro/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('metro/assets/demo/demo2/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="{{ asset('metro/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('metro/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('metro/assets/vendors/custom/datatables/buttons.colVis.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('metro/assets/vendors/custom/datetimepicker/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('metro/assets/vendors/custom/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/decoupled-document/ckeditor.js"></script> --}}
<!--begin::Page Snippets -->
@yield('javascript')
<script>
        $(document).ready(function () {
            window._token = $('meta[name="csrf-token"]').attr('content');

            moment.updateLocale('en', {
                week: {dow: 1} // Monday is the first day of the week
            });

            $('.date').datetimepicker({
                format: 'DD-MM-YYYY',
                locale: 'en'
            });

            $('.datetime').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss',
                locale: 'en',
                sideBySide: true
            });

            $('.timepicker').datetimepicker({
                format: 'HH:mm:ss'
            });

            $('.select-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            });
            $('.deselect-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2');
                $select2.find('option').prop('selected', '');
                $select2.trigger('change')
            });

            $('.select2').select2();
        });
    </script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>
