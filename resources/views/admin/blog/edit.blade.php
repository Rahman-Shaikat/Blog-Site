@extends('admin.master')
@section('title')
    Update Blog
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Add Blog Form</h6>
                        <hr>
                        <form class="row g-3" action="{{ route('blogs.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>

                                    @foreach ($categories as $category)

                                    <option value="{{ $category->id }}" {{ ($category->id == $blog->category_id) ? 'selected' : '' }}>
                                        {{ $category->category_name }}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" class="form-control" name="author_name" value="{{ $blog->author_name }}">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description">{{ $blog->description }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control"  name="date" value="{{ $blog->date }}">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" value="{{ $blog->image }}">
                                <img src="{{asset($blog->image)}}" style="height: 50px; width: 50px"  alt="">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-sm mt-2">Update Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
