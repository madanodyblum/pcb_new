@extends('layouts.app')
@section('content')
 
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Dashboard</h2>
        
            <div class="right-wrapper pull-right">
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
                        <section class="col-md-12 col-xl-12">
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
                                                    <h4 class="title">Support Questions</h4>
                                                    <div class="info">
                                                        <strong class="amount">1281</strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <a class="text-uppercase">(view all)</a>
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
                                    <tr>
                                        <td>JSOFT - Responsive HTML5 Template</td>
                                        <td>Black</td>
                                        <td>next panel</td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                    100%
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success">Success</span></td>
                                    </tr>
                                 </tbody>
                               </table>
                            </div>     
                        </section>
                    </div>
                </section>
            </div>
        </div>
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
                                        <th>#</th>
                                        <th>Project</th>
                                        <th>Status</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>JSOFT - Responsive HTML5 Template</td>
                                        <td><span class="label label-success">Success</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                    100%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>JSOFT - Responsive Drupal 7 Theme</td>
                                        <td><span class="label label-success">Success</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                    100%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tucson - Responsive HTML5 Template</td>
                                        <td><span class="label label-warning">Warning</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    60%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Tucson - Responsive Business WordPress Theme</td>
                                        <td><span class="label label-success">Success</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    90%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>JSOFT - Responsive Admin HTML5 Template</td>
                                        <td><span class="label label-warning">Warning</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                    45%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>JSOFT - Responsive HTML5 Template</td>
                                        <td><span class="label label-danger">Danger</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                    40%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>JSOFT - Responsive Drupal 7 Theme</td>
                                        <td><span class="label label-success">Success</span></td>
                                        <td>
                                            <div class="progress progress-sm progress-half-rounded mt-xs light">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                    95%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
<!-- <script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script> -->
@endsection