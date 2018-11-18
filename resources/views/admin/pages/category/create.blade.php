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

            <div class="row center">
                <div class="col-lg-8">
                    <div class="card-box">
                        @include('admin.particles.notification')
                        <h4 class="m-t-0 header-title"><b>Add Category</b></h4><br>

                        <form action="{{ route('admin.category.store') }}" method="POST" data-parsley-validate novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="Name">Name*</label>
                                <input type="text" name="name" value="{{ old('name') }}" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <textarea name="description" required class="form-control">{{ old('description') }}</textarea>
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
