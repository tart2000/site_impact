<?php snippet( 'header') ?>

<div class="container mini mb bmt">
		<section id="post" class="single-post">

			<article class="post row">
				<header class="col-xs-12">
					<?= getCoverImage($post, array('class' => 'img-responsive')) ?>
					<h1 class="post-title">
						<?= $post->title()->html() ?>
					</h1>
					<div class="meta">
						<span class="author"><?php echo l::get('Posted by') ?> <a href="<?= $site->url() ?>/author/<?= urlencode($post->author()) ?>"><?php echo getAuthorName((string)$post->author()) ?></a></span> <?php echo l::get('on') ?> <time datetime="<?= $post->date('Y-m-d') ?>"><?= $post->date(c::get('posts-date-format')) ?></time>
						<hr>
					</div>
				</header>
				<div class="post-content col-xs-12">
					<?= $post->text()->kirbytext() ?>
				</div>

			</article>
		
		</section>

			<nav aria-label=""> <!-- Navigation -->
			  <ul class="pager">
			  	<?php if ($page->hasPrev()) : ?>
			    	<li class="previous"><a href="<?php echo $page->prev()->url() ?>"><span aria-hidden="true">&larr;</span> <?php echo $page->prev()->title() ?></a></li>
			    <?php endif ?>
			    <?php if ($page->hasNext()) : ?>
			    	<li class="next"><a href="<?php echo $page->next()->url() ?>"><?php echo $page->next()->title() ?> <span aria-hidden="true">&rarr;</span></a></li>
			  	<?php endif ?>
			  </ul>
			</nav>
</div>

<?php snippet('footer') ?>
