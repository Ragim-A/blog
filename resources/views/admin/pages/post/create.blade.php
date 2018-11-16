@extends('admin.layouts.app')
@section('header')
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light"
                                data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                        class="fa fa-cog"></i></span></button>
                        <ul class="dropdown-menu drop-menu-right" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h2 class="page-title">Post Page</h2>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>

            <div class="row center">
                <div class="col-lg-8">
                    <div class="card-box">
                        @include('admin.particles.notification')
                        <h4 class="m-t-0 header-title"><b>Add Post</b></h4><br>

                        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Image*</label>
                                <input type="file" name="img_url" class="filestyle" data-input="false">
                            </div>
                            <div class="form-group">
                                <label for="category">Select Category</label>
                                <select class="select2 select2-multiple" multiple="multiple" name="category[]" multiple data-placeholder="Choose ...">
                                    @foreach($categoriesName as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Name">Name*</label>
                                <input type="text" name="name" value="{{ old('name') }}" parsley-trigger="change" required placeholder="Enter post name" class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Content*</label>
                                <textarea name="content" required class="form-control">{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                    Submit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- container -->

    </div>
@stop
@section('footer')
    <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>
@stop
