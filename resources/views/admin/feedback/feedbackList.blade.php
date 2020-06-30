@extends('admin.layout.layout')
@section('title', 'Feedback')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Feed Back</h6>
              </div>
              <div class="card-body">
                <table class="table card-text" id="dbtable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Reply</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $feedback as $feedback)
                      <tr>
                      <th scope="row">{{ ++$stt}}</th>
                        <td>{{ $feedback->feed_title}}</td>
                        <td><button type="button" data-toggle="modal" data-target="#a{{$stt}}" class="btn btn-info">Read</button></td>
                        <td>{{ $feedback->feed_phone}}</td>
                        <td>{{ $feedback->feed_email}}</td>
                        <td>
                         @if($feedback->feed_status == 1 )
                          <a href="{{url('admin/feedback/offStatusFeedback/'.$feedback->id)}}" class="badge badge-success p-2">Done</a>
                         @else 
                         <a href="{{url('admin/feedback/onStatusFeedback/'.$feedback->id)}}" class="badge badge-danger p-2">Pending</a>
                         @endif
                        </td>
                        <td>
                          {{--Reply mail--}}
                         @if($feedback->feed_rep == 0 )
                        <a href="mailto:{{$feedback->feed_email}}?subject={{$feedback->feed_title}}" class="badge badge-danger p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                         @else 
                         <a href="mailto:{{$feedback->feed_email}}?subject={{$feedback->feed_title}}" class="badge badge-success p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                         @endif

                            {{--Status reply--}}
                        @if($feedback->feed_rep == 1 )
                            <a href="{{url('admin/feedback/pendingFeedback/'.$feedback->id)}}" class="badge badge-success p-2">Done</a>
                        @else 
                           <a href="{{url('admin/feedback/doneFeedback/'.$feedback->id)}}" class="badge badge-danger p-2">Pending</a>
                        @endif
                         </td>
                        <td>
                          <a href="{{url('admin/feedback/deleteFeedback/'.$feedback->id)}}" class="badge badge-danger p-2" onclick="return confirm('Do you want delete ?');"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                        </td>
                      </tr>
                      {{--Modal content--}}
                <div id="a{{$stt}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">{{$feedback->feed_title}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">                  
                            <div class="form-group">
                            <input class="form-control" value="{{$feedback->feed_content}}" readonly>
                            </div>
                            <div class="form-group">
                              <p>{{ $feedback->created_at}}</p>
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
