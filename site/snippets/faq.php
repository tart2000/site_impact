<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <?php $count = 1 ?>
  <?php foreach (page('faq')->questions()->yaml() as $qa) : ?>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading<?php echo $count ?>">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count ?>" aria-expanded="false" aria-controls="collapse<?php echo $count ?>">
            <?php echo $qa['question'] ?>
          </a>
        </h4>
      </div>
      <div id="collapse<?php echo $count ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $count ?>">
        <div class="panel-body">
          <?php echo $qa['answer'] ?>
        </div>
      </div>
    </div>
    <?php $count++ ?>
  <?php endforeach ?>
</div>