<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>jqGrid - Ace Admin</title>

	<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>

	<!-- html5shiv and Respond.js for IE8 to support html5 elements and media queries -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			color: #566787;
			background: #f5f5f5;
			font-family: 'Roboto', sans-serif;
		}

		.table-wrapper {
			background: #fff;
			padding: 20px;
			margin: 30px 0;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		}

		.table-title {
			padding-bottom: 10px;
			margin: 0 0 10px;
		}

		.table-title h2 {
			margin: 8px 0 0;
			font-size: 22px;
		}

		.search-box {
			position: relative;
			float: right;
		}

		.search-box input {
			height: 34px;
			border-radius: 20px;
			padding-left: 35px;
			border-color: #ddd;
			box-shadow: none;
		}

		.search-box input:focus {
			border-color: #3FBAE4;
		}

		.search-box i {
			color: #a0a5b1;
			position: absolute;
			font-size: 19px;
			top: 8px;
			left: 10px;
		}

		table.table tr th,
		table.table tr td {
			border-color: #e9e9e9;
		}

		table.table-striped tbody tr:nth-of-type(odd) {
			background-color: #fcfcfc;
		}

		table.table-striped.table-hover tbody tr:hover {
			background: #f5f5f5;
		}

		table.table th i {
			font-size: 13px;
			margin: 0 5px;
			cursor: pointer;
		}

		table.table td:last-child {
			width: 130px;
		}

		table.table td a {
			color: #a0a5b1;
			display: inline-block;
			margin: 0 5px;
		}

		table.table td a.view {
			color: #03A9F4;
		}

		table.table td a.edit {
			color: #FFC107;
		}

		table.table td a.delete {
			color: #E34724;
		}

		table.table td i {
			font-size: 19px;
		}

		.pagination {
			float: right;
			margin: 0 0 5px;
		}

		.pagination li a {
			border: none;
			font-size: 95%;
			width: 30px;
			height: 30px;
			color: #999;
			margin: 0 2px;
			line-height: 30px;
			border-radius: 30px !important;
			text-align: center;
			padding: 0;
		}

		.pagination li a:hover {
			color: #666;
		}

		.pagination li.active a {
			background: #03A9F4;
		}

		.pagination li.active a:hover {
			background: #0397d6;
		}

		.pagination li.disabled i {
			color: #ccc;
		}

		.pagination li i {
			font-size: 16px;
			padding-top: 6px
		}

		.hint-text {
			float: left;
			margin-top: 6px;
			font-size: 95%;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default          ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="index.php" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Ace Admin
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="grey dropdown-modal">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-tasks"></i>
							<span class="badge badge-grey">4</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-check"></i>
								4 Tasks to complete
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:65%" class="progress-bar"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Hardware Upgrade</span>
												<span class="pull-right">35%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:35%" class="progress-bar progress-bar-danger"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Unit Testing</span>
												<span class="pull-right">15%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:15%" class="progress-bar progress-bar-warning"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Bug Fixes</span>
												<span class="pull-right">90%</span>
											</div>

											<div class="progress progress-mini progress-striped active">
												<div style="width:90%" class="progress-bar progress-bar-success"></div>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See tasks with details
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="purple dropdown-modal">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-bell icon-animated-bell"></i>
							<span class="badge badge-important">8</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-exclamation-triangle"></i>
								8 Notifications
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar navbar-pink">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
													New Comments
												</span>
												<span class="pull-right badge badge-info">+12</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="btn btn-xs btn-primary fa fa-user"></i>
											Bob just signed up as an editor ...
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
													New Orders
												</span>
												<span class="pull-right badge badge-success">+8</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
													Followers
												</span>
												<span class="pull-right badge badge-info">+11</span>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See all notifications
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="green dropdown-modal">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
							<span class="badge badge-success">5</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-envelope-o"></i>
								5 Messages
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#" class="clearfix">
											<img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Alex:</span>
													Ciao sociis natoque penatibus et auctor ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>a moment ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Susan:</span>
													Vestibulum id ligula porta felis euismod ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>20 minutes ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Bob:</span>
													Nullam quis risus eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>3:15 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Kate:</span>
													Ciao sociis natoque eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>1:33 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Fred:</span>
													Vestibulum id penatibus et auctor ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>10:09 am</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="inbox.php">
									See all messages
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="light-blue dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
							<span class="user-info">
								<small>Welcome,</small>
								Jason
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="profile.php">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.loadState('main-container')
			} catch (e) {}
		</script>

		<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
			<script type="text/javascript">
				try {
					ace.settings.loadState('sidebar')
				} catch (e) {}
			</script>

			<!--------------------------------------------------------------------------------------------------------------------------- -->
			<?php
			include "subfile/menu.php";
			?>
			<!--------------------------------------------------------------------------------------------------------------------------- -->

			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#">Home</a>
						</li>

						<li>
							<a href="#">Tables</a>
						</li>
						<li class="active">jqGrid plugin</li>
					</ul><!-- /.breadcrumb -->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->
				</div>

				<div class="page-content">
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-130"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

					<div class="page-header">
						<h1>
							jqGrid
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								Dynamic tables and grids using jqGrid plugin
							</small>
						</h1>
					</div><!-- /.page-header -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
<?php 
include "../config.php";
$ma = isset($_GET['m'])?$_GET['m']:'';
$sql="select * from tintuc where tintuc_id= ? ";
$stm = $connect->prepare($sql);
$stm->execute(array($ma));
$data = $stm->fetch(PDO::FETCH_ASSOC);
?>
					<div class="signup-form">
						<form action="controll/update.php" method="post" enctype="multipart/form-data">
							<h2>Thêm danh mục Tin tức</h2>

							<div class="form-group">
							<div class="row">
									<div class="col-xs-6"><input type="text" class="form-control" name="m" value="<?php echo $data['tintuc_id'] ?>"></div><br>
								</div>
								<div class="row">
									<div class="col-xs-6"><input type="text" class="form-control" name="t" placeholder="Tiêu đề" required="required" value="<?php echo $data['tieude'] ?>"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea id="w3mission" rows="10" cols="81" name="nd"><?php echo $data['noidung'] ?></textarea>
							</div>
							<div class="form-group">
									<input type="date" id="birthday" name="nt" value="<?php echo $data['ngaythang'] ?>">
							</div>
							<div class="form-group">
								<input type="file" id="file" name="myFile">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-lg btn-block">Edit</button>
							</div>
						</form>
					</div>




<!-- ------------------------------------------------------------------------------------------------------------- -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Ace</span>
						Application &copy; 2013-2014
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>

	<!-- <![endif]-->

	<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- page specific plugin scripts -->
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/jquery.jqGrid.min.js"></script>
	<script src="assets/js/grid.locale-en.js"></script>

	<!-- ace scripts -->
	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>

	<!-- inline scripts related to this page -->

</body>

</html>