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
              <div class="top-right links py-1 shadow">
                  @auth
                  @if(Auth::user()->role == 0)
              <a href="{{ url('users/profile') }}" class="log-info badge mr-4"> {{ Auth::user()->name }} </a>
                  @else
              <a href="{{ url('admin/index') }}" class="log-info badge mr-4"> {{ Auth::user()->name }} </a> 
                  @endif   
              <a href="{{ url('/logout') }}" class="res-info badge" >Log Out</a>
                @endauth
                  @guest
                  <li class="nav-item">
                    <a class="log-info badge mr-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                 <li class="nav-item">
                     <a class="res-info badge" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
             @endguest
              </div>
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
          <li class="nav-item"><a href="{{ url('category')}}" class="nav-link">Categories</a></li>
          <li class="nav-item"><a href="brand" class="nav-link">Brands </a></li>
          <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="contact-us" class="nav-link">Contact Us</a></li>
        </ul>
        <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
          <!-- Search Button-->
          <div class="search-box mr-4">
            <a href="#search"><i class="fas fa-search"></i></a>
          </div>
          <!-- Cart Dropdown-->
          {{-- <div class="cart">
            <a href="{{ url('cart') }}" class="view-cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
            </a>
          </div> --}}
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" style="padding-right: 0!important;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i data-count="3" class="fa fa-shopping-basket fa-2x fa-border icon-dark badge-cart"></i></a>
              <ul class="dropdown-menu dropdown-cart mt-3 py-3" role="menu">
                  <li>
                      <span class="item mb-3">
                        <span class="item-left">
                          <img src="{{url("img/headphone-slider2.png")}}" alt="" width="50"/>
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                          <a href=""><button class="badge badge-danger pull-right">X</button></a>
                        </span>
                    </span>
                  </li>
                  <li>
                      <span class="item">
                        <span class="item-left">
                          <img src="{{url("img/headphone-slider2.png")}}" alt="" width="50"/>
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <a href=""><button class="badge badge-danger pull-right">X</button></a>
                        </span>
                    </span>
                  </li>
                  <li class="divider"></li>
                  <li class="text-center mt-4"><a class="btn btn-dark" href="#">View Cart</a></li>
              </ul>
            </li>
          </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div id="search">
    <button type="button" class="close">X</button>
    <form action="{{route('search')}}" method="GET">
        <input type="search" value="" name="searchKey" placeholder="Which products do you want to search ?" required/>
        <button type="submit" class="btn login-btn">Search</button>
    </form>
</div>
