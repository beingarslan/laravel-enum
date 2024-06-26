<?php declare(strict_types=1);

namespace Arslan\Enum\Tests;

use Arslan\Enum\Tests\Enums\Child;
use Arslan\Enum\Tests\Enums\ParentEnum;
use PHPUnit\Framework\TestCase;

/**
 * Although not recommended, this test validates inheritance of enums works as expected.
 */
final class EnumInheritanceTest extends TestCase
{
    public function testMagicMethodInstantiatesCorrectClass(): void
    {
        $parent = ParentEnum::PARENT();
        $this->assertSame(ParentEnum::class, $parent::class);

        $child = Child::PARENT();
        $this->assertSame(Child::class, $child::class);

        $child = Child::CHILD();
        $this->assertSame(Child::class, $child::class);
    }
}
