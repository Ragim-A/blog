@extends('writer.layouts.app')
@section('header')

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
                                <th>Name</th>
                                <th>Content</th>
                                <th style="min-width: 80px;">Manage</th>
                                <th>Soft Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user_posts as $post)
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
                                        <a href="{{ route('post.edit', $post->id) }}" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="{{ route('post.delete', $post->id) }}" onclick="return confirm('do you sure want to parmanently delete this category')" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('post.softdelete', $post->id) }}" style="margin: 0 24px;" class="table-action-btn"><i class="md md-delete"></i></a>
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

@stop
