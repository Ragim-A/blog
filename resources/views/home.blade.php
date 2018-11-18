@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">How can we sing about love?</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/18.jpg') }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </article>

                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">Oh, I guess they have the blues</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/22.jpg') }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </article><!-- /.card -->
            </div>
            <div class="col-md-4">
                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">How can we, how can we sing about ourselves?</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/3.jpg') }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </article>

                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">The king is made of paper</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/20.jpg') }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">Crying on the news</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/5.jpg') }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </article>

                <article class="card">
                    <header class="card-header">
                        <a href="post-image.html">
                            <h4 class="card-title">How can you not sing about love?</h4>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="{{ asset('images/1.jpg') }}" alt="" />
                    </a>
                    <div class="card-body">
                        <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </article><!-- /.card -->

            </div>
        </div>
    </div>
@endsection
