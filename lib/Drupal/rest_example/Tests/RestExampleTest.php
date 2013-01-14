<?php
/**
 * @file
 * Test case for Testing the rest example module.
 *
 * This file contains the test cases to check if module is performing as
 * expected.
 */

namespace Drupal\rest_example\Tests;
use Drupal\simpletest\WebTestBase;


class RestExampleTest extends WebTestBase {
  public static $modules = array('rest_example');
  protected $webUser;

  public static function getInfo() {
    return array(
      'name' => 'REST example functionality',
      'description' => 'Test the several URLs used to show REST working eg create, update, delete',
      'group' => 'Examples',
    );
  }

  /**
   * Generates a random string of ASCII numeric characters (values 48 to 57).
   *
   * @param $length
   *   Length of random string to generate.
   *
   * @return
   *   Randomly generated string.
   */
  private static function randomNumber($length = 8) {
    $str = '';
    for ($i = 0; $i < $length; $i++) {
      $str .= chr(mt_rand(48, 57));
    }
    return $str;
  }
}