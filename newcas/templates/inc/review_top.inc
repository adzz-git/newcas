<div id="review_top_wide" style="<?php if(!$archived): ?>background: #<?php print $hexa; ?><?php else: ?>background: #888<?php endif; ?>">
  <div class="gradient-dark pt-2 pt-md-4 pb-2 pb-md-4">
    <div class="container">
      <?php print render($tabs); ?>
      <div class="row text-<?php print $invert; ?>">
        <div class="col-md-3 align-self-center text-center text-md-left mb-4 mb-md-0">
          <a target="_blank" rel="nofollow" href="<?php print $aff_url; ?>">
            <img src="<?php print $casino_logo; ?>" class="img-fluid p-2<?php if($archived): ?> filter-grayscale<?php endif; ?>">
          </a>
          <?php if(!empty($user->uid)): ?>
            <a href="/taxonomy/term/<?php print $node->field_brand['und'][0]['tid']; ?>/edit/?destination=<?php print drupal_get_path_alias(); ?>" class="btn btn-block btn-light font-xs shadow-sm text-center">
              <span class="align-middle font-lg icon-layers"></span>
              Edit This Brand Taxonomy</a>
          <?php endif; ?>
        </div>
        <div class="col-md-6 align-self-center text-center text-md-left">
          <div>
            <div class="font-lg font-weight-bold font-md-giant text-uppercase">
              <?php if($archived){
                print $casino_name.' - '.t('Blacklisted');
              } else {
                print $casino_name.' '.t('Review');
              } ?>
            </div>
            <div class="font-xs">
              <?php print render($page['breadcrumbs']); ?>
            </div>
            <div class="mb-2 mt-2">
              <?php include_once('rating.inc'); ?>
            </div>
            <div class="font-s">
              <?php print $desc; ?>
            </div>
          </div>
        </div>
        <?php if(!$archived): ?>
        <div class="col-md-3 align-self-center mt-4 mt-md-0">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>
