<?php if(!empty($page['stats'])): ?>
  <div id="front_stats_strip" class="pt-2 pt-md-4 pb-2 pb-md-4 border-bottom background-second">
    <div class="container">
      <?php print render($page['stats']); ?>
    </div>
  </div>
<?php endif; ?>
<div id="footer" class="footer bg-dark text-white pt-4 pb-4">
  <div class="container">
    <?php if(!empty($messages)) { print $messages; } ?>
    <div class="row">
      <div class="col-md-4">
        <?php print render($page['footer_a']); ?>
      </div>
      <div class="col-md-4">
        <?php print render($page['footer_b']); ?>
      </div>
      <div class="col-md-4">
        <?php print render($page['footer_c']); ?>
      </div>
    </div>
  </div>
</div>
<div id="footer_bottom" class="text-center text-white pt-2 pb-2 font-xs background-main">
  <div class="row m-0 justify-content-center">
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 p-0">
      <a href="<?php print $responsible_gaming; ?>" rel="nofollow"><img src="<?php print $res_img; ?>" class="img-fluid"></a>
    </div>
  </div>
  <div class="text-center mt-4">
    <?php print t('Copyright').' © '.Date('Y').' '.$site_name.' '.t('All Rights Reserved'); ?> .
  </div>
</div>
