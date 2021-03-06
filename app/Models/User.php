<?php

namespace App\Models;

use App\Concerns\Eloquent\UuidPrimaryKey;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property-read string $id
 * @property string $name
 * @property string $mail
 * @property string $password
 * @property-read string $remember_token
 * @property-read Carbon|string|null $email_verified_at
 *
 * @property-read Carbon|string|null $created_at
 * @property-read Carbon|string|null $updated_at
 * @property-read Carbon|string|null $deleted_at
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, UuidPrimaryKey, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
