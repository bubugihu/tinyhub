<footer class="main-footer">
	<div class="main-block">
        <div class="container">
          <div class="row">
            <div class="info col-lg-4">
              <div class="logo"><img src="{{url("img/tinyhub-logo.png")}}" alt="tinyhub logo" width="180" height="auto"></div>
              <ul class="social-menu list-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="site-links col-lg-2 col-md-6">
              <h5 class="text-uppercase">Categories</h5>
              <ul class="list-unstyled">
                <li> <a href="#">In Ear</a></li>
                <li> <a href="#">On Ear</a></li>
                <li> <a href="#">True-Wireless</a></li>
              </ul>
            </div>
            <div class="site-links col-lg-2 col-md-6">
              <h5 class="text-uppercase">About Us</h5>
              <ul class="list-unstyled">
                <li> <a href="shipping-policy">Shipping Policy</a></li>
                
                <li> <a href="guarantee">Guarantee</a></li>
                <li> <a href="payment">Payment</a></li>
                
                <li> <a href="feedback">Contact Us</a></li>
              </ul>
            </div>
            <div class="newsletter col-lg-4">
              <h5 class="text-uppercase">Daily Offers &amp; Discounts</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
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
					if ($(this).scrollTop() > 100) {
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
  <script>
    var city = document.querySelector('#city');
    var district = document.querySelector('#district');
    var options2 = district.querySelectorAll('option');

    function giveSelection(selValue) {
        district.innerHTML = ''; //onchange
        for (var i = 0; i < options2.length; i++) {
            if (options2[i].dataset.option === selValue) {
                district.appendChild(options2[i]);
            }
        }
    }
    giveSelection(city.value);
</script>

<script>
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
@endsection
