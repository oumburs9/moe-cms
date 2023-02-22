<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'position'
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

    public function abouts()
    {
        return $this->hasMany(About::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function desks()
    {
        return $this->hasMany(Desk::class);
    }

    public function deskContents()
    {
        return $this->hasMany(DeskContent::class);
    }

    public function directorates()
    {
        return $this->hasMany(Directorate::class);
    }

    public function factSheets()
    {
        return $this->hasMany(Factsheet::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function ministors()
    {
        return $this->hasMany(Ministor::class);
    }

    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function resourceCategories()
    {
        return $this->hasMany(ResourceCategory::class);
    }

    public function sectors()
    {
        return $this->hasMany(Sector::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function whoIsWho()
    {
        return $this->hasMany(Whoiswho::class);
    }
}
