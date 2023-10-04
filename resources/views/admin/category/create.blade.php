@extends('admin.master')
@section('title')
Add Category
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Add Category Form</h6>
                    <hr />
                    <form class="row g-3" action="{{ route('categories.store')}}" method="POST">
                        @csrf

                        <div class="col-12">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name">
                        </div>

                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Save Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection