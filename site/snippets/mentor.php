<div class="col-md-3 col-xs-6 col-sm-4 smb mentor">
    <?php if($image = $mentor->images()->sortBy('sort', 'asc')->first()): ?>
        <div class="thumb-img">
            <?php echo thumb($image, array('width' => 400, 'height' => 400, 'crop' => true)) ?>
        </div>
    <?php endif ?>
    <div class="mentor-meta">
        <h3><?php echo $mentor->title() ?></h3>
        <a href="<?php e($mentor->mentorLink()!='',$mentor->mentorLink()) ?>" target="_blank">
            <?php echo $mentor->skill() ?> <?php if($mentor->skill() != '' && $mentor->company()!='') { echo ' - ';} ?> <?php echo $mentor->company() ?>
        </a>
    </div>
</div>