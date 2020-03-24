<!-- This is a Content template that is displayed in the page_online_casinos template -->
<?php
  $brand = taxonomy_term_load($view->result[0]->_field_data['nid']['entity']->field_brand['und'][0]['tid']);
  $hexa = $brand->field_hexa['und'][0]['value'];
  $logo = file_create_url($brand->field_image['und'][0]['uri']);
  $bonus_summary = $brand->field_bonus_text['und'][0]['value'];
?>
<div class="pt-3 pb-3 bg-bright">
  <div class="container">
    <div class="shadow bg-white position-relative top-slide-s">
      <?php foreach ($view->result as $bonus) { ?>
        <?php
          if(!empty($bonus->_field_data['nid']['entity']->field_int_affiliate_url)){
            $int_aff_link = '/go/'.$bonus->_field_data['nid']['entity']->field_int_affiliate_url['und'][0]['value'];
          } else {
            $int_aff_link = '/';
          }
          $type = taxonomy_term_load($bonus->_field_data['nid']['entity']->field_bonus_type['und'][0]['tid'])->name;
          if(!empty($bonus->_field_data['nid']['entity']->field_bonus_code)){
            $coupon = $bonus->_field_data['nid']['entity']->field_bonus_code['und'][0]['value'];
          } else {
            $coupon = null;
          }
          if(!empty($bonus->_field_data['nid']['entity']->field_wagering)){
            $wagering = $bonus->_field_data['nid']['entity']->field_wagering['und'][0]['value'];
          } else {
            $wagering = null;
          }
        ?>
        <div class="border-bottom">
          <div class="row bonus-code-row">
            <div class="col-12 col-md-3 mb-3 mb-md-0">
              <div class="bonus-devider-a h-100 p-3 p-md-0 bg-bright">
                <div class="row m-0 justify-content-center text-center h-100">
                  <div class="col-4 col-md-3 col-lg-3 align-self-center p-0">
                    <img src="<?php print $logo; ?>" class="img-fluid img-grayscale" />
                  </div>
                  <div class="col-12 p-0 font-weight-bold text-uppercase font-s mt-2">
                    <?php print $brand->name; ?>
                  </div>
                  <div class="col-12 p-0 font-weight-normal text-uppercase text-muted font-xs">
                    <?php print $type; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 text-uppercase text-center text-md-center align-self-center">
              <div class="h-100 bonus-divider-b font-s font-md-m">
                <div class="d-inline-block font-weight-bold">
                  <?php print $bonus->_field_data['nid']['entity']->field_bonus_description['und'][0]['value']; ?>
                </div>
                <div class="d-inline-block font-weight-bold">
                  <?php print $bonus->_field_data['nid']['entity']->field_bonus_description['und'][1]['value']; ?>
                </div>
                <?php if(!empty($bonus->_field_data['nid']['entity']->field_bonus_description['und'][2])): ?>
                  <div class="d-inline-block font-weight-bold">
                    <?php print $bonus->_field_data['nid']['entity']->field_bonus_description['und'][2]['value']; ?>
                  </div>
                <?php endif; ?>
                <?php if($wagering): ?>
                  <div class="font-xs text-muted mt-3">
                    <?php print $wagering; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-6 col-md-3 align-self-center">
              <div class="h-100 bonus-divider-c p-3">
                <?php if($coupon): ?>
                  <div class="text-center font-s mb-1 mb-sm-3 font-weight-bold border-coupon pt-1 pb-1 pt-md-1 pb-md-1">
                    <?php print t('bonus code').': '.$coupon; ?>
                  </div>
                <?php endif; ?>
                <a href="<?php print $int_aff_link; ?>" rel="nofollow" target="_blank" class="text-center d-block p-2 p-md-3 color-main background-cta rounded text-uppercase">
                  <?php print t('Claim Bonus'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- End of Shadow Block -->
    <div class="shadow bg-white">
      <h2 class="bg-bright border-bottom font-m font-weight-bold m-0 p-3 text-uppercase"><span class="align-middle icon-gift"></span> <?php print $brand->name.' '.t('Bonus Summary'); ?></h2>
      <div class="p-3">
        <?php print strip_tags($bonus_summary); ?>
      </div>
    </div>
  </div>
</div>
