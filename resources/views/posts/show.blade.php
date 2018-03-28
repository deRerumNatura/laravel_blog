@extends('layouts.app')

@section('content')
    <a href="{{route('post.index')}}" class="btn btn-outline-primary">Go back</a>
    <hr>
    <div class="well posts-list-item">
        <h3>{{$posts->title}}</h3>
        <img style="width: 50%;" src="/storage/cover_images/{{$posts->cover_image}}" alt="">
        <br><br>
        <div>
            <h4>{!!$posts->body!!}</h4>
        </div>
        <small>Weitten on {{$posts->created_at}}</small>
    </div>
    <hr>
    @if($auth)
        @if(Auth::user()->id == $posts->user_id)
            <a href="{{route('post.edit', ['post' => $posts->id])}}" class="btn btn-outline-primary">Edit</a>
        @endif
    @endif


@endsection