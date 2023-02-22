<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'assigned_user',
        'user_id',
        'language_id',
        'sector_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }    

    public function desks()
    {
        return $this->hasMany(Desk::class);
    }

}
