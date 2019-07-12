<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Job;
use App\User;
use App\Http\Model\Role;
use App\Http\Model\Panel;

class PanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $panel_list = Panel::all();
        $panel_count = count($panel_list);
        $panel_item = $panel_list->last();
        $job_list = Job::where('panel_id', $panel_item->id)->get();
        $total_jobs = Job::all();
         return view('admin.panelmanage',compact('panel_list','panel_count', 'panel_item','job_list','total_jobs'));
    }
    public function panel_details($id)
    {
        $panel_list = Panel::all();
        $panel_count = count($panel_list);
        $panel_item = Panel::find($id);
        $job_list = Job::where('panel_id', $panel_item->id)->get();
        $total_jobs = Job::all();
         return view('admin.panelmanage',compact('panel_list','panel_count', 'panel_item','job_list','total_jobs'));
    }
 
    public function add()
    {
        $panels_list = Panel::all();
        $current_panel = $panels_list->last();
        $new_panel = new Panel;
        $new_panel->panel_id = $current_panel->panel_id + 1;
        $new_panel->save();

        return redirect()->back();
    }
}
