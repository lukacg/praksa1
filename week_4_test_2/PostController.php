<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function index(){
        return view('posts', ["posts" => Post::all()]);
    }


    public function create( Request $request){
        $saveData = $request->only(["id","title","content","likes"]);
        if(count($saveData) > 0) {
            $post = new Post();
            $post->title = $saveData['title'];
            $post->content = $saveData['content'];
            $post->likes = 0;
    
            $post->save();
            return redirect("/posts");
        }
        
        return view('createPost');
    }


    public function editpost($id){
        $post = Post :: where ('id', $id)->first();
        return view('/edit', compact('post')); 
    }

    public function update($id,Request $request ){
        $postData = $request->only(["title","content"]);
        $post = Post :: where ('id', $id)->first();
        $post->title = $postData['title'];
        $post->content = $postData['content'];
        
        $post->save();
        return redirect('/posts');

        
    }


    public function delete($id) {
        
        $post = Post::where('id', $id)->first();
        $post->delete();
        return redirect('/posts')->with('msg', 'Post '.$post->id.' deleted.');
    }


    public function like($id){
        $post= Post:: find($id);
        $post->likes += 1;
        $post->save();
        return redirect('/posts');
    }

    
}