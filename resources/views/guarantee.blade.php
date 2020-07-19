@extends('users.layout.layout')
@section('title','Guarantee - Tinyhub')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1>Guarantee</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('guarantee') }}
                </div>
            </div>
        </div>
    </div>
</div>
<section class="guarantee py-5">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h4>Warranty and Returns</h4>
                    <p>We are official retailers for virtually all well-known brands and products. In spite of the high quality products that we have in our range, it can occur that you receive a product that is not perfect. In that case we will be happy to provide you with a suitable solution as quickly as possible.</p>
                    <p><b>EXTENDED 2-YEAR WARRANTY</b></p>
                    <p>From 2014 onwards all goods that you buy from TinyHub are covered by our two year guarantee period. This means that we will extend the manufacturer’s guarantee period to 24 months, at no extra cost.</p>
                    <p><b>What exceptions are there?</b></p>
                    <p>Consumables such as strings, drum sticks, guitar picks, tape, lights, batteries, reeds and cross faders are excluded. Damage to instruments is only covered if, in spite of careful maintenance of the instruments involved, it arises as a result of faulty manufacture. We are very flexible, but there is nothing that either we or the manufacturer can do about poor maintenance. This extensive warranty will only be applied for consumer purchases; for business orders, the statutory warranty and/or factory warranty will be applicable. In the case of instruments with a manufacturer’s guarantee longer than two years, then naturally the manufacturers guarantee applies.</p>
                    <p><b>14 DAY MONEY-BACK PERIOD</b></p>
                    <p>TinyHub operates a 14 day approval and inspection period for all online orders. This period commences when you take delivery of the product. After 14 days the purchase agreement becomes final. During this period you should handle the product and packaging carefully, if reasonably possible. Try the product out to the extent necessary in order to decide whether you wish to keep it. If you wish to return the product, the method of shipment and the condition of the product must comply with our stated terms and conditions.

                        For purchases in the store a 14-day exchange guarantee and you will receive a gift voucher.</p>
                    <p><b>RETURNS PROCEDURE</b></p>
                    <p>There are a number of reasons you may decide to return (a part of) your order. Read this page through carefully to avoid any misunderstandings and delays.</p>
                    <p><b>RMA authorisation code</b></p>
                    <p>Return of goods without RMA authorisation code is unfortunately impossible. In all cases complete the online return form first. If your request for return of goods is approved, you will receive an RMA authorisation code by email. Note this code carefully on the packaging, so that your package can be correctly identified when it arrives in our warehouse.</p>
                    <p><b>Return shipment</b></p>
                    <p>In all cases the correct postal franking costs must be paid for a return shipment. Packages not correctly franked or marked as returned subject to payment on delivery will not be accepted by us. TinyHub reimburses the postal costs in some cases.</p>
                    <p><b>Return address:</b></p>
                    <ul>
                        <li>TinyHub Rotterdam</li>
                        <li>Department of Warranty & Returns</li>
                        <li>Ceintuurbaan 191</li>
                        <li>NL-3051KC ROTTERDAM</li>
                        <li>The Netherlands</li>
                    </ul>
                    <p><b>Excluded from return</b></p>
                    <ul>
                        <li>Outlet products (B-stock)</li>
                        <li>Hygiene products (such as microphones, headphones, harmonicas and other wind instruments)</li>
                        <li>Customized products (such as cut-to-length cables, customized sound systems)</li>
                        <li>Software or other licence based products and books (after you broke the seal)</li>
                        <li>Consumables (such as lightbulbs, valves and liquids)</li>
                    </ul>
                </div>
        </div>
    </div>
</section>
@endsection