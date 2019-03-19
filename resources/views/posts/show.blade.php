@extends('layouts.app')
@section('content')
<h1>{{ $post->title }}</h1>
<div class="">
  {{ $post->body }}
</div>
@include('posts.comments.comment')
@endsection
