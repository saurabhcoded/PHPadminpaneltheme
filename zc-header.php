    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRD Admin Panel</title>
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS  -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-icons/bootstrap-icons.css">
    <!-- Swiper CSS  -->
    <link rel="stylesheet" href="assets/plugins/swiperjs/swiper-bundle.min.css">
    <!-- Style Sheet MAin  -->
    <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <!--======================= Headers ======================= -->
        <!-- Navigation and Sidebar  -->
        <nav class="navbar navbar-expand-lg border-bottom sticky-top bg-white">
            <div class="container">
                <div class="d-flex align-items-center justify-content-start">
                    <button class=" btn btn-primary btn-sm py-0 pt-1 me-2" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                        <i class="bi bi-list fs-4"></i>
                    </button>
                    <a class="navbar-brand ms-2" href="/">
                        <img src="https://cdn-icons-png.flaticon.com/512/2965/2965279.png" alt="logo" style=" width: 60px;height: 60px" />
                    </a>
                </div>
                <div class="d-flex  align-items-center">
                    <button class="btn login-btn-grad  px-3 py-2 me-2 rounded-pill border-success">
                        Login
                    </button>
                    <button class="btn login-btn-grad  px-3 py-2 rounded-pill bg-success text-white">
                        Register
                    </button>
                    <div class="btn-group dropstart">
                        <button type="button" class="btn border-0 " data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-user-circle fs-1"></i>
                        </button>
                        <ul class="dropdown-menu p-4" style="min-width: 250px">
                            <li>
                                Welcome to SaasAro, <br />
                                <span class="text-success">Saurabh Sharma</span>
                            </li>
                            <li class="mt-2 border p-2 px-3 rounded">
                                <a href="#" class="nav-link ">
                                    My Account
                                </a>
                            </li>
                            <li class="mt-2 border p-2 px-3 rounded">
                                <a href="#" class="nav-link ">
                                    Edit Profile
                                </a>
                            </li>
                            <li class="mt-2 border p-2 px-3 rounded">
                                <a href="#" class="nav-link text-danger">
                                    <i class="bx bxs-log-out-circle text-danger"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- {/* Sidebar */} -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabIndex="-1" id="sidebar" style="width: 330px">
            <div class="offcanvas-header">
                <img src="https://cdn-icons-png.flaticon.com/512/2965/2965279.png" alt="logo" style="width: 80px;height: 80px" />
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body sidebar">
                <ul class="list-group">
                    <li>
                        <a href="/" class="list-group-item rounded py-3 border btn-grad active">
                            <img src="https://cdn-icons-png.flaticon.com/512/7183/7183999.png" alt="user" class="icon-15 me-2" />
                            Dashboard
                        </a>
                    </li>
                    <li class="list-group-item rounded p-0 border-0">
                        <div class="accordion border-0" id="sidebarAccordian">
                            <div class="accordion-item border-0 mt-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed border rounded btn-grad" type="button" data-bs-toggle="collapse" data-bs-target="#Bookings">
                                        <img src="https://cdn-icons-png.flaticon.com/512/8132/8132211.png" alt="user" class="icon-15 me-2" />
                                        General Configurations
                                    </button>
                                </h2>
                                <div id="Bookings" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordian">
                                    <div class="accordion-body p-0">
                                        <div class="list-group">
                                            <a href="/" class="list-group-item rounded py-3 my-1 border">
                                                General Configurations
                                            </a>
                                            <a href="/general/products" class="list-group-item rounded py-3 my-1 border">
                                                Home Featured Products
                                            </a>
                                            <a href="/general/banner" class="list-group-item rounded py-3 my-1 border">
                                                Home Banner
                                            </a>
                                            <a href="/general/gallery" class="list-group-item rounded py-3 my-1 border">
                                                Gallery Manager
                                            </a>
                                            <a href="/general/brand" class="list-group-item rounded py-3 my-1 border">
                                                Brand Manager
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed border rounded  btn-grad" type="button" data-bs-toggle="collapse" data-bs-target="#Room_Management">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2345/2345337.png" alt="user" class="icon-15 me-2" />
                                        Admin Management
                                    </button>
                                </h2>
                                <div id="Room_Management" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordian">
                                    <div class="accordion-body p-0">
                                        <div class="list-group">
                                            <a href="/manage/product" class="list-group-item rounded py-3 mt-1 border">
                                                Products Manager
                                            </a>
                                            <a href="/manage/category" class="list-group-item rounded py-3 mt-1 border">
                                                Category Manager
                                            </a>
                                            <a href="/manage/blog" class="list-group-item rounded py-3 mt-1 border">
                                                Blog Manager
                                            </a>
                                            <a href="/manage/order-manage" class="list-group-item rounded py-3 mt-1 border">
                                                Order Manager
                                            </a>
                                            <a href="/manage/home-control" class="list-group-item rounded py-3 mt-1 border">
                                                Home Page Control
                                            </a>
                                            <a href="/manage/home-content" class="list-group-item rounded py-3 mt-1 border">
                                                Home Page Content Manager
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed border rounded  btn-grad" type="button" data-bs-toggle="collapse" data-bs-target="#Hotel_Details">
                                        <img src="https://cdn-icons-png.flaticon.com/512/595/595990.png" alt="user" class="icon-15 me-2" />
                                        Marketing
                                    </button>
                                </h2>
                                <div id="Hotel_Details" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sidebarAccordian">
                                    <div class="accordion-body p-0">
                                        <div class="list-group">
                                            <a href="/marketing/seo_main" class="list-group-item rounded py-3 mt-1 border">
                                                SEO Manager
                                            </a>
                                            <a href="/marketing/products_seo" class="list-group-item rounded py-3 mt-1 border">
                                                Product SEO Manager
                                            </a>
                                            <a href="/marketing/category_seo" class="list-group-item rounded py-3 mt-1 border">
                                                Category SEO Manager
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed border rounded  btn-grad" type="button" data-bs-toggle="collapse" data-bs-target="#User_Management">
                                        <img src="https://cdn-icons-png.flaticon.com/512/476/476863.png" alt="user" class="icon-15 me-2" />
                                        User Management
                                    </button>
                                </h2>
                                <div id="User_Management" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sidebarAccordian">
                                    <div class="accordion-body p-0">
                                        <div class="list-group">
                                            <a href="/user" class="list-group-item rounded py-3 mt-1 border">
                                                Users
                                            </a>
                                            <a href="/user/add" class="list-group-item rounded py-3 mt-1 border">
                                                Add User
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed border rounded  btn-grad" type="button" data-bs-toggle="collapse" data-bs-target="#HouseKeeping">
                                        <img src="https://cdn-icons-png.flaticon.com/512/675/675579.png" alt="" class="icon-15 me-2" />
                                        Tools
                                    </button>
                                </h2>
                                <div id="HouseKeeping" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sidebarAccordian">
                                    <div class="accordion-body p-0">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item rounded py-3 mt-1 border">
                                                Enquiry Logs
                                            </a>
                                            <a href="#" class="list-group-item rounded py-3 mt-1 border">
                                                Manager Reviews
                                            </a>
                                            <a href="#" class="list-group-item rounded py-3 mt-1 border">
                                                Our Team
                                            </a>
                                            <a href="#" class="list-group-item rounded py-3 mt-1 border">
                                                FAQ's
                                            </a>
                                            <a href="#" class="list-group-item rounded py-3 mt-1 border">
                                                Update Sitemap
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed border rounded  btn-grad" type="button" data-bs-toggle="collapse" data-bs-target="#Reports">
                                        <img src="https://cdn-icons-png.flaticon.com/512/6542/6542965.png" alt="" class="icon-15 me-2" />
                                        Account
                                    </button>
                                </h2>
                                <div id="Reports" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sidebarAccordian">
                                    <div class="accordion-body p-0">
                                        <div class="list-group">
                                            <a href="/account" class="list-group-item rounded py-3 mt-1 border">

                                                Account Details
                                            </a>
                                            <a href="/account/password" class="list-group-item rounded py-3 mt-1 border">
                                                Change Password
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/support" class="list-group-item rounded py-3 mt-5 border-0 text-success">
                            <img src="https://cdn-icons-png.flaticon.com/512/837/837877.png" alt="support" class="icon-25 me-2" />
                            Support
                        </a>
                    </li>
                    <li>
                        <button class="list-group-item rounded py-3 mt-1 border-0 text-danger">
                            <img src="https://cdn-icons-png.flaticon.com/512/4400/4400828.png" alt="" class="icon-25 me-2" />
                            Logout
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!--======================= Headers End  =======================-->