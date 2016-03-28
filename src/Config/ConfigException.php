<?php
/**
 * ConfigException.php
 *
 * @package     JepiFW
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */

namespace Jepi\Config;
use Jepi\Exception\Exception;

class ConfigException extends Exception
{
    protected $exceptionType = "Config Exception";
}