<div id="reviews_grid">
  <div class="row justify-content-center">
    <?php
      $i = 1;
      foreach($view->result as $root) {
        $review = $root->_field_data['nid']['entity'];
        $review_term = taxonomy_term_load($review->field_brand['und'][0]['tid']);
        $hexa = $review_term->field_hexa['und'][0]['value'];
        $logo = file_create_url($review_term->field_image['und'][0]['uri']);
        $rating = $review->field_rating['und'][0]['value'];
        $path = drupal_get_path_alias('node/'.$review->nid);
        if(!empty($review->field_int_affiliate_url)){
          $int_aff_link = '/go/'.$review->field_int_affiliate_url['und'][0]['value'];
        } else {
          $int_aff_link = '/';
        }
      ?>
      <div class="col-md-auto flex-5 flex-grow-1 mb-3 mb-md-3">
        <div class="bg-white shadow rounded over-hidden border">
          <div style="background: #<?php print $hexa; ?>" class="const-height-a position-relative">
            <div class="bg-white pb-1 pl-2 position-absolute pr-2 pt-1 ribbon d-none d-md-block shadow-sm ribbon-<?php print $i; ?> rounded-bottom">
              <?php print $i; ?>
            </div>
            <div class="row justify-content-center h-100">
              <div class="col-11 col-sm-8 col-md-6 align-self-center text-md-center">
                <img src="<?php print $logo; ?>" class="img-fluid mt-4 mt-md-0 mb-4 mb-md-0" />
              </div>
            </div>
          </div>
          <?php if(!empty($user->uid)): ?>
            <a class="d-block text-info text-center font-xs" href="/taxonomy/term/<?php print $review->field_brand['und'][0]['tid']; ?>/edit">Edit This Brand</a>
            <a class="d-block text-warning text-center font-xs" href="/node/<?php print $review->nid; ?>/edit">Edit This Review</a>
          <?php endif; ?>
          <div class="p-2 text-md-center mt-md-2">
            <div class="font-s text-uppercase font-weight-bold">
              <a class="color-main" href="/<?php print $path; ?>"><?php print $review_term->name; ?></a>
            </div>
            <div class="mt-md-2">
              <div class="rating d-inline-block position-relative align-middle z-0 font-s" data-rating="<?php print $rating; ?>">
                <div class="rating-overlay-a text-warning position-relative z-1 over-hidden">
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                </div>
                <div class="rating-overlay-b text-black-50 position-absolute">
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                  <span class="font-m icon-shape-star"></span>
                </div>
              </div>
              <div class="d-block font-xs text-black-50 align-middle mb-2">
                (<?php print $rating; ?>/10)
              </div>
            </div>
            <!-- Bonuses -->
            <div class="mt-md-2 line-height-1">
              <?php print views_embed_view('bonuses', 'block_3', $review->field_brand['und'][0]['tid']); ?>
            </div>
            <!-- // Bonuses -->
            <div class="text-center mt-md-4 d-none d-md-block">
              <a href="<?php print $int_aff_link; ?>" rel="nofollow" target="_blank" class="background-cta d-inline-block font-s pb-2 pl-4 pr-4 pt-2 text-uppercase color-main"><?php print t('Claim Bonus'); ?></a>
            </div>
            <!-- Wrapper -->
          </div>
          <div class="mt-2 mt-md-0 d-md-none">
            <a href="<?php print $int_aff_link; ?>" rel="nofollow" target="_blank" class="background-cta d-block font-s pb-2 pl-4 pr-4 pt-2 text-uppercase color-main"><?php print t('Claim Bonus'); ?></a>
          </div>
        </div>
      </div>
      <?php
        $i++;
        }
      ?>
  </div>
  <?php if($view->current_display == 'block_8' || $view->current_display == 'block_9'): ?>
    <?php print $pager; ?>
  <?php else: ?>
    <div class="text-center mt-4">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>
</div>
