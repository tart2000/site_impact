
<?php $count = 0 ?>
<ul class="nav nav-pills nav-justified bmt pb" role="tablist">
    <?php foreach (page('categories')->children() as $cat) : ?>
        <li role="presentation" class="<?php e($count==0,'active') ?>">
            <a href="#<?php echo $cat->dirname() ?>" aria-controls="<?php echo $cat->dirname() ?>" role="tab" data-toggle="tab"><?php echo $cat->title() ?></a>
        </li>
        <?php $count++ ?>
    <?php endforeach ?>
</ul> 

<?php $count = 0 ?>
<div class="tab-content">
    <?php foreach (page('categories')->children() as $cat) : ?>
        <div role="tabpanel" class="row pb tab-pane fade <?php e($count==0,'in active') ?>" id="<?php echo $cat->dirname() ?>">
            <?php $thecat = $cat->uid() ?>
            <?php foreach (page('ecosystem')->children()->filterBy('category','*=',$thecat) as $mentor) : ?>
                <?php snippet('mentor', array('mentor'=>$mentor)) ?>
            <?php endforeach ?>
        </div>
        <?php $count++ ?>
    <?php endforeach ?>
</div>
