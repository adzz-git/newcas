<?php
  $writer = $view->result[0]->_field_data['tid']['entity'];
  $writer_image = file_create_url($writer->field_image['und'][0]['uri']);
  $writer_desc = $writer->description;
  if(!empty($writer->field_slogan)){
    $writer_slogan = $writer->field_slogan['und'][0]['value'];
  } else {
    $writer_slogan = null;
  }
?>
<div class="pt-3 pb-3">
  <div class="row">
    <div class="col-md-3 col-lg-2">
      <img src="<?php print $writer_image; ?>" class="img-fluid rounded-circle p-5 p-sm-0">
      <?php if($writer_slogan): ?>
        <div class="text-center font-m text-muted font-italic mt-3">
          <span class="icon-left-quote"></span>
          &nbsp;<?php print $writer_slogan; ?>&nbsp;
          <span class="icon-right-quote"></span>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-md-9 col-lg-10">
      <div>
        <?php if(!empty($user->uid)): ?>
          <a href="/taxonomy/term/<?php print $writer->tid; ?>/edit?destination=<?php print drupal_get_path_alias(); ?>">
            Edit
          </a>
        <?php endif; ?>
        <?php print $writer_desc; ?>
      </div>
      <?php print views_embed_view('w_content', 'block', $writer->tid); ?>
    </div>
  </div>
</div>
