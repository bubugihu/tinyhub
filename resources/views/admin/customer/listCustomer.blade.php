@extends('admin.layout.layout')
@section('title', 'product list')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header">
                <h6 class="text-uppercase mb-0">Customer List</h6>
              </div>
              <div class="card-body">
                <table class="table card-text">
                  <thead>
                    <tr>
                      <th>Customer ID</th>
                      <th>Fullname</th>
                      <th>D.O.B</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Phone</th>
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
                        <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                          <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                          <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
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
                        <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                          <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                          <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
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
                        <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                          <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                          <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
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
                        <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                          <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                          <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
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
