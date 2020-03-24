<!-- Top Payment Methods -->
<div id="review_intro">
  <div class="row">
    <div class="col-12">
      <!-- Review Text -->
      <div id="review_inner_desc" class="mb-4">
        <h1 class="font-weight-bold color-main d-block text-uppercase">
          <?php print $title; ?>
          <?php if($archived): ?>
            <span class="text-danger">- <?php print t('Blacklisted'); ?></span>
          <?php endif; ?>
        </h1>
        <?php if(!empty($writer)): ?>
          <?php include_once('writer.inc'); ?>
        <?php endif; ?>
        <?php print $intro; ?>
        <div class="collapse" id="review_hidden">
          <?php print render($page['content']); ?>
        </div>
        <a data-toggle="collapse" role="button" aria-expanded="false" aria-controls="review_hidden" href="#review_hidden" class="d-block text-center color-complimentary font-s text-uppercase mt-3">
          <span class="icon-chevron-down color-complimentary font-lg"></span>
        </a>
      </div>
      <?php if(!$slim): ?>
      <div class="row m-0 border-bottom pb-4 mb-4">
        <!-- Features -->
        <div class="col-md-6 p-0 mb-4 mb-md-0">
          <?php foreach ($features as $feat) { ?>
            <div class="font-s mb-2">
              <span class="icon-check-mark font-xs text-white mr-2 bg-success p-1 d-inline-block"></span> <?php print $feat['value']; ?>
            </div>
          <?php } ?>
        </div>
        <!-- Initial Stats -->
        <div class="col-md-6 p-0 font-s">
          <div class="mb-2">
            <span class="icon-pie-chart font-xs text-white mr-2 background-main p-1 d-inline-block"></span>
            <?php print '<span class="font-weight-bold">'.t('Betting markets').'</span>: '.$betting_markets; ?>
          </div>
          <div class="mb-2">
            <span class="icon-clock2 font-xs text-white mr-2 background-main p-1 d-inline-block"></span>
            <?php print '<span class="font-weight-bold">'.t('Payout speed').'</span>: '.$payout_speed; ?>
          </div>
          <?php if($live_chat): ?>
            <div class="font-s">
              <span class="icon-check-mark font-xs text-white mr-2 bg-success p-1 d-inline-block"></span> <?php print t('Live chat'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- Review Pros and Cons -->
      <div id="pros_cons" class="pb-4 mb-4 border-bottom">
        <div class="row m-0">
          <div class="col-md-6 p-0 mb-4 mb-md-0">
            <div class="font-weight-bold font-s d-block text-uppercase pb-1">
              <?php print t('Pros'); ?>:
            </div>
            <?php foreach($pros as $pro) { ?>
              <div class="font-s text-uppercase mb-2">
                <span class="align-middle icon-plus-circle mr-1 text-success"></span> <?php print $pro['value']; ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 p-0">
            <div class="font-weight-bold font-s d-block text-uppercase pb-1">
              <?php print t('Cons'); ?>:
            </div>
            <?php foreach($cons as $con) { ?>
              <div class="font-s text-uppercase mb-2">
                <span class="align-middle icon-circle-minus mr-1 text-danger"></span> <?php print $con['value']; ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    </div>
    <?php if(!$slim): ?>
    <?php if(!empty($page['top'])): ?>
      <div class="col-md-6 mb-4 mb-md-0">
        <div>
          <h4 class="font-m font-weight-bold mb-4 text-uppercase"><?php print t('banking methods'); ?></h4>
          <?php print render($page['top']); ?>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  </div>
</div>
