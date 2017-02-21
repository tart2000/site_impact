<?php snippet('header') ?>

	<div class="container mini bmt mb" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<?php snippet('ecosystem') ?>

	</div> <!-- // container -->




<?php snippet('footer') ?>