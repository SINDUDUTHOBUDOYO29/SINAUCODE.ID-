@extends('front.layout.template')
@section('title', 'About')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="{{ asset('front/img/vs-code-logo.jpg') }}">
                    <img class="card-img-top featured-img" src="{{ asset('front/img/vs-code-logo.jpg') }}" alt="..." />
                </a>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">About Sinau Code</h2>
                    <p class="card-text">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo, necessitatibus maxime
                        reiciendis saepe laborum hic, quaerat corrupti cum eaque sapiente sequi consectetur ea est
                        facere doloribus quisquam aut aspernatur.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ratione sed et optio expedita.
                        Neque quo nisi, fuga aspernatur esse id distinctio quidem. Ducimus nemo deserunt dicta voluptate
                        vitae pariatur!
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dicta, fugiat officiis dolor
                        voluptatem neque beatae, libero repudiandae voluptatibus blanditiis labore voluptates animi
                        impedit magni quod nisi, molestiae numquam reiciendis.
                    </p>

                    </p>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->

        </div>
        <!-- Side widgets-->
        @include('front.layout.side-widget')
    </div>
</div>
@endsection