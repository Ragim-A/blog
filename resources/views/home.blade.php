@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach($posts as $post)
            <div class="col-md-4">
                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">{{ $post->name }}</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/'. $post->photo) }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">{{ substr($post->content, 0, 180) }}...</p>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
    </div>
@endsection
