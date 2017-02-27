
<?php snippet( 'header') ?>

<div class="container bmt mb">
	<div class="row main">
		<section id="posts" class="posts col-sm-9">

		<?php foreach($page->children() as $post): ?>
			<article class="post row">
				<header class="col-xs-12">
					<h2>
						<a href="<?= getPostUrl($post) ?>">
							<?php echo $post->title()->html() ?>
						</a>
					</h2>
					<div class="meta">
						<span class="author"><?php echo l::get('Posted by') ?> <a href="<?= $site->url() ?>/author/<?= urlencode($post->author()) ?>"><?php echo getAuthorName((string)$post->author()) ?></a></span> <?php echo l::get('on') ?> <time datetime="<?= $post->date('d-m-Y') ?>"><?= $post->date(c::get('posts-date-format')) ?></time>
					</div>
					<?= getCoverImage($post, array('class' => 'img-responsive')) ?>
				</header>
				<div class="post-content col-xs-12">
					<?= getPostExcerpt($post) ?>
				</div>
			</article>
		<?php endforeach ?>

		</section>
		
	</div>
</div>

<?php snippet( 'footer') ?>
