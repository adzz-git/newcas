<?php
  foreach($view->result as $root) {
    $bonus = $root->_field_data['nid']['entity'];
    $bonus_desc_a = $bonus->field_bonus_description['und'][0]['value'];
    $bonus_desc_b = $bonus->field_bonus_description['und'][1]['value'];
    if(!empty($bonus->field_bonus_description['und'][2])){
      $bonus_desc_c = $bonus->field_bonus_description['und'][2]['value'];
    }
?>
<?php } ?>
<?php if(!empty($bonus_desc_a)): ?>
<div class="font-xs d-inline-block d-md-block">
  <?php print $bonus_desc_a; ?>
</div>
<?php endif; ?>
<?php if(!empty($bonus_desc_b)): ?>
<div class="d-inline-block d-md-block font-md-giant font-weight-bold line-height-1">
  <?php print $bonus_desc_b; ?>
</div>
<?php endif; ?>
<?php if(!empty($bonus_desc_c)): ?>
  <div class="font-xs d-inline-block d-md-block">
    <?php print $bonus_desc_c; ?>
  </div>
<?php endif; ?>
