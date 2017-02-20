<?php snippet('header') ?>

	<div class="mini container" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		
		<?php foreach ($page->children() as $co) : ?>
			<h2><?php echo $co->title() ?></h2>
			<?php echo $co->description()->kirbytext() ?>
			<hr>
			<?php foreach ($co->children() as $comp) : ?>
				<?php snippet('company', array('comp' => $comp)) ?>
			<?php endforeach ?> 
		<?php endforeach ?>

	</div> <!-- // container -->

<?php snippet('footer') ?>