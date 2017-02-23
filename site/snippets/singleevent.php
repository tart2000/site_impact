
<?php $shortMonth = date('M',$event->getBeginTimestamp()) ?>

<li class="media">
    <div class="media-left">
        <div class="panel panel-danger text-center date">
            <div class="panel-heading month">
                <span class="panel-title strong">
                    <?php echo $shortMonth ?>
                </span>
            </div>
            <div class="panel-body day text-danger">
                <?php echo $date['mday'] ?>
            </div>
        </div>
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            <?php echo $event->getField('summary') ?>
            <em><?php echo $date['hours'] ?>h<?php e($date['minutes']!='00',$date['minutes']) ?></em>
            <?php if ($event->hasEnd()) : ?>
                <?php $endDate = $event->getEndDate() ?>
                <em> → <?php echo $endDate['hours'] ?>h<?php e($endDate['minutes']!='00',$endDate['minutes']) ?></em>
            <?php endif ?>
            </em>
        </h4>

        <p>
            <?php echo $event->getField('description') ?>
        </p>
        <?php if ($event->getField('link') != '') : ?>
            <a class="btn-simple" href="<?php echo $event->getField('link') ?>" target="_blank">En savoir plus <i class="fa fa-chevron-right"></i></a>
        <?php endif ?>
    </div>
</li>
