<?php
function newcas_form_system_theme_settings_alter(&$form, $form_state) {
  // The Form Field Set - Colors
  $form['colors'] = array(
    '#type' => 'fieldset',
    '#title' => t('Theme Colors'),
    '#weight' => 1,
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  // The Form Field Set - Options
  $form['theme_opts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Theme Options'),
    '#weight' => 5,
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  // Fields - Colors
  $form['colors']['color_main'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Main theme color'),
    '#default_value' => theme_get_setting('color_main'),
    '#description'   => t("Place the hexa-decimal code for main theme color here, no need for the # symbol."),
  );
  $form['colors']['color_second'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Secondary theme color'),
    '#default_value' => theme_get_setting('color_second'),
    '#description'   => t("Place the hexa-decimal code for secondary theme color here, no need for the # symbol."),
  );
  $form['colors']['color_complimentary'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Complimentary theme color'),
    '#default_value' => theme_get_setting('color_complimentary'),
    '#description'   => t("Place the hexa-decimal code for complimentary theme color here, no need for the # symbol."),
  );
  $form['colors']['color_cta'] = array(
    '#type'          => 'textfield',
    '#title'         => t('CTA theme color'),
    '#default_value' => theme_get_setting('color_cta'),
    '#description'   => t("The color that will be used for CTA buttons sidewide."),
  );
}
