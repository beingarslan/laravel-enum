<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Models;

use Arslan\Enum\Tests\Enums\UserType;
use Illuminate\Database\Eloquent\Model;

/**
 * @property UserType|null $user_type
 */
class Example extends Model
{
    public $timestamps = false;

    protected $casts = [
        'user_type' => UserType::class,
    ];

    protected $fillable = [
        'user_type',
    ];
}
