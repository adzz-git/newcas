<h3 class="text-capitalize"><?php print t('latest articles by').' '.taxonomy_term_load($view->args[0])->name; ?></h3>
<?php foreach ($view->result as $root) { ?>
  <?php
    $article = $root->_field_data['nid']['entity'];
    if(!empty($article->body)){
      $summary = mb_substr($article->body['und'][0]['value'], 0, 270).'...';
    } else {
      $summary = null;
    }
    $article_date = Date('d/m/Y', $article->created);
    switch($article->type){
      case 'casino_review':
        $article_img = '<div class="row m-0 justify-content-center h-100" style="background: #'.taxonomy_term_load($article->field_brand['und'][0]['tid'])->field_hexa['und'][0]['value'].';">';
        $article_img .= '<div class="col-4 col-md-5 col-lg-7 align-self-center text-center">';
        $article_img .= '<img src="'.file_create_url(taxonomy_term_load($article->field_brand['und'][0]['tid'])->field_image['und'][0]['uri']).'" class="img-fluid mt-5 mb-5 mt-sm-0 mb-sm-0" />';
        $article_img .= '</div>';
        $article_img .= '</div>';
        break;
      case 'bookmaker':
        $article_img = '<div class="row m-0 justify-content-center h-100" style="background: #'.taxonomy_term_load($article->field_brand['und'][0]['tid'])->field_hexa['und'][0]['value'].';">';
        $article_img .= '<div class="col-10 col-md-7 col-lg-7 align-self-center text-center">';
        $article_img .= '<img src="'.file_create_url(taxonomy_term_load($article->field_brand['und'][0]['tid'])->field_image['und'][0]['uri']).'" class="img-fluid mt-5 mb-5 mt-sm-0 mb-sm-0" />';
        $article_img .= '</div>';
        $article_img .= '</div>';
        break;
      case 'article':
        $article_img = '<img src="'.file_create_url($article->field_image['und'][0]['uri']).'" class="img-fluid" />';
        break;
      default:
        break;
    }
  ?>
  <div class="shadow-sm mt-3 mt-sm-1 p-3 p-sm-0 border">
    <div class="row">
      <div class="col-md-4 col-lg-3">
        <?php print $article_img; ?>
      </div>
      <div class="col-md-6 col-lg-7 pt-3 pb-3">
        <div class="font-weight-bold">
          <?php print $article->title; ?>
        </div>
        <div class="font-xs text-muted mt-2 mb-2">
          <span class="icon-calend font-s align-text-top"></span> <?php print $article_date; ?>
        </div>
        <?php if($summary): ?>
          <div class="const-height-b font-s text-muted">
            <?php print trim(strip_tags($summary)); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-md-2 col-lg-2 align-self-center">
        <a href="/" class="border border-warning d-block text-center color-cta m-0 m-sm-3 text-uppercase font-s p-3">
          <?php print t('Read More'); ?>
        </a>
      </div>
    </div>
  </div>
<?php } ?>
