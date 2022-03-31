@extends('layouts.app')

@section('title', 'Все посты')


@section('content')
    <a href="{{ route('posts.create') }} " class="btn btn-success mt-4 mb-4">Создать пост</a>
    <br>

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    <table class="table mt-4">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->price}}</td>
            <td class="table-buttons">
                <a href="{{ route('posts.show', $post) }}" class="btn btn-success">
                    <i class="bi bi-eye"></i>
                </a>
                <a href="{{ route('posts.edit',$post) }}" class="btn btn-info">
                    <i class="bi bi-pencil"></i>
                </a>
                <form method="POST" action="{{ route('posts.destroy',$post) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
