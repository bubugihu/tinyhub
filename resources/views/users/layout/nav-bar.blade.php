<div class="top-bar">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 hidden-lg-down text-col">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fas fa-phone-alt"></i> 020-800-456-747</li>
            <li class="list-inline-item">Free shipping on orders over $300</li>
          </ul>
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
            @if (Route::has('login'))
                <div class="top-right links py-1 shadow">
                    @auth
                <a href="
                {{ url('/home') }}
                    "> {{ Auth::user()->name }} </a>
                <a href="{{ url('/logout') }}">Log Out</a>
                    @else
                        <a class="btn btn-success" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-danger" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
      </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
    <!-- Navbar Header  -->
    <a href="{{ route('homepage')}}" class="navbar-brand-homepage"><img src="{{url("img/tinyhub-logo.png")}}" alt="tinyhub logo" width="170" height="auto"></a>
      <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
      <!-- Navbar Collapse -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown"><a id="navbarHomeLink" href="{{ route('homepage')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="{{ url('productList')}}" class="nav-link">Categories</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Brands </a></li>
          <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
        </ul>
        <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
          <!-- Search Button-->
          <div class="search"><i class="fas fa-search"></i></div>
          <!-- Cart Dropdown-->
            <div class="cart-no">1</div></a><a href="{{ url('cart') }}" class="view-cart">View Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
