<?php include_once('inc/header.inc'); ?>
<?php include_once('inc/breadcrumb.inc'); ?>
<div class="main-content pt-0 pt-md-3 pb-3 bg-gray">
  <div class="container">
    <?php print render($tabs); ?>
    <div class="row">
      <div class="<?php if(!empty($page['sidebar_first'])): ?>col-md-9<?php else: ?>col-12<?php endif; ?>">
        <div class="content-body shadow-sm">
          <?php if(!empty($image)): ?>
            <div class="article-image-box text-center position-relative over-hidden">
              <img src="<?php print $image; ?>" class="img-fluid w-100 h-100 shadow"<?php if(!empty($img_title)): ?> title="<?php print $img_title; ?>"<?php endif; ?><?php if(!empty($img_alt)):?> alt="<?php print $img_alt; ?>"<?php endif; ?>>
              <div class="position-absolute article-image-child pb-2 w-100">
                <div class="row text-white justify-content-center">
                  <div class="col-12 text-center">
                    <h1 class="font-lg font-md-giant"><?php print $title; ?></h1>
                  </div>
                  <div class="col-sm-1 col-2 align-self-center">
                    <img src="<?php print $writer_image; ?>" class="img-fluid rounded-circle">
                  </div>
                  <div class="col-auto align-self-center font-s p-0 font-weight-light">
                    <a href="/writer/<?php print $writer_tid; ?>" class="text-white"><?php print $writer; ?></a> | <?php print format_date($date, 'custom', 'd / m / Y');; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <div class="bg-white p-3">
            <?php print render($page['content']); ?>
          </div>
        </div>
      </div>
      <?php if(!empty($page['sidebar_first'])): ?>
        <div class="col-md-3">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php include_once('inc/footer.inc'); ?>
