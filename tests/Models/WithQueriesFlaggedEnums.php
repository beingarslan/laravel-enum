<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Models;

use Arslan\Enum\Traits\QueriesFlaggedEnums;
use Illuminate\Database\Eloquent\Model;

class WithQueriesFlaggedEnums extends Model
{
    use QueriesFlaggedEnums;

    public $table = 'test_models';

    protected $guarded = [];
}
