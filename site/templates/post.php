<?php snippet( 'header') ?>

<div class="container mini mb bmt">
	<div class="row main">
		<section id="post" class="col-sm-9 single-post">

			<article class="post row">
				<header class="col-xs-12">
					<?= getCoverImage($post, array('class' => 'img-responsive')) ?>
					<h1 class="post-title">
						<?= $post->title()->html() ?>
					</h1>
					<div class="meta">
						<span class="author"><?php echo l::get('Posted by') ?> <a href="<?= $site->url() ?>/author/<?= urlencode($post->author()) ?>"><?php echo getAuthorName((string)$post->author()) ?></a></span> <?php echo l::get('on') ?> <time datetime="<?= $post->date('Y-m-d') ?>"><?= $post->date(c::get('posts-date-format')) ?></time>
					</div>
				</header>
				<div class="post-content col-xs-12">
					<?= $post->text()->kirbytext() ?>
				</div>

			</article>
		
		</section>

	</div>
</div>

<?php snippet('footer') ?>
