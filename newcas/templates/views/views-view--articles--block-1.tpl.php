<div class="h-100 row justify-content-center">
  <?php
  foreach($view->result as $root){
    $article = $root->_field_data['nid']['entity'];
    $article_img = file_create_url($article->field_image['und'][0]['uri']);
    $path = drupal_get_path_alias('node/'.$article->nid);
  ?>
    <div class="col-md-6 mb-4 mb-md-0">
      <a href="/<?php print $path; ?>">
      <div class="h-100 row m-0 justify-content-end flex-column rounded shadow-sm" style="background: #868686 url(<?php print $article_img; ?>);background-size:cover;background-blend-mode:multiply;">
        <div class="col-auto text-white font-weight-bold pb-3">
            <?php print $article->title; ?>
        </div>
      </div>
    </a>
  </div>
<?php } ?>
</div>
