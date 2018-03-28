@extends('layouts.app')

@section('content')
    <h1>{{$title}}!</h1>
    @if(count($servises) > 0)
        <ul class="list-group">
            @foreach($servises as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection