@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-5">
                    <h3 class="font-weight-bold">{{ $post->title }}</h3>
                    <div>Category: {{ App\Models\Category::find($post->category_id)->name }}</div>
                    <div>Posted At: {{ $post->created_at }}</div>
                    <hr>
                    <div>{!! $post->description !!}</div>

                    @foreach(App\Models\Comment::where('post_id', $post->id)->get() as $comment)
                        <hr>
                        <div class="font-weight-bold">{{ App\Models\User::find($comment->user_id)->user_name }} commented at {{ $comment->created_at }}</div>
                        <div>{!! $comment->comment !!}</div>
                    @endforeach

                    <hr>
                    <form id="create_comment_form" method="POST" action="{{ url('comment/store') }}">
                        @csrf

                        <input type="hidden" name="post_id" value="{{ $post->id }}">
        
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="comment">Description</label>
                                <textarea class="form-control d-none" id="comment_input" name="comment"></textarea>
                                <div id="comment" style="height: 100px;">{!! old('description') !!}</div>
                            </div>
                        </div>
        
                        <div class="row col-12">
                            <button class="btn btn-primary">Comment</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
       

    </div>
</div>
@endsection

@section('specificscripts')
    <script src="{{ asset('js/show_post.js') }}"></script>
@stop
