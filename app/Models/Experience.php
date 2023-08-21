<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    // attributes: experience_id, experience_name, experience_time, experience_desc, experience_image
    protected $fillable = ['experience_name', 'experience_desc', 'experience_time', 'experience_image'];
}
