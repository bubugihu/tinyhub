@extends('users.layout.layout')
@section('order-details')
    <section class="order-details no-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block">
                        <div class="block-header">
                            <h6 class="text-uppercase">INSTRUCTIONS FOR SELLER</h6>
                        </div>
                        <div class="block-body">
                            <p>If you have some information for the seller you can leave them in the box below</p>
                            <form action="#">
                                <textarea name="instruction" cols="30" rows="10"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection