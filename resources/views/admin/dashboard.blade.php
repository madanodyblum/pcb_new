@extends('layouts.app')
@section('custom-style')
@endsection    
@section('content')
 
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Dashboard</h2>
        
            <div class="right-wrapper pull-right hidden">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Dashboard</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open=""></a>
            </div>
        </header>
        <!-- start: page -->
        <div class="row">
            <div class="col-lg-12 col-md-12">

                 <section class="panel">
                    <header class="panel-heading panel-heading-transparent">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Panel Status</h2>
                    </header>
                    <div class="panel-body">
                        <section class="col-md-12 col-xl-12 hidden">
                            <div class="col-md-3 col-xl-3">
                                Panel submission Deadliune(DD-MM-YYYY) : NO CONCRETE DATE SET
                            </div>
                            <div class="col-md-3 col-xl-3">
                                Panel submission Deadliune(DD-MM-YYYY) : NO CONCRETE DATE SET
                            </div>
                            <div class="col-md-3 col-xl-3">
                                Panel submission Deadliune(DD-MM-YYYY) : NO CONCRETE DATE SET
                            </div>
                            <div class="col-md-3 col-xl-3">
                                Panel submission Deadliune(DD-MM-YYYY) : NO CONCRETE DATE SET
                            </div>
                        </section>

                        <section>
                            <div class="col-md-3 col-xl-12">
                                <section class="panel">
                                    <div class="panel-body bg-secondary">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon">
                                                    <i class="fa fa-life-ring"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <strong class="amount">Last Panel : Panel_{{ $last_panel->panel_id }}</strong>
                                                    <div class="info">
                                                        <span class="title">{{ $last_job_count }} jobs</span>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <a class="text-uppercase">(Download)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <span class="panel-title">Scheduled Jobs</span>
                        
                        <section class="hidden-md panel panel-featured-left panel-featured-primary">

                            <div class="table-responsive">
                            <table class="table table-striped mb-none">
                                <thead>
                                    <tr>
                                        <th>Who and what</th>
                                        <th>Board Class</th>
                                        <th>Gated by/ Date Requested</th>
                                        <th>Progress</th>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($last_panel_job)
                                    @foreach($last_panel_job as $job_lists)
                                    <tr>
                                        <td>
                                            {{ $job_lists->job_name}}
                                            <p>{{\App\User::get_user_name($job_lists->uploaded_by_uid)}}</p>
                                        </td>
                                        <td>{{ \App\Http\Model\Job_status::get_job_class($job_lists->mater_type) }}</td>
                                        <td>next panel</td>
                                        <td>
                                             <div class="progress progress-striped light active m-md">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $job_lists->job_progress}}" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    {{ $job_lists->job_progress}} %
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success">Success</span></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                 </tbody>
                               </table>
                            </div>     
                        </section>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
             <div class="row">
                <div class="col-lg-12 col-md-12">
                    <section class="panel">
                        <header class="panel-heading panel-heading-transparent">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Projects Status</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Progress</th>
                                            <th>Current Status</th>
                                            <th>Next Step</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $job_status_cur = \App\Http\Model\Job_status::get_job_status() ?>
                                        @if($job_list)
                                        @foreach($job_list as $job_lists)
                                        <tr>
                                            <td><p>{{$job_lists->job_name}}</p>
                                                <p>
                                                    {{\App\User::get_user_name($job_lists->uploaded_by_uid)}}
                                                </p>
                                                <p>
                                                    Priority : {{$job_lists->priority}}
                                                </p>
                                                <p>
                                                    Material : {{$job_lists->mater_type}}
                                                </p>
                                            </td>
                                            <td>
                                                 <div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
                                                    <div class="circular-bar-chart" data-percent="{{$job_lists->job_progress}}" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
                                                        <label><span class="percent">{{$job_lists->job_progress}}</span>%</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ \App\Http\Model\Job_status::get_job_status_cur($job_lists->job_progress) }}</td>
                                            <td>{{ \App\Http\Model\Job_status::get_job_status_next($job_lists->job_progress) }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div> 
        </div>
        <!-- end: page -->
    </section>
@endsection
@section('custom-script')
<!-- <script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script> -->
@endsection