<div class="mb-2 border-bottom pb-2">
  <div class="row">
    <div class="col-9">
      <div class="row">
        <div class="col-2 col-sm-2 col-md-1">
          <img src="<?php print $writer_image; ?>" class="img-fluid rounded-circle shadow-sm">
        </div>
        <div class="col-auto align-self-center text-muted font-xs p-0">
          <?php print t('by TR').' <a class="text-muted" href="/writer/'.$writer_tid.'">'.$writer.'</a> | '.Date('d/m/Y', $node->changed); ?>
        </div>
      </div>
    </div>
  </div>
</div>
