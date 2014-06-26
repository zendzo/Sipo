@extends('layout.master')

@section('content-header')
<h1>Project<small>Categories</small></h1>

<ol class="breadcrumb">

    <li><a href="#"><i class="fa fa-dashboard"></i>Project</a></li>
    <li class="active">Categories</li>

</ol>
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Category Lists</h3>
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
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Category Creator</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Options</th>
                    </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->user->username }}</td>
                                <td>{{ $category->user->created_at->diffForHumans() }}</td>
                                <td>{{ $category->user->updated_at->diffForHumans() }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>{{ link_to_action('CategoriesController@show','Detail',$category->id) }}</li>
                                            <li>{{ link_to_action('CategoriesController@edit','Update',$category->id) }}</li>
                                            <li class="divider"></li>
                                            <LI>{{ link_to_action('CategoriesController@destroy','Delete',$category->id) }}</LI>
                                        </ul>
                                    </div>
                                </td>
                               <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                {{ $categories->links() }}
            </div>
        </div><!-- /.box -->
    </div>
</div>
@stop

