@extends('layout.master')

@section('content-header')
<h1>Category<small>Detail</small></h1>

<ol class="breadcrumb">

    <li><a href="#"><i class="fa fa-dashboard"></i>Category</a></li>
    <li class="active">Detail</li>

</ol>
@stop

@section('content')

<div class="col-md-12">
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">Detail Category</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                    <div class="box-header">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                {{ $category->name }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                        <div class="box-body">
                            <i class="fa fa-user"></i>
                            <dl>Created By:</dl>
                            <dt>{{ link_to_action('UserController@show',$category->user->username,$category->user->username,['class'=>'btn']) }}</dt>
                        </div>
                    </div>
                </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>

@stop