@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add Item</h1>
        </div>
        <div class="card-body">
            <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name
                        <input type="text" class="form_control" name="name">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug
                            <input type="text" class="form_control" name="slug">
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description
                    <textarea name="description" rows="3" class="form-control"></textarea>
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status
                            <input type="checkbox" class="form_control" name="status">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular
                            <input type="checkbox" class="form_control" name="popular">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title
                            <input type="text" class="form_control" name="meta_title">
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description
                            <textarea name="meta_description" rows="3" class="form-control"></textarea>
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keyword
                            <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <input type="file" class="form_control" name="image">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
