<div class="row">
  <?php
  foreach($view->result as $root) {
    $software = $root->_field_data['nid']['entity'];
    $path = drupal_get_path_alias('node/'.$software->nid);
    $software_tid = taxonomy_term_load($software->field_software['und'][0]['tid']);
    if(!empty($software_tid->field_lang_name)){
      $software_name = $software_tid->field_lang_name['und'][0]['value'];
    } else {
      $software_name = $software_tid->name;
    }
    $software_img = file_create_url($software_tid->field_image['und'][0]['uri']);
    ?>
    <div class="col-4 col-sm-3 col-lg-2 align-self-center mb-4 mb-md-0">
      <a class="d-block" href="/<?php print $path; ?>">
        <img class="img-fluid p-1" alt="<?php print $software_tid->name; ?>" title="<?php print $software->title; ?>" src="<?php print $software_img; ?>"/>
        <div class="font-xs color-main text-center text-black-50">
          <?php print $software_name; ?>
        </div>
      </a>
    </div>
  <?php } ?>
</div>
