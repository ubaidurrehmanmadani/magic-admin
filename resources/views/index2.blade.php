<!doctype html>
<html lang="en">
	<head>
		<title>Dashboard v2 | Klorofil Pro - Bootstrap Admin Dashboard Template</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
		<!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
		<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
		<link rel="stylesheet" href="{{ asset('demo-panel/style-switcher.css') }}">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					<a href="{{ route('index') }}">
						<img src="assets/img/logo-white.png" alt="Klorofil Pro Logo" class="img-responsive logo">
					</a>
				</div>
				<div class="container-fluid">
					<div id="tour-fullwidth" class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
					</div>
					<form class="navbar-form navbar-left search-form">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<div id="navbar-menu">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#" class="btn-toggle-rightsidebar">
									<i class="ti-layout-sidebar-right"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="ti-bell"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li>You have 5 new notifications</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-hdd-o custom-bg-red"></i>
											<p>
												<span class="text">System space is almost full</span>
												<span class="timestamp">11 minutes ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-tasks custom-bg-yellow"></i>
											<p>
												<span class="text">You have 9 unfinished tasks</span>
												<span class="timestamp">20 minutes ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-book custom-bg-green2"></i>
											<p>
												<span class="text">Monthly report is available</span>
												<span class="timestamp">1 hour ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-bullhorn custom-bg-purple"></i>
											<p>
												<span class="text">Weekly meeting in 1 hour</span>
												<span class="timestamp">2 hours ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-check custom-bg-green"></i>
											<p>
												<span class="text">Your request has been approved</span>
												<span class="timestamp">3 days ago</span>
											</p>
										</a>
									</li>
									<li><a href="#" class="more">See all notifications</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="hide">Help</span></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
									<li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
									<li><a href="#"><i class="ti-lock"></i> Security</a></li>
									<li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/img/user.png" alt="Avatar">
									<span>Samuel</span>
								</a>
								<ul class="dropdown-menu logged-user-menu">
									<li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="ti-email"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="ti-settings"></i> <span>Settings</span></a></li>
									<li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<nav>
					<ul class="nav" id="sidebar-nav-menu">
						<li class="menu-group">Main</li>
						<li class="panel">
							<a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="active"><i class="ti-dashboard"></i> <span class="title">Dashboards</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="dashboards" class="collapse in">
								<ul class="submenu">
									<li><a href="{{ route('index') }}">Dashboard v1 <span class="label label-info">UPD</span></a></li>
									<li><a href="{{ route('index2') }}" class="active">Dashboard v2</a></li>
									<li><a href="{{ route('index3') }}">Dashboard v3 <span class="label label-info">UPD</span></a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#subLayouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout"></i> <span class="title">Layouts</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subLayouts" class="collapse ">
								<ul class="submenu">
									<li><a href="layout-minified.html">Minified</a></li>
									<li><a href="layout-fullwidth.html">Fullwidth</a></li>
									<li><a href="layout-default.html">Default</a></li>
									<li><a href="layout-grid.html">Grid</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#forms" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-receipt"></i> <span class="title">Forms</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="forms" class="collapse ">
								<ul class="submenu">
									<li><a href="forms-inputs.html">Inputs <span class="label label-info">UPD</span></a></li>
									<li><a href="forms-multiselect.html">Multiselect</a></li>
									<li><a href="forms-input-pickers.html">Input Pickers <span class="label label-info">UPD</span></a></li>
									<li><a href="forms-input-sliders.html">Input Sliders</a></li>
									<li><a href="forms-select2.html">Select2 <span class="label label-success">NEW</span></a></li>
									<li><a href="forms-xeditable.html">In-place Editing</a></li>
									<li><a href="forms-dragdropupload.html">Drag and Drop Upload</a></li>
									<li><a href="forms-layouts.html">Form Layouts</a></li>
									<li><a href="forms-validation.html">Form Validation</a></li>
									<li><a href="forms-texteditor.html">Text Editor</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#appViews" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-tab-window"></i> <span class="title">App Views</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="appViews" class="collapse ">
								<ul class="submenu">
									<li><a href="appviews-project-detail.html">Project Details</a></li>
									<li><a href="appviews-projects.html">Projects</a></li>
									<li><a href="appviews-inbox.html">Inbox <span class="badge">8</span></a></li>
									<li><a href="appviews-file-manager.html">File Manager</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#tables" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-grid2"></i> <span class="title">Tables</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="tables" class="collapse ">
								<ul class="submenu">
									<li><a href="tables-static.html">Static Tables</a></li>
									<li><a href="tables-dynamic.html">Dynamic Tables</a></li>
								</ul>
							</div>
						</li>
						<li class="menu-group">Components</li>
						<li class="panel">
							<a href="#uiElements" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-panel"></i> <span class="title">UI Elements</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="uiElements" class="collapse ">
								<ul class="submenu">
									<li><a href="ui-sweetalert.html">Sweet Alert</a></li>
									<li><a href="ui-treeview.html">Tree View</a></li>
									<li><a href="ui-wizard.html">Wizard</a></li>
									<li><a href="ui-dragdrop-panel.html">Drag &amp; Drop Panel</a></li>
									<li><a href="ui-nestable.html">Nestable</a></li>
									<li><a href="ui-panels.html">Panels</a></li>
									<li><a href="ui-progressbars.html">Progress Bars</a></li>
									<li><a href="ui-tabs.html">Tabs</a></li>
									<li><a href="ui-buttons.html">Buttons</a></li>
									<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
									<li><a href="ui-social-buttons.html">Social Buttons <span class="label label-success">NEW</span></a></li>
									<li><a href="ui-icons.html">Icons</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#charts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-pie-chart"></i> <span class="title">Charts</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="charts" class="collapse ">
								<ul class="submenu">
									<li><a href="charts-chartjs.html">Chart.js</a></li>
									<li><a href="charts-chartist.html">Chartist</a></li>
									<li><a href="charts-flot.html">Flot Chart</a></li>
									<li><a href="charts-sparkline.html">Sparkline Chart</a></li>
								</ul>
							</div>
						</li>
						<li><a href="widgets.html"><i class="ti-widget"></i> <span class="title">Widgets</span></a></li>
						<li><a href="notifications.html"><i class="ti-bell"></i> <span class="title">Notifications</span> <span class="badge">15</span></a></li>
						<li class="panel">
							<a href="#maps" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-map"></i> <span class="title">Maps</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="maps" class="collapse ">
								<ul class="submenu">
									<li><a href="maps-jqvmap.html">JQVMap</a></li>
									<li><a href="maps-mapael.html">Mapael</a></li>
								</ul>
							</div>
						</li>
						<li class="menu-group">Extras</li>
						<li class="panel">
							<a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-files"></i> <span class="title">Pages</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="submenu">
									<li><a href="page-profile.html">Profile</a></li>
									<li><a href="page-login.html">Login</a></li>
									<li><a href="page-register.html">Register</a></li>
									<li><a href="page-lockscreen.html">Lockscreen</a></li>
									<li><a href="page-forgot-password.html">Forgot Password</a></li>
									<li><a href="page-404.html">Page 404</a></li>
									<li><a href="page-500.html">Page 500</a></li>
									<li><a href="page-blank.html">Blank Page</a></li>
								</ul>
							</div>
						</li>
						<li><a href="typography.html"><i class="ti-paragraph"></i> <span class="title">Typography</span></a></li>
						<li class="panel">
							<a href="#" data-toggle="collapse" data-target="#submenuDemo" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-menu"></i> <span class="title">Multilevel Menu</span><i class="icon-submenu ti-angle-left"></i></a>
							<div id="submenuDemo" class="collapse">
								<ul class="submenu">
									<li class="panel">
										<a href="#" data-toggle="collapse" data-target="#submenuDemoLv2" class="collapsed">Submenu 1 <i class="icon-submenu ti-angle-left"></i></a>
										<div id="submenuDemoLv2" class="collapse">
											<ul class="submenu">
												<li><a href="#">Another menu level</a></li>
												<li><a href="#" class="active">Another menu level</a></li>
												<li><a href="#">Another menu level</a></li>
											</ul>
										</div>
									</li>
									<li><a href="#">Submenu 2</a></li>
									<li><a href="#">Submenu 3</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
				</nav>
			</div>
			<!-- END LEFT SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">Dashboard v2</h1>
							<p class="page-subtitle">Growth monitor dashboard with colorful elements.</p>
						</div>
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="#">Dashboards</a></li>
							<li class="active">Dashboard v2</li>
						</ul>
					</div>
					<div class="container-fluid">
						<h2 class="heading-border">Insights</h2>
						<div class="row row-panel">
							<div class="col-md-6">
								<ul class="list-unstyled list-insights">
									<li>
										<div class="media">
											<div class="media-left media-middle">
												<i class="fa fa-users custom-bg-orange"></i>
											</div>
											<div class="media-body">
												<p>Your users increased 18% last week.</p>
												<a href="#">View detail</a>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left media-middle">
												<i class="fa fa-line-chart custom-bg-blue"></i>
											</div>
											<div class="media-body">
												<p>One of your page has a great traffic increase over 2 weeks.</p>
												<a href="#">View detail</a>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left media-middle">
												<i class="fa fa-shopping-bag custom-bg-green"></i>
											</div>
											<div class="media-body">
												<p>45% of sales are coming from 3 products.</p>
												<a href="#">View detail</a>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left media-middle">
												<i class="fa fa-clock-o custom-bg-yellow"></i>
											</div>
											<div class="media-body">
												<p>Average session duration increased 36% last week</p>
												<a href="#">View detail</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<div class="widget widget-stat">
											<div class="media">
												<div class="media-left media-middle">
													<i class="fa fa-shopping-bag icon-transparent-area custom-color-purple"></i>
												</div>
												<div class="media-body">
													<span class="title">SALES</span>
													<span class="value">734</span>
												</div>
											</div>
											<p class="footer text-success"><i class="fa fa-caret-up"></i> 18%
												<span>Compared to last week</span>
											</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="widget widget-stat">
											<div class="media">
												<div class="media-left media-middle">
													<i class="fa fa-cloud-download icon-transparent-area custom-color-orange"></i>
												</div>
												<div class="media-body">
													<span class="title">DOWNLOADS</span>
													<span class="value">12,760</span>
												</div>
											</div>
											<p class="footer text-danger"><i class="fa fa-caret-down"></i> 25%
												<span>Compared to last week</span>
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="widget widget-stat">
											<div class="media">
												<div class="media-left media-middle">
													<i class="fa fa-reply icon-transparent-area custom-color-lightseagreen"></i>
												</div>
												<div class="media-body">
													<span class="title">REFUNDS</span>
													<span class="value">12</span>
												</div>
											</div>
											<p class="footer text-success"><i class="fa fa-caret-down"></i> 28%
												<span>Compared to last week</span>
											</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="widget widget-stat">
											<div class="media">
												<div class="media-left media-middle">
													<i class="fa fa-money icon-transparent-area custom-color-green"></i>
												</div>
												<div class="media-body">
													<span class="title">REVENUE</span>
													<span class="value">$125,747</span>
												</div>
											</div>
											<p class="footer text-success"><i class="fa fa-caret-up"></i> 5%
												<span>Compared to last week</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-panel">
							<div class="col-md-4">
								<h2 class="heading-border">Traffic Sources</h2>
								<div id="traffic-sources-chart"></div>
							</div>
							<div class="col-md-4">
								<h2 class="heading-border">Referrals</h2>
								<ul class="list-unstyled list-referrals">
									<li>
										<p>
											<span class="value">3,454</span>
											<span class="text-muted">visits from Facebook</span>
										</p>
										<div class="progress progress-xs progress-transparent custom-color-blue">
											<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
										</div>
									</li>
									<li>
										<p>
											<span class="value">2,102</span>
											<span class="text-muted">visits from Twitter</span>
										</p>
										<div class="progress progress-xs progress-transparent custom-color-purple">
											<div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width:34%"></div>
										</div>
									</li>
									<li>
										<p>
											<span class="value">2,874</span>
											<span class="text-muted">visits from Affiliates</span>
										</p>
										<div class="progress progress-xs progress-transparent custom-color-green">
											<div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%"></div>
										</div>
									</li>
									<li>
										<p>
											<span class="value">2,874</span>
											<span class="text-muted">visits from Search</span>
										</p>
										<div class="progress progress-xs progress-transparent custom-color-yellow">
											<div class="progress-bar" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width:54%"></div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="heading-border">Browsers</h2>
								<table class="table table-minimal">
									<thead>
										<tr>
											<th>BROWSERS</th>
											<th>SESSIONS</th>
											<th>% SESSIONS</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Chrome</td>
											<td>1,756</td>
											<td>23%</td>
										</tr>
										<tr>
											<td>Firefox</td>
											<td>1,379</td>
											<td>14%</td>
										</tr>
										<tr>
											<td>Safari</td>
											<td>1,100</td>
											<td>17%</td>
										</tr>
										<tr>
											<td>Edge</td>
											<td>982</td>
											<td>25%</td>
										</tr>
										<tr>
											<td>Opera</td>
											<td>967</td>
											<td>19%</td>
										</tr>
										<tr>
											<td>Internet Explorer</td>
											<td>896</td>
											<td>12%</td>
										</tr>
										<tr>
											<td>Android Browser</td>
											<td>752</td>
											<td>27%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row row-panel margin-bottom-30">
							<div class="col-md-7">
								<h2 class="heading-border">Top Products</h2>
								<div class="table-responsive">
									<table class="table top-products no-margin">
										<thead>
											<tr>
												<th>Product Name</th>
												<th>Views</th>
												<th>Downloads</th>
												<th>Rating</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<img src="assets/img/products/puzzle.png" class="product-logo" alt="Puzzle">
													<p class="product-name">Puzzle
														<span class="product-version">v1.2</span>
													</p>
												</td>
												<td><i class="fa fa-eye icon"></i> 17,845 views</td>
												<td><i class="fa fa-cloud-download icon"></i> 3,729 downloads</td>
												<td>
													<span class="rating-stars smaller">
														<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<img src="assets/img/products/qrcode.png" class="product-logo" alt="QRCode">
													<p class="product-name">QRCode
														<span class="product-version">v1.5</span>
													</p>
												</td>
												<td><i class="fa fa-eye icon"></i> 11,983 views</td>
												<td><i class="fa fa-cloud-download icon"></i> 1,541 downloads</td>
												<td>
													<span class="rating-stars smaller">
														<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<img src="assets/img/products/easypolls.png" class="product-logo" alt="Easy Polls">
													<p class="product-name">Easy Polls
														<span class="product-version">v1.0</span>
													</p>
												</td>
												<td><i class="fa fa-eye icon"></i> 7,647 views</td>
												<td><i class="fa fa-cloud-download icon"></i> 643 downloads</td>
												<td>
													<span class="rating-stars smaller">
														<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<p class="margin-top-30"><a href="#">View all products</a></p>
							</div>
							<div class="col-md-5">
								<h2 class="heading-border">Sales Performance</h2>
								<div id="sales-performance-chart"></div>
								<p class="margin-top-30"><a href="#">View detailed sales report</a></p>
							</div>
						</div>
						<h2 class="heading-border">Projects</h2>
						<p class="lead">You are involved in 8 projects:
							<span class="label label-success">4 active</span>,
							<span class="label label-warning">2 pending</span> and
							<span class="label label-default">2 closed</span>
						</p>
						<div class="table-responsive">
							<table class="table table-minimal project-list">
								<thead>
									<tr>
										<th>TITLE</th>
										<th>DATE START</th>
										<th>DAYS TO DEADLINE</th>
										<th>PROGRESS</th>
										<th>PRIORITY</th>
										<th>LEADER</th>
										<th>STATUS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#">Spot Media</a></td>
										<td>18-04-2017</td>
										<td>12 days</td>
										<td>
											<div class="progress">
												<div class="progress-bar" data-transitiongoal="95"></div>
											</div>
										</td>
										<td>
											<span class="label label-warning">MEDIUM</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle" />
												<span>Michael</span>
											</a>
										</td>
										<td>
											<span class="label label-success">ACTIVE</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">E-Commerce Site</a></td>
										<td>24-05-2017</td>
										<td>30 days</td>
										<td>
											<div class="progress">
												<div class="progress-bar" data-transitiongoal="40"></div>
											</div>
										</td>
										<td>
											<span class="label label-success">LOW</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle" />
												<span>Antonius</span>
											</a>
										</td>
										<td>
											<span class="label label-warning">PENDING</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">Project 123GO</a></td>
										<td>20-12-2016</td>
										<td>50 days</td>
										<td>
											<div class="progress">
												<div class="progress-bar" data-transitiongoal="65"></div>
											</div>
										</td>
										<td>
											<span class="label label-danger">HIGH</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle" />
												<span>Antonius</span>
											</a>
										</td>
										<td>
											<span class="label label-success">ACTIVE</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">Wordpress Theme</a></td>
										<td>05-03-2017</td>
										<td>40 days</td>
										<td>
											<div class="progress">
												<div class="progress-bar" data-transitiongoal="77"></div>
											</div>
										</td>
										<td>
											<span class="label label-warning">MEDIUM</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle" />
												<span>Michael</span>
											</a>
										</td>
										<td>
											<span class="label label-success">ACTIVE</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">Redesign Landing Page</a></td>
										<td>15-02-2017</td>
										<td>30 days</td>
										<td>
											<div class="progress">
												<div class="progress-bar" data-transitiongoal="25"></div>
											</div>
										</td>
										<td>
											<span class="label label-success">LOW</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle" />
												<span>Jason</span>
											</a>
										</td>
										<td>
											<span class="label label-success">ACTIVE</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">Project 123GO</a></td>
										<td>20-09-2017</td>
										<td>N/A</td>
										<td>
											<div class="progress">
												<div class="progress-bar progress-bar-default" data-transitiongoal="100"></div>
											</div>
										</td>
										<td>
											<span class="label label-danger">HIGH</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle" />
												<span>Antonius</span>
											</a>
										</td>
										<td>
											<span class="label label-default">CLOSED</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">Wordpress Theme</a></td>
										<td>05-10-2016</td>
										<td>N/A</td>
										<td>
											<div class="progress">
												<div class="progress-bar progress-bar-default" data-transitiongoal="100"></div>
											</div>
										</td>
										<td>
											<span class="label label-warning">MEDIUM</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle" />
												<span>Michael</span>
											</a>
										</td>
										<td>
											<span class="label label-default">CLOSED</span>
										</td>
									</tr>
									<tr>
										<td><a href="#">Redesign Landing Page</a></td>
										<td>15-11-2016</td>
										<td>30 days</td>
										<td>
											<div class="progress">
												<div class="progress-bar" data-transitiongoal="33"></div>
											</div>
										</td>
										<td>
											<span class="label label-success">LOW</span>
										</td>
										<td class="leader">
											<a href="#">
												<img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle" />
												<span>Jason</span>
											</a>
										</td>
										<td>
											<span class="label label-warning">PENDING</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="margin-bottom-30"></div>
					</div>
				</div>
				<!-- END MAIN CONTENT -->
				<!-- RIGHT SIDEBAR -->
				<div id="sidebar-right" class="right-sidebar">
					<div class="sidebar-widget">
						<h4 class="widget-heading"><i class="fa fa-calendar"></i> TODAY</h4>
						<p class="date">Wednesday, 22 December</p>
						<div class="row margin-top-30">
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-blue first">
										<i class="fa fa-tasks"></i>
										<span>Tasks</span>
										<span class="badge">5</span>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-green">
										<i class="fa fa-envelope"></i>
										<span>Mail</span>
										<span class="badge">12</span>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-orange last">
										<i class="fa fa-user-plus"></i>
										<span>Users</span>
										<span class="badge">24</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading">YOUR APPS</h4>
							<a href="#" class="show-all">Show all</a>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="Dropbox" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-dropbox dropbox-color"></i>
								</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="WordPress" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-wordpress wordpress-color"></i>
								</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="Drupal" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-drupal drupal-color"></i>
								</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="Github" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-github github-color"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading">MY PROJECTS</h4>
							<a href="#" class="show-all">Show all</a>
						</div>
						<ul class="list-unstyled list-project-progress">
							<li>
								<a href="#" class="project-name">Project XY</a>
								<div class="progress progress-xs progress-transparent custom-color-orange">
									<div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%"></div>
								</div>
								<span class="percentage">67%</span>
							</li>
							<li>
								<a href="#" class="project-name">Growth Campaign</a>
								<div class="progress progress-xs progress-transparent custom-color-blue">
									<div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
								</div>
								<span class="percentage">23%</span>
							</li>
							<li>
								<a href="#" class="project-name">Website Redesign</a>
								<div class="progress progress-xs progress-transparent custom-color-green">
									<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
								</div>
								<span class="percentage">87%</span>
							</li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading">MY FILES</h4>
							<a href="#" class="show-all">Show all</a>
						</div>
						<ul class="list-unstyled list-justify list-file-simple">
							<li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a>
								<span>4 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a>
								<span>20 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a>
								<span>315 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a>
								<span>1 MB</span>
							</li>
						</ul>
					</div>
					<p class="text-center"><a href="#" class="btn btn-default btn-xs">More Widgets</a></p>
				</div>
				<!-- END RIGHT SIDEBAR -->
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.time.js"></script>
		<script src="assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
		<script src="assets/scripts/klorofilpro-common.js"></script>
		<!-- DEMO PANEL -->
		<!-- for demo purpose only, you should remove it on your project directory -->
		<script type="text/javascript">
		var toggleDemoPanel = function(e)
		{
			e.preventDefault();
			var panel = document.getElementById('demo-panel');
			if (panel.className) panel.className = '';
			else panel.className = 'active';
		}
		// fix each iframe src when back button is clicked
		$(function()
		{
			$('iframe').each(function()
			{
				this.src = this.src;
			});
		});
		</script>
		<div id="demo-panel">
			<a href="#" onclick="toggleDemoPanel(event);"><i class="fa fa-cog fa-spin"></i></a>
			<iframe src="demo-panel/index.html"></iframe>
		</div>
		<!-- END DEMO PANEL -->
		<script>
		$(function()
		{
			// donut chart
			var data = [
			{
				label: "Social",
				data: 45
			},
			{
				label: "Referral",
				data: 26
			},
			{
				label: "Organic",
				data: 14
			},
			{
				label: "Others",
				data: 15
			}];
			$.plot('#traffic-sources-chart', data,
			{
				series:
				{
					pie:
					{
						show: true,
						innerRadius: 0.5,
						stroke:
						{
							width: 4,
							color: "#F9F9F9"
						},
						label:
						{
							show: true,
							radius: 3 / 4,
							formatter: donutLabelFormatter,
						},
					},
				},
				legend:
				{
					backgroundOpacity: 0
				},
				colors: ["#FF4402", "#AB7DF6", "#F3BB23", "#20B2AA"],
			});
			function donutLabelFormatter(label, series)
			{
				return "<div class=\"flot-donut-label\">" + Math.round(series.percent) + "%</div>";
			}
			// sales performance chart
			var puzzle = [
				[gt(2013, 10, 21), 188],
				[gt(2013, 10, 22), 205],
				[gt(2013, 10, 23), 250],
				[gt(2013, 10, 24), 230],
				[gt(2013, 10, 25), 245],
				[gt(2013, 10, 26), 260],
				[gt(2013, 10, 27), 290]
			];
			var qrcode = [
				[gt(2013, 10, 21), 100],
				[gt(2013, 10, 22), 110],
				[gt(2013, 10, 23), 155],
				[gt(2013, 10, 24), 120],
				[gt(2013, 10, 25), 135],
				[gt(2013, 10, 26), 150],
				[gt(2013, 10, 27), 175]
			];
			var easypolls = [
				[gt(2013, 10, 21), 75],
				[gt(2013, 10, 22), 65],
				[gt(2013, 10, 23), 80],
				[gt(2013, 10, 24), 60],
				[gt(2013, 10, 25), 65],
				[gt(2013, 10, 26), 80],
				[gt(2013, 10, 27), 110]
			];
			plot = $.plot($('#sales-performance-chart'), [
			{
				data: puzzle,
				label: "Puzzle"
			},
			{
				data: qrcode,
				label: "QRCode"
			},
			{
				data: easypolls,
				label: "EasyPolls"
			}],
			{
				bars:
				{
					show: true,
					barWidth: 28 * 60 * 60 * 300,
					align: "center",
					fill: true,
					order: true,
					lineWidth: 0,
					fillColor:
					{
						colors: [
						{
							opacity: 1
						},
						{
							opacity: 1
						}]
					}
				},
				grid:
				{
					hoverable: true,
					clickable: true,
					borderWidth: 0,
					tickColor: "#E4E4E4",
				},
				colors: ["#56B9B7", "#5666B9", "#FF4402"],
				xaxis:
				{
					mode: "time",
					timezone: "browser",
					minTickSize: [1, "day"],
					timeformat: "%a",
					font:
					{
						color: "#676a6d"
					},
					tickColor: "#fafafa",
					autoscaleMargin: 0.2
				},
				yaxis:
				{
					font:
					{
						color: "#676a6d"
					},
					ticks: 8,
				},
				legend:
				{
					labelBoxBorderColor: "transparent",
					backgroundColor: "transparent"
				},
				tooltip: true,
				tooltipOpts:
				{
					content: '%s: %y'
				}
			});
			function gt(y, m, d)
			{
				return new Date(y, m - 1, d).getTime();
			}
			// project progress bars
			$('.progress .progress-bar').progressbar(
			{
				display_text: 'fill'
			});
		});
		</script>
	</body>
</html>
