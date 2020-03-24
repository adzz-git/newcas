<div class="row">
  <?php
  foreach($view->result as $root) {
    $os = $root->_field_data['nid']['entity'];
    $path = drupal_get_path_alias('node/'.$os->nid);
    $os_tid = taxonomy_term_load($os->field_operating_system['und'][0]['tid']);
    $os_img = file_create_url($os_tid->field_image['und'][0]['uri']);
    ?>
    <div class="col-4 col-sm-6 col-lg-3 align-self-center mb-4">
      <a class="d-block" href="/<?php print $path; ?>">
        <img class="img-fluid p-1" alt="<?php print $os_tid->name; ?>" title="<?php print $os->title; ?>" src="<?php print $os_img; ?>"/>
        <div class="font-xs color-main text-center text-black-50">
          <?php print $os_tid->name; ?>
        </div>
      </a>
    </div>
  <?php } ?>
</div>
