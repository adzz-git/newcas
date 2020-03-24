<div class="row justify-content-center">
  <?php foreach ($view->result as $root) { ?>
    <?php
      $bonus = $root->_field_data['nid']['entity'];
      $bonus_term = taxonomy_term_load($bonus->field_brand['und'][0]['tid']);
      $bonus_img = file_create_url($bonus_term->field_image['und'][0]['uri']);
      if(!empty($bonus->field_int_affiliate_url)){
        $bonus_link = '/go/'.$bonus->field_int_affiliate_url['und'][0]['value'];
      } else {
        $bonus_link = '/';
      }
      if(!empty($bonus->field_bonus_code)){
        $bonus_code = '<strong>'.t('bonus code').'</strong>: '.$bonus->field_bonus_code['und'][0]['value'];
      } else {
        $bonus_code = t('no bonus code needed');
      }
      $bonus_hexa = $bonus_term->field_hexa['und'][0]['value'];
      $bonus_desc_a = '<div>'.$bonus->field_bonus_description['und'][0]['value'].'</div>';
      $bonus_desc_b = $bonus->field_bonus_description['und'][1]['value'];
      if(!empty($bonus->field_bonus_description['und'][2])){
        $bonus_desc_c = $bonus->field_bonus_description['und'][2]['value'];
      } else {
        $bonus_desc_c = '';
      }
    ?>
    <div class="col-sm-6 col-lg-auto flex-grow-1 flex-5 mb-4 mb-md-0">
      <a href="<?php print $bonus_link; ?>" rel="nofollow" target="_blank">
        <div class="bg-white rounded shadow-sm pt-3">
          <div class="logo-icon m-auto" style="background: #<?php print $bonus_hexa; ?>">
            <div class="row m-0 h-100 justify-content-center">
              <div class="col-12 align-self-center">
                <img src="<?php print $bonus_img; ?>" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="const-height-b">
            <div class="row m-0 h-100">
              <div class="font-s text-center p-0 col-12 pl-4 pr-4 align-self-center text-dark text-uppercase">
                <?php print $bonus_desc_a; ?>
                <?php print $bonus_desc_b.' '.$bonus_desc_c; ?>
              </div>
            </div>
          </div>
          <div class="bg-gray p-2 border-top text-uppercase font-xs text-center text-dark">
            <?php print $bonus_code; ?>
          </div>
          <?php if(!empty($user->uid)): ?>
            <a href="/node/<?php print $root->nid; ?>/edit" class="text-center background-cta text-white d-block">
              Edit This Bonus
            </a>
          <?php endif; ?>
        </div>
      </a>
    </div>
  <?php } ?>
</div>
<?php print $footer; ?>
