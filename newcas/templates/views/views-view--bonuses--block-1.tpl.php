<?php
  $bonus = $view->result[0]->_field_data['nid']['entity'];
  $bonus_desc = $bonus->field_bonus_description;
  if(!empty($bonus->field_int_affiliate_url)){
    $bonus_cta_link = '/go/'.$bonus->field_int_affiliate_url['und'][0]['value'];
  } else {
    $bonus_cta_link = '/';
  }
?>
<div class="text-center text-uppercase font-weight-light">
  <div class="d-inline-block d-md-block">
    <?php print $bonus_desc['und'][0]['value']; ?>
  </div>
  <div class="font-lg font-md-giant font-weight-bold d-inline-block d-md-block">
    <?php print $bonus_desc['und'][1]['value']; ?>
  </div>
  <?php if(!empty($bonus_desc['und'][2])): ?>
    <div class="d-inline-block d-md-block">
      <?php print $bonus_desc['und'][2]['value']; ?>
    </div>
  <?php endif; ?>
  <a href="<?php print $bonus_cta_link; ?>" rel="nofollow" target="_blank" class="background-cta color-main d-block font-weight-normal mt-3 p-3"><?php print t('Claim Bonus'); ?> ›</a>
</div>
