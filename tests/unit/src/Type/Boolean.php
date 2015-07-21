<?php
/**
 * @author Gareth Evans <garoevans@gmail.com>
 */

namespace Garoevans\PhpEnum\Tests\Type;

use Garoevans\PhpEnum\Enum;

/**
 * Class Bool
 * @package Garoevans\Tests\Type
 *
 * @method static TRUE
 * @method static FALSE
 */
class Boolean extends Enum
{
    const __default = self::TRUE;

    const TRUE = "1";
    const FALSE = "0";
}
