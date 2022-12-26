@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">All Categories</li>
@endsection

@section('content')
    <div class="all-categories pr-4">
        <div class="category-actions d-flex justify-content-end my-3 mr">
            <a class="btn btn-outline-primary" href="{{ route('dashboard.categories.create') }}">Add Category</a>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Done!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr class="bg-primary">
                    <th scope="col">ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Parent</th>
                    <th>Description</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->image }}</td>
                        <td>{{ $category->parent_id ? $category->parent_id : 'Primary' }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-black-50">No Data Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
