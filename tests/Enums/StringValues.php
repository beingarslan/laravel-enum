<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums;

use Arslan\Enum\Enum;

/**
 * @method static static Administrator()
 * @method static static Moderator()
 *
 * @extends Enum<self::*>
 */
final class StringValues extends Enum
{
    public const Administrator = 'administrator';
    public const Moderator = 'moderator';
}
