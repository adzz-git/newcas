<div class="wrapper shadow-sm">
  <div class="<?php if(count($view->result) > 1): ?>z-0 slider-container<?php else: ?>h-100<?php endif; ?>">
    <?php foreach($view->result as $root) { ?>
      <?php
        $slide = $root->_field_data['nid']['entity'];
        if(!empty($slide->field_bg)){
          $bg = file_create_url($slide->field_bg['und'][0]['uri']);
        } else {
          $bg = null;
        }
        $img = file_create_url($slide->field_image['und'][0]['uri']);
        if(!empty($slide->field_bonus_code)){
          $bonus_code = $slide->field_bonus_code['und'][0]['value'];
        } else {
          $bonus_code = null;
        }
        $bonus_casino = taxonomy_term_load($slide->field_brand['und'][0]['tid']);
        $bonus_casino_logo = file_create_url($bonus_casino->field_image['und'][0]['uri']);
        $bonus_hexa = $bonus_casino->field_hexa['und'][0]['value'];
        if(!empty($slide->field_int_affiliate_url)){
          $int_aff_link = $slide->field_int_affiliate_url['und'][0]['value'];
        } else {
          $int_aff_link = '';
        }
      ?>
      <?php if($bg): ?>
      <div class="h-100 rounded" style="background:#868686 url(<?php print $bg; ?>);background-size: cover;background-repeat: no-repeat;background-position: 50% 0%;background-blend-mode:multiply;">
      <?php else: ?>
      <div class="h-100 rounded" style="background:#<?php print $bonus_hexa; ?>">
      <?php endif; ?>
        <div class="row justify-content-center h-100 slider-box">
          <div class="col-4 col-md-3 align-self-center text-center text-md-right">
            <div>
              <img src="<?php print $img; ?>" class="img-fluid">
            </div>
          </div>
          <div class="col-md-7 align-self-center">
            <div class="p-4 p-md-0 text-center text-md-left">
              <div class="w-25 mb-3 m-auto m-md-0">
                <img src="<?php print $bonus_casino_logo; ?>" class="img-fluid">
              </div>
              <div>
                <?php $i=0 ; foreach ($slide->field_bonus_description['und'] as $bonus) { ?>
                  <div class="text-white<?php if($i < 2): ?> font-lg font-md-xxl font-weight-bold font-weight-bolder d-inline-block<?php endif; ?>">
                    <?php print $bonus['value']; ?>
                  </div>
                  <?php $i++; } ?>
              </div>
              <a href="go/<?php print $int_aff_link; ?>" target="_blank" rel="nofollow" class="background-cta d-inline-block font-m pb-2 pl-4 pr-4 pt-2 text-uppercase color-main mt-4"><?php print t('Claim Bonus'); ?></a>
              <?php if($bonus_code): ?>
                <div class="font-xs text-white mt-2">
                  <span class="font-weight-bold"><?php print t('bonus code'); ?>:</span> <?php print $bonus_code; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="prev">
    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="30px" viewBox="0 0 551.13 551.13" width="30px">
      <g>
        <path d="m189.451 275.565 223.897-223.897v-51.668l-275.565 275.565 275.565 275.565v-51.668z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
      </g>
    </svg>
  </div>
  <div class="next">
    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="30px" viewBox="0 0 551.13 551.13" width="30px">
      <g>
        <path d="m189.451 275.565 223.897-223.897v-51.668l-275.565 275.565 275.565 275.565v-51.668z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
      </g>
    </svg>
  </div>
</div>
