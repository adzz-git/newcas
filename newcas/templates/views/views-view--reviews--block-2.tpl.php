<?php
  $review = $view->result[0]->_field_data['nid']['entity'];
  $term = taxonomy_term_load($review->field_brand['und'][0]['tid']);
  $term_hexa = $term->field_hexa['und'][0]['value'];
  $term_img = file_create_url($term->field_image['und'][0]['uri']);
  if(!empty($review->field_int_affiliate_url)){
    $int_aff_link = '/go/'.$review->field_int_affiliate_url['und'][0]['value'];
  } else {
    $int_aff_link = '/';
  }
?>
<a href="<?php print $int_aff_link; ?>" target="_blank" rel="nofollow">
  <div class="rounded over-hidden h-100 shadow-sm" style="background: #<?php print $term_hexa; ?>;">
    <div class="row m-0 h-100 justify-content-center gradient-dark-right">
      <div class="col-6 align-self-center text-white">
        <div class="font-s font-weight-light mb-2">
          <?php print t('Newest Casino'); ?>
        </div>
        <div class="text-uppercase font-lg">
          <?php print $term->name; ?>
        </div>
        <div class="mt-2 d-inline-block pt-1 pl-3 pr-3 pb-1 border font-s font-weight-light">
          <?php print t('Play Now'); ?>
        </div>
      </div>
      <div class="col-6 align-self-center text-right">
        <img src="<?php print $term_img; ?>" class="img-fluid">
      </div>
    </div>
  </div>
</a>
