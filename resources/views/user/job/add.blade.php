@extends('layouts.app')
@section('content')
 
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Jobs</h2>
        
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
            <div class="col-xs-12">
                <section class="panel form-wizard" id="w4">
                    <form class="form-horizontal" method="post" action="{{route('job.store')}}">
                    @csrf

                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>
        
                    </header>
                    <div class="panel-body">
                        <div class="wizard-progress wizard-progress-lg">
                            <h2 class="panel-title">Add New Job to Queue</h2>

                            <div class="steps-progress">
                                <div class="progress-indicator" style="width: 0%;"></div>
                            </div>
                            <ul class="wizard-steps">
                                 
                            </ul>
                        </div>
        
                            <div class="tab-content">
                                <div id="w4-account" class="tab-pane active">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-username">Job Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="jobname" id="w4-username" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-password">Quantity Needed</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="quan_need_total" id="w4-password" required="" >
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-first-name">Could You Use More</label>
                                        <div class="col-sm-1 ">
                                             <div class="radio-custom radio-primary">
                                                                <input type="radio" id="use_num1" name="mouse" value="1" checked>
                                                                <label for="radioExample2">Yes</label>
                                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                        <div class="radio-custom radio-primary">
                                                                <input type="radio" id="use_num2" value="2" name="mouse">
                                                                <label for="radioExample2">NO</label>
                                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-last-name">Job Priority</label>
                                    
                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="Job_num1" name="prior" checked value="1">
                                                                <label for="radioExample2">Low</label>
                                        </div>
                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="Job_num2" name="prior" value="2">
                                                                <label for="radioExample2">Normal</label>
                                        </div>

                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="Job_num3" name="prior" value="3">
                                                                <label for="radioExample2">High</label>
                                        </div>
                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="Job_num4" name="prior" value="4">
                                                                <label for="radioExample2">User Criticial</label>
                                        </div>

                                    </div>
                                
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-cc">Job Board Class</label>
                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="num1" name="jobboard" checked value="1"> 
                                                                <label for="radioExample2">Green</label>
                                        </div>

                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="num2" name="jobboard" value="2">
                                                                <label for="radioExample2">BLACK</label>
                                        </div>
                                        <div class="col-sm-1 radio-custom radio-primary">
                                                                <input type="radio" id="num3" name="jobboard" value="3">
                                                                <label for="radioExample2">BLUE</label>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-email">Need By Date</label>
                                        <div class="col-sm-6 input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" data-plugin-datepicker="" name="adtime" class="form-control" require>
                                                  
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                    <div class="panel-footer">
                        <ul class="pager">
                            <li class="previous">
                                <a type="reset" class="btn"><i class="fa fa-angle-left"></i> Cancel</a>
                            </li>
                           
                            <li class="next right-wrapper pull-right">
                                <button type="submit" class="btn text-center">Add <i class="fa fa-angle-right"></i></button>
                            </li>
                        </ul>
                    </div>
                   </form>
                </section>
            </div>
        </div>    
    </section>
@endsection
@section('custom-script')
<!-- <script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script> -->
@endsection