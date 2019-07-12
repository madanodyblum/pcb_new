<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Job;

class HomeController extends Controller
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
        $user_id = auth()->user()->id;
        $job_list = Job::where('uploaded_by_uid',$user_id)->get();
        return view('user.dashboard',compact('job_list'));
    }

    public function home()
    {
        return view('welcome');
    }

    public function user_delete($id)
    {
        if(User::find($id)->delete())
            return redirect()->back();
    }
}
