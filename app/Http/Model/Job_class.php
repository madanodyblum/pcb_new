<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job_class extends Model
{
    use SoftDeletes;
    protected $table="job_class";
}
