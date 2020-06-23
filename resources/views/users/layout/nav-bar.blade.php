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
             <!-- Authentication Links -->
             @guest
             <li class="nav-item">
                 <a class="log-info badge mr-4" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
             @if (Route::has('register'))
                 <li class="nav-item">
                     <a class="res-info badge" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
             @endif
         @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </li>
         @endguest
        </div>
      </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
    <!-- Navbar Header  -->
    <a href="{{route("homepage")}}" class="navbar-brand-homepage"><img src="{{url("img/tinyhub-logo.png")}}" alt="tinyhub logo" width="170" height="auto"></a>
    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
      <!-- Navbar Collapse -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="{{route("homepage")}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="products" class="nav-link">Categories</a></li>
          <li class="nav-item"><a href="brand" class="nav-link">Brands </a></li>
          <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="contact-us" class="nav-link">Contact Us</a></li>
        </ul>
        <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
          <!-- Search Button-->
          <div class="search mr-4"><i class="fas fa-search"></i></div>
          <!-- Cart Dropdown-->
          <div class="cart">
            <a href="#" class="view-cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
            </a>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
