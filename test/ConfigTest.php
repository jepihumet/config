<?php

namespace Jepi\Config;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-02 at 00:00:26.
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Config
     */
    public static $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public static function setUpBeforeClass()
    {
        self::$object = new Config();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Jepi\Config\Config::loadFile
     */
    public function testLoadFile()
    {
        self::$object->loadFile(dirname(__FILE__) . '/config.ini');

        $config = self::$object->getData();
        $this->assertTrue(count($config) > 0);
        $this->assertTrue(array_key_exists('Routing',$config));

        return self::$object;
    }

    /**
     * @covers Jepi\Config\Config::loadArray
     */
    public function testLoadArray()
    {
        $config = array(
            "Routing" => array(
                "a" => 1,
                "b" => 2,
                "c" => 3
            )
        );
        self::$object->loadArray($config);

        $routing = self::$object->getSection('Routing');

        $this->assertEquals($config['Routing'], $routing);

        return $config;
    }

    /**
     * @covers Jepi\Config\Config::getData
     * @depends testLoadArray
     * @param $config
     */
    public function testGetData($config)
    {
        $data = self::$object->getData();

        $this->assertEquals($config['Routing'], $data['Routing']);
    }

}
