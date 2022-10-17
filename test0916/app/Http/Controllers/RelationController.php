<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class RelationController extends Controller
{
    public function index()
    {
        $post = new Post;
        $post->user_id=1;
        $post->name="123this is the first post";
        $post->save();
    }
}
