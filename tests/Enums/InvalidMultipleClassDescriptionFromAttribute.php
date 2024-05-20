<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums;

use Arslan\Enum\Attributes\Description;
use Arslan\Enum\Enum;

/**
 * @extends Enum<self::*>
 */
#[Description('First Enum description')]
// @phpstan-ignore-next-line intentionally wrong
#[Description('Second Enum description')]
final class InvalidMultipleClassDescriptionFromAttribute extends Enum
{
    public const Administrator = 0;
    public const Moderator = 1;
}
