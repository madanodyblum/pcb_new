@extends('layouts.app')
@section('custom-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/userdashboard.css')}}">
@endsection
@section('content')
    
    <section role="main" class="content-body">
        <section class="panel-group">
        <div class="widget-twitter-profile">
            
            <div class="profile-info">
                <div class="profile-picture">
                    <!-- <img src="assets/images/!logged-user.jpg" alt=""> -->
                </div>
                <div class="profile-account">
                    <h3 class="name text-semibold">My Jobs</h3>
                </div>
                <ul class="profile-stats">
                    <li>
                        <h5 class="stat text-uppercase">Progressing Jobs</h5>
                        <h4 class="count">60</h4>
                    </li>
                    <li>
                        <h5 class="stat text-uppercase">Finished Jobs</h5>
                        <h4 class="count">139</h4>
                    </li>
                    <li>
                        <h5 class="stat text-uppercase">Delaying Jobs</h5>
                        <h4 class="count">38</h4>
                    </li>
                </ul>
            </div>
           <!--  <div class="profile-quote">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus consectetur aliquet. Curabitur tincidunt convallis mi, ac elementum purus bibendum vitae.
                    </p>
                </blockquote>
                <div class="quote-footer">
                    <span class="datetime">4:27 PM - 15 Jul 2014</span>
                </div>
            </div> -->
        </div>
    </section>
        <header class="page-header">
            <h2>Job Status</h2>
        
            <div class="right-wrapper pull-right">
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
                    <header class="panel-heading panel-heading-transparent">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Projects Stats</h2>
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
    </section>
@endsection
@section('custom-script')
<!-- <script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script> -->
@endsection