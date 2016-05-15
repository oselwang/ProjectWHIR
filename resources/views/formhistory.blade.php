@extends('layout')
@section('style')
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    @stop
    @section('content')
            <!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title">
                    <h3>Form History</h3>
                </div>

                <div class="title">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by Patient Name. . . ">
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
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>History</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!-- start project list -->
                            @if(count($variables) == 0)
                                <a>You haven't fill any form yet</a>
                            @else
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 20%">Patient Name</th>
                                        <th>Province</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                        <th style="width: 20%">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($variables as $variable)
                                        <tr>
                                            <td>#</td>
                                            <td>
                                                <a>{{$variable->patientname}}</a>
                                                <br/>
                                                <small>{{$variable->created_at}}</small>
                                            </td>
                                            <td>
                                                <a>{{$variable->province}}</a>
                                            </td>
                                            <td class="project_progress">
                                                {{$variable->age}}
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-xs">{{ucfirst($variable->status)}}</button>
                                            </td>
                                            <td>
                                                <a href="formhistory/{{$variable->id}}/view" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>
                                                    Edit </a>
                                                <a href="formhistory/{{$variable->id}}/delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                                        <!-- end project list -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@stop
