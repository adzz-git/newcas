<div class="p-3">
  <div class="row font-s">
    <?php if(!empty($w_times)): ?>
      <div class="col-md-12 mb-2 font-weight-bold">
        <?php print t('Withdrawal times'); ?>:
      </div>
      <div class="col-md-12 mb-2">
        <?php $i=1 ; foreach($w_times as $w_t) { ?>
          <div class="d-inline">
            <?php print $w_t['value']; ?>
            <?php if($i < count($w_times)): ?>
              <br />
            <?php endif; ?>
            <?php $i++ ?>
          </div>
        <?php } ?>
      </div>
    <?php endif; ?>
    <div class="col-md-12 mb-2 font-weight-bold">
      <?php print t('Withdrawal limits'); ?>:
    </div>
    <div class="col-md-12">
      <?php foreach($w_limits as $w_l) { ?>
        <div>
          <?php print $w_l['value']; ?>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
