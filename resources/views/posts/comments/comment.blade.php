<hr>
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(auth()->check())
<form class="form" action="{{ route('comment.store') }}" method="POST">
  @csrf
  <input type="hidden" name="post_id" value="{{ $post->id }}">
  <div class="form-group">
    <input type="text" name="title" placeholder="Título" class="form-control">
  </div>
  <div class="form-group">
    <textarea name="body" rows="5" cols="80" placeholder="Descrição" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
@else
  <p>É preciso estar logado para fazer os comentários. Clique <a href="{{route('login')}}">aqui</a> para entrar. </p>
@endif

<hr>
<h3>{{ $post->comments->count() }} Comentários </h3>
@forelse($post->comments as $comment)
  <div class="card">
      {{$comment->user->name}} disse: {{ $comment->title }}
      <hr>
      {{ $comment->body   }}
  </div>
@empty
<p>Ainda não há comentários sobre esse post. Seja o primeiro a comentar!</p>
@endforelse
