<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'title',
        'is_published',
        'user_id',
        'language_id',
        'page_id',
        'resource_category_id',
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

    public function resourceCategory()
    {
        return $this->belongsTo(ResourceCategory::class);
    }  
}
