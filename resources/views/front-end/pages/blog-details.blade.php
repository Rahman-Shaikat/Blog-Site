@extends('front-end.master')
@section('title')
Single Blog
@endsection

@section('content')

<section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">

                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Category: {{ $blog->category->category_name }} </h2>
                </div>

            </div>
            <div class="row g-3">
                <div class="col-md-9">
                    <div class="row g-3">
                        <div class="col-md-8 offset-md-2">
                            <div class="blog-entry">

                                <img src="{{ asset($blog->image) }}" alt="Image" class="img-fluid">
                                <h2>{{ $blog->title }}</h2>
                                <span class="date"><strong>{{ $blog->date}}</strong></span>
                                <p>{{$blog->description}}</p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection