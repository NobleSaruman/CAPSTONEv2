@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">

        @foreach(\App\Models\Post::all() as $post)
            <div class="card card-product post" style="cursor: pointer;" data-id="{{ $post->id }}">
                <div class="card-body">
                    <h5 class="font-weight-bold">{{ $post->title }}</h5>
                    @if($post->files()->first())
                        <img class="img" src="{{ asset('storage/' . $post->files()->first()->id) }}">
                    @endif
                    <p>{{ $post->description }}</p>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection

@section('specificscripts')
    <script src="{{ asset('js/home.js') }}"></script>
@stop
