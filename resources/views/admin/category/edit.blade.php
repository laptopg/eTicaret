@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Edit/Update Item</h1>
        </div>
        <div class="card-body">
            <form action="{{url('update-item/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name
                            <input type="text" value="{{$category->name}}" class="form_control" name="name">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug
                            <input type="text" value="{{$category->slug}}" class="form_control" name="slug">
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description
                            <textarea name="description" rows="3" class="form-control">{{$category->description}}</textarea>
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status
                            <input type="checkbox" {{$category->status == '1' ? 'checked':''}} class="form_control" name="status">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular
                            <input type="checkbox" {{$category->popular == '1' ? 'checked':''}} class="form_control" name="popular">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title
                            <input type="text" value="{{$category->meta_title}}" class="form_control" name="meta_title">
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description
                            <textarea name="meta_description" rows="3" class="form-control">{{$category->meta_description}}</textarea>
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keyword
                            <textarea name="meta_keyword" rows="3" class="form-control">{{$category->meta_keywords}}</textarea>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <input type="file" class="form_control" name="image">
                    </div>
                    @if($category->image)
                        <img src="{{asset('assets/uploads/category/'.$category->image)}}" class="cate-image" alt="Image not found">
                    @endif
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
