@extends('layout.master')

@section('content-header')
<h1>Project<small>Edit</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Project</a></li>
    <li class="active">Edit</li>
</ol>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Edit Project</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(['method'=>'PUT','url'=>'/projects/'.$project->id]) }}
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('title','Project Name :') }}
            {{ Form::text('title',$project->title,['class'=>'form-control','placeholder'=>'Project Title','required'=>'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('category','Project Category :') }}
            {{ Form::select('category',$category,null,['class'=>'form-control','required'=>'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('duration','Project Duration :') }}
            {{ Form::text('duration',$project->duration,['class'=>'form-control','placeholder'=>'Project duration in days','required'=>'number']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description','Project Description :') }}
            {{ Form::textarea('description',$project->description,['class'=>'form-control','placeholder'=>'Project Description','required'=>'required']) }}
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    {{ Form::close() }}
</div>

@stop
