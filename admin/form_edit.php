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
		<?php
		include "subfile/head.php"
		?>
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
							<a href="index.php">Trang Chủ</a>
						</li>

						<li>
							<a href="jqgrid.php">Tin Tức</a>
						</li>
						<li class="active">Sua Tin Tức </li>
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
				<div class="page-header">
						<h1><a href="jqgrid.php">Tin Tức</h1>
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
							<h2>Chỉnh Sửa Tin tức</h2>

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