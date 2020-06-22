<footer class="main-footer">
	<div class="main-block">
        <div class="container">
          <div class="row">
            <div class="info col-lg-3">
              <div class="logo"><img src="{{url("img/tinyhub-logo-footer.png")}}" alt="tinyhub logo" width="180" height="auto"></div>
              <ul class="list-unstyled mb-0 py-3">
                <!-- Facebook -->
                <a href="#" class="p-2 fa-lg fb-ic text-center">
                    <i class="fab fa-facebook-f blue-text" style="font-size:20px;"></i>
                </a>
                <!-- Twitter -->
                <a href="#" class="p-2 fa-lg tw-ic text-center">
                    <i class="fab fa-twitter blue-text" style="font-size:20px;"></i>
                </a>
                <!-- Instagram -->
                <a href="#" class="p-2 fa-lg ins-ic text-center">
                    <i class="fab fa-instagram blue-text" style="font-size:20px;"></i>
                </a>
            </ul>
            </div>
            <div class="site-links col-lg-3 col-md-6">
              <h5 class="text-uppercase">Categories</h5>
              <br>
              <ul class="list-unstyled">
                <li> <a href="#">In Ear</a></li>
                <li> <a href="#">On Ear</a></li>
                <li> <a href="#">True-Wireless</a></li>
              </ul>
            </div>
            <div class="site-links col-lg-3 col-md-6">
              <h5 class="text-uppercase">About Us</h5>
              <br>
              <ul class="list-unstyled">
                <li> <a href="shipping-policy">Shipping Policy</a></li>
                <li> <a href="payment">Payment</a></li>
                <li> <a href="guarantee">Guarantee</a></li>
                <li> <a href="contact-us">Contact Us</a></li>
              </ul>
            </div>
            <div class="newsletter col-lg-3">
              <h5 class="text-uppercase">Our Brands</h5>
              <br>
              <ul class="list-unstyled">
                <li> <a href="#">Beats</a></li>
                <li> <a href="#">Bang & Olufsen</a></li>
                <li> <a href="#">JBL</a></li>
                <li> <a href="#">Sony</a></li>
                <li> <a href="#">Westone</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="text col-md-6">
              <p>© 2020 <a href="#" target="_blank">TinyHub</a> All rights reserved.</p>
            </div>
            <div class="payment col-md-6 clearfix">
              <ul class="payment-list list-inline-item pull-right">
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-3/img/visa.svg" alt="..." width="50" height="auto"></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-3/img/mastercard.svg" alt="..." width="50" height="auto"></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-3/img/paypal.svg" alt="..." width="50" height="auto"></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-3/img/western-union.svg" alt="..." width="50" height="auto"	></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <a id="back-to-top" href="#" class="btn-light card back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
</footer>
@section("script-section")
	<script>
		$(document).ready(function(){
			$(window).scroll(function () {
					if ($(this).scrollTop() > 50) {
						$('#back-to-top').fadeIn();
					} else {
						$('#back-to-top').fadeOut();
					}
				});
			// scroll body to 0px on click
			$('#back-to-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
        });
        $(document).ready(function(){
            $(".testimonial-carousel").slick({
                dots: true,
                arrows:false,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                adaptiveHeight: true,
                prevArrow: '<i class="fa fa-angle-left"></i>',
                nextArrow: '<i class="fa fa-angle-right"></i>',
                responsive: [
                    {
                    breakpoint: 1376,
                    settings: {
                        slidesToShow: 2
                    }
                    },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                    }
                ]
                });
            })
	</script>
@endsection
