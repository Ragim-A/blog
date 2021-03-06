@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach($posts->post as $post)
            <div class="col-md-3">
                <article class="card">
                    <header class="card-header">
                        <a href="{{ route('about', $post->slug) }}">
                            <h4 class="card-title" style="font-size: 2rem !important;">{{ $post->name }}</h4>
                        </a>
                    </header>
                    <a href="{{ route('about', $post->slug) }}">
                        <img class="card-img" src="{{ asset('images/' . $post->photo) }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">{{  strip_tags(substr($post->content, 0, 130)) }}...</p>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
    </div>
@endsection