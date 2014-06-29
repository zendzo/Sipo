@extends('layout.master')
@section('content-header')
<h1>Task<small>Lists</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Task</a></li>
    <li class="active">Lists</li>
</ol>
@stop
@section('content')
<div class="col-md-12 col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Lists of Project Tasks</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Task Name</th>
                    <th>Duration</th>
                    <th>Start</th>
                    <th>Finish</th>
                    <th style="width: 60px">S-ID</th>
                </tr>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->duration }}</td>
                    <td>{{ $task->start }}</td>
                    <td>{{ $task->finish }}</td>
                    <td>{{ $task->summaries_id }}</td>
                </tr>
                @endforeach
                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            {{ $tasks->links() }}
        </div>
    </div><!-- /.box -->
</div>
@stop