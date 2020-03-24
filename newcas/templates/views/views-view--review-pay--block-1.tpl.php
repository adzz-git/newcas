<div class="row m-0 justify-content-between">
  <div class="col-auto align-self-center p-0 text-center">
    <span class="icon-left-chevron d-md-none"></span>
  </div>
  <div class="col-8 col-md-auto flex-grow-1 p-0 md-slide-wrapper">
    <div class="row justify-content-center md-slide">
      <?php
      foreach($view->result as $pay) {
        $root = $pay->_field_data['nid']['entity'];
        $path = drupal_get_path_alias('node/'.$root->nid);
        $term = taxonomy_term_load($root->field_payment_option['und'][0]['tid']);
        if(!empty($term->field_lang_name)){
          $name = $term->field_lang_name['und'][0]['value'];
        } else {
          $name = $term->name;
        }
        $img = file_create_url(taxonomy_term_load($root->field_payment_option['und'][0]['tid'])->field_image['und'][0]['uri']);
      ?>
      <div class="col-6 col-sm-3 col-md-1 align-self-center mb-4">
        <a class="d-block" href="/<?php print $path; ?>">
          <img class="img-fluid p-1" alt="<?php print $name; ?>" title="<?php print $root->title; ?>" src="<?php print $img; ?>"/>
          <div class="font-xs color-main text-center text-black-50">
            <?php print $name; ?>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="col-auto align-self-center p-0 text-center">
    <span class="icon-right-chevron d-md-none"></span>
  </div>
</div>
