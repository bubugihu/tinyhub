<!-- navbar-->
<header class="header">
  <nav class="navbar navbar-expand-lg px-4 py-3 bg-white shadow">
    <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i>
    </a>
    <a href="{{ route('homepage') }}" class="navbar-brand font-weight-bold text-uppercase text-base">
      <img src="{{asset("img/tinyhub-logo.png")}}" alt="" width="150" height="auto"></a>
    <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
      <div class="dot bg-green"></div><li class="nav-item dropdown ml-auto">
        <a id="userInfo"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
          <strong class="d-block text-wrap headings-font-family" style="color: black; "><i class="far fa-user"></i> {{Auth::user()->name}}</strong>
        </a>
        <div aria-labelledby="userInfo" class="dropdown-menu">
          <a  class="dropdown-item">
            <strong class="d-block text-uppercase headings-font-family"><i class="far fa-user"></i> {{Auth::user()->roleCustomer->customer_name}}</strong>
          </a>
          <div class="dropdown-divider"></div><a href="{{ url('admin/profile/'.Auth::user()->id)}}" class="dropdown-item">Profile</a>
          <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ url('/logout') }}">
            Log Out
          </a>
        </div>
      </li>
    </ul>
  </nav>
</header>