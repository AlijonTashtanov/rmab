<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    /**
     * @var int
     */
    public static $role_superadmin = 1; // Admin panelga kirish uchun superadmin hisoblanadi

    /**
     * @var int
     */
    public static $role_user = 2;  // Profilga kirish uchun user hisoblanadi

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * @return array
     */
    public static function userRoles()
    {
        return [
            self::$role_superadmin => 'Super Admin',
            self::$role_user => 'User',
        ];
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    public function getUserRoleName()
    {
        return Arr::get(self::userRoles(), $this->role);
    }

    /**
     * @return bool
     */
    public function isApiUser()
    {
        return $this->role == self::$role_user;
    }
}
