<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums;

use Arslan\Enum\Contracts\LocalizedEnum;
use Arslan\Enum\Enum;

/**
 * @extends Enum<self::*>
 */
final class UserTypeLocalized extends Enum implements LocalizedEnum
{
    public const Moderator = 0;
    public const Administrator = 1;
    public const SuperAdministrator = 2;
}
