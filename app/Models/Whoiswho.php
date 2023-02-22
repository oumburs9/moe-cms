<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoiswho extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'facebook',
        'twitter',
        'linkedin',
        'telegram',
        'email',
        'assigned_user',
        'is_published',
        'user_id',
        'language_id',
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

}
