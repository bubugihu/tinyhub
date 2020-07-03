@extends('users.layout.layout')
@section('title', 'Admin Profile')
@section('content')
<div class="container py-5">
    <div class="row card-body py-5 mx-auto">
        <!-- Info Customer -->
        <div class="col-md-3 card py-2">
            <div class="profile_feature">
                <img src="{{asset('img/'.$customer->feature)}}" alt="{{$user->name}}" class="img-fluid rounded" width="100%" height="auto">
                <div style="margin-top:20px ;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="margin-bottom: 0px;">{{$user->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-size: 15px;"><i class="fa fa-user" aria-hidden="true"></i> {{$customer->customer_name}}</li>
                        <li class="list-group-item" style="font-size: 15px;"><i class="fa fa-transgender-alt" aria-hidden="true"></i> {{$customer->gender}}</li>
                        <li class="list-group-item" style="font-size: 15px;"><i class="fa fa-birthday-cake" aria-hidden="true"></i> {{$customer->dob}}</li>
                        <li class="list-group-item" style="font-size: 15px;"><i class="fa fa-phone" aria-hidden="true"></i> {{$customer->phone}}</li>
                        <li class="list-group-item" style="font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i> {{$customer->address}}</li>
                        <li class="list-group-item" style="font-size: 15px;"><i class="fa fa-envelope" aria-hidden="true"></i> {{$user->email}}</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" data-toggle="modal" data-target="#UpdateProfile" class="btn btn-dark">Create category</button>
                        <!-- Modal Edit Info Customer -->
                        <div id="UpdateProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 id="exampleModalLabel" class="modal-title">Create Category</h4>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <!-- Customer Name -->
                                            <div class="form-group">
                                                <label class="form-control-label text-uppercase">Customer Name</label>
                                                <input type="text" name="" class="form-control" required>
                                            </div>
                                            <!-- Gender -->
                                            <div class="form-group">
                                                <label class="form-control-label text-uppercase">Gender</label><br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customer-gender1" name="radio-stacked" checked>
                                                    <label class="custom-control-label" for="customer-gender1">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customer-gender2" name="radio-stacked">
                                                    <label class="custom-control-label" for="customer-gender2">Female</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customer-gender3" name="radio-stacked">
                                                    <label class="custom-control-label" for="customer-gender3">Other</label>
                                                </div>
                                            </div>
                                            <!-- DOB -->
                                            <div class="form-group">
                                                <label class="form-control-label text-uppercase">DOB</label>
                                                <input type="date" name="" class="form-control" required>
                                            </div>
                                            <!-- Phone -->
                                            <div class="form-group">
                                                <label class="form-control-label text-uppercase">Phone</label>
                                                <input type="number" name="" class="form-control" min="10" max="12" required>
                                            </div>
                                            <!-- Address -->
                                            <div class="form-group">
                                                <label class="form-control-label text-uppercase">Address</label>
                                                <input type="text" name="" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label text-uppercase">Email</label>
                                                <input type="email" name="" class="form-control" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center ">
                                        <div class="form-group ">
                                            <input type="submit" value="Save Change" class="btn btn-primary">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Order And Commnets -->
        <div class="col-md-9 card py-2">
            <ul class="nav nav-pills mb-3 justify-content-center " id="pills-tab" role="tablist">
                <li class="nav-item" style="margin: 10px 20px;">
                    <a class="btn btn-lg btn-primary active" id="pills-order-tab" data-toggle="pill" href="#pills-order{{$customer->id}}" role="tab" aria-controls="pills-order" aria-selected="true">Order</a>
                </li>
                <li class="nav-item" style="margin: 10px 20px;">
                    <a class="btn btn-secondary btn-lg" id="pills-comments-tab" data-toggle="pill" href="#pills-comments{{$customer->id}}" role="tab" aria-controls="pills-comments" aria-selected="false">Comments</a>
                </li>
            </ul>
            <div class="tab-content " id="pills-tabContent">
                @if(Session::has('flash_message'))
                <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!!Session::get('flash_message')!!}
                </div>
                @endif
                <!-- Table Order -->
                <div class="tab-pane fade show active" id="pills-order{{$customer->id}}" role="tabpanel" aria-labelledby="pills-order-tab">
                    <!-- Order Main -->
                    <table class="table text-center" class="align-middle">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Date Time</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Total</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $order)
                            <tr>
                                <td class="align-middle">{{++$no}}</td>
                                <td class="align-middle">{{$order->order_id}}</td>
                                <td class="align-middle">{{$order->created_at}}</td>
                                <td class="align-middle">{{$order->payment}}</td>
                                <td class="align-middle">{{$order->total}}</td>
                                <td class="align-middle">
                                    <a href="#OrderDetails{{$customer->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Comments -->
                <div class="tab-pane fade" id="pills-comments{{$customer->id}}" role="tabpanel" aria-labelledby="pills-comments-tab">
                    <!-- Comments Main -->
                    <table class="table text-center" class="align-middle">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col" width="60"> Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Date</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $comment)
                            <tr>
                                <td class="align-middle">{{++$no1}}</td>
                                <td class="align-middle"><img src="{{asset('img/feature/'.$comment->feature_image)}}" alt="{{$comment->product_title}}" class="rounded" width="60" height="auto"></td>
                                <td class="align-middle">{{$comment->product_title}}</td>
                                <td class="align-middle">{{$comment->cmt_title}}</td>
                                <td class="align-middle">
                                    <a href="#myModal3Content{{$customer->id}}{{$comment->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                                    <!-- Modal 3 Content -->
                                    <div id="myModal3Content{{$customer->id}}{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                                        <div role="document" class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 id="exampleModalLabel" class="modal-title">{{$comment->cmt_title}}</h4>
                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{$comment->cmt_content}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">{{$comment->created_at}}</td>
                                <td class="align-middle">
                                    <a href="{{ url('users/profile/'.$customer->id.'/'.$comment->id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection