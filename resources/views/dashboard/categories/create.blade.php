@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Create Categories</li>
@endsection

@section('content')
    <div class="row ">
        <div class="col-md-6">
            <form action="{{ route('dashboard.categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="parent_id">Parent</label>
                    <select class="form-control custom-select" id="parent_id" name="parent_id">
                        <option value="">Primary</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <p style="font-weight: 700">Image</p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="statusActive" value="active" checked>
                    <label class="form-check-label" for="statusActive">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="statusArchived" value="archived">
                    <label class="form-check-label" for="statusArchived">
                        Archived
                    </label>
                </div>
                <button type="submit" class="btn btn-primary my-3 px-5 btn-lg ">Submit</button>
            </form>
        </div>
    </div>
@endsection
