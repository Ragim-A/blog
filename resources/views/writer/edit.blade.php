@extends('writer.layouts.app')
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
                        <a href="{{ route('post.index') }}" style="color: #fff">
                            <button type="button" class="btn btn-default">
                                Back to Post<span class="m-l-5"><i class="ti-back-right"></i></span>
                            </button>
                        </a>
                    </div>
                    <h1 class="page-title">Blank Page</h1>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>

            <div class="row center">
                <div class="col-lg-8">
                    <div class="card-box">
                        @include('writer.particles.notification')
                        <h4 class="m-t-0 header-title"><b>Add Post</b></h4><br>

                        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Image*</label>
                                <input type="file" name="img_url" value="{{ asset('images/' . $post->photo) }}" class="filestyle" data-input="false">
                            </div>
                            <div class="form-group">
                                <label for="category">Select Category</label>
                                <select class="select2 select2-multiple" multiple="multiple" name="category[]" multiple data-placeholder="Choose ...">
                                    @foreach($post->category as $selected)
                                        <option selected value="{{ $selected->id }}">{{ $selected->name }}</option>
                                    @endforeach
                                    @foreach($categoriesName as $item)
                                        @if(!in_array($item->name, array_column($post->category->toArray(), 'name') ))
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Name">Name*</label>
                                <input type="text" name="name" value="{{ $post->name }}" parsley-trigger="change" required class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Content*</label>
                                <textarea id="elm1" name="content" required class="form-control">{{ $post->content }}</textarea>
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
    {{-- TEXTAREA EDITOR--}}
    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height:300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>
    {{-- TEXTAREA EDITOR--}}

    <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>
@stop
