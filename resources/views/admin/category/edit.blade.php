@extends('admin.master')
@section('title')
    Update Category
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Update Category Form</h6>
                        <hr />
                        <form class="row g-3" action="{{ route('categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-sm mt-2">Update Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
