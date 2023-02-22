<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'language_id',
        'user_id',
        'start_date',
        'end_date',
        'announcement_type_id',
        'is_published'
    ];

    public function announcementType()
    {
        return $this->belongsTo(AnnouncementType::class);
    }
}
