<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    // attributes: job_id, job_pos, workplace, job_category, job_start_date, job_finish_date, job_desc, job_image
    protected $fillable = ['job_pos', 'workplace', 'job_category', 'job_desc', 'job_start_date', 'job_finish_date', 'job_image'];
}
