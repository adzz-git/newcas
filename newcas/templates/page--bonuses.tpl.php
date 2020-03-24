<?php
  $full_path = explode('/', drupal_get_path_alias());
  $brand_path = str_replace('-', ' ', $full_path[count($full_path)-1]);
  $brand_term = taxonomy_get_term_by_name($brand_path);
  $brand_term_array = array_values($brand_term)[0];
  $hexa = $brand_term_array->field_hexa['und'][0]['value'];
  $brand_logo = file_create_url($brand_term_array->field_image['und'][0]['uri']);
?>
<?php include_once('inc/header.inc'); ?>
<div style="background: #<?php print $hexa; ?>">
  <div class="pt-3 pb-5 gradient-dark-top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6 col-md-4 align-self-center text-center">
          <a href="/online-casinos/<?php print $full_path[count($full_path)-1]; ?>-review">
            <img src="<?php print $brand_logo; ?>" class="img-fluid" />
          </a>
        </div>
        <div class="col-12 text-center mt-3">
          <h1 class="font-weight-light text-uppercase text-white"><?php print t('@Brand Bonus Codes', array('@Brand' => $brand_term_array->name)); ?></h1>
        </div>
        <div class="col-12 text-center font-xs text-white">
          <?php print render($page['breadcrumbs']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php print render($page['content']); ?>
<?php include_once('inc/footer.inc'); ?>
