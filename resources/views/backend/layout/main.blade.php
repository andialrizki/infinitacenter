<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
		<meta name="description"
				content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
		<meta name="keywords"
				content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
		<meta name="author" content="PIXINVENT">
		<title>@php echo \Str::ucfirst(Request::segment(2) == '' ? 'Dashboard' : str_replace('-',' ',Request::segment(2))); @endphp - @if ($settings != null)
						{{ $settings->title }}
				@endif
		</title>
		<link rel="apple-touch-icon" href="{{ '/' }}assets/favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="{{ '/' }}assets/favicon.png">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
				rel="stylesheet">

		<!-- BEGIN: Vendor CSS-->
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/vendors/css/vendors.min.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/vendors/css/charts/apexcharts.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/vendors/css/extensions/toastr.min.css">
		<!-- END: Vendor CSS-->

		<!-- BEGIN: Theme CSS-->
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/bootstrap-extended.css">
		<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/colors.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/components.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/themes/dark-layout.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/themes/bordered-layout.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/themes/semi-dark-layout.css">

		<!-- BEGIN: Page CSS-->
		<link rel="stylesheet" type="text/css"
				href="{{ '/app-assets/' }}app-assets/css/core/menu/menu-types/vertical-menu.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/pages/dashboard-ecommerce.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/plugins/charts/chart-apex.css">
		<link rel="stylesheet" type="text/css"
				href="{{ '/app-assets/' }}app-assets/css/plugins/extensions/ext-component-toastr.css">
		<!-- END: Page CSS-->

		<!-- BEGIN: Custom CSS-->
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}/assets/css/style.css">
		<!-- END: Custom CSS-->


		<!-- BEGIN: DataTables-->
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}datatables/datatable.min.css">


		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}zoom.css">
		<link rel="stylesheet" type="text/css" href="{{ '/app-assets/' }}app-assets/css/pages/page-blog.css">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
		data-menu="vertical-menu-modern" data-col="">

		<!-- BEGIN: Header-->
		<nav
				class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
				<div class="navbar-container d-flex content">
						<div class="bookmark-wrapper d-flex align-items-center">
								<ul class="nav navbar-nav d-xl-none ">
										<li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
																data-feather="menu"></i></a></li>
								</ul>
						</div>

						<ul class="nav navbar-nav align-items-center ml-auto">
								<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
														data-feather="moon"></i></a></li>
								<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
														data-feather="search"></i></a>
										<div class="search-input">
												<div class="search-input-icon"><i data-feather="search"></i></div>
												<input class="form-control input" type="text" placeholder="Cari Sesuatu..."
														tabindex="-1" data-search="search">
												<div class="search-input-close"><i data-feather="x"></i></div>
												<ul class="search-list search-list-main"></ul>
										</div>
								</li>

								<li class="nav-item dropdown dropdown-notification mr-25">
										<a class="nav-link" href="javascript:void(0);" data-toggle="dropdown">
												<i class="ficon" data-feather="bell"></i>
												{{-- <span class="badge badge-pill badge-danger badge-up">5</span> --}}
										</a>
										<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
												<li class="dropdown-menu-header">
														<div class="dropdown-header d-flex">
																<h4 class="notification-title mb-0 mr-auto">Notifications</h4>
																<div class="badge badge-pill badge-light-primary">6 New</div>
														</div>
												</li>
												<li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
																<div class="media d-flex align-items-start">
																		<div class="media-left">
																				<div class="avatar"><img
																								src="{{ '/app-assets/' }}app-assets/images/portrait/small/avatar-s-15.jpg"
																								alt="avatar" width="32" height="32"></div>
																		</div>
																		<div class="media-body">
																				<p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
																								🎉</span>winner!</p><small class="notification-text"> Won the monthly
																						best seller badge.</small>
																		</div>
																</div>
														</a><a class="d-flex" href="javascript:void(0)">
																<div class="media d-flex align-items-start">
																		<div class="media-left">
																				<div class="avatar"><img
																								src="{{ '/app-assets/' }}app-assets/images/portrait/small/avatar-s-3.jpg"
																								alt="avatar" width="32" height="32"></div>
																		</div>
																		<div class="media-body">
																				<p class="media-heading"><span class="font-weight-bolder">New
																								message</span>&nbsp;received</p><small class="notification-text"> You
																						have 10 unread messages</small>
																		</div>
																</div>
														</a><a class="d-flex" href="javascript:void(0)">
																<div class="media d-flex align-items-start">
																		<div class="media-left">
																				<div class="avatar bg-light-danger">
																						<div class="avatar-content">MD</div>
																				</div>
																		</div>
																		<div class="media-body">
																				<p class="media-heading"><span class="font-weight-bolder">Revised Order
																								👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
																						order updated</small>
																		</div>
																</div>
														</a>
														<div class="media d-flex align-items-center">
																<h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
																<div class="custom-control custom-control-primary custom-switch">
																		<input class="custom-control-input" id="systemNotification" type="checkbox"
																				checked="">
																		<label class="custom-control-label" for="systemNotification"></label>
																</div>
														</div><a class="d-flex" href="javascript:void(0)">
																<div class="media d-flex align-items-start">
																		<div class="media-left">
																				<div class="avatar bg-light-danger">
																						<div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
																						</div>
																				</div>
																		</div>
																		<div class="media-body">
																				<p class="media-heading"><span class="font-weight-bolder">Server
																								down</span>&nbsp;registered</p><small class="notification-text"> USA
																						Server is down due to hight CPU usage</small>
																		</div>
																</div>
														</a><a class="d-flex" href="javascript:void(0)">
																<div class="media d-flex align-items-start">
																		<div class="media-left">
																				<div class="avatar bg-light-success">
																						<div class="avatar-content"><i class="avatar-icon"
																										data-feather="check"></i></div>
																				</div>
																		</div>
																		<div class="media-body">
																				<p class="media-heading"><span class="font-weight-bolder">Sales
																								report</span>&nbsp;generated</p><small class="notification-text"> Last
																						month sales report generated</small>
																		</div>
																</div>
														</a><a class="d-flex" href="javascript:void(0)">
																<div class="media d-flex align-items-start">
																		<div class="media-left">
																				<div class="avatar bg-light-warning">
																						<div class="avatar-content"><i class="avatar-icon"
																										data-feather="alert-triangle"></i></div>
																				</div>
																		</div>
																		<div class="media-body">
																				<p class="media-heading"><span class="font-weight-bolder">High
																								memory</span>&nbsp;usage</p><small class="notification-text"> BLR
																						Server using high memory</small>
																		</div>
																</div>
														</a>
												</li>
												<li class="dropdown-menu-footer"><a class="btn btn-primary btn-block"
																href="javascript:void(0)">Read all notifications</a></li>
										</ul>
								</li>
								<li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
												id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<div class="user-nav d-sm-flex d-none"><span
																class="user-name font-weight-bolder">{{ Session::get('name') }}</span><span
																class="user-status">Admin</span></div><span class="avatar"><img class="round"
																src="@if ($settings != null) {{ $settings->favicon }} @endif"
																alt="avatar" height="40" width="40"><span
																class="avatar-status-online"></span></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
												<a class="dropdown-item" href="page-profile.html">
														<i class="mr-50" data-feather="user"></i> Profile
												</a>
												<div class="dropdown-divider">
												</div>
												<a class="dropdown-item" href="page-account-settings.html">
														<i class="mr-50" data-feather="settings"></i> Settings
												</a>
												<a class="dropdown-item" href="#" onclick="logout()">
														<i class="mr-50" data-feather="power"></i> Logout
												</a>
										</div>
								</li>
						</ul>
				</div>
		</nav>

		<!-- END: Header-->


		<!-- BEGIN: Main Menu-->
		<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
				<div class="navbar-header">
						<ul class="nav navbar-nav flex-row">
								<li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}">
												<span class="brand-logo">
														<img src="@if ($settings != null) {{ $settings->favicon }} @endif"
																alt="Logo Maxon">
												</span>
												<h2 class="brand-text text-uppercase" style="color: #ed502e;font-size:12px">
														Infinita
												</h2>
										</a></li>
								<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
														class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
														class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
														data-feather="disc" data-ticon="disc"></i></a></li>
						</ul>
				</div>
				<div class="shadow-bottom"></div>
				<div class="main-menu-content">
						<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
								<li class="@if (Request::segment(2) == '' || Request::segment(2) == 'dashboard') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('dashboard') }}"><i
														data-feather="home"></i><span class="menu-title text-truncate"
														data-i18n="Dashboard">Dashboard</span></a>
								</li>

								<li class=" navigation-header"><span data-i18n="Media & Konten">Media & Konten</span><i
												data-feather="more-horizontal"></i>
								</li>

								{{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
														data-feather="image"></i><span class="menu-title text-truncate"
														data-i18n="Banner">Banner</span></a>
										<ul class="menu-content">
												<li @if (Request::segment(2) == 'banner-home') class="active" @endif><a
																class="d-flex align-items-center" href="{{ route('banner-home.index') }}"><i
																		data-feather="circle"></i><span class="menu-item text-truncate"
																		data-i18n="Banner Home">Banner Home</span></a>
												</li>
												<li @if (Request::segment(2) == 'banner-page') class="active" @endif><a
																class="d-flex align-items-center" href="{{ route('banner-page.index') }}"><i
																		data-feather="circle"></i><span class="menu-item text-truncate"
																		data-i18n="Banner Page">Banner Page</span></a>
												</li>
										</ul>
								</li> --}}
								<li class="@if (Request::segment(2) == 'banner-page') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('banner-page.index') }}"><i
														data-feather="image"></i><span class="menu-title text-truncate"
														data-i18n="Banner">Banner</span></a>
								</li>
								{{-- <li class="@if (Request::segment(2) == 'video') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('video.index') }}"><i
														data-feather="youtube"></i><span class="menu-title text-truncate"
														data-i18n="Video">Video</span></a>
								</li> --}}
								<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
														data-feather="image"></i><span class="menu-title text-truncate"
														data-i18n="Gallery">Gallery</span></a>
										<ul class="menu-content">
												<li @if (Request::segment(2) == 'gallery-category') class="active" @endif><a
																class="d-flex align-items-center" href="{{ route('gallery-category.index') }}"><i
																		data-feather="circle"></i><span class="menu-item text-truncate"
																		data-i18n="Gallery Category">Gallery Category</span></a>
												</li>
												<li @if (Request::segment(2) == 'gallery') class="active" @endif><a
																class="d-flex align-items-center" href="{{ route('gallery.index') }}"><i
																		data-feather="circle"></i><span class="menu-item text-truncate"
																		data-i18n="Gallery">Gallery</span></a>
												</li>
										</ul>
								</li>

								{{-- <li class="@if (Request::segment(2) == 'gallery') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('gallery.index') }}"><i
														data-feather="image"></i><span class="menu-title text-truncate"
														data-i18n="Gallery Foto">Gallery Foto</span></a>
								</li> --}}
								
								<li class=" navigation-header"><span data-i18n="Menu Utama">Menu Utama</span><i
												data-feather="more-horizontal"></i>
								</li>

								<li class="@if (Request::segment(2) == 'company') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('company.index') }}"><i
														data-feather="trello"></i><span class="menu-title text-truncate"
														data-i18n="Company">Company</span></a>
								</li>

								<li class="@if (Request::segment(2) == 'services') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('services.index') }}"><i
														data-feather="box"></i><span class="menu-title text-truncate"
														data-i18n="Services">Services</span></a>
								</li>
								<li class="@if (Request::segment(2) == 'client') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('client.index') }}"><i
														data-feather="user"></i><span class="menu-title text-truncate"
														data-i18n="Client">Client</span></a>
								</li>

								{{-- <li class="@if (Request::segment(2) == 'project') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('project.index') }}"><i
														data-feather="box"></i><span class="menu-title text-truncate"
														data-i18n="Project">Project</span></a>
								</li> --}}

								{{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
														data-feather="package"></i><span class="menu-title text-truncate"
														data-i18n="Products">Products</span></a>
										<ul class="menu-content">
												<li @if (Request::segment(2) == 'product-category') class="active" @endif><a
																class="d-flex align-items-center" href="{{ route('product-category.index') }}"><i
																		data-feather="circle"></i><span class="menu-item text-truncate"
																		data-i18n="Category Products">Category Products</span></a>
												</li>
												<li @if (Request::segment(2) == 'all-product') class="active" @endif><a
																class="d-flex align-items-center" href="{{ route('all-product.index') }}"><i
																		data-feather="circle"></i><span class="menu-item text-truncate"
																		data-i18n="All Products">All Products</span></a>
												</li>
										</ul>
								</li> --}}

								<li class=" navigation-header"><span data-i18n="Tentang Website">Tentang Website</span><i
												data-feather="more-horizontal"></i>
								</li>

								{{-- <li class="@if (Request::segment(2) == 'news') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('news.index') }}"><i
														data-feather="cast"></i><span class="menu-title text-truncate"
														data-i18n="Berita">Berita</span></a>
								</li> --}}

								{{-- <li class="@if (Request::segment(2) == 'download') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ '' }}"><i
														data-feather="download"></i><span class="menu-title text-truncate"
														data-i18n="Download">Download</span></a>
								</li> --}}

								<li class="@if (Request::segment(2) == 'setting') active @endif nav-item"><a
												class="d-flex align-items-center" href="{{ route('setting.index') }}"><i
														data-feather="settings"></i><span class="menu-title text-truncate"
														data-i18n="Setting">Setting</span></a>
								</li>

						</ul>
				</div>
		</div>
		<!-- END: Main Menu-->

		<!-- BEGIN: Content-->
		<div class="app-content content ">
				<div class="content-overlay"></div>
				<div class="header-navbar-shadow"></div>
				<div class="content-wrapper container-xxl p-0">
						<div class="content-header row">
						</div>
						<div class="content-body">

								@yield('content')

						</div>
				</div>
		</div>
		<!-- END: Content-->

		<div class="sidenav-overlay"></div>
		<div class="drag-target"></div>

		<!-- BEGIN: Footer-->
		<footer class="footer footer-static footer-light">
				<p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">

								<a class="ml-25" href="{{ route('dashboard') }}">
										@if ($settings != null)
												{{ $settings->footer_text }}
										@endif
								</a><span class="d-none d-sm-inline-block">, All rights Reserved</span>
						</span></p>
		</footer>
		<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
		<!-- END: Footer-->


		<!-- BEGIN: Vendor JS-->
		<script src="{{ '/app-assets/' }}app-assets/vendors/js/vendors.min.js"></script>
		<!-- BEGIN Vendor JS-->

		<!-- BEGIN: Page Vendor JS-->
		<script src="{{ '/app-assets/' }}app-assets/vendors/js/charts/apexcharts.min.js"></script>
		<script src="{{ '/app-assets/' }}app-assets/vendors/js/extensions/toastr.min.js"></script>
		<!-- END: Page Vendor JS-->

		<!-- BEGIN: Theme JS-->
		<script src="{{ '/app-assets/' }}app-assets/js/core/app-menu.js"></script>
		<script src="{{ '/app-assets/' }}app-assets/js/core/app.js"></script>
		<!-- END: Theme JS-->

		<!-- BEGIN: Page JS-->
		<script src="{{ '/app-assets/' }}app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
		<!-- END: Page JS-->

		<!-- BEGIN: sweetalert-->
		<script src="{{ '/' }}app-assets/sweetalert.js"></script>

		<!-- BEGIN: dataTables-->
		{{-- <script src="{{'/'}}app-assets/datatables/jquery.dataTables.min.js"></script> --}}
		<script src="{{ '/app-assets/' }}app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
		<script src="{{ '/app-assets/' }}app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
		<!-- BEGIN: Page JS-->
		<script src="{{ '/app-assets/' }}app-assets/js/scripts/pages/page-blog-edit.js"></script>
		<!-- END: Page JS-->
		<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
		<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>



		<script type="text/javascript"
				src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initAutocomplete&region=SA
																																																																																				 async defer">
		</script>
		<script>
				CKEDITOR.config.disableObjectResizing = true;
				var options = {
						filebrowserImageBrowseUrl: "/laravel-filemanager?type=Images",
						filebrowserImageUploadUrl: "/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}",
						filebrowserBrowseUrl: "/laravel-filemanager?type=Files",
						filebrowserUploadUrl: "/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}",
						disallowedContent: 'img{width,height};'
				};
		</script>
		<script>
				$(window).on('load', function() {
						if (feather) {
								feather.replace({
										width: 14,
										height: 14
								});
						}

						//datatables Set
						$(document).ready(function() {
								$('.dataTables').DataTable({
										dom: "<'row p-1 hidden'<'col-sm-12 col-md-6 'l><'col-sm-12 col-md-6 'f>>" +
												"<'row'<'col-sm-12'tr>>" +
												"<'row p-1'<'col-sm-12 col-md-5 hidden'i><'col-sm-12 col-md-12 text-center'p>>"
								});
						});


						// var isRtl = $('html').attr('data-textdirection') === 'rtl';
						// // On load Toast
						// setTimeout(function () {
						//     toastr['success'](
						//     'Selamat Datang',
						//     '👋 Welcome',
						//     {
						//         closeButton: true,
						//         tapToDismiss: false,
						//         rtl: isRtl
						//     }
						//     );
						// }, 2000);
				})



				function logout() {
						Swal.fire({
								title: 'Apakah Anda yakin ingin keluar ?',
								icon: 'warning',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Ya Keluar !',
								cancelButtonText: 'Batalkan'
						}).then((result) => {
								if (result.isConfirmed) {
										Swal.fire(
												'Berhasil!',
												'Akun anda akan keluar',
												'success'
										);
										window.location = '/webmin/logout';
								}
						})
				}

				$(document).ready(function() {
						$('#lfm').filemanager('image');
				});
				$(document).ready(function() {
						$('#lfm2').filemanager('image');
				});
		</script>
		@stack('js')

</body>
<!-- END: Body-->

</html>
