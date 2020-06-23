<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentList(){
    	return view("admin.comment.commentList");
    }

    public function feedbackList(){
    	return view("admin.comment.feedbackList");
    }
}
