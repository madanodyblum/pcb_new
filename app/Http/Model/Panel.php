<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Panel extends Model
{
    use SoftDeletes;
    
    protected $table="panel_detail";

    public static function get_panel_name($id)
    {
    	if($id){
    		$panel = self::find($id);
    		return 'Panel_'.$panel->panel_id;
    	}
    	else
    		return "No Panel";
    }
}
