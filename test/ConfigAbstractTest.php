<?php

namespace Jepi\Config;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-04 at 23:36:34.
 */
class ConfigAbstractTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Config
     */
    public static $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public static function setUpBeforeClass() {
        self::$object = new Config();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Jepi\Config\ConfigAbstract::set
     */
    public function testSet() {
        self::$object->set('Routing', 'a', 1);
    }

    /**
     * @depends testSet
     * @covers Jepi\Config\ConfigAbstract::get
     */
    public function testGet() {
        $a = self::$object->get('Routing', 'a');
        $this->assertEquals(1, $a);
    }

    /**
     * @depends testGet
     * @covers Jepi\Config\ConfigAbstract::getSection
     */
    public function testGetSection() {
        $routing = self::$object->getSection('Routing');
        $this->assertTrue(isset($routing['a']));
        $this->assertEquals(1, $routing['a']);
    }

}
