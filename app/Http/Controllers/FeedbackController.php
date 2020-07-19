<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

// class FeedbackController extends Controller
// {   

//     //user post feedback
//     public function postFeedback(Request $request){
//         $this->validate($request,
//         [
//             'feedbackName'          =>      'bail|required|regex:/^[a-zA-Z ]{2,}/i|max:255',
//             'feedbackPhone'         =>      'bail|nullable|regex:/^0[1-9][0-9]{8,9}$/i',
//             'feedbackEmail'         =>      'bail|required|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i',
//             'feedbackContent'       =>      'bail|required|min:2|max:250',
//         ]);

//         $feedback = new Feedback();
//         $feedback->feed_name    =   trim($request->feedbackName);
//         $feedback->feed_phone   =   trim($request->feedbackPhone);
//         $feedback->feed_email   =   trim($request->feedbackEmail);
//         $feedback->feed_title   =   trim($request->feedbackTitle);
//         $feedback->feed_content =   trim($request->feedbackContent);
//         $feedback->feed_status  =   0;
//         $feedback->save();
//         $alert= '';    
//         return redirect('contact-us')->with(['flash_level' => 'success','flash_message' => 'Feedback has been sent. Thank you !' ]);
//     } 

//     //show feedback
//     public function feedbackList(){
//         $feedback = Feedback::orderBy('feed_status','asc')->get();
//         $stt = 0;
//         return view('admin/feedback/feedbackList', compact('feedback','stt'));
//     }

//     //delete feedback
//     public function deleteFeedback($id){
//         Feedback::find($id)->delete();
//         return redirect()->action('FeedbackController@feedbackList')->with(['flash_level' => 'success','flash_message' => 'Feedback has been deleted.' ]);;
//     }

//     //done feedback
//     public function doneFeedback($id){
//        $done = Feedback::find($id);
//        $done->feed_rep = 1;
//        $done->save();
//        return redirect()->action('FeedbackController@feedbackList');
//     }

//     //pending feedback
//      public function pendingFeedback($id){
//         $pending = Feedback::find($id);
//         $pending->feed_rep = 0;
//         $pending->save();
//         return redirect()->action('FeedbackController@feedbackList');
//      }

//     //on status
//     public function onStatus($id){
//         $on = Feedback::find($id);
//         $on->feed_status = 1;
//         $on->save();
//         return redirect()->action('FeedbackController@feedbackList');
//      }

//     //off status
//     public function offStatus($id){
//         $off = Feedback::find($id);
//         $off->feed_status = 0;
//         $off->save();
//         return redirect()->action('FeedbackController@feedbackList');
//      }


// }
