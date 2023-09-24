<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // attributes: project_id, project_name, project_details, project_start_date, project_exec_time (in days), project_finish_date, project_link, project_image
    protected $fillable = ['project_name', 'project_details', 'project_start_date', 'project_exec_time', 'project_finish_date', 'project_link', 'project_image'];
}
