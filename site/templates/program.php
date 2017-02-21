<?php snippet('header') ?>

	<div class="container bmt mb" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<hr>
		<?php foreach ($page->children('modules')->children() as $m) : ?>
            <a href="<?php echo $m->url() ?>"><?php echo $m->num() ?> - <?php echo $m->title() ?></a><br>
        <?php endforeach ?>

	</div> <!-- // container -->

<?php snippet('footer') ?>

                