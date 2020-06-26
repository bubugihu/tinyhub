@extends('users.layout.layout')
@section('title', 'Report Product')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 ">
                <h1>Report Product</h1>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 20px">
<table  class="table mt-10" width="100%">
  <thead>
    <tr>
      <th class="th-sm">No
      </th>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Brands
      </th>
      <th class="th-sm">Category
      </th>
      <th class="th-sm">Price
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>2</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>2</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>3</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>4</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>5</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>6</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>7</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
    <tr>
      <td>8</td>
      <td><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt=""></td>
      <td>Sony</td>
      <td>Sony</td>
      <td>On Ear</td>
      <td>$120</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>Position
      </th>
      <th>Office
      </th>
      <th>Age
      </th>
      <th>Start date
      </th>
      <th>Salary
      </th>
    </tr>
  </tfoot>
</table>
</div>
@endsection


