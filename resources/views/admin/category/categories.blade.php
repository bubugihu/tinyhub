@extends('admin.layout.layout')
@section('title', 'Categories List')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Categories List</h6>
            </div>
            <div class="card-body">
              <!-- Modal Create Category -->
              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-dark">Create category</button><br><br>
              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="createcategory" aria-hidden="true" class="modal fade text-left">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 id="createcategory" class="modal-title">Create Category</h4>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">

                      {{--Form create cate--}}
                      <form action="{{url('admin/category/createCate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label class="form-control-label text-uppercase">Category Title</label>
                          <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label text-uppercase">Description</label>
                          <textarea class="form-control" name="descript" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group d-flex bd-highlight">
                          <input type="submit" value="Create" class="btn btn-primary  flex-fill bd-highlight">
                          <input type="reset" value="Reset" class="btn btn-warning flex-fill  bd-highlight" style="margin-left: 15px;">
                        </div>
                      </form>
                      {{-- end Form create cate--}}
                    </div>
                  </div>
              @if(Session::has('flash_message'))
                <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!!Session::get('flash_message')!!}
                </div>
              @endif 
              <!-- List Category -->
              <table class="table card-text" id="dbtable">
                <thead>
                  <tr>
                    <th>Categories ID</th>
                    <th>Categories Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cates as $cate)
                  <tr>
                    <th scope="row" class="align-middle">{{$cate->id}}</th>
                    <td class="align-middle">{{$cate->category_name}}</td>
                    <td class="align-middle">{{$cate->description}}</td>
                    <td class="align-middle">
                      <a href="#Modal-Update-Category{{$cate->id}}" class="badge badge-warning p-2" data-toggle="modal"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#Modal-Delete-Category{{$cate->id}}" class="badge badge-danger p-2" data-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><br>
              <nav aria-label="Page navigation">
                {{ $cates->links() }}
              </nav>
              <!-- Modal Update Category -->
              <div id="Modal-Update-Category" tabindex="-1" role="dialog" aria-labelledby="updatecategory" aria-hidden="true" class="modal fade text-left">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 id="updatecategory" class="modal-title">Update Category</h4>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label class="form-control-label text-uppercase">Category Title</label>
                          <input type="text" name="" class="form-control" required>
                        </div>
                        <!-- <div class="modal-body">
                          <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                              <label class="form-control-label text-uppercase">Category Title</label>
                              <input type="text" name="" class="form-control" placeholder="{{$cate->category_name}}" required>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label text-uppercase">Description</label>
                              <textarea class="form-control" id="" rows="3" placeholder="{{$cate->description}}"></textarea>
                            </div>
                            <div class="form-group d-flex bd-highlight">
                              <input type="submit" value="Update" class="btn btn-warning  flex-fill bd-highlight">
                              <input type="reset" value="Reset" class="btn btn-info flex-fill  bd-highlight" style="margin: 0px 15px;">
                              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
  @section('script-section')
@endsection
