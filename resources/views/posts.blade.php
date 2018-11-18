@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach($posts->post as $post)
            <div class="col-md-3">
                <article class="card">
                    <header class="card-header">
                        <a href="#">
                            <h4 class="card-title">{{ $post->name }}</h4>
                        </a>
                    </header>
                    <a href="#">
                        <img class="card-img" src="{{ asset('images/' . $post->photo) }}" alt="" />
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