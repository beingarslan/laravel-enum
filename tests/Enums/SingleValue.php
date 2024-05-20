<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums;

use Arslan\Enum\Enum;

/**
 * @extends Enum<self::*>
 */
final class SingleValue extends Enum
{
    public const KEY = 'value';
}
