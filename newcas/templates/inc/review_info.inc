<div class="p-3">
  <div class="row font-s">
    <div class="font-weight-bold col-auto mb-2 text-capitalize">
      <?php print t($review_type[0].' name'); ?>
    </div>
    <div class="col-auto flex-grow-1 text-right mb-2">
      <?php print $casino_name; ?>
    </div>
    <div class="col-12"><!-- Divider --></div>
    <?php if(!empty($email)): ?>
      <div class="font-weight-bold col-auto mb-2">
        <?php print t('Support email'); ?>
      </div>
      <div class="col-auto flex-grow-1 text-right mb-2">
        <a class="color-complimentary" href="mailto:<?php print $email; ?>" rel="nofollow" target="_blank"><?php print $email; ?></a>
      </div>
    <?php endif; ?>
    <div class="col-12"><!-- Divider --></div>
    <?php if(!empty($website)): ?>
      <div class="font-weight-bold col-auto mb-2">
        <?php print t('Casino website'); ?>
      </div>
      <div class="col-auto flex-grow-1 text-right mb-2">
        <a class="color-main" href="/" rel="nofollow" target="_blank"><?php print $website; ?></a>
      </div>
    <?php endif; ?>
    <div class="col-12"><!-- Divider --></div>
    <?php if(!empty($live_date)): ?>
      <div class="font-weight-bold col-auto mb-2">
        <?php print t('Launch date'); ?>
      </div>
      <div class="col-auto flex-grow-1 text-right mb-2">
        <?php print $live_date; ?>
      </div>
    <?php endif; ?>
    <div class="col-12"><!-- Divider --></div>
    <?php if(!empty($license)): ?>
      <div class="font-weight-bold col-auto mb-2">
        <?php print t('License'); ?>
      </div>
      <div class="col-auto flex-grow-1 text-right mb-2">
        <?php print $license; ?>
      </div>
    <?php endif; ?>
    <?php if(!empty($language)): ?>
      <div class="col-12"><!-- Divider --></div>
      <div class="font-weight-bold col-auto mb-2">
        <?php print t('languages'); ?>
      </div>
      <div class="col-auto flex-grow-1 text-right mb-2">
        <?php
        for( $i = 0 ; $i < count($language) ; $i ++){
          print $language[$i]['value'];
          if($i < (count($language)-1)){
            print ', ';
          }
        }
        ?>
      </div>
    <?php endif; ?>
    <?php if(!empty($currencies)): ?>
      <div class="col-12"><!-- Divider --></div>
      <div class="font-weight-bold col-auto mb-2">
        <?php print t('Currencies'); ?>
      </div>
      <div class="col-auto flex-grow-1 text-right mb-2">
        <?php
        for( $i = 0 ; $i < count($currencies) ; $i ++){
          print $currencies[$i]['value'];
          if($i < (count($currencies)-1)){
            print ', ';
          }
        }
        ?>
      </div>
    <?php endif; ?>
      <div class="col-12"><!-- Divider --></div>
      <?php if(!empty($telephone)): ?>
        <div class="font-weight-bold col-auto mb-2">
          <?php print t('Telephone'); ?>
        </div>
        <div class="col-auto flex-grow-1 text-right mb-2">
          <?php print $telephone; ?>
        </div>
      <?php endif; ?>
  </div>
</div>
