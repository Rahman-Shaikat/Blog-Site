@extends('front-end.master')
@section('title')
BLOGS
@endsection

@section('content')

 <div class="col-lg-8">
          <div class="row g-5">

            <div class="col-sm-8 offset-sm-2 border-start custom-border">
              @foreach ($blogs as $blog)
              <div class="post-entry-1 m-5">
                <a href="{{ route('blog.details',['id' => $blog->id]) }}"><img src="{{ asset($blog->image) }}" alt="image" class="img-fluid"></a>
                <div class="post-meta"><span class="date">{{ $blog->category->category_name }}</span> 
                <span class="mx-1">&bullet;</span> <span>Jul 5th '22{{ date('', strtotime($blog->created_at)) }}</span></div>
                <h2><a href="{{ route('blog.details',['id' => $blog->id]) }}">{{ $blog->title }}</a></h2>
              </div>
              @endforeach
            </div>
          </div>
        </div>

@endsection