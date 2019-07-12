<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job_status extends Model
{
    use SoftDeletes;
    protected $table="job_status";
    protected $primaryKey = "status_id";

    public static function get_job_status()
    {
    	return Job_status::all();
    }

    public static function get_job_status_cur($int)
    {
    	$cur_status = Job_status::where('int_status',$int)->first();
        return $cur_status->string_status;
    }

    public static function get_job_status_next($int)
    {
    	$next_status = Job_status::where('int_status',$int)->first();
    	return $next_status->str_ne_status;
    }

    public static function get_job_priority($id)
    {
    	$job_priority = Job_priority::find($id);
    	return $job_priority->name;
    }

    public static function get_job_material($id)
    {
    	$job_material = Job_class::where('id',$id)->value('option');
    	return $job_material;
    }

    public static function get_job_class($id)
    {
        return Job_class::where('id', $id)->value('name');
    }
}
