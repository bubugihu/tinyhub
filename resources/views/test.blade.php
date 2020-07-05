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
                    <th>Product ID</th>
                    <th>Sum Sold Out Of Product ID</th>
                    <th>Sold Out</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($sold_outProduct as $asd)
                  <tr>
                    <td class="align-middle">{{$asd->product_id}}</td>
                    <td class="align-middle">{{$asd->sum_sold_out}}</td>
                    <td class="align-middle">{{$asd->sold_out}}</td>

                  </tr>
                  @endforeach
                  {{$search}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection