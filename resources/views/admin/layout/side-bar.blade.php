<div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family"> 
     {{Auth::user()->name  }}   
        </div>
      <ul class="sidebar-menu list-unstyled">
          @if(Auth::user()->role  == 1 || Auth::user()->role  == 2)
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages1" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3"></i><span>Products</span></a>
                <div id="pages1" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/product/listProduct")}}" class="sidebar-link text-muted pl-lg-5">List Products</a></li>
                    <li class="sidebar-list-item"><a href="{{url("admin/product/createProduct")}}" class="sidebar-link text-muted pl-lg-5">Create New Product</a></li>
                    <li class="sidebar-list-item"><a href="{{url("admin/product/categories")}}" class="sidebar-link text-muted pl-lg-5">Categories</a></li>
                    </ul>
                </div>
                </li>
        @endif
        @if(Auth::user()->role == 1 || Auth::user()->role  == 3)
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages2" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-user-details-1 mr-3"></i><span>Customers</span></a>
                <div id="pages2" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/customer/listCustomer")}}" class="sidebar-link text-muted pl-lg-5">View customers</a></li>
                </div>
            </li>
        @endif
        
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages3" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-survey-1 mr-3"></i><span>Orders</span></a>
                <div id="pages3" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/order/listOrder")}}" class="sidebar-link text-muted pl-lg-5">View orders</a></li>
                    <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Orders status</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages4" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-profile-1 mr-3"></i><span>Admin</span></a>
                <div id="pages4" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/listUsers")}}" class="sidebar-link text-muted pl-lg-5">List Users</a></li>
                    <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Create New User</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages5" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-paper-stack-1 mr-3"></i><span>Comment</span></a>
                <div id="pages5" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/listUsers")}}" class="sidebar-link text-muted pl-lg-5">View Comment</a></li>
                    <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">View Feedback</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3"></i><span>Banner</span></a>
            </li>
      </ul>
      </div>
