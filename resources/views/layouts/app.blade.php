<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
    	<title>{{ config('app.name', 'Unicorn Solutions - Login') }}</title>
		<meta name="description" content="Unicorn Solutions - Login users">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
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
		<link href="{{ asset('css/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
 <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								
								@if(!Auth::guest())
									 <a href="<?php echo  route('logout'); ?>"
                  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                       Logout
              </a>
              <form id="logout-form" action="<?php echo  route('logout'); ?>" method="POST" style="display: none;">
                <?php echo  csrf_field(); ?>
              </form>
									@endif
									
	 @yield('content')
									
									
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url({{ asset('images/bg-4.jpg') }})">
					<div class="m-grid__item m-grid__item--middle">
						<h3 class="m-login__welcome">
							Welcome
						</h3>
						<p class="m-login__msg">
							Happy to be served
						</p>
					</div>
				</div>
			</div>
		</div>
	


    <!--begin::Base Scripts -->
		<script src="{{ asset('js/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="{{ asset('js/login.js') }}" type="text/javascript"></script>
		<!--end::Page Snippets -->
</body>
</html>
