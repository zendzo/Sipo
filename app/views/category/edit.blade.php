@extends('layout.master')

@section('content-header')
<h1>Categories<small>Edit</small></h1>

<ol class="breadcrumb">

    <li><a href="#"><i class="fa fa-dashboard"></i>Categories</a></li>
    <li class="active">Edit</li>

</ol>
@stop

@section('content')
<div class="col-md-12">

    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Edit New Category</h3>
        </div><!-- /.box-header -->

        <div class="box-body">
            {{ Form::open(['method'=>'PUT','url'=>'/categories/'.$categories->id]) }}
            <!-- text input -->
            <div class="form-group">
                {{ Form::label('Category Name:') }}
                {{ Form::text('name',$categories->name,['class'=>'form-control','Required'=>'Required']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Save',['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
@stop