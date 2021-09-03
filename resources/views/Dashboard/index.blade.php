<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="{{ asset('admin/dist/assets') }}/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('admin/dist/assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/dist/assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('admin/dist/assets') }}/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
													<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="javascript:void(0);">
										<h1><span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                            <span id="kt_landing_hero_text">Pabura</span>
                                        </span></h1>
									</a>
									<img src="UMI.png" alt="logo UMI">

									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#list-sayur" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Obat</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#keranjang" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Keranjang</a>
												<!--end::Menu link-->
                                            </div>
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('register') }}" class="btn btn-success">Buka Toko</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">PA'BURA
							<br />
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Menjual Obat-obatan dan Alat Medis</span>
							</span></h1>
							<!--end::Title-->
							<!--begin::Action-->
							<a href="#list-sayur" class="btn btn-primary">Ayo Beli</a>
							<!--end::Action-->
						</div>
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n100 mb-lg-n200 z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="list-sayur" data-kt-scroll-offset="{default: 100, lg: 150}">Daftar Obat</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<!-- <div class="fs-5 text-muted fw-bold">Daftar Penjual sayur terdekat anda!</div> -->
						<!--end::Text-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row w-100 gy-10 mb-100 md-0">
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="image/UMI.png" class="mh-125px mb-9" alt="Logo UMI" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Paracetamol</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('admin/dist/assets') }}/media/illustrations/process-3.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Setup Your App</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>

						

						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('admin/dist/assets') }}/media/illustrations/process-4.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Enjoy Nautica App</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>

						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="image/UMI.png" class="mh-125px mb-9" alt="Logo UMI" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Paracetamol</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('admin/dist/assets') }}/media/illustrations/process-3.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Setup Your App</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>

						

						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('admin/dist/assets') }}/media/illustrations/process-4.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Enjoy Nautica App</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>

						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="image/UMI.png" class="mh-125px mb-9" alt="Logo UMI" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Paracetamol</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('admin/dist/assets') }}/media/illustrations/process-3.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Setup Your App</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>

						

						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('admin/dist/assets') }}/media/illustrations/process-4.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Enjoy Nautica App</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!-- <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
								<br />by using single tool for different
								<br />amazing and great</div> -->
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>





						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Product slider-->
					
					<!--end::Product slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<!--begin::Statistics Section-->
			
			<!--end::Statistics Section-->
			<!--begin::Team Section-->
			<div class="py-10 py-lg-20">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					
					<!--end::Heading-->
					<!--begin::Slider-->
					
					<!--end::Slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Team Section-->
			<!--begin::Projects Section-->
			<div class="mb-lg-n15 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Card-->
					<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
						<!--begin::Card body-->
						<!-- <div class="card-body p-lg-20"> -->
							<!--begin::Heading-->
							
							<!--end::Heading-->
							<!--begin::Tabs wrapper-->
							

							<!--end::Tabs wrapper-->
							<!--begin::Tabs content-->
							
							<!--end::Tabs content-->
						<!-- </div> -->
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Projects Section-->
			<!--begin::Pricing Section-->
			
			<!--end::Pricing Section-->
			<!--begin::Testimonials Section-->
			<div class="mt-20 mb-n20 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					


					<!--end::Heading-->
					<!--begin::Row-->
					
					<!--end::Row-->
					<!--begin::Highlight-->
					
					<!--end::Highlight-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Testimonials Section-->
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Contact Us</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">0899-9888-7776 (Fan) </span>
									<br>
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">paburabura@gmail.com</a></span>
									<br>
									<span class="fw-normal fs-4 text-gray-700">Alamat : Jl. Urip Sumoharjo </span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								
								<!--end::Block-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column me-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">More for Metronic</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5">Tutorials</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('admin/dist/assets') }}/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('admin/dist/assets') }}/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('admin/dist/assets') }}/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('admin/dist/assets') }}/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('admin/dist/assets') }}/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="../../demo1/dist/landing.html">
									<img alt="Logo" src="image/UMI.png" class="h-15px h-md-20px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2021 Pabura</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item mx-5">
									<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
							<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('admin/dist/assets') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('admin/dist/assets') }}/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('admin/dist/assets') }}/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="{{ asset('admin/dist/assets') }}/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('admin/dist/assets') }}/js/custom/landing.js"></script>
		<script src="{{ asset('admin/dist/assets') }}/js/custom/pages/company/pricing.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
