<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Job;
use App\User;
use App\Http\Model\Role;
use App\Http\Model\Panel;

class AdminController extends Controller
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
        $job_list = Job::all();
        $panel_list = Panel::all();
        $last_panel = $panel_list->last();
        $last_panel_job = Job::where('panel_id', $last_panel->id)->get();
        $last_job_count = $last_panel_job->count();

        return view('admin.dashboard',compact('job_list','last_panel','last_job_count','last_panel_job'));
    }
    public function job_manage()
    {
        $job_list = Job::all();
        $panel_list = Panel::all();
        return view('admin.job_manage',compact('job_list','panel_list'));
    }

    public function usermanage()
    {
        $admin_id = Role::where('role','admin')->value('user_id');
        
        $user_list = User::where('id','!=',$admin_id)->get();
        return view('admin.usermanage',compact('user_list'));
    }
 
}
