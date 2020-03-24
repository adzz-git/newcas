<?php include_once('inc/header.inc'); ?>
<div class="bg-gray">
<?php if(!empty($page['highlighted'])): ?>
  <!-- Front Highlighted -->
  <div id="front_strip_a" class="pt-2 pt-md-4 pb-2 pb-md-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php print render($page['highlighted']); ?>
        </div>
        <div class="col-lg-6">
          <div class="h-50 d-none d-lg-block">
            <div class="h-100">
              <?php print views_embed_view('reviews','block_2'); ?>
            </div>
          </div>
          <div class="h-50 pt-3 d-none d-lg-block">
            <div class="h-100">
              <?php print views_embed_view('articles', 'block_1'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- // Front Highlighted -->
<?php endif; ?>
<?php if(!empty($page['top'])): ?>
  <!-- Front Highlighted -->
  <div id="front_strip_b" class="background-second pt-4 pb-4">
    <div class="container">
      <?php print render($page['top']); ?>
    </div>
  </div>
  <!-- // Front Newest Reviews -->
<?php endif; ?>
<?php if(!empty($page['mid'])): ?>
  <!-- Front Highlighted -->
  <div id="front_strip_c" class="bg-dark pt-4 pb-4">
    <div class="container">
      <?php print render($page['mid']); ?>
    </div>
  </div>
  <!-- // Front Newest Reviews -->
<?php endif; ?>
<?php if(!empty($page['content_b'])): ?>
  <div class="pt-4 pb-4">
    <div class="container">
      <?php print render($page['content_b']); ?>
    </div>
  </div>
<?php endif; ?>
<!-- Recently reviewed -->
<?php if(!empty($page['content_c'])): ?>
  <div id="recent_review" class="background-complimentary">
    <div class="pt-4 pb-4 gradient-dark">
      <div class="container">
        <?php print render($page['content_c']); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<!-- // Recently reviewed -->
<?php if(!empty($page['content'])): ?>
  <!-- Front Content -->
  <div id="front_articles_strip" class="pt-2 pt-md-4 pb-2 pb-md-4">
    <div class="container">
      <div class="bg-white shadow-sm rounded over-hidden p-3">
        <?php print render($tabs); ?>
        <h1 class="font-weight-bold color-main d-block border-bottom text-uppercase pb-2"><?php print $title; ?></h1>
        <?php print render($page['content']); ?>
      </div>
      <div class="bg-white shadow-sm rounded over-hidden mt-3">
        <h2 class="font-lg font-weight-bold color-main d-block text-uppercase p-2"><?php print t('FAQ'); ?></h2>
        <?php include_once('inc/faq.inc'); ?>
      </div>
    </div>
  </div>
  <!-- // Front Content -->
<?php endif; ?>
<?php if(!empty($page['bottom'])): ?>
  <!-- Front Articles -->
  <div id="front_articles_strip" class="pt-2 pt-md-4 pb-2 pb-md-4">
    <div class="container">
      <?php print render($page['bottom']); ?>
    </div>
  </div>
  <!-- // Front Articles -->
<?php endif; ?>
<?php if(!empty($page['contact'])): ?>
  <div id="contact_us" class="pt-2 pt-md-4 pb-2 pb-md-4 position-relative">
    <div class="container">
      <?php print render($page['contact']); ?>
    </div>
  </div>
<?php endif; ?>
</div>
<?php include_once('inc/footer.inc'); ?>
