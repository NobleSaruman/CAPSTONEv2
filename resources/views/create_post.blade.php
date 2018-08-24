@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4>Create Post</h4>
            <form enctype="multipart/form-data" id="create_post_form" method="POST" action="{{ url('post/store') }}">
                @csrf

                <div class="row">
                    <div class="form-group form-file-upload form-file-multiple col-12">
                        <input type="file" class="inputFileHidden" id="attachments" name="attachments[]" multiple>
                        <div class="input-group">
                            <input type="text" class="form-control inputFileVisible" placeholder="Multiple Files" multiple>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-fab btn-round btn-info" onclick="$('#attachments').trigger('click')">
                                    <i class="material-icons">layers</i>
                                </button>
                             </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="category_id">Category</label>
                        <select class="selectpicker form-control" data-style="btn btn-sm btn-primary btn-round" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form group col-8">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label for="description">Description</label>
                        <textarea class="form-control d-none" id="description_input" name="description"></textarea>
                        <div id="description" style="height: 250px;">{!! old('description') !!}</div>
                    </div>
                </div>

                <div class="row col-12">
                    <button class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('specificscripts')
    <script src="{{ asset('js/create_post.js') }}"></script>
@stop
