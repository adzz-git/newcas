<?php include_once('inc/header.inc'); ?>
<div id="game_page">
  <div class="gp-top border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-auto align-self-center">
          <span class="icon-<?php print $term_img; ?> color-main font-jumbo"></span>
        </div>
        <div class="col-auto align-self-center flex-grow-1 pt-2 pt-md-0 pb-2 pb-md-0">
          <div class="m-0 font-lg font-weight-bold"><?php print $term_name; ?></div>
          <div class="font-xs text-muted">
            <?php print render($page['breadcrumbs']); ?>
          </div>
        </div>
        <div class="col-md-5 border-top">
          <?php print render($page['top']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('inc/content.inc'); ?>
<?php include_once('inc/footer.inc'); ?>
