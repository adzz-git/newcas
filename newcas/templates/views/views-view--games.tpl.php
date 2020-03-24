<div class="row m-0 justify-content-between">
  <div class="col-auto align-self-center p-0 text-center">
    <span class="icon-left-chevron d-md-none"></span>
  </div>
  <div class="col-8 col-md-auto flex-grow-1 p-0 md-slide-wrapper">
    <div class="row justify-content-md-center md-slide">
      <?php foreach($view->result as $root){ ?>
        <?php
        $game = $root->_field_data['nid']['entity'];
        switch($game->type){
          case 'sport_game':
            $game_term = taxonomy_term_load($game->field_sport_type['und'][0]['tid']);
            $game_term_tr = $game_term->field_lang_name['und'][0]['value'];
            break;
          case 'game':
            $game_term = taxonomy_term_load($game->field_game_type['und'][0]['tid']);
            $game_term_tr = $game_term->field_lang_name['und'][0]['value'];
            break;
          default:
            break;
        }
        $game_icon = $game_term->field_icon_suffix['und'][0]['value'];
        $path = drupal_get_path_alias('node/'.$game->nid);
        ?>
        <div class="col-auto text-center">
          <a title="<?php print $game_term->name; ?>" class="color-complimentary" href="/<?php print $path; ?>">
            <span class="font-megalodon icon-<?php print $game_icon; ?>"></span>
            <div class="font-xs text-uppercase mt-2">
              <?php print $game_term_tr; ?>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="col-auto align-self-center p-0 text-center">
    <span class="icon-right-chevron d-md-none"></span>
  </div>
</div>
