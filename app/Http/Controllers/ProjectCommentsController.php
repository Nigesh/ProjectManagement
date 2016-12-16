<?php

namespace App\Http\Controllers;
use Auth;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ProjectCommentsController extends Controller
{
    //
    public function postNewComment(Request $request, $id, Comment $comment)
    {
       $this->validate($request, [
            'comments'     => 'required|min:5',
        ]);
 
       $comment->comments       = $request->input('comments');
       $comment->project_id     = $id;
       $comment->user_id        = Auth::user()->id;
       $comment->save();
 
       return redirect()->back()->with('info', 'Comment posted successfully');
    }
    public function getOneProjectComment($projectId, $commentId)
    {
        $comment = Comment::where('project_id', $projectId)
                      ->where('id', $commentId)
                      ->first();
 
        return view('comments.edit')->withComment($comment)->with('projectId', $projectId);
    }
     public function updateOneProjectComment(Request $request, $projectId, $commentId)
    {
        $this->validate($request, [
            'comments'  => 'required|min:3',
        ]);
 
        Comment::where('project_id', $projectId)
                ->where('id', $commentId)
                ->update(['comments' => $request->input('comments')]);
 
        return redirect()->back()->with('info','Your Comment has been updated successfully');
    }
    public function deleteOneProjectComment($projectId, $commentId)
    {
        Comment::where('project_id', $projectId)
                ->where('id', $commentId)
                ->delete();
 
        return redirect()->route('projects.show')->with('info', 'Comment deleted successfully');
    }
    
}
