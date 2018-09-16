@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        @if($posts->count())
            @foreach($posts as $post)
                <div class="card card-product post" style="cursor: pointer;" data-id="{{ $post->id }}">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <div><h2 class="mb-0" style="display:inline-block;">{{ $post->title }}</h2> <small>{{ App\Models\Category::find($post->category_id)->name }}</small></div>
                            <footer class="blockquote-footer">Posted By <cite title="Source Title">{{ App\Models\User::find($post->user_id)->user_name }}</cite> on {{ date('d M Y',strtotime($post->created_at)) }}</footer>
                        </blockquote>
                        @if($post->files()->first())
                            <img class="img" src="{{ asset('storage/' . $post->files()->first()->id) }}">
                        @endif
                        <p>{!! $post->description !!}</p>
                        <hr>
                        <i class="material-icons" style="color:red; font-size:18px;">favorite</i> 0
                        <i class="material-icons" style="color:orange; font-size:18px;">chat_bubble</i> {{ App\Models\Comment::where('post_id', $post->id)->count() }}
                    </div>
                </div>
            @endforeach
        @else
            <div class="row justify-content-center" style="font-size:24px;">No story found</div>   
        @endif
        

    </div>
</div>
@endsection

@section('specificscripts')
    <script src="{{ asset('js/home.js') }}"></script>
@stop
