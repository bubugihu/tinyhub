<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function feedbackList(){
        $feedback = Feedback::all();
        return view('admin/comment/feedbackList', compact('feedback'));
    }
}
