<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums\Annotate;

use Arslan\Enum\Enum;

/**
 * This is a test enum with single line comment.
 *
 * @extends Enum<self::*>
 */
final class EnumWithSingleLineComment extends Enum
{
    public const A = 1;
    public const B = 2;
    public const C = 3;
}
