<!doctype html>
<html lang="en">
	<head>
		<title>Dashboard v3 | Klorofil Pro - Bootstrap Admin Dashboard Template</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/vendor/themify-icons/css/themify-icons.css">
		<link rel="stylesheet" href="assets/css/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
		<link rel="stylesheet" href="assets/vendor/datatables/css-main/jquery.dataTables.min.css">
		<link rel="stylesheet" href="assets/vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="assets/vendor/datatables-tabletools/css/dataTables.tableTools.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="assets/css/main.css">
		<!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
		<link rel="stylesheet" href="assets/css/demo.css">
		<link rel="stylesheet" href="demo-panel/style-switcher.css">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
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
									<li><a href="{{ route('index2') }}">Dashboard v2</a></li>
									<li><a href="{{ route('index3') }}" class="active">Dashboard v3 <span class="label label-info">UPD</span></a></li>
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
							<h1 class="page-title">Dashboard v3</h1>
							<p class="page-subtitle">Simple and minimal dashboard.</p>
						</div>
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="#">Dashboards</a></li>
							<li class="active">Dashboard v3</li>
						</ul>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-9">
								<!-- OVERVIEW -->
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">Weekly Overview</h4>
										<div class="right">
											<span class="panel-info">Period: Oct 14, 2016 - Oct 21, 2016</span>
										</div>
									</div>
									<div class="panel-body">
										<div class="row margin-bottom-30">
											<div class="col-md-3 col-xs-6">
												<div class="widget-metric_6 animate">
													<span class="icon-wrapper custom-bg-yellow"><i class="fa fa-download"></i></span>
													<div class="right">
														<span class="value">1252</span>
														<span class="title">Downloads</span>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-xs-6">
												<div class="widget-metric_6 animate">
													<span class="icon-wrapper custom-bg-orange"><i class="fa fa-shopping-bag"></i></span>
													<div class="right">
														<span class="value">203</span>
														<span class="title">Sales</span>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-xs-6">
												<div class="widget-metric_6 animate">
													<span class="icon-wrapper custom-bg-blue3"><i class="fa fa-eye"></i></span>
													<div class="right">
														<span class="value">27468</span>
														<span class="title">Unique Visits</span>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-xs-6">
												<div class="widget-metric_6 animate">
													<span class="icon-wrapper custom-bg-green2"><i class="fa fa-check"></i></span>
													<div class="right">
														<span class="value">35%</span>
														<span class="title">Conversion</span>
													</div>
												</div>
											</div>
										</div>
										<form id="headlinechart-controls" class="margin-top-50 margin-bottom-30">
											<span class="fancy-checkbox custom-bgcolor-blue">
												<label>
													<input type="checkbox" id="toggleWeeklyAvg">
													<span>Include Weekly Average</span>
												</label>
											</span>
											<span class="fancy-checkbox custom-bgcolor-blue">
												<label>
													<input type="checkbox" id="toggleTension">
													<span>Straight Chart</span>
												</label>
											</span>
										</form>
										<canvas id="headline-chart" height="120"></canvas>
									</div>
								</div>
								<!-- END OVERVIEW -->
							</div>
							<div class="col-md-3">
								<div class="panel">
									<div class="panel-body no-padding">
										<ul class="list-unstyled list-widget-vertical" id="growth-vertical-metric">
											<li>
												<div class="widget-metric_2">
													<i class="fa fa-money icon"></i>
													<div class="right">
														<span class="title">TOTAL REVENUE</span>
														<span class="value">$65938</span>
														<span class="percentage text-indicator-green"><i class="fa fa-level-up"></i> 25.13%</span>
													</div>
												</div>
											</li>
											<li>
												<div class="widget-metric_2">
													<i class="fa fa-calendar-o icon"></i>
													<div class="right">
														<span class="title">THIS WEEK</span>
														<span class="value">$738</span>
														<span class="percentage text-indicator-red"><i class="fa fa-level-down"></i> 2.67%</span>
													</div>
												</div>
											</li>
											<li>
												<div class="widget-metric_2">
													<i class="fa fa-shopping-basket icon"></i>
													<div class="right">
														<span class="title">WEEKLY SALES</span>
														<span class="value">236</span>
														<span class="percentage text-indicator-green"><i class="fa fa-level-up"></i> 14.86%</span>
													</div>
												</div>
											</li>
											<li>
												<div class="widget-metric_2">
													<i class="fa fa-plus-square icon"></i>
													<div class="right">
														<span class="title"><a href="#" class="menu">ADD NEW WIDGET</a></span>
													</div>
												</div>
											</li>
											<li>
												<div class="widget-metric_2">
													<i class="fa fa-cog icon"></i>
													<div class="right">
														<span class="title"><a href="#" class="menu">SETTINGS</a></span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<!-- MULTI CHARTS -->
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">My Tasks</h4>
										<div class="right">
											<button type="button" class="btn btn-primary btn-sm">
												<span class="sr-only">Add Task</span>
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
									<div class="panel-body">
										<ul class="list-unstyled task-list">
											<li>
												<p>Updating Users Settings
													<span class="label-percent">23%</span>
												</p>
												<div class="progress progress-xs progress-transparent custom-color-blue">
													<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
														<span class="sr-only">23% Complete</span>
													</div>
												</div>
											</li>
											<li>
												<p>Load &amp; Stress Test
													<span class="label-percent">80%</span>
												</p>
												<div class="progress progress-xs progress-transparent custom-color-orange">
													<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
											</li>
											<li>
												<p>Data Duplication Check
													<span class="label-percent">90%</span>
												</p>
												<div class="progress progress-xs progress-transparent custom-color-purple">
													<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
														<span class="sr-only">Success</span>
													</div>
												</div>
											</li>
											<li>
												<p>Server Check
													<span class="label-percent">45%</span>
												</p>
												<div class="progress progress-xs progress-transparent custom-color-yellow">
													<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
														<span class="sr-only">45% Complete</span>
													</div>
												</div>
											</li>
											<li>
												<p>Mobile App Development
													<span class="label-percent">10%</span>
												</p>
												<div class="progress progress-xs progress-transparent custom-color-green2">
													<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
														<span class="sr-only">10% Complete</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- END MULTI CHARTS -->
							</div>
							<div class="col-md-8">
								<!-- RECENT PURCHASES -->
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">Recent Purchases</h4>
										<div class="right">
											<span class="link"><i class="fa fa-shopping-bag"></i> <a href="#">View all purchases</a></span>
										</div>
									</div>
									<div class="panel-body no-padding">
										<div class="table-responsive">
											<table class="table table-minimal table-fullwidth table-striped">
												<thead>
													<tr>
														<th>ORDER NO.</th>
														<th>NAME</th>
														<th>AMOUNT</th>
														<th>DATE &amp; TIME</th>
														<th>STATUS</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">763648</a></td>
														<td>Steve</td>
														<td>$122</td>
														<td>Oct 21, 2016 &nbsp;&nbsp;
															<span class="text-muted">10:23 AM</span>
														</td>
														<td>
															<span class="label label-success">COMPLETED</span>
														</td>
													</tr>
													<tr>
														<td><a href="#">763649</a></td>
														<td>Amber</td>
														<td>$62</td>
														<td>Oct 21, 2016 &nbsp;&nbsp;
															<span class="text-muted">10:18 AM</span>
														</td>
														<td>
															<span class="label label-warning">PENDING</span>
														</td>
													</tr>
													<tr>
														<td><a href="#">763650</a></td>
														<td>Michael</td>
														<td>$34</td>
														<td>Oct 18, 2016 &nbsp;&nbsp;
															<span class="text-muted">09:22 AM</span>
														</td>
														<td>
															<span class="label label-danger">FAILED</span>
														</td>
													</tr>
													<tr>
														<td><a href="#">763651</a></td>
														<td>Roger</td>
														<td>$186</td>
														<td>Oct 17, 2016 &nbsp;&nbsp;
															<span class="text-muted">08:47 AM</span>
														</td>
														<td>
															<span class="label label-success">COMPLETED</span>
														</td>
													</tr>
													<tr>
														<td><a href="#">763652</a></td>
														<td>Smith</td>
														<td>$362</td>
														<td>Oct 16, 2016 &nbsp;&nbsp;
															<span class="text-muted">11:18 PM</span>
														</td>
														<td>
															<span class="label label-success">COMPLETED</span>
														</td>
													</tr>
													<tr>
														<td><a href="#">763651</a></td>
														<td>Claudia</td>
														<td>$112</td>
														<td>Oct 15, 2016 &nbsp;&nbsp;
															<span class="text-muted">10:08 PM</span>
														</td>
														<td>
															<span class="label label-success">COMPLETED</span>
														</td>
													</tr>
													<tr>
														<td><a href="#">763650</a></td>
														<td>Simon</td>
														<td>$285</td>
														<td>Oct 15, 2016 &nbsp;&nbsp;
															<span class="text-muted">09:42 PM</span>
														</td>
														<td>
															<span class="label label-warning">PENDING</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- END RECENT PURCHASES -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">Top Products</h4>
									</div>
									<div class="panel-body no-padding">
										<div class="table-responsive">
											<table class="table table-minimal table-striped table-fullwidth table-icons-stat">
												<thead class="hide">
													<tr>
														<th>Product Name</th>
														<th>Views</th>
														<th>Sales</th>
														<th>Revenue</th>
														<th>Downloads</th>
														<th>View Detail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>OneBeez</td>
														<td><i class="fa fa-eye"></i> 1656</td>
														<td><i class="fa fa-shopping-cart"></i> 454</td>
														<td><i class="fa fa-money"></i> $4536</td>
														<td><i class="fa fa-cloud-download"></i> 3467</td>
														<td><a href="#"><i class="fa fa-bar-chart"></i></a></td>
													</tr>
													<tr>
														<td>Hover</td>
														<td><i class="fa fa-eye"></i> 4254</td>
														<td><i class="fa fa-shopping-cart"></i> 452</td>
														<td><i class="fa fa-money"></i> $574</td>
														<td><i class="fa fa-cloud-download"></i> 1273</td>
														<td><a href="#"><i class="fa fa-bar-chart"></i></a></td>
													</tr>
													<tr>
														<td>KingAdmin</td>
														<td><i class="fa fa-eye"></i> 87989</td>
														<td><i class="fa fa-shopping-cart"></i> 8345</td>
														<td><i class="fa fa-money"></i> $756142</td>
														<td><i class="fa fa-cloud-download"></i> 10837</td>
														<td><a href="#"><i class="fa fa-bar-chart"></i></a></td>
													</tr>
													<tr>
														<td>Repute</td>
														<td><i class="fa fa-eye"></i> 25754</td>
														<td><i class="fa fa-shopping-cart"></i> 5663</td>
														<td><i class="fa fa-money"></i> $1754</td>
														<td><i class="fa fa-cloud-download"></i> 1654</td>
														<td><a href="#"><i class="fa fa-bar-chart"></i></a></td>
													</tr>
													<tr>
														<td>Bravana</td>
														<td><i class="fa fa-eye"></i> 86745</td>
														<td><i class="fa fa-shopping-cart"></i> 456</td>
														<td><i class="fa fa-money"></i> $5642</td>
														<td><i class="fa fa-cloud-download"></i> 2788</td>
														<td><a href="#"><i class="fa fa-bar-chart"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="widget widget-task-progress">
											<div class="top clearfix">
												<span class="title">Review Final Design</span>
												<span class="percentage">85%</span>
											</div>
											<div class="progress progress-sm task-progress progress-transparent custom-color-blue3">
												<div class="progress-bar" aria-valuenow="85" style="width: 85%;"></div>
											</div>
											<div class="bottom clearfix">
												<i class="fa fa-check text-success"></i> <a href="#">Mark complete</a>
												<span class="note">12 days remaining</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="widget widget-mini-realtime-usage">
											<div class="chart" id="real-time-usage"></div>
											<div class="usage-info clearfix">
												<div class="left">
													<span class="title">MEMORY AVAILABLE</span>
													<span class="value">512 GB</span>
												</div>
												<div class="right">
													<span class="title">MEMORY USED</span>
													<span class="value">
														<span class="number">19.30</span> GB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="widget widget-system-load">
									<div id="load-chart" class="chart easy-pie-chart" data-percent="70">
										<span class="percent">
											<span class="number">70</span>%</span>
									</div>
									<div class="info">
										<h4 class="heading-title">System Load</h4>
										<div class="row">
											<div class="col-xs-4">
												<span class="title">LOW</span>
												<span class="value">
													<span class="number">45</span>%</span>
											</div>
											<div class="col-xs-4">
												<span class="title">AVERAGE</span>
												<span class="value">
													<span class="number">73</span>%</span>
											</div>
											<div class="col-xs-4">
												<span class="title">HIGH</span>
												<span class="value">
													<span class="number">95</span>%</span>
											</div>
										</div>
										<div class="controls">
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i> MANAGE</a>
											<a href="#" class="btn btn-default btn-sm"><i class="fa fa-file-text-o"></i> VIEW SYS DOC</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">Leaderboard</h4>
									</div>
									<div class="panel-body no-padding">
										<div class="leaderboard padding-top-30">
											<div class="custom-tabs-line left-aligned">
												<ul class="nav nav-justified" role="tablist">
													<li class="active"><a href="#following" role="tab" data-toggle="tab">FOLLOWING</a></li>
													<li><a href="#global" role="tab" data-toggle="tab">GLOBAL</a></li>
												</ul>
											</div>
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane active" id="following">
													<ul class="list-unstyled list-positions">
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 130</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/male1.png" class="user-picture" alt="">
																	<span class="position-number">1</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Johnny Jenkins</a>
																	<span class="username">johnny.j</span>
																</div>
															</div>
															<span class="points">34535</span>
														</li>
														<li class="position down clearfix">
															<span class="change"><i class="fa fa-sort-down icon-change"></i> 73</span>
															<div class="account">
																<div class="user">
																	<span class="user-picture anonymous"><i class="fa fa-user-secret"></i></span>
																	<span class="position-number">2</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Betty Peters</a>
																	<span class="username">betty.petters</span>
																</div>
															</div>
															<span class="points">32873</span>
														</li>
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 86</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/female1.png" class="user-picture" alt="">
																	<span class="position-number">3</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Martha</a>
																	<span class="username">justmartha90</span>
																</div>
															</div>
															<span class="points">32010</span>
														</li>
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 342</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/male2.png" class="user-picture" alt="">
																	<span class="position-number">4</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Eric Ellis</a>
																	<span class="username">eric.ellis</span>
																</div>
															</div>
															<span class="points">29083</span>
														</li>
														<li class="position down clearfix">
															<span class="change"><i class="fa fa-sort-down icon-change"></i> 173</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/female2.png" class="user-picture" alt="">
																	<span class="position-number">5</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Cynthia James</a>
																	<span class="username">c.james</span>
																</div>
															</div>
															<span class="points">28847</span>
														</li>
														<li class="position down clearfix">
															<span class="change"><i class="fa fa-sort-down icon-change"></i> 22</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/female3.png" class="user-picture" alt="">
																	<span class="position-number">6</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Deborah Larson</a>
																	<span class="username">thelarson53</span>
																</div>
															</div>
															<span class="points">28598</span>
														</li>
													</ul>
												</div>
												<div role="tabpanel" class="tab-pane" id="global">
													<ul class="list-unstyled list-positions">
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 287</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/male3.png" class="user-picture" alt="">
																	<span class="position-number">1</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Abraham</a>
																	<span class="username">abe085</span>
																</div>
															</div>
															<span class="points">55198</span>
														</li>
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 23</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/female4.png" class="user-picture" alt="">
																	<span class="position-number">2</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Brittany Morales</a>
																	<span class="username">britt_morales123</span>
																</div>
															</div>
															<span class="points">55006</span>
														</li>
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 15</span>
															<div class="account">
																<div class="user">
																	<img src="assets/img/people/male4.png" class="user-picture" alt="">
																	<span class="position-number">3</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Gary Adams</a>
																	<span class="username">GaryHimSelf</span>
																</div>
															</div>
															<span class="points">54781</span>
														</li>
														<li class="position down clearfix">
															<span class="change"><i class="fa fa-sort-down icon-change"></i> 22</span>
															<div class="account">
																<div class="user">
																	<span class="user-picture anonymous"><i class="fa fa-user-secret"></i></span>
																	<span class="position-number">4</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Andrew Peters</a>
																	<span class="username">andrew093</span>
																</div>
															</div>
															<span class="points">54632</span>
														</li>
														<li class="position down clearfix">
															<span class="change"><i class="fa fa-sort-down icon-change"></i> 167</span>
															<div class="account">
																<div class="user">
																	<span class="user-picture anonymous"><i class="fa fa-user-secret"></i></span>
																	<span class="position-number">5</span>
																</div>
																<div class="right">
																	<a href="#" class="name">David Fernandez</a>
																	<span class="username">fernandezzz</span>
																</div>
															</div>
															<span class="points">54411</span>
														</li>
														<li class="position up clearfix">
															<span class="change"><i class="fa fa-sort-up icon-change"></i> 43</span>
															<div class="account">
																<div class="user">
																	<span class="user-picture anonymous"><i class="fa fa-user-secret"></i></span>
																	<span class="position-number">6</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Nicole Perkins</a>
																	<span class="username">nperkins987</span>
																</div>
															</div>
															<span class="points">54387</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<!-- TODO LIST -->
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">To-Do List</h4>
										<div class="right">
											<button type="button" class="btn btn-primary btn-sm">
												<span class="sr-only">Add Task</span>
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
									<div class="panel-body">
										<ul class="list-unstyled todo-list">
											<li class="completed">
												<label class="control-inline fancy-checkbox custom-bgcolor-blue">
													<input type="checkbox" checked>
													<span></span>
												</label>
												<p>Has movet praesent argumentum an. Elit praesent concludaturque cu vim. Fierent tractatos pri at</p>
											</li>
											<li class="completed">
												<label class="control-inline fancy-checkbox custom-bgcolor-blue">
													<input type="checkbox" checked>
													<span></span>
												</label>
												<p>Latine diceret qui te, te tation timeam cum, vim ei iudico eleifend. Ei eum graeci minimum, suavitate omittantur nec ex</p>
											</li>
											<li>
												<label class="control-inline fancy-checkbox custom-bgcolor-blue">
													<input type="checkbox">
													<span></span>
												</label>
												<p>Vivendum philosophia ea cum, cum id nonumy nemore discere.</p>
											</li>
											<li>
												<label class="control-inline fancy-checkbox custom-bgcolor-blue">
													<input type="checkbox">
													<span></span>
												</label>
												<p> Sea timeam philosophia instructior id, an his delenit splendide, error abhorreant in eos.</p>
											</li>
										</ul>
									</div>
								</div>
								<!-- END TODO LIST -->
							</div>
							<div class="col-md-5">
								<div class="panel panel-scrolling">
									<div class="panel-heading">
										<h4 class="panel-title">Contacts</h4>
										<div class="row heading-controls">
											<div class="col-xs-8">
												<form class="search-form search-contact">
													<input type="text" value="" class="form-control" placeholder="Search contacts">
													<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
												</form>
											</div>
											<div class="col-xs-4 text-right">
												<button type="button" class="btn btn-primary">
													<span class="sr-only">Add Contact</span>
													<i class="fa fa-user-plus"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="panel-body">
										<ul class="list-unstyled list-contacts">
											<li>
												<div class="media">
													<img src="assets/img/people/female3.png" class="picture" alt="">
													<span class="status online"></span>
												</div>
												<div class="info">
													<span class="name">Theresa Santos</span>
													<span class="email">tsantos@gmail.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
											<li>
												<div class="media">
													<div class="picture custom-bg-purple">PO</div>
													<span class="status"></span>
												</div>
												<div class="info">
													<span class="name">Paul Owen</span>
													<span class="email">paul.owen@yahoo.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
											<li>
												<div class="media">
													<div class="picture custom-bg-blue3">MB</div>
													<span class="status"></span>
												</div>
												<div class="info">
													<span class="name">Michael Bradley</span>
													<span class="email">mbradley80@mymail.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
											<li>
												<div class="media">
													<img src="assets/img/people/male1.png" class="picture" alt="">
													<span class="status online"></span>
												</div>
												<div class="info">
													<span class="name">Bruce Bowman</span>
													<span class="email">the_bruce@domain.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
											<li>
												<div class="media">
													<img src="assets/img/people/female4.png" class="picture" alt="">
													<span class="status"></span>
												</div>
												<div class="info">
													<span class="name">Karen Price</span>
													<span class="email">karen0987@gmail.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
											<li>
												<div class="media">
													<div class="picture custom-bg-blue3">JR</div>
													<span class="status online"></span>
												</div>
												<div class="info">
													<span class="name">Joyce Rivera</span>
													<span class="email">joyce@mymail.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
											<li>
												<div class="media">
													<img src="assets/img/people/female5.png" class="picture" alt="">
													<span class="status online"></span>
												</div>
												<div class="info">
													<span class="name">Martha Mendoza</span>
													<span class="email">martha.mendoza@gmail.com</span>
												</div>
												<div class="controls">
													<a href="#"><i class="fa fa-phone-square"></i></a>
													<a href="#"><i class="fa fa-commenting-o"></i></a>
													<a href="#"><i class="fa fa-envelope-o"></i></a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<!-- TIMELINE -->
								<div class="panel panel-scrolling">
									<div class="panel-heading">
										<h4 class="panel-title">Recent User Activity</h4>
										<div class="right">
											<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
											<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
										</div>
									</div>
									<div class="panel-body">
										<ul class="list-unstyled activity-list">
											<li>
												<img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
												<p><a href="#">Michael</a> has achieved 80% of his completed tasks
													<span class="timestamp">20 minutes ago</span>
												</p>
											</li>
											<li>
												<img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
												<p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a>
													<span class="timestamp">Yesterday</span>
												</p>
											</li>
											<li>
												<img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
												<p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a>
													<span class="timestamp">2 days ago</span>
												</p>
											</li>
											<li>
												<img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
												<p><a href="#">Jane</a> has completed all of the tasks
													<span class="timestamp">2 days ago</span>
												</p>
											</li>
											<li>
												<img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
												<p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a>
													<span class="timestamp">3 days ago</span>
												</p>
											</li>
										</ul>
										<button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
									</div>
								</div>
								<!-- END TIMELINE -->
							</div>
						</div>
						<!-- VISITS DATA -->
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title">Visits Data</h4>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
								</div>
							</div>
							<div class="panel-body">
								<p class="alert alert-warning"><i class="icon ion-alert-circled"></i> Requires Flash plugin</p>
								<div class="table-responsive">
									<table id="datatable-data-export" class="table table-striped table-hover table-bordered">
										<thead>
											<tr>
												<th>Browser</th>
												<th>Operating System</th>
												<th>Visits</th>
												<th>New Visits</th>
												<th>Bounce Rate</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Chrome</td>
												<td>Macintosh</td>
												<td>360</td>
												<td>82.78%</td>
												<td>87.77%</td>
											</tr>
											<tr>
												<td>Chrome</td>
												<td>Windows</td>
												<td>582</td>
												<td>87.24%</td>
												<td>90.12%</td>
											</tr>
											<tr>
												<td>Chrome</td>
												<td>Linux</td>
												<td>172</td>
												<td>45.21%</td>
												<td>48.81%</td>
											</tr>
											<tr>
												<td>Chrome</td>
												<td>iOS</td>
												<td>86</td>
												<td>35.23%</td>
												<td>44.21%</td>
											</tr>
											<tr>
												<td>Firefox</td>
												<td>Windows</td>
												<td>280</td>
												<td>63.12%</td>
												<td>89.34%</td>
											</tr>
											<tr>
												<td>Firefox</td>
												<td>Android</td>
												<td>236</td>
												<td>58.02%</td>
												<td>76.19%</td>
											</tr>
											<tr>
												<td>Internet Explorer</td>
												<td>Windows</td>
												<td>145</td>
												<td>45.23%</td>
												<td>94.65%</td>
											</tr>
											<tr>
												<td>Opera</td>
												<td>Windows</td>
												<td>328</td>
												<td>67.12%</td>
												<td>78.34%</td>
											</tr>
											<tr>
												<td>Opera</td>
												<td>Macintosh</td>
												<td>22</td>
												<td>87.21%</td>
												<td>79.81%</td>
											</tr>
											<tr>
												<td>Chrome</td>
												<td>iOS</td>
												<td>45</td>
												<td>23.21%</td>
												<td>34.67%</td>
											</tr>
											<tr>
												<td>Firefox</td>
												<td>Windows</td>
												<td>470</td>
												<td>53.12%</td>
												<td>79.34%</td>
											</tr>
											<tr>
												<td>Firefox</td>
												<td>Android</td>
												<td>436</td>
												<td>88.02%</td>
												<td>46.19%</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END VISITS DATA -->
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
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="assets/vendor/chartist/js/chartist.min.js"></script>
		<script src="assets/vendor/raphael/raphael.min.js"></script>
		<script src="assets/vendor/jquery-mapael/js/jquery.mapael.min.js"></script>
		<script src="assets/vendor/jquery-mapael/js/maps/world_countries.min.js"></script>
		<script src="assets/vendor/datatables/js-main/jquery.dataTables.min.js"></script>
		<script src="assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>
		<script src="assets/vendor/datatables-tabletools/js/dataTables.tableTools.js"></script>
		<script src="assets/vendor/chart-js/Chart.min.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
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
			var ctx = document.getElementById("headline-chart").getContext("2d");
			var headlineChart = new Chart(ctx,
			{
				type: 'line',
				data:
				{
					labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
					datasets: [
					{
						data: [123, 129, 124, 130, 132, 139, 140],
						label: 'Previous Week',
						backgroundColor: 'rgba(0, 183, 253, .25)',
						borderColor: 'transparent',
					},
					{
						data: [125, 127, 123, 132, 129, 138, 144],
						label: 'This Week',
						backgroundColor: 'rgba( 0, 157, 255, .5)',
						borderColor: 'transparent',
					}],
				},
				options:
				{
					responsive: true,
					elements:
					{
						line:
						{
							borderWidth: 1,
						},
						point:
						{
							radius: 0
						}
					},
					scales:
					{
						xAxes: [
						{
							gridLines:
							{
								display: false
							}
						}],
						yAxes: [
						{
							gridLines:
							{
								color: '#e5e5e5',
								drawBorder: false,
								borderDash: [4, 8]
							},
							ticks:
							{
								callback: function(value, index, values)
								{
									return '$' + value;
								}
							},
						}]
					},
					tooltips:
					{
						position: 'nearest',
						mode: 'index',
						intersect: false
					}
				}
			});
			$('#headlinechart-controls #toggleWeeklyAvg').on('change', function()
			{
				var newDataset = {
					data: [124, 128, 129, 131, 131, 137, 142],
					label: 'Weekly Avg.',
					fill: false,
					borderWidth: 2,
					borderDash: [5, 5],
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#5e6773',
					backgroundColor: 'transparent'
				}
				if ($(this).is(':checked'))
				{
					headlineChart.data.datasets.push(newDataset);
				}
				else
				{
					headlineChart.data.datasets.pop();
				}
				headlineChart.update();
			});
			$('#headlinechart-controls #toggleTension').on('change', function()
			{
				headlineChart.options.elements.line.tension = $(this).is(':checked') ? 0.000001 : 0.4;
				headlineChart.update();
			});
			// real-time usage chart
			var usageData = [],
				totalPoints = 20;
			function getRandomData()
			{
				if (usageData.length > 0)
					usageData = usageData.slice(1);
				while (usageData.length < totalPoints)
				{
					var y = Math.random() * 100
					usageData.push(y);
				}
				var result = [];
				for (var i = 0; i < usageData.length; ++i)
				{
					result.push([i, usageData[i]])
				}
				return result;
			}
			var usageChart = $.plot($('#real-time-usage'), [getRandomData()],
			{
				series:
				{
					lines:
					{
						fill: true,
						fillColor: '#53c265'
					}
				},
				colors: ['#53c265'],
				grid:
				{
					show: false,
				},
			});
			setInterval(function()
			{
				usageChart.setData([getRandomData()]);
				usageChart.draw();
				$('.widget-mini-realtime-usage').find('.number').text((Math.random() * 100).toFixed(2));
			}, 1000);
			// real-time pie chart
			var sysLoad = $('#load-chart').easyPieChart(
			{
				size: 130,
				barColor: function(percent)
				{
					return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
				},
				trackColor: 'rgba(187, 202, 213, .2)',
				scaleColor: false,
				lineWidth: 8,
				lineCap: "round",
				animate: 800
			});
			var updateInterval = 3000; // in milliseconds
			setInterval(function()
			{
				var randomVal;
				randomVal = getRandomInt(0, 100);
				sysLoad.data('easyPieChart').update(randomVal);
				sysLoad.find('.percent .number').text(randomVal);
				$('.widget-system-load .info .number').each(function()
				{
					$(this).text(getRandomInt(0, 100))
				});
			}, updateInterval);
			function getRandomInt(min, max)
			{
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			// visits table
			var exportTable = $('#datatable-data-export').DataTable(
			{
				sDom: "T<'clearfix'>" +
					"<'row'<'col-sm-6'l><'col-sm-6'f>r>" +
					"t" +
					"<'row'<'col-sm-6'i><'col-sm-6'p>>",
				"tableTools":
				{
					"sSwfPath": "assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
				}
			});
		});
		</script>
	</body>
</html>
