
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<!-- ================================================================================ -->
	<!-- STYLES LUMINO -->
	<link href="<?= base_url().'assets/lumino/';?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url().'assets/lumino/';?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url().'assets/lumino/';?>css/datepicker3.css" rel="stylesheet">
	<link href="<?= base_url().'assets/lumino/';?>css/styles.css" rel="stylesheet">
	<!-- ================================================================================ -->
	<!-- ASSETS KENDO -->
	<link rel="stylesheet" href="<?= base_url().'assets/kendo/';?>styles/kendo.common.min.css" />
    <link rel="stylesheet" href="<?= base_url().'assets/kendo/';?>styles/kendo.default.min.css" />
    <link rel="stylesheet" href="<?= base_url().'assets/kendo/';?>styles/kendo.default.mobile.min.css" />

    <script src="<?= base_url().'assets/kendo/';?>js/jquery.min.js"></script>
    <script src="<?= base_url().'assets/kendo/';?>js/kendo.all.min.js"></script>
</head>
<body>
	<!-- Start navigation -->
	<?php $this->load->view('layouts/nav') ?>
	<!-- End navigation -->
	<!-- Start sidebar -->
	<?php $this->load->view('layouts/sidebar') ?>
	<!-- End sidebar -->
	<!-- Start main -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><?= $title ?></li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?= $title ?></h1>
			</div>
		</div>

		<?php $this->load->view($page) ?>

	</div>
	<!-- End main -->
	<!-- ================================================================================ -->
	<!-- SCRIPTS LUMINO -->
	<script src="<?= base_url().'assets/lumino/';?>js/bootstrap.min.js"></script>
	<script src="<?= base_url().'assets/lumino/';?>js/chart.min.js"></script>
	<script src="<?= base_url().'assets/lumino/';?>js/chart-data.js"></script>
	<script src="<?= base_url().'assets/lumino/';?>js/easypiechart.js"></script>
	<script src="<?= base_url().'assets/lumino/';?>js/easypiechart-data.js"></script>
	<script src="<?= base_url().'assets/lumino/';?>js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url().'assets/lumino/';?>js/custom.js"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
	</script>
</body>
</html>
