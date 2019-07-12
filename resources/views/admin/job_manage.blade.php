@extends('layouts.app')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Job Manage</h2>
        
            <div class="right-wrapper pull-right hidden">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>job manage</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open=""></a>
            </div>
        </header>
        <!-- start: page -->
      
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <section class="panel">
                    <!-- <header class="panel-heading panel-heading-transparent">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Projects Stats</h2>
                    </header> -->
                    <section class="panel panel-primary">
                        <div class="panel-body bg-tertiary">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <div class="info">
                                            <h1><strong class="amount">Job Manage</strong></h1>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <!-- <a class="text-uppercase">(view all)</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="panel-body">
                            
                             <div class="table-responsive">
                            <table class="table table-striped mb-none">
                                <thead>
                                    <tr>
                                        <th>Who and what</th>
                                        <th>Gated by</th>
                                        <th>Progress</th>
                                        <th>JobId</th>
                                        <th>Qty</th>
                                        <th>Q+</th>
                                        <th>Current Status</th> 
                                        <th>Panel</th>                            
                                        <th>Update Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $job_status = \App\Http\Model\Job_status::get_job_status() ?>
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
                                        <td>@if($job_lists->could_use_more == 1) Yes @else No @endif</td>
                                        <td>
                                             <div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
                                                <div class="circular-bar-chart" data-percent="{{$job_lists->job_progress}}" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
                                                    <label><span class="percent">{{$job_lists->job_progress}}</span>%</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success">{{$job_lists->job_id}}</span></td>
                                        <td>{{$job_lists->quan_need_total}}</td>
                                        <td>@if($job_lists->could_use_more == 1) Yes @else No @endif</td>
                                        <td>
                                        @if($job_status)
                                            <select class="form-control job_status">
                                                <option></option>
                                                @foreach($job_status as $job_status_list)
                                                <option value="{{$job_status_list->int_status}}" @if($job_status_list->int_status==$job_lists->job_progress) selected @endif >{{ $job_status_list->string_status }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                        </td>
                                        <td>
                                            @if($panel_list)
                                            <select class="form-control panel_lists">
                                                <option>No Panel</option>
                                                @foreach($panel_list as $panel_lists)
                                                    <option value="{{$panel_lists->id}}" @if($panel_lists->id==$job_lists->panel_id) selected @endif> 
                                                        Panel_{{ $panel_lists->panel_id }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-info update_job_status" id="{{$job_lists->job_id}}">Update Job Status</button>
                                        </td>
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
        <!-- end: page -->
    </section>
@endsection
@section('custom-script')
<script type="text/javascript">
    $(document).on('click','.update_job_status',function(){
        var self = this;
        var job_status = $(this).closest('tr').find('.job_status').val();

        var panel_lists = $(this).closest('tr').find('.panel_lists').val();
        console.log(panel_lists)
        $.ajax({
            method:"POST",
            url:'{{route("job.job_status")}}',
            data:{job_status : job_status, id: self.id, panel_lists : panel_lists},
            success:function(res){
                console.log(res);
            }
        })

    })
</script>
<!-- <script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script> -->
@endsection