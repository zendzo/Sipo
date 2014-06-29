@extends('layout.master')

@section('content-header')
<h1>Project<small>Create</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Project</a></li>
    <li class="active">Create</li>
</ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Create New Project</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(['route'=>'projects.store']) }}
        <div class="box-body">
            <div class="form-group">
               {{ Form::label('title','Project Name :') }}
               {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Project Title','required'=>'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('category','Project Category :') }}
                {{ Form::select('category',$category,null,['class'=>'form-control','required'=>'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('duration','Project Duration :') }}
                {{ Form::text('duration',null,['class'=>'form-control','placeholder'=>'Project duration in days','required'=>'number']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description','Project Description :') }}
                {{ Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Project Description','required'=>'required']) }}
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
        </div>
    {{ Form::close() }}
</div>

@stop
