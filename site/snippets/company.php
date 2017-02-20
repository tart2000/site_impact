<div class="row mt">
	<div class="col-sm-4 mt">
		<?php $logo = $comp->logo()->toFile() ?>
		<img src="<?php echo $logo->url() ?>">
	</div>
	<div class="col-sm-8">
		<h3><?php echo $comp->title() ?> <a href="<?php echo $comp->link() ?>" target="_blank"><i class="fa fa-external-link ml"></i></a></h3>
		<?php echo $comp->description() ?>
	</div>
</div>