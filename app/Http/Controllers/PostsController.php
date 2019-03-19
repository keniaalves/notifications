<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostsController extends Controller
{
  private $post;
    public function __construct(Post $post)
    {
      $this->post = $post;
    }
    public function index(Post $post)
    {
      return view('posts.index', ['posts' =>$this->post->paginate()]);
    }

    public function show($id)
    {
      $post = $this->post->with('comments.user')->find($id);
      return view('posts.show', ['post' => $post]);
    }
}
