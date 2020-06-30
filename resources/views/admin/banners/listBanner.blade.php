@extends('admin.layout.layout')
@section('title', 'Banner')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">BannerList</h6>
              </div>
              <div class="card-body">
                <table class="table card-text" id="dbtable">
                  <thead>
                    <tr>
                      <th>BannerID</th>
                      <th>Banner Title</th>
                      <th>Banner Content</th>
                      <th>Banner Image</th>
                      <th>Banner Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($banners as $banner)
                    <tr>
                      <th scope="row">{{$banner->id}}</th>                      
                      <td>{{$banner->ban_title}}</td>
                      <td>{{$banner->ban_content}}</td>
                      <td><img src="{{asset('img/'.$banner->ban_image)}}" alt="" width="60"></td>
                      <td>{{$banner->ban_date}}</td>
                      <td>
                        <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                        <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
