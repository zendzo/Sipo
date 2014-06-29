@extends('layout.master')

@section('content-header')
<h1>Project<small>Detail</small></h1>

<ol class="breadcrumb">

    <li><a href="#"><i class="fa fa-dashboard"></i>Project</a></li>
    <li class="active">Detail</li>

</ol>
@stop

@section('content')

<div class="col-md-12">
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">Detail Project</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                    <div class="box-header">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                {{ $project->title }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                        <div class="box-body">
                            <i class="fa fa-user"></i>
                            <dl>Created By:</dl>
                            <dt>{{ link_to_action('UserController@show',$project->user->username,$project->user->username) }}</dt>
                            <span class="label label-success">Description</span>
                            <p>{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Striped Full Width Table</h3>
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Task Name</th>
                        <th>Duration</th>
                        <th>Start</th>
                        <th>Finish</th>
                    </tr>
                        @foreach($project->summary as $item)
                           <tr>
                               <th>{{ $item->id }}</th>
                               <th>{{ $item->name }}</th>
                               <th>{{ $item->duration }}</th>
                               <th>{{ $item->start }}</th>
                               <th>{{ $item->finish }}</th>
                           </tr>
                    @foreach($item->task as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->duration }}</td>
                        <td>{{ $task->start }}</td>
                        <td>{{ $task->finish }}</td>
                        @endforeach
                    </tr>
                        @endforeach
                    </tbody></table>
            </div><!-- /.box-body -->
        </div>
    </div>

    @stop