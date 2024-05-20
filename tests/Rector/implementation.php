<?php declare(strict_types=1);

use Arslan\Enum\Rector\ToNativeImplementationRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ToNativeImplementationRector::class);
};
