@extends('layout.master')

@section('content-header')
<h1>Project<small>Categories</small></h1>

<ol class="breadcrumb">

    <li><a href="#"><i class="fa fa-dashboard"></i>Project</a></li>
    <li class="active">Categories</li>

</ol>
@stop

@section('content')
<div class="col-md-12">

    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Create New Category</h3>
        </div><!-- /.box-header -->

        <div class="box-body">
           {{ Form::open(['route'=>'categories.store','role'=>'form']) }}
                <!-- text input -->
                <div class="form-group">
                    {{ Form::label('Category Name:') }}
                    {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Category Name','Required'=>'Required']) }}
                </div>

            <div class="form-group">
                    {{ Form::submit('Save',['class'=>'btn btn-primary']) }}
            </div>
           {{ Form::close() }}
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
@stop