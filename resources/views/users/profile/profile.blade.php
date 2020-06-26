@extends('users.layout.layout')
@section('title', 'User Profile')
@section('content')
<div class="container py-5">
    <div class="row card-body py-5 mx-auto">
        <!-- Info Customer -->
        <div class="col-md-3 card py-2">
            <div class="profile_feature">
                <img src="{{url('img/na.jpg')}}" alt="Feature Image" class="img-fluid rounded" width="100%" height="auto">
                <div style="margin-top:20px ;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="margin-bottom: 0px;">User Name</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Customer Name</li>
                        <li class="list-group-item">Gender</li>
                        <li class="list-group-item">DOB</li>
                        <li class="list-group-item">Phone</li>
                        <li class="list-group-item">Address</li>
                        <li class="list-group-item">Email</li>
                    </ul>
                    <div class="card-body">
                        <button type="button" data-toggle="modal" data-target="#myModalEditInfoCustomer" class="btn btn-dark">Create category</button>
                        <!-- Modal Edit Info Customer -->
                        <div id="myModalEditInfoCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
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
                                                    <input type="radio" class="custom-control-input" id="customer-gender2" name="radio-stacked" >
                                                    <label class="custom-control-label" for="customer-gender2">Female</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customer-gender3" name="radio-stacked" >
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
                    <a class="btn btn-lg btn-primary active" id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="true">Order</a>
                </li>
                <li class="nav-item" style="margin: 10px 20px;">
                    <a class="btn btn-secondary btn-lg" id="pills-comments-tab" data-toggle="pill" href="#pills-comments" role="tab" aria-controls="pills-comments" aria-selected="false">Comments</a>
                </li>
            </ul>
            <div class="tab-content " id="pills-tabContent">
                <!-- Table Order -->
                <div class="tab-pane fade show active" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                    <!-- Order Main -->
                    <table class="table text-center" class="align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Order Date Time</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Total</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">asd_1</td>
                                <td class="align-middle">2001_05_05</td>
                                <td class="align-middle">Card</td>
                                <td class="align-middle">$2000</td>
                                <td class="align-middle"><a href="#" class="badge badge-info p-2" data-toggle="modal" data-target="#myModal2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a></td>
                            </tr>
                            <tr>
                                <td class="align-middle">asd_2</td>
                                <td class="align-middle">2001_05_05</td>
                                <td class="align-middle">Card</td>
                                <td class="align-middle">$4400</td>
                                <td class="align-middle"><a href="#" class="badge badge-info p-2" data-toggle="modal" data-target="#myModal2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a></td>

                            </tr>
                            <tr>
                                <td class="align-middle">asd_3</td>
                                <td class="align-middle">2001_05_05</td>
                                <td class="align-middle">Card</td>
                                <td class="align-middle">$29000</td>
                                <td class="align-middle"><a href="#" class="badge badge-info p-2" data-toggle="modal" data-target="#myModal2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a></td>

                            </tr>
                        </tbody>
                    </table>
                    <!-- Modal Order Details -->
                    <div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table text-center" class="align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="align-middle">Product Name</th>
                                                <th scope="col" class="align-middle">Order Date Time</th>
                                                <th scope="col" class="align-middle">Payment</th>
                                                <th scope="col" class="align-middle">Total</th>
                                                <th scope="col" class="align-middle">Product Name</th>
                                                <th scope="col" class="align-middle">Order Date Time</th>
                                                <th scope="col" class="align-middle">Payment</th>
                                                <th scope="col" class="align-middle">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">asd_1</td>
                                                <td class="align-middle">2001_05_05</td>
                                                <td class="align-middle">Card</td>
                                                <td class="align-middle">$2000</td>
                                                <td class="align-middle">asd_1</td>
                                                <td class="align-middle">2001_05_05</td>
                                                <td class="align-middle">Card</td>
                                                <td class="align-middle">$2000</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">asd_1</td>
                                                <td class="align-middle">2001_05_05</td>
                                                <td class="align-middle">Card</td>
                                                <td class="align-middle">$2000</td>
                                                <td class="align-middle">asd_1</td>
                                                <td class="align-middle">2001_05_05</td>
                                                <td class="align-middle">Card</td>
                                                <td class="align-middle">$2000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Comments -->
                <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab">
                    <!-- Comments Main -->
                    <table class="table text-center" class="align-middle">
                        <thead>
                            <tr>
                                <th scope="col" width="60"> Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Date</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle"><img src="{{url('img/na.jpg')}}" alt="" class="" width="60" height="auto"></td>
                                <td class="align-middle">ASD</td>
                                <td class="align-middle">Test Comment</td>
                                <td class="align-middle"><a href="#" class="badge badge-info p-2" data-toggle="modal" data-target="#myModal3Content"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a></td>
                                <td class="align-middle">2001_05_05</td>
                                <td class="align-middle"><a href="#" class="badge badge-danger p-2" data-toggle="modal" data-target="#myModal3Delete"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Modal 3 Content -->
                    <div id="myModal3Content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 id="exampleModalLabel" class="modal-title">Comments Title</h4>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Below is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 3 Delete -->
                    <div id="myModal3Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 id="exampleModalLabel" class="modal-title">Delete Comments</h4>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body text-center">
                                    <h2>Are you sure you want to delete?</h2>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Yes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection