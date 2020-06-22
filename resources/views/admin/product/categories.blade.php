@extends('admin.layout.layout')
@section('title', 'product list')
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
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-dark">Create category</button><br><br>
                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Create Category</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                              <label class="form-control-label text-uppercase">Category Title</label>
                              <input type="text" name="" class="form-control" required>
                            </div>
                            <label class="form-control-label text-uppercase">Category Image</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-uppercase">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <input type="submit" value="Create" class="btn btn-primary">
                              <input type="reset" value="Reset" class="btn btn-warning">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                <table class="table card-text">
                  <thead>
                    <tr>
                      <th>Categories ID</th>
                      <th>Categories Image</th>
                      <th>Categories Title</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td><a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                        <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
