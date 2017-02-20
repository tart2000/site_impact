<?php snippet('header') ?>

	<div class="mini container bmt" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->description()->kirbytext() ?>
		<hr>
		<?php foreach ($page->children() as $comp) : ?>
			<?php snippet('company', array('comp' => $comp)) ?>
		<?php endforeach ?> 

	</div> <!-- // container -->

<?php snippet('footer') ?>