@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-5">
                    <blockquote class="blockquote">
                        <div><h2 class="mb-0" style="display:inline-block;">{{ $post->title }}</h2> <small>{{ App\Models\Category::find($post->category_id)->name }}</small></div>
                        <footer class="blockquote-footer">Posted By <cite title="Source Title">{{ App\Models\User::find($post->user_id)->user_name }}</cite> on {{ date('d M Y',strtotime($post->created_at)) }}</footer>
                    </blockquote>
                    <div>{!! $post->description !!}</div>
                    <hr>
                    <h3>Comments</h3>
                    @foreach(App\Models\Comment::where('post_id', $post->id)->get() as $comment)
                        <div class="font-weight-bold text-secondary"><i>{{ App\Models\User::find($comment->user_id)->user_name }}</i> commented on {{ date('d M Y',strtotime($comment->created_at)) }}</div>
                        <div>{!! $comment->comment !!}</div>
                    @endforeach

                    <form id="create_comment_form" method="POST" action="{{ url('comment/store') }}">
                        @csrf

                        <input type="hidden" name="post_id" value="{{ $post->id }}">
        
                        <div class="row">
                            <div class="form-group col-12">
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
