@extends('layouts.app')
@section('content')
 
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Job Status</h2>
        
            <div class="right-wrapper pull-right hidden">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Job</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open=""></a>
            </div>
        </header>
           <div class="row">
            <div class="col-lg-12 col-md-12">
                <section class="panel">

                    <section class="panel panel-featured-bottom panel-featured-quartenary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-quartenary">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title"></h4>
                                        <div class="info">
                                            <h1><strong class="amount">Job List</strong></h1>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <!-- <a class="text-muted text-uppercase">(report)</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <header class="panel-heading panel-heading-transparent">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Job Status</h2>
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
                                                Priority : {{ \App\Http\Model\Job_status::get_job_priority($job_lists->priority) }}
                                            </p>
                                            <p>
                                                Material : {{ \App\Http\Model\Job_status::get_job_material($job_lists->mater_type) }}
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
    </section>
@endsection
@section('custom-script')
<!-- <script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script> -->
@endsection