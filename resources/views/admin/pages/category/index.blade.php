@extends('admin.layouts.app')
@section('header')

@stop
@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Category Page</h1>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>List of Category</b></h4>
                        <table id="demo-foo-filtering" class="table table-actions-bar table-striped toggle-circle m-b-0" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-toggle="true">Name</th>
                                <th>Description</th>
                                <th data-hide="phone">Created At</th>
                                <th data-hide="phone, tablet">Manage</th>
                            </tr>
                            </thead>
                            <div class="form-inline m-b-20">
                                <div class="row">
                                    <div class="col-sm-6 text-xs-center">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-xs-center text-right">
                                        <div class="form-group">
                                            <input id="demo-foo-search" type="text" placeholder="Search" class="form-control input-sm" autocomplete="on">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{ substr($category->description ,0,40) }}</td>
                                    <td>{{ date_format($category->created_at, "d:m:Y") }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', $category->id) }}" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="{{ route('admin.category.delete', $category->id) }}" onclick="return confirm('do you sure want to delete this category')" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <div class="text-right">
                                        <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>


        </div> <!-- container -->
    </div>
@stop
@section('footer')
    <!--FooTable-->
    <script src="{{asset('')}}assets/plugins/footable/js/footable.all.min.js"></script>

    <script src="{{asset('')}}assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

    <!--FooTable Example-->
    <script src="{{asset('')}}assets/pages/jquery.footable.js"></script>
@stop
