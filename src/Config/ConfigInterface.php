<?php

namespace Jepi\Config;

/**
 * ConfigInterface.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
interface ConfigInterface {

    public function get($section, $key);

    public function set($section, $key, $value);

    public function getSection($section);
}
