<div class="sp-top pt-2 pt-md-4 pb-2 pb-md-4 border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-3 col-sm-1 align-self-center">
        <img src="<?php print $term_image; ?>" class="img-fluid">
      </div>
      <div class="col-9 col-sm-11 align-self-center">
        <div class="m-0 font-lg font-weight-bold"><?php print $term_name; ?></div>
        <div class="font-xs text-muted">
          <?php print render($page['breadcrumbs']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
