@extends('layouts.app')

@section('title', 'Просмотр поста')


@section('content')
    <div class="card mt-4" >
        <div class="card-body ">
            <h3>{{$post->title}}</h3>
            <p>{{$post->description}}</p>
            <p><b>{{$post->price}}</b></p>
        </div>
    </div>
@endsection
