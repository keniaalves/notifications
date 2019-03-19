@extends('layouts.app')
@section('content')
    <h1>Listagem dos posts</h1>
    @forelse($posts as $post)
    <a href="{{ route('posts.show', $post->id)}}">{{$post->title}}</a>
      <hr>
    @empty
      <p>Nenhum post a ser exibido.</p>
    @endforelse
    {!! $posts->links() !!}
@endsection
