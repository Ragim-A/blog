@extends('writer.layouts.app')
@section('header')
    <link href="{{asset('')}}assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="{{asset('')}}assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
@stop
@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <a href="{{ route('post.index') }}" style="color: #fff">
                            <button type="button" class="btn btn-default">
                                Back to Post<span class="m-l-5"><i class="ti-back-right"></i></span>
                            </button>
                        </a>
                    </div>
                    <h1 class="page-title">Post Page</h1>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>List of Post</b></h4>
                        <table class="table table-actions-bar m-b-0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Category</th>
                                <th style="width: 20%;">Name</th>
                                <th>Content</th>
                                <th>Restore</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="{{ asset('images/'. $post->photo) }}" width="90" height="60" alt=""></td>
                                    <td>
                                        @foreach($post->category as $item)
                                            {{ $item->name }} <br>
                                        @endforeach
                                    </td>
                                    <td> {{ $post->name  }} </td>
                                    <td> {{ substr($post->content, '0', '30') }} </td>
                                    <td>
                                        <a href="{{ route('post.restore', $post->id) }}" style="margin: 0 24px;" class="table-action-btn"><i class="ti-back-right"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
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
