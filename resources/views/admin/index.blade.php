@extends('admin.layout.layout')
@section('title', 'Admin Dashboard')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="">
            <div class="row mt-5">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Manager</h6><span class="text-gray">{{$countManager}}&nbsp;Persons</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Customers</h6><span class="text-gray">{{$countCustomer}}&nbsp;Persons</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Products</h6><span class="text-gray">{{$countProduct}}&nbsp;Units</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Orders</h6><span class="text-gray">{{$countOrder}}&nbsp;Units</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5 mb-5">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Comments</h6><span class="text-gray">{{$countComment}}&nbsp;Units</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Feedback</h6><span class="text-gray">{{$countFeedback}}&nbsp;Units</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0">Revenue</h6><span class="text-gray" style="font-size:16px;">${{$total}}</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0">Income This month</h6><span class="text-gray" style="font-size:16px;">${{$totalThisMonth}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section>
            <div class="row">

              @if(Auth::user()->role == 1)
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href="{{url("admin/users/listUsers")}}"><button class="col-lg-12 card-body card mb-3 align-items-center admin-btn"><i class="o-profile-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Users</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4 mb-lg-0">
                  <div class="row align-items-center mb-3 flex-row">
                      <div class="col-lg-12">
                       <a href="{{url("admin/banners/listBanner")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-imac-screen-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Banner</span></h5></button></a>
                      </div>
                  </div>
                </div>             
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href="{{url("admin/feedback/feedbackList")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-paper-stack-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Feedback</span></h5></button></a>
                        </div>
                    </div>
                </div>
              @endif
              @if(Auth::user()->role == 1 || Auth::user()->role == 2)  
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href="{{url("admin/product/listProduct")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-wireframe-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Products</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href="{{url("admin/category/categories")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-archive-folder-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Categories</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href="{{url("admin/brands/listBrands")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-trophy-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Brand</span></h5></button></a>
                        </div>
                    </div>
                </div>
              @endif
              @if(Auth::user()->role == 1 || Auth::user()->role == 3)
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                    <div class="col-lg-12">
                     <a href="{{url("admin/customer/listCustomer")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-user-details-1  " style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Customers</span></h5></button></a>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 mb-4 mb-lg-0">
                  <div class="row align-items-center mb-3 flex-row">
                      <div class="col-lg-12">
                       <a href="{{url("admin/order/listOrder")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-survey-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Orders</span></h5></button></a>
                      </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4 mb-lg-0">
                  <div class="row align-items-center mb-3 flex-row">
                    <div class="col-lg-12">
                     <a href="{{url("admin/comment/listComment")}}"><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-paper-stack-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Comment</span></h5></button></a>
                    </div>
                  </div>
                </div>
              @endif
            </div>
        </section>
    </div>

@endsection
