<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factsheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'is_published',
        'user_id',
        'language_id',
        'page_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }  
}
