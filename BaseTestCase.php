<?php

class FBMock_BaseTestCase extends PHPUnit_Framework_TestCase {
  use FBMock_AssertionHelpers;

  public static function setUpBeforeClass() {
    // In case these tests are being run somewhere a custom config is defined
    FBMock_Config::setConfig(new FBMock_Config());
  }

  public static function HHVMOnlyTest() {
    if (!FBMock_Utils::isHHVM()) {
      self::markTestSkipped('Test is HHVM-only');
    }
  }

  public static function skipInHHVM() {
    if (FBMock_Utils::isHHVM()) {
      self::markTestSkipped('Test is for standard (non-HHVM) PHP');
    }
  }
}
