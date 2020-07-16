<div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
            @if(Auth::user()->role == 1)
            Admin
            @elseif(Auth::user()->role == 2)
            Mod Product
            @else
            Mod Customer
            @endif
        </div>
        <ul class="sidebar-menu list-unstyled">
            <li class="sidebar-list-item"><a href="{{url("admin/index")}}" class="sidebar-link text-muted"><i class="o-home-1 mr-3"></i><span>Dashboard</span></a>
            </li>

            @if(Auth::user()->role == 1)
            <!-- Comment Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages9" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-paper-stack-1 mr-3"></i><span>Comment</span></a>
                <div id="pages9" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/comment/listComment")}}" class="sidebar-link text-muted pl-lg-5">List Comments</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Comment Module -->
            <!-- Banner Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages7" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3"></i><span>Banner</span></a>
                <div id="pages7" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/banners/listBanner")}}" class="sidebar-link text-muted pl-lg-5">List Banners</a></li>
                        <li class="sidebar-list-item"><a href="{{url("admin/banners/createBanner")}}" class="sidebar-link text-muted pl-lg-5">Create New Banner</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Banner Module -->
            <!-- Feedback Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages3" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-paper-stack-1 mr-3"></i><span>FeedBack</span></a>
                <div id="pages3" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/feedback/feedbackList")}}" class="sidebar-link text-muted pl-lg-5">View Feedback</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Feedback  Module -->
            @endif
            @if(Auth::user()->role == 1 || Auth::user()->role == 2)
            <!-- Product Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages4" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3"></i><span>Products</span></a>
                <div id="pages4" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/product/listProduct")}}" class="sidebar-link text-muted pl-lg-5">List Products</a></li>
                        <li class="sidebar-list-item"><a href="{{url("admin/product/createProduct")}}" class="sidebar-link text-muted pl-lg-5">Create New Product</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Product Module -->
            <!-- Category Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages5" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-archive-folder-1 mr-3"></i><span>Categories</span></a>
                <div id="pages5" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/category/categories")}}" class="sidebar-link text-muted pl-lg-5">Categories</a></li>
                        <li class="sidebar-list-item"><a href="{{url("admin/category/createCategories")}}" class="sidebar-link text-muted pl-lg-5">Create New Categories</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Category Module -->
            <!-- Brands Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages6" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-trophy-1 mr-3"></i><span>Brands</span></a>
                <div id="pages6" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/brands/listBrands")}}" class="sidebar-link text-muted pl-lg-5">List Brands</a></li>
                        <li class="sidebar-list-item"><a href="{{url("admin/brands/createBrands")}}" class="sidebar-link text-muted pl-lg-5">Create New Brands</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Brand Module -->
            @endif
            @if(Auth::user()->role == 1 || Auth::user()->role == 3)
            <!-- Orders Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages8" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-survey-1 mr-3"></i><span>Orders</span></a>
                <div id="pages8" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/order/listOrder")}}" class="sidebar-link text-muted pl-lg-5">List orders</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Orders Module -->
            <!-- Users Module -->
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages1" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-profile-1 mr-3"></i><span>Users</span></a>
                <div id="pages1" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/users/listAdmin")}}" class="sidebar-link text-muted pl-lg-5">List Admin</a></li>
                        <li class="sidebar-list-item"><a href="{{url("admin/users/listUsers")}}" class="sidebar-link text-muted pl-lg-5">List Users</a></li>
                    </ul>
                </div>
            </li>
            <!-- End Users Module -->
             <!-- Customers Module -->
             <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages2" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-user-details-1 mr-3"></i><span>Customers</span></a>
                <div id="pages2" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{url("admin/customer/listCustomer")}}" class="sidebar-link text-muted pl-lg-5">List Customers</a></li>
                        <li class="sidebar-list-item"><a href="{{url("admin/customer/createAdmin")}}" class="sidebar-link text-muted pl-lg-5">Create New Admin</a></li>
                </div>
            </li>
            <!-- End Customers Module -->
            @endif
            <hr><br>
            <li class="sidebar-list-item"><a href="{{url("admin/reportproduct")}}" target="_blank" class="sidebar-link" style="color: darkgreen;"><i class="o-statistic-1 mr-3"></i><span>Report Product</span></a>
            </li>
            <li class="sidebar-list-item"><a href="{{url("admin/reportcategoryAndbrand")}}" target="_blank" class="sidebar-link" style="color: darkgreen;"><i class="o-statistic-1 mr-3"></i><span>Report Categories & Brands</span></a>
            </li>
        </ul>
    </div>