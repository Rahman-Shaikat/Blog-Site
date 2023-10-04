@extends('admin.master')
@section('title')
    Manage Blogs
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-12 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Manage Table</h6>
                        <hr/>
                        <table class="table table-hover table-striped table-bordered " id="example">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->category->category_name }}</td>
                                    <td>{{ $blog->author_name }}</td>
                                    <td>{{ substr($blog->description,0,20) }}</td>
                                    <td>{{ $blog->date }}</td>
                                    <td><img src="{{ asset("$blog->image") }}" width="80px" height="80px"></td>
                                    <td>{{ $blog->status ==1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm float-start m-1" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>

                                        @if($blog->status == 1 )

                                            <a class="btn btn-warning btn-sm float-start m-1" href="{{ route('blogs.show', $blog->id) }}">Inactive</a>
                                        @else
                                            <a class="btn btn-success btn-sm float-start m-1" href="{{ route('blogs.show', $blog->id )}}">Active</a>
                                        @endif

                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm float-start m-1" onclick="return confirm('Do you want to delete this!')">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

