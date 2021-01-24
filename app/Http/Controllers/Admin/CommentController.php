<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function index($id){

        $page_name = "Comments";
        //$data = Comment::all();
        $data = Comment::with(['post'])->where('post_id',$id)->orderBy('id','DESC')->get();
        return view('admin.comment.list',compact('page_name','data'));
    }

    public function reply($id){
        $page_name = 'Comment Reply';
        return view('admin.comment.reply',compact('page_name','id'));
    }

    public function store(Request $request ){
        $this->validate($request,[
            'comment' => 'required',
            'post_id' => 'required',

        ]);

        $comment = new Comment();
        $comment->name = Auth::user()->name;
        $comment->comment = $request->comment;
        $comment->status = 0;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect()->route('comments.post',['id'=>$request->post_id]);

    }

    public function status($id){
          $comment = Comment::find($id);


             if ($comment->status === 1) {
                 $comment->status = 0;
             }else {
                 $comment->status = 1;
             }
           

             $comment->save();

        return redirect()->back();
    }
}
