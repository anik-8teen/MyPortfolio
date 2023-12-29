<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        "role",
        "start_date",
        "end_date",
        "company",
        "company_url",
        "job_type",
    ];

}
