@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @if (!$posts->count())
                <div class="col-md-10 col-md-push-1">
                    <article class="card" style="align-items: center;">
                        <header class="card-header">
                            <h1 class="card-title" style="margin: 11.75rem 0; font-size: 11.4rem !important;">Not Found</h1>
                        </header>
                    </article>
                </div>
            @else
                @foreach($posts as $post)
                    <div class="col-md-5 col-md-push-1">
                        <article class="card">
                            <header class="card-header">
                                <a href="{{ route('about', $post->slug) }}">
                                    <h4 class="card-title">{{ $post->name }}</h4>
                                </a>
                            </header>
                            <a href="{{ route('about', $post->slug) }}">
                                <img class="card-img" src="{{ asset('images/'. $post->photo) }}" alt="" />
                            </a>
                            <div class="card-body">
                                <p class="card-text">{{ strip_tags(substr($post->content, 0, 180)) }}...</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection