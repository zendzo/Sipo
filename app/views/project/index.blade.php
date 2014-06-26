@extends('layout.master')
@section('content-header')
<h1>Projects<small>List</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Projects</a></li>
    <li class="active">List</li>
</ol>
@stop

@section('content')
<div class="col-xs-12">
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Responsive Hover Table</h3>
            <div class="box-tools">
                <div class="input-group">
                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody><tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Owner</th>
                    <th>Action</th>
                </tr>
                @foreach( $projects as $project )
                    <tr>
                        <td>{{ $project->id; }}</td>
                        <td>{{ $project->title; }}</td>
                        <td>{{ $project->description; }}</td>
                        <td><span class="label label-success">{{ $project->user->username; }}</span></td>
                        <td style="width: 10%;">
                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Action</button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>{{ link_to_action('ProjectsController@show','Detail',$project->id) }}</li>
                                    <li>{{ link_to_action('ProjectsController@edit','Update',$project->id) }}</li>
                                    <li class="divider"></li>
                                    <LI>{{ link_to_action('ProjectsController@destroy','Delete',$project->id) }}</LI>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection