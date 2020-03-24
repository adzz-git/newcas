<?php
// HTML Preprocess
function newcas_preprocess_html(&$vars) {
  // Colors variables
  $vars['color_main'] = theme_get_setting('color_main');
  $vars['color_second'] = theme_get_setting('color_second');
  $vars['color_complimentary'] = theme_get_setting('color_complimentary');
  $vars['color_cta'] = theme_get_setting('color_cta');
}
// Page Preprocess
function newcas_preprocess_page(&$vars){
  // Page templates
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    if(!empty($vars['node']->field_image)){
      $vars['image'] = file_create_url($vars['node']->field_image['und'][0]['uri']);
      $vars['img_title'] = $vars['node']->field_image['und'][0]['title'];
      $vars['img_alt'] = $vars['node']->field_image['und'][0]['alt'];
    } else {
      $vars['image'] = null;
      $vars['img_title'] = null;
      $vars['img_alt'] = null;
    }
    // Extract Casino Review Fields
    if($vars['node']->type == 'casino_review' || $vars['node']->type == 'bookmaker'){
      if(!empty($vars['node']->field_int_affiliate_url)){
        $vars['aff_url'] = '/go/'.$vars['node']->field_int_affiliate_url['und'][0]['value'];
      } else {
        $vars['aff_url'] = '/';
      }
      if(!empty($vars['node']->field_brand)){
        $brand = taxonomy_term_load($vars['node']->field_brand['und'][0]['tid']);
      } else {
        $brand = null;
      }
      if(!empty($vars['node']->field_desc)){
        $vars['desc'] = $vars['node']->field_desc['und'][0]['value'];
      } else {
        $vars['desc'] = null;
      }
      if(!empty($brand->field_image)){
        $vars['casino_logo'] = file_create_url($brand->field_image['und'][0]['uri']);
      } else {
        $vars['casino_logo'] = null;
      }
      if(!empty($brand->field_hexa)){
        $vars['hexa'] = $brand->field_hexa['und'][0]['value'];
      } else {
        $vars['hexa'] = null;
      }
      if(!empty($brand->name)){
        $vars['casino_name'] = $brand->name;
      } else {
        $vars['casino_name'] = null;
      }
      $vars['rating'] = $vars['node']->field_rating['und'][0]['value'];
      $vars['pros'] = $vars['node']->field_pros['und'];
      $vars['cons'] = $vars['node']->field_cons['und'];
      $vars['currencies'] = $vars['node']->field_currencies['und'];
      if(!empty($vars['node']->field_payout)){
        $vars['payout'] = $vars['node']->field_payout['und'][0]['value'];
      } else {
        $vars['payout'] = null;
      }
      if(!empty($vars['node']->field_speed)){
        $vars['payout_speed'] = $vars['node']->field_speed['und'][0]['value'];
      } else {
        $vars['payout_speed'] = null;
      }
      $vars['intro'] = $vars['node']->field_intro['und'][0]['value'];
      $vars['features'] = $vars['node']->field_features['und'];
      $vars['email'] = $vars['node']->field_email['und'][0]['value'];
      if(!empty($vars['node']->field_telephone)){
        $vars['telephone'] = $vars['node']->field_telephone['und'][0]['value'];
      }
      $vars['license'] = $vars['node']->field_license['und'][0]['value'];
      if(!empty($vars['node']->field_betting_markets)){
        $vars['betting_markets'] = $vars['node']->field_betting_markets['und'][0]['value'];
      } else {
        $vars['betting_markets'] = null;
      }
      if(!empty($vars['node']->field_min_deposit)){
        $vars['min_deposit'] = $vars['node']->field_min_deposit['und'][0]['value'];
      } else {
        $vars['min_deposit'] = null;
      }
      if(!empty($vars['node']->field_max_jackpot)){
        $vars['max_jack'] = $vars['node']->field_max_jackpot['und'][0]['value'];
      } else {
        $vars['max_jack'] = null;
      }
      $vars['website'] = $vars['node']->field_website['und'][0]['value'];
      if(!empty($vars['node']->field_sgn)){
        $vars['sgn'] = $vars['node']->field_sgn['und'][0]['value'];
      } else {
        $vars['sgn'] = null;
      }
      $vars['language'] = $vars['node']->field_langs['und'];
      $vars['w_times'] = $vars['node']->field_w_times['und'];
      if(!empty($vars['node']->field_w_limits)){
        $vars['w_limits'] = $vars['node']->field_w_limits['und'];
      } else {
        $vars['w_limits'] = null;
      }
      if($vars['node']->field_invert_text['und'][0]['value'] == 1){
        $vars['invert'] = 'dark';
      } else {
        $vars['invert'] = 'white';
      }
      if($vars['node']->field_archived_casino['und'][0]['value'] == 1){
        $vars['archived'] = true;
      } else {
        $vars['archived'] = false;
      }
      if($vars['node']->field_slim['und'][0]['value'] == 1){
        $vars['slim'] = true;
      } else {
        $vars['slim'] = false;
      }
      $vars['live_date'] = format_date($vars['node']->field_live_date['und'][0]['value'], 'custom', t('d/m/Y'));
      // Live Chat
      switch($vars['node']->field_live_chat['und'][0]['value']){
        case 1:
          $vars['live_chat'] = /*t('Yes <span class="align-middle icon-check-mark icon-checkmark-circle text-success"></span>'); */ true;
          break;
        case 0:
          $vars['live_chat'] = /*t('No <span class="align-middle icon-check-mark icon-cross-circle text-danger"></span>'); */ null;
          break;
        default:
          $vars['live_chat'] = /*t('No <span class="align-middle icon-check-mark icon-cross-circle text-danger"></span>'); */ null;
          break;
      }
      $vars['review_type'] = explode('_', $vars['node']->type);
    }
    // Extract Payment Option Fields
    if($vars['node']->type == 'payment_option'){
      $vars['term_image'] = file_create_url(taxonomy_term_load($vars['node']->field_payment_option['und'][0]['tid'])->field_image['und'][0]['uri']);
      $term_name = taxonomy_term_load($vars['node']->field_payment_option['und'][0]['tid']);
      if(!empty($term_name->field_lang_name)){
        $vars['term_name'] = $term_name->field_lang_name['und'][0]['value'];
      } else {
        $vars['term_name'] = $term_name->name;
      }
    }
    // Extract Software Fields
    if($vars['node']->type == 'software'){
      $vars['term_image'] = file_create_url(taxonomy_term_load($vars['node']->field_software['und'][0]['tid'])->field_image['und'][0]['uri']);
      $term_name = taxonomy_term_load($vars['node']->field_software['und'][0]['tid']);
      if(!empty($term_name->field_lang_name)){
        $vars['term_name'] = $term_name->field_lang_name['und'][0]['value'];
      } else {
        $vars['term_name'] = $term_name->name;
      }
    }
    // Extract OS Fields
    if($vars['node']->type == 'operating_system'){
      $vars['term_image'] = file_create_url(taxonomy_term_load($vars['node']->field_operating_system['und'][0]['tid'])->field_image['und'][0]['uri']);
      $term_name = taxonomy_term_load($vars['node']->field_operating_system['und'][0]['tid']);
      if(!empty($term_name->field_lang_name)){
        $vars['term_name'] = $term_name->field_lang_name['und'][0]['value'];
      } else {
        $vars['term_name'] = $term_name->name;
      }
    }
    if($vars['node']->type == 'game'){
      $term_name = taxonomy_term_load($vars['node']->field_game_type['und'][0]['tid']);
      if(!empty($term_name->field_lang_name)){
        $vars['term_name'] = $term_name->field_lang_name['und'][0]['value'];
      } else {
        $vars['term_name'] = $term_name->name;
      }
      $vars['term_img'] = taxonomy_term_load($vars['node']->field_game_type['und'][0]['tid'])->field_icon_suffix['und'][0]['value'];
    }
    if($vars['node']->type == 'sport_game'){
      $term_name = taxonomy_term_load($vars['node']->field_sport_type['und'][0]['tid']);
      if(!empty($term_name->field_lang_name)){
        $vars['term_name'] = $term_name->field_lang_name['und'][0]['value'];
      } else {
        $vars['term_name'] = $term_name->name;
      }
      $vars['term_img'] = taxonomy_term_load($vars['node']->field_sport_type['und'][0]['tid'])->field_icon_suffix['und'][0]['value'];
    }
    // Extract Articles info
    if($vars['node']->type == 'article' || $vars['node']->type == 'casino_review' || $vars['node']->type == 'bookmaker'){
      if(!empty($vars['node']->field_writer)){
        $root = taxonomy_term_load($vars['node']->field_writer['und'][0]['tid']);
        $vars['writer_tid'] = $vars['node']->field_writer['und'][0]['tid'];
        $vars['writer'] = $root->name;
        $vars['writer_image'] = file_create_url($root->field_image['und'][0]['uri']);
        $vars['date'] = $vars['node']->field_live_date['und'][0]['value'];
      }
    }
  }
  // Font Load
  drupal_add_css('https://fonts.googleapis.com/css?family=Roboto:100,400,700&display=swap', 'external');
  // Font Load - Icons
  drupal_add_css('https://s3.amazonaws.com/icomoon.io/147386/YvesPack/style.css', 'external');
  // Variables for Template use
  $site_name = variable_get('site_name');
  // Menu Output
  $menu_name = variable_get('menu_main_links_source', 'main-menu');
  $main_menu_tree = menu_tree($menu_name);
  $vars['nav_menu'] = drupal_render($main_menu_tree);
  // Node Fields - Casino review
}
function newcas_preprocess_block(&$variables){
  if(!isset($_COOKIE['counters'])) {
    $countrs = array();
    $game_counter = db_query("SELECT count(nid) FROM {node} WHERE type='game' AND status=1")->fetchField();
    $review_counter = db_query("SELECT count(nid) FROM {node} WHERE type='casino_review' AND status=1")->fetchField();
    $bonus_counter = db_query("SELECT count(nid) FROM {node} WHERE type='bonus' AND status=1")->fetchField();
    $countrs['games'] = $game_counter;
    $countrs['reviews'] = $review_counter;
    $countrs['bonuses'] = $bonus_counter;
    setcookie('counters', serialize($countrs), time() + (86400 * 30), "/");
    $variables['reviews'] = $review_counter;
    $variables['games'] = $game_counter;
    $variables['bonuses'] = $bonus_counter;
  } else {
    $countrs = unserialize($_COOKIE['counters']);
    $variables['reviews'] = $countrs['reviews'];
    $variables['games'] = $countrs['games'];
    $variables['bonuses'] = $countrs['bonuses'];
  }
  $variables['color_main'] = theme_get_setting('color_main');
  $variables['color_second'] = theme_get_setting('color_second');
  $variables['color_complimentary'] = theme_get_setting('color_complimentary');
  $variables['color_cta'] = theme_get_setting('color_cta');
}
function newcas_form_alter(&$form, &$form_state, $form_id) {
  $form['actions']['submit']['#attributes']['class'][] = 'border-0 d-inline-block w-auto pt-2 pb-2 pl-5 pr-5 text-uppercase background-cta rounded';
  if($form_id == 'user_login' || $form_id == 'user_pass') {
     $form['name']['#attributes']['class'] = array('mgnB10', 'fntXL', 'form-control');
     $form['pass']['#attributes']['class'] = array('fntXL', 'form-control');
  }
}
// Preprocess Views
function newcas_views_pre_render(&$view) {
  if(isset($view->name) && $view->name == 'articles'){
    foreach($view->result as $result){
      $writer_term = $result->_field_data['nid']['entity']->field_writer['und'][0]['tid'];
      $view->writer_term = $writer_term;
      $writer_term_load = taxonomy_term_load($writer_term);
      $view->writer = $writer_term_load->name;
      $view->writer_image = file_create_url($writer_term_load->field_image['und'][0]['uri']);
    }
  }
}
