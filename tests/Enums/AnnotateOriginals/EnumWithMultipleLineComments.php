<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums\Annotate;

use Arslan\Enum\Enum;

/**
 * This is a test enum with multiple line comments.
 *
 * Test enum with multiple line comments. Test enum
 * with multiple line comments. Test enum with multiple line comments.
 *
 * Test enum with multiple line comments.
 *
 * @extends Enum<self::*>
 */
final class EnumWithMultipleLineComments extends Enum
{
    public const A = 1;
    public const B = 2;
    public const C = 3;
}
