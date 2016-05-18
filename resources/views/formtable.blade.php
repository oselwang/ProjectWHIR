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

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title">
                    <h3>
                        Form Table
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
                    <span class="count_top"><i class="glyphicon glyphicon-ok"></i> Total Completed Form</span>
                    <div class="count">{{$completed}}</div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i
                                class="glyphicon glyphicon-remove-circle"></i> Total Uncompleted Form</span>
                    <div class="count">{{$uncompleted}}</div>
                </div>
            </div>
            <!-- /top tiles -->
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="exportexcel" class="btn btn-success @if(count($variables) == 0)disabled @endif">Export
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
                                    <th>Patient Name</th>
                                    <th>Province</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                    <th>#Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($variables as $variable)
                                    <tr id="trdatatable">
                                        <td>#</td>
                                        <td>
                                            <a>{{$variable->patientname}}</a>
                                            <br/>
                                            @foreach($users->where('id',$variable->user_id) as $user)
                                                <small>{{$variable->created_at}} by {{$user->name}}</small>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a>{{$variable->province}}</a>
                                        </td>
                                        <td class="project_progress">
                                            {{$variable->age}}
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-success btn-xs">{{ucfirst($variable->status)}}</button>
                                        </td>
                                        <td>
                                            <a href="admin/{{$variable->id}}/delete" class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash-o"></i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="right">{!! $variables->render() !!}</div>
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

    <!-- /Datatables -->
