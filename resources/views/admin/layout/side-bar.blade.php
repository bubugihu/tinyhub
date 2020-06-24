<div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Admin</div>
      <ul class="sidebar-menu list-unstyled">
            <li class="sidebar-list-item"><a href="{{url("admin/index")}}" class="sidebar-link text-muted"><i class="o-home-1 mr-3"></i><span>Dashboard</span></a>
            </li>
            <!-- Product Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages1" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3"></i><span>Products</span></a>
                <div id="pages1" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/product/listProduct")}}" class="sidebar-link text-muted pl-lg-5">List Products</a></li>
                    <li class="sidebar-list-item"><a href="{{url("admin/product/createProduct")}}" class="sidebar-link text-muted pl-lg-5">Create New Product</a></li>
                    <li class="sidebar-list-item"><a href="{{url("admin/product/categories")}}" class="sidebar-link text-muted pl-lg-5">Categories</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Product Module -->
            <!-- Brands Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages2" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-trophy-1 mr-3"></i><span>Brands</span></a>
                <div id="pages2" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/brands/listBrands")}}" class="sidebar-link text-muted pl-lg-5">List Brands</a></li>
                    <li class="sidebar-list-item"><a href="{{url("admin/brands/createBrands")}}" class="sidebar-link text-muted pl-lg-5">Create New Brands</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Brand Module -->
            <!-- Customers Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages3" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-user-details-1 mr-3"></i><span>Customers</span></a>
                <div id="pages3" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/customer/listCustomer")}}" class="sidebar-link text-muted pl-lg-5">View customers</a></li>
                </div>
            </li>
            <!-- End Customers Module -->
            <!-- Orders Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages4" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-survey-1 mr-3"></i><span>Orders</span></a>
                <div id="pages4" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/order/listOrder")}}" class="sidebar-link text-muted pl-lg-5">View orders</a></li>
                    <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Orders status</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Orders Module -->
            <!-- Users Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages5" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-profile-1 mr-3"></i><span>Users</span></a>
                <div id="pages5" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/listUsers")}}" class="sidebar-link text-muted pl-lg-5">List Users</a></li>
                    <li class="sidebar-list-item"><a href="{{url('admin/createUser')}}" class="sidebar-link text-muted pl-lg-5">Create New User</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Users Module -->
            <!-- Comment & Feedback Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages6" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-paper-stack-1 mr-3"></i><span>Comment</span></a>
                <div id="pages6" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                    <li class="sidebar-list-item"><a href="{{url("admin/comment/commentList")}}" class="sidebar-link text-muted pl-lg-5">View Comment</a></li>
                    <li class="sidebar-list-item"><a href="{{url("admin/comment/feedbackList")}}" class="sidebar-link text-muted pl-lg-5">View Feedback</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Comment & Feedback Module -->
            <!-- Banner Module -->
            <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3"></i><span>Banner</span></a>
            </li>
            <!-- End Banner Module -->
      </ul>
      </div>