
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
    	<title>{{ config('app.name', 'Unicorn Solutions') }}</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="{{ asset('js/webfont.js') }}"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		<link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/demo/demo2/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{ asset('assets/demo/demo2/media/img/logo/favicon.ico') }}" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header class="m-grid__item		m-header "  data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200" >
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="{{url('/home')}}" class="m-brand__logo-wrapper">
											<img alt="" src="assets/demo/demo2/media/img/logo/logo.png"/>
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">
										<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click" aria-expanded="true">
											<a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
												<span>
													Dashboard
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav">
																<li class="m-nav__section m-nav__section--first m--hide">
																	<span class="m-nav__section-text">
																		Quick Menu
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Human Resources
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Customer Relationship
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			Order Processing
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">
																			Accounting
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Customer Relationship
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			Order Processing
																		</span>
																	</a>
																</li>
	 							
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- end::Responsive Header Menu Toggler-->
			<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
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
											<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic m--hide">
														<img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
													</span>
													<span class="m-topbar__welcome">
														Hello,&nbsp;
													</span>
													<span class="m-topbar__username">
														@if(Auth::check())
														{{Auth::user()->name}}
														@endif
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
															<div class="m-card-user m-card-user--skin-dark">
																<div class="m-card-user__pic">
																	<img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless" alt=""/>
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		@if(Auth::check())
														{{Auth::user()->name}}
														@endif
																	</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">
																		@if(Auth::check())
														{{Auth::user()->email}}
														@endif
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
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-profile-1"></i>
																			<span class="m-nav__link-title">
																				<span class="m-nav__link-wrap">
																					<span class="m-nav__link-text">
																						My Profile
																					</span>
																					<span class="m-nav__link-badge">
																						<span class="m-badge m-badge--success">
																							2
																						</span>
																					</span>
																				</span>
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="#" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-share"></i>
																			<span class="m-nav__link-text">
																				Activity
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-chat-1"></i>
																			<span class="m-nav__link-text">
																				Messages
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-info"></i>
																			<span class="m-nav__link-text">
																				FAQ
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																			<span class="m-nav__link-text">
																				Support
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		@if(!Auth::guest())
							      <a href="<?php echo  route('logout'); ?>" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                       					Logout
              					  </a>
								  <form id="logout-form" action="<?php echo  route('logout'); ?>" method="POST" style="display: none;">
									<?php echo  csrf_field(); ?>
								  </form>
								@endif
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
														<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
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
											<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
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
														<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
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
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  m-menu__item--active "  aria-haspopup="true">
											<a  href="{{url('/home')}}" class="m-menu__link ">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Dashboard
												</span>
											</a>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Users
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  aria-haspopup="true">
														<a  href="{{route('user.list')}}" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-list"></i>
															<span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		List Users
																	</span>
																</span>
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
														<a  href="{{route('user.new')}}" class="m-menu__link">
															<i class="m-menu__link-icon flaticon-users"></i>
															<span class="m-menu__link-text">
																Create New
															</span>
														</a>
													</li>
													<!-- <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
														<a  href="{{route('user.edit')}}" class="m-menu__link">
															<i class="m-menu__link-icon flaticon-users"></i>
															<span class="m-menu__link-text">
																Edit User
															</span>
														</a>
													</li> -->
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Clients
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  aria-haspopup="true">
														<a href="{{route('client.list')}}" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-list"></i>
															<span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		List Cients
																	</span>
																</span>
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
														<a  href="{{route('client.new')}}" class="m-menu__link">
															<i class="m-menu__link-icon flaticon-users"></i>
															<span class="m-menu__link-text">
																Create New
															</span>
														</a>
													</li>
													
												</ul>
											</div>
										</li>

										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Company
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  aria-haspopup="true">
														<a  href="{{route('company.list')}}" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-list"></i>
															<span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		List Company
																	</span>
																</span>
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
														<a  href="{{route('company.new')}}" class="m-menu__link">
															<i class="m-menu__link-icon flaticon-users"></i>
															<span class="m-menu__link-text">
																Create New
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>

										<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Leads
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center" >
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<div class="m-menu__subnav">
													<ul class="m-menu__content">
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Finance Reports
																</span>
																<i class="m-menu__ver-arrow la la-angle-right"></i>
															</h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="{{url('/home')}}" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-map"></i>
																		<span class="m-menu__link-text">
																			Annual Reports
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="{{url('/home')}}" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-graphic-1"></i>
																		<span class="m-menu__link-text">
																			Finance Margins
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="{{url('/home')}}" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-graphic-2"></i>
																		<span class="m-menu__link-text">
																			Revenue Reports
																		</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Leads
																</span>
																<i class="m-menu__ver-arrow la la-angle-right"></i>
															</h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="{{route('lead.new')}}" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Create New
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="{{route('lead.list')}}" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			List Leads
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="{{route('lead.edit')}}" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Edit (Dummy)
																		</span>
																	</a>
																</li>
															</ul>
														</li>
														
													</ul>
												</div>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
											<a  href="{{route('schedule.backup')}}" class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">Scheduled backup</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->	
				<!--begin::Search-->
							<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch" data-search-type="default">
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
		<!-- begin::Body Content Starts-->
			 @yield('content')
		<!-- begin::Footer Content Starts -->
		<footer class="m-grid__item m-footer ">
			<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
				<div class="m-footer__wrapper">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 &copy; Poweredby
								<a href="http://whizadvert.com" class="m-link">
									WhizAdvert
								</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Purchase
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item--last">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
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
    	            <!-- begin::Quick Sidebar -->
	<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
		<div class="m-quick-sidebar__content m--hide">
			<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
				<i class="la la-close"></i>
			</span>
			<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
				
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
						Leads
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
						Logs
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
					<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
						<div class="m-messenger__messages">
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--in">
									<div class="m-messenger__message-pic">
										<img src="assets/app/media/img//users/user3.jpg" alt=""/>
									</div>
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-username">
												Megan wrote
											</div>
											<div class="m-messenger__message-text">
												Hi Bob. What time will be the meeting ?
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--out">
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-text">
												Hi Megan. It's at 2.30PM
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--in">
									<div class="m-messenger__message-pic">
										<img src="assets/app/media/img//users/user3.jpg" alt=""/>
									</div>
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-username">
												Megan wrote
											</div>
											<div class="m-messenger__message-text">
												Will the development team be joining ?
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--out">
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-text">
												Yes sure. I invited them as well
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__datetime">
								2:30PM
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--in">
									<div class="m-messenger__message-pic">
										<img src="assets/app/media/img//users/user3.jpg"  alt=""/>
									</div>
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-username">
												Megan wrote
											</div>
											<div class="m-messenger__message-text">
												Noted. For the Coca-Cola Mobile App project as well ?
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--out">
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-text">
												Yes, sure.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--out">
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-text">
												Please also prepare the quotation for the Loop CRM project as well.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__datetime">
								3:15PM
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--in">
									<div class="m-messenger__message-no-pic m--bg-fill-danger">
										<span>
											M
										</span>
									</div>
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-username">
												Megan wrote
											</div>
											<div class="m-messenger__message-text">
												Noted. I will prepare it.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--out">
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-text">
												Thanks Megan. I will see you later.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__wrapper">
								<div class="m-messenger__message m-messenger__message--in">
									<div class="m-messenger__message-pic">
										<img src="assets/app/media/img//users/user3.jpg"  alt=""/>
									</div>
									<div class="m-messenger__message-body">
										<div class="m-messenger__message-arrow"></div>
										<div class="m-messenger__message-content">
											<div class="m-messenger__message-username">
												Megan wrote
											</div>
											<div class="m-messenger__message-text">
												Sure. See you in the meeting soon.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__seperator"></div>
						<div class="m-messenger__form">
							<div class="m-messenger__form-controls">
								<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
							</div>
							<div class="m-messenger__form-tools">
								<a href="" class="m-messenger__form-attachment">
									<i class="la la-paperclip"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane active  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
					<div class="m-list-settings">
						<div class="m-list-settings__group">
							<div class="m-list-settings__heading">
								Upcoming 
							</div>
						</div>
						<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Lead A
										<span class="m-badge m-badge--warning m-badge--wide">
											important
										</span>
									</a>
									<span class="m-list-timeline__time">
										26/5/2018 21:21
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Lead B
										<span class="m-badge m-badge--warning m-badge--wide">
											important
										</span>
									</a>
									<span class="m-list-timeline__time">
										26/5/2018 22:21
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Lead C
										<span class="m-badge m-badge--warning m-badge--wide">
											important
										</span>
									</a>
									<span class="m-list-timeline__time">
										26/5/2018 22:28
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
	<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end::Scroll Top -->			<!-- begin::Quick Nav -->

	<!-- begin::Quick Nav -->	
    	<!--begin::Base Scripts -->
	<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/demo2/base/scripts.bundle.js') }}" type="text/javascript"></script>
	<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
	<script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
	<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
	<script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/demo/default/custom/components/datatables/base/html-table.js') }}" type="text/javascript"></script>
	<!--end::Page Snippets -->
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  	$( function() {
		    $( ".datepicker" ).datepicker();

		    //get converted row id
		    var editvalue = $( 'input[name=is_edit_converted]:checked' ).val();
		    if(editvalue == 1){
		    	$('.converted_edit_row').css('display','block');
		    }else{
		    	$('.unconverted_edit_row').css('display','block');
		    }

		    //get upgrade status
		    var is_upgrade = $( 'input[name=is_upgrade_edit]:checked' ).val();
		    if(is_upgrade == 1){
		    	$('.upgrade_row_edit').css('display','block');
		    }else{
		    	$('.upgrade_row_edit').css('display','none');
		    }

		    //get payment method id
		    var pay_method = $('#payment_method_edit_select').val();
		    if(pay_method == 1){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','block');
			}else if(pay_method == 2){
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_echecks_edit').css('display','block');
		  	}else if(pay_method == 3){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','block');
		  	}else if(pay_method == 4){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','block');
		  	}else if(pay_method == 5){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','block');
		  	}else if(pay_method == 6){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','block');
		  	}else if(pay_method == 7){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','block');
		  	}else if(pay_method == 8){
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','block');
		  	}else{
			  	$('.method_details_echecks_edit').css('display','none');
			  	$('.method_details_physical_cheque_edit').css('display','none');
			  	$('.method_details_interac_edit').css('display','none');
			  	$('.method_details_zille_edit').css('display','none');
			  	$('.method_details_money_order_edit').css('display','none');
			  	$('.method_details_cashier_cheque_edit').css('display','none');
			  	$('.method_details_prepaid_card_edit').css('display','none');
			  	$('.method_details_credit_card_edit').css('display','none');
		  	}
	  	});

	  	$('input[name=is_edit_converted]').change(function(){
			var value = $( 'input[name=is_edit_converted]:checked' ).val();
			if(value == 1){
				$('.converted_edit_row').css('display','block');
				$('.unconverted_edit_row').css('display','none');
			}else{
				$('.converted_edit_row').css('display','none');
				$('.unconverted_edit_row').css('display','block');
			}
		});

        $('input[name=is_converted]').change(function(){
			var value = $( 'input[name=is_converted]:checked' ).val();
			if(value == 1){
				$('.converted_row').css('display','block');
				$('.unconverted_row').css('display','none');
			}else{
				$('.converted_row').css('display','none');
				$('.unconverted_row').css('display','block');
			}
		});

		$('input[name=is_upgrade]').change(function(){
			var value = $( 'input[name=is_upgrade]:checked' ).val();
			if(value == 1){
				$('.upgrade_row').css('display','block');
				//$('.unconverted_row').css('display','none');
			}else{
				$('.upgrade_row').css('display','none');
				//$('.unconverted_row').css('display','block');
			}
		});

		$('input[name=is_upgrade_edit]').change(function(){
			var value = $( 'input[name=is_upgrade_edit]:checked' ).val();
			if(value == 1){
				$('.upgrade_row_edit').css('display','block');
				//$('.unconverted_row').css('display','none');
			}else{
				$('.upgrade_row_edit').css('display','none');
				//$('.unconverted_row').css('display','block');
			}
		});

		$('#payment_method_select').on('change', function() {
		  var id = this.value;
		  if(id == 1){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','block');
		  }else if(id == 2){
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_echecks').css('display','block');
		  }else if(id == 3){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_physical_cheque').css('display','block');
		  }else if(id == 4){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_interac').css('display','block');
		  }else if(id == 5){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_zille').css('display','block');
		  }else if(id == 6){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_money_order').css('display','block');
		  }else if(id == 7){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','block');
		  }else if(id == 8){
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  	$('.method_details_prepaid_card').css('display','block');
		  }else{
		  	$('.method_details_echecks').css('display','none');
		  	$('.method_details_physical_cheque').css('display','none');
		  	$('.method_details_interac').css('display','none');
		  	$('.method_details_zille').css('display','none');
		  	$('.method_details_money_order').css('display','none');
		  	$('.method_details_cashier_cheque').css('display','none');
		  	$('.method_details_prepaid_card').css('display','none');
		  	$('.method_details_credit_card').css('display','none');
		  }
		});

		$('#payment_method_edit_select').on('change', function() {
		  var id = this.value;
		  if(id == 1){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','block');
		  }else if(id == 2){
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_echecks_edit').css('display','block');
		  }else if(id == 3){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','block');
		  }else if(id == 4){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','block');
		  }else if(id == 5){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','block');
		  }else if(id == 6){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','block');
		  }else if(id == 7){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','block');
		  }else if(id == 8){
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','block');
		  }else{
		  	$('.method_details_echecks_edit').css('display','none');
		  	$('.method_details_physical_cheque_edit').css('display','none');
		  	$('.method_details_interac_edit').css('display','none');
		  	$('.method_details_zille_edit').css('display','none');
		  	$('.method_details_money_order_edit').css('display','none');
		  	$('.method_details_cashier_cheque_edit').css('display','none');
		  	$('.method_details_prepaid_card_edit').css('display','none');
		  	$('.method_details_credit_card_edit').css('display','none');
		  }
		});
	</script>
</body>
<!-- end::Body -->
</html>
