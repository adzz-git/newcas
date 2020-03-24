<?php
  $brand_term = taxonomy_term_load($view->args[0]);
  $brand_name = $brand_term->name;
?>
<!-- Casinos Bonuses -->
<div id="brand_bonuses" class="bg-white shadow-sm mb-3 border">
  <div class="p-3 bg-bright text-center text-uppercase border-bottom font-s">
    <span class="icon-gift mr-2"></span><?php print t('@Brand Bonuses', array('@Brand' => $brand_name)); ?>
  </div>
  <?php foreach($view->result as $root){ ?>
    <?php
      $bonus = $root->_field_data['nid']['entity'];
      $bonus_term = taxonomy_term_load($bonus->field_brand['und'][0]['tid']);
      $bonus_hexa = $bonus_term->field_hexa['und'][0]['value'];
      $bonus_logo = file_create_url($bonus_term->field_image['und'][0]['uri']);
      $bonus_desc = $bonus->field_bonus_description['und'];
      if(!empty($bonus->field_int_affiliate_url)){
        $int_aff_link = '/go/'.$bonus->field_int_affiliate_url['und'][0]['value'];
      } else {
        $int_aff_link = '/';
      }
    ?>
  <div class="row m-0 border-bottom">
    <div class="col-4 col-sm-4 p-0">
      <div class="row m-0 h-100 justify-content-center" style="background: #<?php print $bonus_hexa; ?>">
        <div class="col-11 align-self-center">
          <a rel="nofollow" target="_blank" href="<?php print $int_aff_link; ?>">
            <img src="<?php print $bonus_logo; ?>" class="img-fluid" />
          </a>
        </div>
      </div>
    </div>
    <div class="col-7 font-xs align-self-center text-center pt-3 pb-3">
      <?php print $bonus_desc[0]['value'].' <span class="font-weight-bold">'.$bonus_desc[1]['value'].'</span>'; ?>
      <?php if(!empty($bonus_desc[2]['value'])){
        print $bonus_desc[2]['value'];
      }
      ?>
    </div>
    <div class="col-1 p-0">
      <a href="<?php print $int_aff_link; ?>" target="_blank" rel="nofollow" class="d-block font-m text-white h-100">
        <div class="row h-100 justify-content-center m-0 background-cta">
          <div class="col-12 align-self-center text-center p-0">
              <span class="icon-chevron-right"></span>
          </div>
        </div>
      </a>
    </div>
    <?php if(!empty($user->uid)): ?>
      <div class="col-12 p-0">
        <a class="d-block text-center font-s bg-danger text-white" href="/node/<?php print $bonus->nid; ?>/edit?destination=<?php print drupal_get_path_alias(); ?>">Edit this Bonus</a>
      </div>
    <?php endif; ?>
  </div>
<?php } ?>
  <div>
    <a class="d-block text-center p-3 bg-light border-top font-s text-uppercase color-main" href="/bonuses/bonus-codes/<?php print strtolower(str_replace(' ', '-', $brand_name)); ?>">
      <?php print t('view all bonus codes'); ?>
    </a>
  </div>
</div>
<!-- // Casinos Bonuses -->
