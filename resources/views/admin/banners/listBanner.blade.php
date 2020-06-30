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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($banners as $banner)
                    <tr>
                      <th scope="row">{{$banner->id}}</th>                      
                      <td>{{$banner->ban_title}}</td>
                      <td><button type="button" data-toggle="modal" data-target="#a{{$banner->id}}" class="btn btn-info">Read</button></td>
                      <td><img src="{{asset('img/'.$banner->ban_image)}}" alt="" width="60"></td>
                      <td>
                        <a href="{{url('admin/banners/updateBanners/'.$banner->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                        <a href="{{url('admin/banners/deleteBanners/'.$banner->id)}}" class="badge badge-danger p-2" onclick="return confirm('Do you want delete ?');"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                      </td>
                    </tr>

                     {{--Modal content--}}
                <div id="a{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                  <div role="document" class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 id="exampleModalLabel" class="modal-title">{{$banner->ban_title}}</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">                  
                          <div class="form-group">
                          <input class="form-control" value="{{$banner->ban_content}}" readonly>
                          </div>
                          <div class="form-group">
                            <p>{{$banner->created_at}}</p>
                            </div>
                          <div class="form-group text-center">
                            <input type="button" data-dismiss="modal" value="Close" class="btn btn-warning">
                          </div>             
                      </div>
                    </div>
                  </div>
              </div>
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
