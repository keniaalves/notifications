<?php

namespace App\Http\Controllers;

use App\Notifications\PostCommented;
use App\Http\Requests\StoreCommentFormRequest;

class CommentsController extends Controller
{
    public function store(StoreCommentFormRequest $request)
    {
      $comment = $request->user()->comments()->create($request->all());
      $author = $comment->post->user;
      $author->notify(new PostCommented($comment));
      return redirect()->route('posts.show', $comment->post_id)
                ->withSuccess('Comentário adicionado com sucesso!');
    }
}
