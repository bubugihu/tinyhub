<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function listComment(){
        $comments = Comment::join('customer','comments.customer_id','=','customer.id')
                            ->join('users','customer.users_id','=','users.id')
                            ->join('product','comments.product_id','=','product.id')
                            ->join('brand','product.brand_id','=','brand.id')
                            ->join('category','product.category_id','=','category.id')
                            ->select('users.*','customer.*','brand.*','category.*','product.*','comments.*')
                            ->get();
        return view('admin.comment.listComment', compact('comments'));
    }

    public function productComment(){
        $comments = Comment::join('customer','comments.customer_id','=','customer.id')
                            ->join('users','customer.users_id','=','users.id')
                            ->join('product','comments.product_id','=','product.id')
                            ->join('brand','product.brand_id','=','brand.id')
                            ->join('category','product.category_id','=','category.id')
                            ->select('users.*','customer.*','brand.*','category.*','product.*','comments.*')
                            ->get();
        return view('users.product.productDetails', compact('comments'));
    }
}
