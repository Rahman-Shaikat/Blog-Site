@extends('admin.master')
@section('title')
Update User
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Update User Form</h6>
                    <hr />
                    <form class="row g-3" action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf

                        <div class="col-12">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">User Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                        </div>

                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-sm mt-2">Update Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection