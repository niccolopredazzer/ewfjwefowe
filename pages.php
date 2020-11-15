<?php include('inc/head.php'); ?>

<body>

	<?php include('inc/header-pages.php'); ?>

	<main id="main">

		<section id="services" class="pt-200">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10">
						<header class="section-header">
							<h3 class="_title">Pages</h3><br>
							<?php

							$files = scandir(".");
							sort($files);

							foreach ($files as $entry) {
								if ((stristr($entry, ".php")) && (!stristr($entry, "pages.php"))) {

									$_entry = ucwords(str_replace(array("_", "-"), " ", $entry));

									echo '<a href="' . $entry . '" class="btn btn-primary btn-doc" target="_blank">
									' . str_replace(".php", "", $_entry) . '</a><br>';
								}
							}

							?>
						</header>
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