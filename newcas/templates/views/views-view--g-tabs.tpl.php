<div class="row m-0 hov-eff">
  <div class="col-auto align-self-center p-0 text-center slider-action">
    <span class="icon-left-chevron d-md-none"></span>
  </div>
  <div class="col-auto flex-grow-1 p-0 md-slide-wrapper slider-content">
    <div class="row md-slide m-0 justify-content-end">
      <?php
      for( $i = 0 ; $i < count($view->result) ; $i++ ){
        $results = count($view->result);
        $col = 12 / $results;
        if($results == 5){
          $col = 2;
        }
        if(!empty($view->result[$i]->_field_data['nid']['entity']->field_game_page_type)){
          $page_id = $view->result[$i]->_field_data['nid']['entity']->field_game_page_type['und'][0]['tid'];
        } else {
          $page_id = 3;
        }
        $path = drupal_get_path_alias('node/'.$view->result[$i]->nid);
        ?>
        <div class="col-md-<?php print $col; ?> border-right<?php if($i == 0): ?> border-left<?php endif; ?> p-0">
          <a href="/<?php print $path; ?>" class="d-block h-100 pt-2 pb-2<?php if(drupal_get_path_alias() == $path): ?> color-complimentary background-second active<?php else: ?> color-main<?php endif; ?>">
            <div class="row m-0 h-100 justify-content-center">
              <div class="col-12 text-center align-self-center">
                <span class="icon-page-<?php print $page_id; ?> font-lg font-md-xxl"></span>
                <div class="font-weight-normal font-s mt-2">
                  <?php print $view->result[$i]->_field_data['nid']['entity']->field_tab_title['und'][0]['value']; ?>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="col-auto align-self-center p-0 text-center slider-action">
    <span class="icon-right-chevron d-md-none"></span>
  </div>
</div>
