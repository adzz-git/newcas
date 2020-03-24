<div class="main-content pt-3 pb-3 bg-gray">
  <div class="container">
    <div class="row">
      <div class="<?php if(!empty($page['sidebar_first'])): ?>col-md-9<?php else: ?>col-12<?php endif; ?> mb-3 mb-md-0">
        <div class="content-body bg-white p-3 shadow-sm rounded">
          <h1 class="font-weight-bold color-main d-block border-bottom text-uppercase pb-2"><?php print $title; ?></h1>
          <?php print render($tabs); ?>
          <?php if(!empty($image)): ?>
            <!-- <div class="text-center mb-3">
              <img src="<?php print $image; ?>" class="img-fluid shadow"<?php if(!empty($img_title)): ?> title="<?php print $img_title; ?>"<?php endif; ?><?php if(!empty($img_alt)):?> alt="<?php print $img_alt; ?>"<?php endif; ?>>
            </div> -->
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php if(!empty($node->field_question_a)): ?>
            <?php include_once('faq.inc'); ?>
          <?php endif; ?>
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
