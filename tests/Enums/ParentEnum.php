<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums;

use Arslan\Enum\Enum;

/**
 * @extends Enum<self::*>
 */
class ParentEnum extends Enum
{
    public const PARENT = 'parent';
}
