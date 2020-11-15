<?php include('inc/head.php'); ?>

<body>

	<?php include('inc/header-pages.php'); ?>
	<div class="d-block d-md-none">
		<section id="services-mobile" class="reg-top-bg-mobile-dash dash-light-blue">
			<div class="container">

				<span class="caption caption-left-user">DEPOSITO (20.590,00&euro;)</span>


			</div>

		</section>
	</div>
	<?php include('inc/dashboard_deposito.php'); ?>

	<main id="main">

		<section class="pt-80 pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">

						<canvas id="chart_01" width="100%"></canvas>

					</div>
				</div>
				<div class="row justify-content-center pt-80">
					<div class="col-12 col-md-6">

						<canvas id="chart_02" width="100%"></canvas>

					</div>
					<div class="col-12 col-md-6">

						<canvas id="chart_03" width="100%"></canvas>

					</div>
				</div>
			</div>
		</section>

	</main>

	<?php include('inc/footer-pages.php'); ?>
	<?php include('inc/modals.php'); ?>
	<?php include('inc/scripts.php'); ?>

	<link href="lib/charts/chart.css" rel="stylesheet">
	<script src="lib/charts/chart.js"></script>
	<script type="text/javascript" src="js/charts.js"></script>

</body>

</html>