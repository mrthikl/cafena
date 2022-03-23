<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../">
	<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="{{asset('backend/media/logos/favicon.ico')}}" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{('backend/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
					<!--begin::Content-->
					<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
						<!--begin::Logo-->
						<a href="../../demo1/dist/index.html" class="py-9 mb-5">
							<img alt="Logo" src="{{('backend/media/logos/logo-2.svg')}}" class="h-60px" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Metronic</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic
							<br />with great build tools
						</p>
						<!--end::Description-->
					</div>
					<!--end::Content-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(media/illustrations/sketchy-1/13.png)"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" method="post" novalidate="novalidate" id="kt_sign_in_form" action="{{URL::to('/login')}}">
							{{csrf_field()}}
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Sign In to Metronic</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="../../demo1/dist/authentication/flows/aside/sign-up.html" class="link-primary fw-bolder">Create an Account</a>
								</div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="admin_email" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
									<!--begin::Link-->
									<a href="../../demo1/dist/authentication/flows/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" name="admin_password" autocomplete="off" />
								<!--end::Input-->
								<div class="mt-5">
									<?php
									$message = Session::get('message');
									if ($message) {
										echo '<strong class="text-danger">*'.$message.'</strong>';
										Session::put('message', null);
									}
									?>
								</div>
							</div>

							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<input type="submit" value="Continue" class="btn btn-lg btn-primary w-100 mb-5">
								<!--end::Submit button-->
								<!--begin::Separator-->
								<!-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div> -->
								<!--end::Separator-->
								<!--begin::Google link-->
								<!-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="{{('backend/media/svg/brand-logos/google-icon.svg')}}" class="h-20px me-3" />Continue with Google
								</a> -->
								<!--end::Google link-->
								<!--begin::Google link-->
								<!-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="{{('backend/media/svg/brand-logos/facebook-4.svg')}}" class="h-20px me-3" />Continue with Facebook</a> -->
								<!--end::Google link-->
								<!--begin::Google link-->
								<!-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
									<img alt="Logo" src="{{('backend/media/svg/brand-logos/apple-black.svg')}}" class="h-20px me-3" />Continue with Apple</a> -->
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
					<!--begin::Links-->
					<div class="d-flex flex-center fw-bold fs-6">
						<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">About</a>
						<a href="https://keenthemes.com/support" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
						<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Main-->
	<script>
		var hostUrl = "";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{('backend/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{('backend/js/scripts.bundle.js')}}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{('backend/js/custom/authentication/sign-in/general.js')}}"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>