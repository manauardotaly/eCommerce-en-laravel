<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    // use HasFactory;
    protected $table = "jobs";
    protected $primarKey = "job_id";
}
