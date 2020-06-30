<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{   
    //show feedback
    public function feedbackList(){
        $feedback = Feedback::orderBy('feed_status','asc')->get();
        $stt = 0;
        return view('admin/feedback/feedbackList', compact('feedback','stt'));
    }

    //delete feedback
    public function deleteFeedback($id){
        Feedback::find($id)->delete();
        return redirect()->action('FeedbackController@feedbackList');
    }

    //done feedback
    public function doneFeedback($id){
       $done = Feedback::find($id);
       $done->feed_rep = 1;
       $done->save();
       return redirect()->action('FeedbackController@feedbackList');
    }

    //pending feedback
     public function pendingFeedback($id){
        $pending = Feedback::find($id);
        $pending->feed_rep = 0;
        $pending->save();
        return redirect()->action('FeedbackController@feedbackList');
     }

    //on status
    public function onStatus($id){
        $on = Feedback::find($id);
        $on->feed_status = 1;
        $on->save();
        return redirect()->action('FeedbackController@feedbackList');
     }

    //off status
    public function offStatus($id){
        $off = Feedback::find($id);
        $off->feed_status = 0;
        $off->save();
        return redirect()->action('FeedbackController@feedbackList');
     }


}
