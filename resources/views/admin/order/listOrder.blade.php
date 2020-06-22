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
                <table class="table card-text">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Order Created</th>
                      <th>Email</th>
                      <th>Subtotal</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Payment</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td><p class="badge badge-success p-2">ON</p></td>
                      <td><a href="#" class="badge badge-info p-2"><i class="far fa-check-circle" style="font-size: 16px; font-weight:100;"></i> Confirm</a>
                        <a href="#" class="badge badge-danger  p-2"><i class="fas fa-window-close" style="font-size: 16px;font-weight:100;"></i> Cancel</a>
                      </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td><p class="badge badge-success p-2">ON</p></td>
                        <td><a href="#" class="badge badge-info p-2"><i class="far fa-check-circle" style="font-size: 16px; font-weight:100;"></i> Confirm</a>
                          <a href="#" class="badge badge-danger  p-2"><i class="fas fa-window-close" style="font-size: 16px;font-weight:100;"></i> Cancel</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td><p class="badge badge-success p-2">ON</p></td>
                        <td><a href="#" class="badge badge-info p-2"><i class="far fa-check-circle" style="font-size: 16px; font-weight:100;"></i> Confirm</a>
                          <a href="#" class="badge badge-danger  p-2"><i class="fas fa-window-close" style="font-size: 16px;font-weight:100;"></i> Cancel</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td><p class="badge badge-success p-2">ON</p></td>
                        <td><a href="#" class="badge badge-info p-2"><i class="far fa-check-circle" style="font-size: 16px; font-weight:100;"></i> Confirm</a>
                          <a href="#" class="badge badge-danger  p-2"><i class="fas fa-window-close" style="font-size: 16px;font-weight:100;"></i> Cancel</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td><p class="badge badge-success p-2">ON</p></td>
                        <td><a href="#" class="badge badge-info p-2"><i class="far fa-check-circle" style="font-size: 16px; font-weight:100;"></i> Confirm</a>
                          <a href="#" class="badge badge-danger  p-2"><i class="fas fa-window-close" style="font-size: 16px;font-weight:100;"></i> Cancel</a>
                        </td>
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
