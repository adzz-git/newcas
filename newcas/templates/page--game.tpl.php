<?php include_once('inc/header.inc'); ?>
<div id="game_page_top" class="bg-gray">
  <div class="gp-top border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-auto align-self-center">
          <span class="icon-<?php print $term_img; ?> color-main font-jumbo"></span>
        </div>
        <div class="col-auto align-self-center flex-grow-1 pt-4 pt-md-2 pb-4 pb-md-2">
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
