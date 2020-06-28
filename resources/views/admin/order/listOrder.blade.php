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
              <h6 class="text-uppercase mb-0">Order List</h6>
            </div>
            <div class="card-body">
              <table class="table card-text text-center">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Order Created</th>
                    <th>Consignee</th>
                    <th>Subtotal</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="align-middle">1</th>
                    <td class="align-middle">Test</td>
                    <td class="align-middle">Test</td>
                    <td class="align-middle">Test</td>
                    <td class="align-middle">Test</td>
                    <td class="align-middle">Test</td>
                    <td class="align-middle">Test</td>
                    <td class="align-middle">
                      <span class="badge badge-pill badge-success">OFF</span>
                    </td>
                    <td class="align-middle">
                      <a href="#" class="badge badge-info p-2"><i class="fas fa-check-circle" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#" class="badge badge-danger p-2"><i class="fas fa-window-close" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                    <td>
                      <a href="#Modal-Order-Details" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  <!-- Modal Details Order -->
                  <div id="Modal-Order-Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Details Orders</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Orderer</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Address</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Consignee</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Phone</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Produt Name</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Order Create</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Payment</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Price</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Quantity</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Total</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Status</label>
                                  <input type="text" class="form-control" value="" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Note</label>
                                  <textarea name="" id="" class="form-control" readonly></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        </div>
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