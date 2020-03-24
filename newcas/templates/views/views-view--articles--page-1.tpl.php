<div class="row justify-content-center">
  <?php foreach($view->result as $root) { ?>
    <?php
      $article = $root->_field_data['nid']['entity'];
      $path = drupal_get_path_alias('node/'.$article->nid);
      $img = file_create_url($article->field_image['und'][0]['uri']);
      if(!empty($article->body['und'][0]['summary'])){
        $article_sum = $article->body['und'][0]['summary'];
      } else {
        $article_sum  = mb_substr($article->body['und'][0]['value'], 0, 128).'...';
      }
      $article_date = format_date($article->created, 'custom', 'd/m/Y');
    ?>
    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
      <a href="<?php print $path; ?>" class="color-main d-block border shadow-sm bg-white">
        <div class="p-5" style="background: url(<?php print $img; ?>);background-size: cover;background-position: 50% 50%;">
          <div class="pt-5"></div>
        </div>
        <div class="p-2 font-s text-left">
          <div class="row m-0">
            <div class="col-3 col-lg-2 align-self-center p-0">
                <img src="<?php print $view->writer_image; ?>" class="img-fluid rounded-circle">
            </div>
            <div class="col-9 col-lg-10 align-self-center font-xs">
              <div>
                <?php print $view->writer; ?>
              </div>
              <span class="icon-calend"></span> <?php print $article_date; ?>
            </div>
          </div>
          <div class="font-weight-bold mt-2">
            <?php print $article->title; ?>
          </div>
          <div class="mt-2 text-muted">
            <?php print strip_tags($article_sum); ?>
          </div>
        </div>
        <span class="background-cta text-uppercase d-block font-s mt-2 p-2 text-center color-main"><?php print t('Read More'); ?></span>
      </a>
    </div>
  <?php } ?>
</div>
<div class="mt-4">
  <?php print $pager; ?>
</div>
