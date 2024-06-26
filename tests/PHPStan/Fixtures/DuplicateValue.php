<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\PHPStan\Fixtures;

use Arslan\Enum\Enum;

/**
 * @extends Enum<string>
 *
 * @method static static A()
 * @method static static B()
 */
final class DuplicateValue extends Enum
{
    public const A = 'A';
    public const B = 'A';
}
