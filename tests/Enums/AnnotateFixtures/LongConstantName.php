<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Enums\Annotate;

use Arslan\Enum\Enum;

/**
 * @method static static A_VERY_LONG_CONSTANT_NAME_THAT_WOULD_DEFINITELY_BE_WRAPPED_IF_WRAPPING_WAS_NOT_DISABLED_BECAUSE_IT_EXCEEDS_AT_LEAST_120_CHARACTERS()
 * @extends Enum<self::*>
 */
final class LongConstantName extends Enum
{
    public const A_VERY_LONG_CONSTANT_NAME_THAT_WOULD_DEFINITELY_BE_WRAPPED_IF_WRAPPING_WAS_NOT_DISABLED_BECAUSE_IT_EXCEEDS_AT_LEAST_120_CHARACTERS = 1;
}
