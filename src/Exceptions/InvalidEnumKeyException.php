<?php declare(strict_types=1);

namespace Arslan\Enum\Exceptions;

class InvalidEnumKeyException extends \Exception
{
    /** @param  class-string<\Arslan\Enum\Enum<mixed>>  $enumClass */
    public function __construct(mixed $invalidKey, string $enumClass)
    {
        $invalidValueType = gettype($invalidKey);
        $enumKeys = implode(', ', $enumClass::getKeys());
        $enumClassName = class_basename($enumClass);

        parent::__construct("Cannot construct an instance of {$enumClassName} using the key ({$invalidValueType}) `{$invalidKey}`. Possible keys are [{$enumKeys}].");
    }
}
