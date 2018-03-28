@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(!empty($posts))
        @foreach($posts as $post)
            <a class="posts-list" href="/post/{{$post->id}}">
                <div class="well posts-list-item">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3>{{$post->title}}</h3>
                            <small>Weitten on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif

@endsection