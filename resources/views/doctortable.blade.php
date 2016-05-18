@extends('layout')

@section('style')
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    @stop
    @section('content')
            <!-- Datatables -->
    <!-- Datatables -->

    <!-- /Datatables -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title">
                    <h3>
                        Doctor Table
                    </h3>
                </div>

                <div class="title">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                                <input type="text" id="search" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- top tiles -->
            <div class="row tile_count">
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="glyphicon glyphicon-user"></i> Total Doctor</span>
                    <div class="count">{{count($users)}}</div>
                </div>
                <!-- /top tiles -->
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="exportdoctorexcel"
                                   class="btn btn-success @if(count($users) == 0)disabled @endif">Export
                                    to Excel</a>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="datatable" class="table table-striped table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Doctor Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Total Completed Form</th>
                                        <th>Total Uncompleted Form</th>
                                        <th>Total Form</th>
                                        <th>#Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr id="trdatatable">
                                            <td>#</td>
                                            <td id="name">
                                                <a>{{$user->name}}</a>
                                                <br/>
                                            </td>
                                            <td>
                                                <a>{{$user->email}}</a>
                                            </td>
                                            <td class="project_progress">
                                                {{$user->phone}}
                                            </td>
                                            <td>
                                                {{count($variables->where('user_id',$user->id)->where('status','completed'))}}
                                            </td>
                                            <td>
                                                {{count($variables->where('user_id',$user->id)->where('status','uncompleted'))}}
                                            </td>
                                            <td>
                                                {{count($variables->where('user_id',$user->id))}}
                                            </td>
                                            <td>
                                                <a href="admin/{{$user->id}}/deletedoctor"
                                                   class="btn btn-danger btn-xs"><i
                                                            class="fa fa-trash-o"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="right">{!! $users->render() !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <script>
            $("#search").on('keyup', function() {
                var value = $(this).val();

                $("#datatable #trdatatable").each(function(index) {
                    if($(this).text().search(new RegExp(value, "i"))<0){
                        $(this).fadeOut();
                    }else{
                        $(this).fadeIn();
                    }
                });
            });


        </script>
        @stop



