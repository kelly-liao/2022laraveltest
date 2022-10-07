<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Str;
class PostController extends Controller
{
    //display records
    public function index(){
        // $posts = Post::get();
        // $posts = Post::get()->count();
        // $posts = Post::all();
        // $posts = Post::all()->count();
        // $posts = Post::where('id',6)->get();
        $posts = Post::all()->where('id',4);
        dd($posts);
    }
    //store post
    
    //way 2 to write data to database
    public function store(){
        Post::create([
            'title'=>$title='this is a title',
            'body'=>'this is a body',
            'slug'=>Str::slug('this is a title'),
            'user_id'=> 2
        ]);
        //way 1 to write data to database
        /*
        
        $post = new Post;
        $post->title="a new title";
        $post->body="a new body";
        $post->slug= Str::slug($post->title);
        // $post->user_id = auth()->user()->id;
        $post->user_id = 1;
        $post->save();
        
        */

        
    } 
    //display single record
    public function show($id){
        // dd($id);
        $post = Post::find($id);
        // $post = Post::findOrFail($id);
        dd($post);
    }

    public function update($id){
        // way 1 to update database data
        /*
        $post = Post::find($id);
        $post->title="update title 4";
        $post->body="update body 4";
        $post->save();
        */
        Post::where('id',$id)->update(
            [
                'title'=>'update title new',
                'body'=>'update body new'
            ]
        );
    }

    // delete function
    public function destory($id){
        $post = Post::find($id);
        $post->delete(); 
    }

    public function getPost(){
        $post = Post::where('user_id',1)->first();
        return ($post);
    }

}
