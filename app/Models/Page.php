<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function abouts()
    {
        return $this->hasMany(About::class);
    }

    public function deskContents()
    {
        return $this->hasMany(DeskContent::class);
    }

    public function factSheets()
    {
        return $this->hasMany(Factsheet::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
