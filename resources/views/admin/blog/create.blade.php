@extends('admin.master')
@section('title')
    Add Blog
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Add Blog Form</h6>
                        <hr />
                        <form class="row g-3" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                                @error('title')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" class="form-control" name="author_name">
                                @error('author_name')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                                @error('description')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control"  name="date">
                                @error('date')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" accept="image">
                                @error('image')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Save Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
