<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_published',
        'type',
        'file_size',
        'format',
        'file_location',
        'user_id',
        'language_id',
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

    public function resourceCategories()
    {
        return $this->belongsTo(ResourceCategory::class);
    }

}
