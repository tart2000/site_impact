<?php snippet('header') ?>

	<div class="container mini bmt mb" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<div class="mt panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <?php $count = 1 ?>
		  <?php foreach ($page->children('modules') as $m) : ?>
		    <div class="panel panel-default">
		      <div class="panel-heading grey" role="tab" id="heading<?php echo $count ?>">
		        <h4 class="panel-title">
		          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count ?>" aria-expanded=<?php e($count==1,'true','false') ?> aria-controls="collapse<?php echo $count ?>">
		            <?php echo $m->num() ?> - <?php echo $m->title() ?>
		          </a>
		        </h4>
		      </div>
		      <div id="collapse<?php echo $count ?>" class="panel-collapse collapse <?php e($count==1,'in') ?>" role="tabpanel" aria-labelledby="heading<?php echo $count ?>">
		        <div class="panel-body">
		          <?php echo $m->description()->kirbytext() ?>

		          	<!-- Ici, les colonnes pour les blocs de contenu -->
		          	<?php if ($m->hasChildren()): ?>
				    <?php $kids = $m->children()->count() ?>
				    <div class="row mt">
				    	<?php $count = 1 ?>
				    	<?php foreach ($m->children('bloc') as $bloc) : ?>
					    	<div class="col-sm-<?php echo floor(12/$kids) ?> <?php e($count != 1, 'arrow') ?>">
					    		<div class="panel panel-info">
					    			<div class="panel-heading">
					    				<a href="<?php echo $bloc->url() ?>" class="">
					    					<h4 class="panel-title"><?php echo $bloc->title() ?></h4>
					    				</a>
					    			</div>
								    <div class="panel-body">
								    	<p><?php echo $bloc->text()->excerpt(80) ?></p>
								    	<a href="<?php echo $bloc->url() ?>" class="btn-simple">Plus <i class="fa fa-chevron-right"></i></a>
								    </div>
								</div>
					    	</div>
					    	<?php $count++ ?>
					    <?php endforeach ?>
				    </div>
					<?php endif ?><!-- Fin des blocs de contenus-->

		        </div> <!-- end panel-body -->
		      </div>
		    </div>
		    <?php $count++ ?>
		  <?php endforeach ?>
		</div>

	</div> <!-- // container -->

<?php snippet('footer') ?>

                