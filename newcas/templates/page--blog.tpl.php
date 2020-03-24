<?php include_once('inc/header.inc'); ?>
<div class="contact-title text-center pt-2 pb-2">
  <h1>
    <?php print $title; ?>
  </h1>
  <div class="font-xs">
    <?php print render($page['breadcrumbs']); ?>
  </div>
</div>
<div class="pt-4 pb-4">
  <div class="container">
      <?php print render($page['content']); ?>
  </div>
</div>
<?php include_once('inc/footer.inc'); ?>
