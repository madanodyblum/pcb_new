@extends('layouts.app')
@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/panelmanage.css')}}">
@endsection
@section('content')
    <section role="main" class="content-body panel">
        <header class="page-header">
            <h2>Panel Manage</h2>
            
            <div class="right-wrapper pull-right hidden">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Panel</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open=""></a>
            </div>
        </header>
        <div class="panel-body">
            <div class="row text-center">
                <h2>Panel Lists</h2>
                <hr>
                <div class="row">
                    <div></div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-4">
                    <section class="panel panel-group">
                        <header class="panel-heading bg-primary">

                            <div class="widget-profile-info">
                                <div class="profile-picture">
                                    <!-- <img src="assets/images/!logged-user.jpg"> -->
                                </div>
                                <div class="profile-info">
                                    <h4 class="name text-semibold">Panels</h4>
                                    <h5 class="role">Total : {{$panel_count}}</h5>
                                    <div class="profile-footer">
                                        <!-- <a href="#">(edit profile)</a> -->
                                    </div>
                                </div>
                            </div>

                        </header>
                        <div id="accordion">
                            <div class="panel panel-accordion panel-accordion-first">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1One" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <ul class="widget-todo-list ui-sortable">
                                            @if($panel_list)
                                            @foreach($panel_list as $panel_lists)
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <b class="panel_name"><a href="{{route('admin.panel_details',$panel_lists->id)}}">Panel_{{$panel_lists->panel_id}}</a></b>
                                                </div>
                                                <div class="todo-actions">
                                                <span class="panel_status label label-success">Shipped</span>
                                                    <a class="" href="#">
                                                        <i class="fa fa-download"></i>Download
                                                    </a>
                                                </div>
                                            </li>
                                             @endforeach
                                             @endif
                                        </ul>
                                        <hr class="solid mt-sm mb-lg">
                                        <form method="get" class="form-horizontal form-bordered">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-md">
                                                        
                                                        <input type="text" id="panel_add_name" class="form-control hidden">
                                                        <div class="input-group-btn">
                                                            <a href="{{route('admin.panel.add')}}" class="btn btn-primary">
                                                                Add New Panel
                                                            </a>
                                                            <!-- <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary pull-right" href="#modalNewPanel" id="panel_add">Add New Panel</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-8">
                    @if($panel_item)
                    <div class="row panel_item_detail">
                        <div class="col-md-4">
                            Panel : <span>Panel_{{$panel_item->panel_id}}</span>
                        </div>
                        <div class="col-md-4">
                            Deadline : <span>{{ \Carbon\Carbon::parse($panel_item->panel_going_out)->format('d-m-Y') }}</span>
                        </div>
                        <div class="col-md-4">
                            Material : <span>{{\App\Http\Model\Job_status::get_job_material($panel_item->material_type)}}</span>
                        </div>
                        
                    </div>
                    @endif
                    <h3>Job List</h3>
                      <div class="table-responsive">
                            <table class="table table-striped mb-none">
                                <thead>
                                    <tr>
                                        <th>Panel</th>
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
                                        <td>
                                            {{ \App\Http\Model\Panel::get_panel_name($job_lists->panel_id) }}
                                        </td>
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
            </div>
        </div>    
    </section>
    <!-- modal -->
    <div id="modalNewPanel" class="modal-block modal-header-color modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Are you sure?</h2>
            </header>
            <form id="panel-add-form" class="form-horizontal mb-lg" novalidate="novalidate" method="post">
            <div class="panel-body">
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="panel_name" class="form-control" placeholder="Type Panel Name..." required/>
                        </div>
                    </div>
                    <div class="form-group mt-lg text-center">
                        <!-- <input type="checkbox" id="add_job_check"> add job ? -->
                    </div>
                    <div class="form-group mt-lg job_condition hidden row">
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Progress</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($total_jobs)
                                @foreach($total_jobs as $job_lists)
                                <tr class="gradeX">
                                    <td><input type="checkbox" id="job_check"></td>
                                    <td>{{ $job_lists->job_name }}</td>
                                    <td>{{\App\User::get_user_name($job_lists->uploaded_by_uid)}}</td>
                                    <td>{{ $job_lists->job_progress }}</td>
                                    <td>{{ $job_lists->need_boards_by }}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        </div>
                    </div>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary modal-confirm">Confirm</button>
                        <button class="btn btn-default modal-dismiss">Cancel</button>
                    </div>
                </div>
            </footer>
          </form>
        </section>
    </div>
@endsection
@section('custom-script')
        <script src="{{asset('assets/vendor/select2/select2.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

        <script src="{{asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
        <script src="{{asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
        <script src="{{asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
        <script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
        <script src="{{asset('assets/javascripts/ui-elements/examples.modals.js')}}"></script>

        <script src="{{asset('js/panelmanage.js')}}"></script>
@endsection