@extends('admin.layouts.app')
@section('header')
    <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
@stop

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Blank Page</h1>
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
                                <th>Username</th>
                                <th data-hide="phone">Email</th>
                                <th data-hide="phone">Writer Status</th>
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

                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td style="padding-left: 30px;">
                                        <form action=""></form>
                                        @csrf
                                            <input type="checkbox" class="writer-status" data-id="{{ $user->id }}" {{ $user->level == 'writer' ? 'checked' : null }} data-switchery="true" data-plugin="switchery" data-size="small" data-color="#81c868"/>
                                        <form action=""></form>
                                    </td>
                                    <td style="padding-left: 23px;">
                                        <a href="{{ route('admin.writer.delete', $user->id) }}" onclick="return confirm('do you sure want to delete this category')" class="table-action-btn"><i class="md md-close"></i></a>
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
    <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.switchery').click(function () {
                var input = $(this).prev();
                var value;
                var id = input.data('id');

                if (input.prop("checked") == true ){
                    value = 'on';
                }else{
                    value = 'off';
                }

                $.ajax({
                    type: 'GET',
                    url: '{{ route('admin.writer.change') }}',
                    dataType: "json",
                    data: {
                        value: value,
                        id:id,
                    },
                    // success:function(response) {
                    //     console.log(response)
                    // }
                })
            })
        })
    </script>
@stop
