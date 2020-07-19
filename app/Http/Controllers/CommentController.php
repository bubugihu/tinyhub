<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function listComment()
    {
        $no = 0;
        $comments = Comment::join('customer', 'comments.customer_id', '=', 'customer.id')
            ->join('users', 'customer.users_id', '=', 'users.id')
            ->join('product', 'comments.product_id', '=', 'product.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->orderBy('cmt_status', 'asc')
            ->select('users.*', 'customer.*', 'brand.*', 'category.*', 'product.*', 'comments.*')
            ->paginate(10);
        return view('admin.comment.listComment', compact('comments', 'no'));
    }

    public function onCommentStatus($id)
    {
        $onStatus = Comment::find($id);
        $onStatus->cmt_status = 1;
        $onStatus->save();
        return redirect()->action('CommentController@listComment');
    }

    public function offCommentStatus($id)
    {
        $offStatus = Comment::find($id);
        $offStatus->cmt_status = 0;
        $offStatus->save();
        return redirect()->action('CommentController@listComment');
    }

    public function deleteComment($id)
    {
        $deleteComment = Comment::find($id)->delete();
        return redirect()->action('CommentController@listComment')->with(['flash_level' => 'success', 'flash_message' => 'Delete Comment Successfully !']);
    }
}
