<!-- navbar-->
<header class="header">
<nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base"><img src="{{url("img/tinyhub-logo.png")}}" alt="" width="150" height="auto"></a>
      <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
      <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="{{url("img/quang.jpg")}}" alt="Jason Dang" width="30" class="img-fluid rounded-circle shadow"></a>
          <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small></a>
            <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log    </a>
          <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
          </div>
        </li>
      </ul>
    </nav>
  </header>
