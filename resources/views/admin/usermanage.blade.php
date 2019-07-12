@extends('layouts.app')
@section('custom-style')
        <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
@endsection
@section('content')
    <section role="main" class="content-body panel">
                <header class="page-header">
                    <h2>User</h2>
                
                    <div class="right-wrapper pull-right hidden">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="/">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>user</span></li>
                        </ol>
                        <a class="sidebar-right-toggle" data-open=""></a>
                    </div>
                </header>
                <div class="panel-body">
                    <section>
                    <div class="panel-body bg-quartenary">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon">
                                    <i class="fa fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <div class="info">
                                        <h1><strong class="amount">User Manage</strong></h1>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <!-- <a class="text-uppercase">(view all)</a> -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Date</th>
                                <th>Ban</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($user_list)
                            @foreach($user_list as $user_lists)
                            <tr class="gradeX">
                                <td>{{ $user_lists->name }}</td>
                                <td>{{ $user_lists->email }}</td>
                                <td>{{ \Carbon\Carbon::parse($user_lists->created_at)->format('d-m-Y') }}</td>
                                <td class="center hidden-phone">
                                    <a href="{{route('user.delete',$user_lists->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
    </section>
@endsection
@section('custom-script')
        <!-- Specific Page Vendor -->
        <script src="{{asset('assets/vendor/select2/select2.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

        <script src="{{asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
        <script src="{{asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
        <script src="{{asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
        <script>
            // $('#datatable-tabletools').dataTable();
        </script>
@endsection