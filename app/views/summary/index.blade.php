@extends('layout.master')
@section('content-header')
<h1>Summaries<small>List</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Summaries</a></li>
    <li class="active">Lists</li>
</ol>
@stop

@section('content')
<div class="col-md-12 col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Lists of Project Summary</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Task Name</th>
                    <th>Duration</th>
                    <th>Start</th>
                    <th>Finish</th>
                    <th style="width: 60px">P-ID</th>
                </tr>
                @foreach($summaries as $summary)
                    <tr>
                        <td>{{ $summary->id }}</td>
                        <td>{{ $summary->name }}</td>
                        <td>{{ $summary->duration }}</td>
                        <td>{{ $summary->start }}</td>
                        <td>{{ $summary->finish }}</td>
                        <td>{{ $summary->project_id }}</td>
                    </tr>
                @endforeach
                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            {{ $summaries->links() }}
        </div>
    </div><!-- /.box -->
</div>
@stop