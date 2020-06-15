@extends('admin.layout.layout')
@section('title', 'product list')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Users</h6><span class="text-gray">100 Users</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Orders</h6><span class="text-gray">30 Orders</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Produts</h6><span class="text-gray">40</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0">Revenue</h6><span class="text-gray">$ 3400</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href=""><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-wireframe-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Products</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href=""><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-user-details-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Customers</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href=""><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-survey-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Orders</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href=""><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-profile-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Admin</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href=""><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-paper-stack-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Comment</span></h5></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="row align-items-center mb-3 flex-row">
                        <div class="col-lg-12">
                         <a href=""><button class="col-lg-12 card-body card mb-3 align-items-center"><i class="o-imac-screen-1" style="font-size: 40px;"></i><h5 class="mb-0 d-flex "><span>Banner</span></h5></button></a>
                        </div>
                    </div>
                </div>
            </div>
          </section>
    </div>
@endsection
