@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                <article class="card mb-4">
                    <header class="card-header text-center">
                        <a href="#">
                            <h1 class="card-title">{{ $post->name }}</h1>
                        </a>
                    </header>
                    <a href="#">
                        <img style="max-height: 600px" class="card-img" src="{{ asset('images/' . $post->photo) }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p>{{ $post->content }}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection