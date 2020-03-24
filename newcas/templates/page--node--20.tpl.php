<?php include_once('inc/header.inc'); ?>
<div class="contact-title text-center pt-2 pb-2">
  <h1>
    <?php print $title; ?>
  </h1>
  <div class="font-xs">
    <?php print render($page['breadcrumbs']); ?>
  </div>
</div>
<div id="contact_us_page" class="bg-bright pt-4 pb-4">
  <div class="container">
    <?php print render($tabs); ?>
    <div class="row m-0 shadow">
      <div class="col-md-6 p-0 bg-white">
        <div class="p-2 p-md-4">
          <?php print render($page['content']); ?>
        </div>
      </div>
      <div class="col-md-6 p-0 background-second">
        <div class="p-2 p-md-4">
          <?php print render($page['content_a']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('inc/footer.inc'); ?>
