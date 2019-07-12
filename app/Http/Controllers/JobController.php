<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Job;
use Auth;

class JobController extends Controller
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
        return view('home');
    }

     public function add()
    {
        return view('user.job.add');
    }

    public function status()
    {
        $user_id = auth()->user()->id;
        $job_list = Job::where('uploaded_by_uid',$user_id)
                    ->orderBy('updated_at','DESC')
                    // ->groupBy('email')
                    ->get();

        return view('user.job.status',compact('job_list'));
    }

    public function upload()
    {
        

        return view('user.job.upload');
    }

    public function upload_result()
    {
        

        return view('user.job.upload_result');
    }

    public function store(Request $request)
    {
        $user_id=Auth::user()->id;   
        
        $jobname=$request->jobname;
        $quan_need_total=$request->quan_need_total;
        $mouse=$request->mouse;
        $prior=$request->prior;
        $jobboard=$request->jobboard;
        $adtime=$request->adtime;
        
        Job::insert(['job_name'=>$jobname,'uploaded_by_uid'=>$user_id,'quan_need_total'=>$quan_need_total,'priority'=>$prior,'need_boards_by'=>$adtime,'could_use_more'=>$mouse,'mater_type'=>$jobboard]);

        return view('user.job.add',['notify'=>1]);
    }

    public function job_status(Request $request)
    {
        $update_status = Job::find($request->id);

        $update_status->job_progress = $request->job_status;
        $update_status->panel_id     = $request->panel_lists;

        $response_array = ['success' => false, 'message'=> "Job status update failed!"];

        if($update_status->save())
            $response_array = ['success' => true, 'message'=> "Job status updated!"];
    

        return response()->json($response_array);
    }


}
