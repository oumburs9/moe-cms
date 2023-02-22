<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

   
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

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function whoIsWho()
    {
        return $this->hasMany(Whoiswho::class);
    }
}
