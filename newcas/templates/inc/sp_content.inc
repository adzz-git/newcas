<div class="sp-content pt-2 pt-md-4 pb-2 pb-md-4">
  <div class="container">
    <?php print render($tabs); ?>
    <div class="row">
      <div class="<?php if(empty($page['sidebar_first'])):?>col-12<?php else: ?>col-md-9<?php endif; ?>">
        <?php if(!empty($image)): ?>
          <!-- <div class="text-center mb-3">
            <img src="<?php print $image; ?>" class="img-fluid shadow"<?php if(!empty($img_title)): ?> title="<?php print $img_title; ?>"<?php endif; ?><?php if(!empty($img_alt)):?> alt="<?php print $img_alt; ?>"<?php endif; ?>>
          </div> -->
        <?php endif; ?>
        <h1><?php print $title; ?></h1>
        <?php print render($page['content']); ?>
      </div>
      <?php if(!empty($page['sidebar_first'])): ?>
        <div class="col-md-3">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
