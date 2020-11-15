<?php include('inc/head.php'); ?>

<body>

	<?php include('inc/header-pages.php'); ?>


	<main id="main">

		<div class="d-none d-md-block">
			<section id="services" class="reg-top-bg">


				<div class="container">

					<h1 class="text-center">IMPOSTAZIONI ACCOUNT</h1>

				</div>

			</section>
		</div>
		

		<section class="pt-50 pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8">
						<div class="row settings_box">
							<div class="col-sm-12 col-md-8">
								<h3>Accesso e Sicurezza</h3>
								<h4>Password<br>*******</h4>
							</div>
							<div class="col-sm-12 col-md-4 text-center text-md-right">
								<a href="#res-pwd-rec" data-toggle="modal" data-target="#res-pwd-rec" class="btn btn-primary mt-10"><i class="mt-edit mr-2"></i> Modifica</a>								
							</div>
						</div>
						<div class="row settings_box">
							<div class="col-sm-12 col-md-8">
								<h3>Gestione Consensi</h3>
								<h4>Hai fornito il tuo consenso per la ricezione della newsletter</h4>
							</div>
							<div class="col-sm-12 col-md-4 text-center text-md-right">
								<label class="toggle_switch">
									<input type="checkbox">
									<span class="toggle-slider rounder"></span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

	<?php include('inc/footer-pages.php'); ?>
	<?php include('inc/modals.php'); ?>
	<?php include('inc/scripts.php'); ?>


</body>

</html>