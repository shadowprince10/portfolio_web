<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    // attributes: certif_id, certif_name, certif_desc, certif_date, certif_image
    protected $fillable = ['certif_name', 'certif_desc', 'certif_date', 'certif_image'];
}
