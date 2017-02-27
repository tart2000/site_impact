<?php snippet('header') ?>

	<div class="container mini bmt mb" role="main">
		<em>
			<a href="<?php echo $page->parent()->parent()->url() ?>">
				<?php echo $page->parent()->parent()->title() ?> > <?php echo $page->parent()->title() ?>
			</a>
		</em>
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<div class="row mt">
			<div class="col-sm-4">
				<h4 class="<?php e($page->hasChildren() == false, 'strike') ?>">Pages</h4>
				<?php if ($page->hasFile()) : ?>
					<div class="list-group">
					<?php foreach ($page->children() as $p) : ?>
						<a href="<?php echo $p->url() ?>" class="list-group-item">
							<?php echo $p->title() ?>
						</a>
					<?php endforeach ?>
					</div>
				<?php endif ?>
			</div>
			<div class="col-sm-4">
				<?php $links = $page->links()->toStructure() ?>
				<h4 class="<?php e($links=='','strike') ?>">Liens</h4>
				<?php if ($links != '') : ?>
					<div class="list-group">
						<?php foreach ($links as $link) :?>
							<a href="<?php echo $link->link() ?>" class="list-group-item" target="_blank">
								<?php echo $link->titre() ?>
							</a>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			</div>
			<div class="col-sm-4">
				<h4 class="<?php e($page->hasFiles() == false, 'strike') ?>">Documents</h4>
				<?php if ($page->hasFiles()) : ?>
				<div class="list-group">
					<?php foreach ($page->files() as $d) : ?>
						<a href="<?php echo $d->url() ?>" class="list-group-item">
						    <?php echo $d->filename() ?> <span class="badge"><?php echo $d->niceSize() ?></span>
						 </a>
					<?php endforeach ?>
					</div>
				<?php endif ?>
			</div>
		</div>


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


	</div> <!-- // container -->

<?php snippet('footer') ?>