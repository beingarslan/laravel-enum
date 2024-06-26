<?php declare(strict_types=1);

namespace Arslan\Enum\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS_CONSTANT | \Attribute::TARGET_CLASS)]
class Description
{
    public function __construct(
        public string $description,
    ) {}
}
