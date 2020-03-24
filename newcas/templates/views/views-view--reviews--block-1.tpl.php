<?php print $header; ?>
<?php
  foreach($view->result as $root) {
    $casino = $root->_field_data['nid']['entity'];
    $casino_path = drupal_get_path_alias('node/'.$casino->nid);
    $casino_term = taxonomy_term_load($casino->field_brand['und'][0]['tid']);
    $casino_name = $casino_term->name;
    $casino_img = file_create_url($casino_term->field_image['und'][0]['uri']);
    $casino_hexa = $casino_term->field_hexa['und'][0]['value'];
    if(!empty($casino->field_int_affiliate_url)){
      $int_aff_link = '/go/'.$casino->field_int_affiliate_url['und'][0]['value'];
    } else {
      $int_aff_link = '/';
    }
?>
<div class="row m-0 border-bottom hover-in-parent">
    <div class="col-4 col-sm-4 p-0 pt-3 pb-3" style="background: #<?php print $casino_hexa; ?>">
      <a class="d-inline-block" href="/<?php print $casino_path; ?>">
        <div class="row m-0 h-100 justify-content-center">
          <div class="col-7 col-md-9">
              <img src="<?php print $casino_img; ?>" class="img-fluid" />
          </div>
        </div>
      </a>
    </div>
    <div class="col-auto flex-grow-1 font-xs text-uppercase align-self-center p-0 pl-1 pr-1">
      <?php print $casino_name; ?>
    </div>
    <div class="col-auto p-0">
      <a href="<?php print $int_aff_link; ?>" rel="nofollow" target="_blank" class="d-inline-block h-100 text-white hover-in over-hidden">
        <div class="row m-0 h-100 justify-content-center background-cta p-1">
          <div class="p-0 col-12 align-self-center font-xs">
            <div class="d-none d-md-inline-block align-middle">
              <?php print t('Play now'); ?>
            </div>
            <div class="d-inline-block font-lg align-middle pl-4 pl-md-0 pr-4 pr-md-0">
              ›
            </div>
          </div>
        </div>
      </a>
    </div>
</div>
<?php } ?>
<?php print $footer; ?>
