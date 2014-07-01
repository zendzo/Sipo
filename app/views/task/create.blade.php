@extends('layout.master')
@section('content-header')
<h1>Task<small>Create</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Task</a></li>
    <li class="active">Create</li>
</ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Create New Project Summary</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(['route'=>'tasks.store','role'=>'form']) }}
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('name','Name :') }}
            {{ Form::text('name',null,['placeholder'=>'Task Name','class'=>'form-control','required'=>'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('duration','Duration :') }}
            {{ Form::text('duration',null,['placeholder'=>'Duration','class'=>'form-control','required'=>'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('start','Start :') }}
            {{ Form::text('start',null,['placeholder'=>'11/11/2014','class'=>'form-control','required'=>'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('finish','Finish :') }}
            {{ Form::text('finish',null,['placeholder'=>'12/12/2014','class'=>'form-control','required'=>'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('summaries_id','Summaries :') }}
            {{ Form::select('summaries_id',$summaries,null,['class'=>'form-control','required'=>'required']) }}
            {{ Form::hidden('user_id',Auth::user()->id) }}
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
    </div><!--/.box-footer -->

    {{ Form::close() }}
</div>

@stop
