@extends('admin.layouts.app')
@section('header')

@stop
@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <a href="{{ route('admin.category.index') }}" style="color: #fff">
                            <button type="button" class="btn btn-default">
                                Back to Post<span class="m-l-5"><i class="ti-back-right"></i></span>
                            </button>
                        </a>
                    </div>
                    <h4 class="page-title">Category Page</h4>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
            <div class="row center">
                <div class="col-lg-8">
                    <div class="card-box">
                        @include('admin.particles.notification')
                        <h4 class="m-t-0 header-title"><b>Edit Category</b></h4><br>
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST" data-parsley-validate novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="Name">Name*</label>
                                <input type="text" name="name" value="{{ $category->name }}" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <textarea name="description" required class="form-control">{{ $category->description }}</textarea>
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

@stop
