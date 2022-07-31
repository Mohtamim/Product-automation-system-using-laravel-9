  <div id="body" class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/images/icon.svg" width="40" height="40" alt="PAS"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Theme Setting -->
    <div class="themesetting">
        <a href="javascript:void(0);" class="theme_btn"><i class="fa fa-gear fa-spin"></i></a>
        <ul class="list-group">
            <li class="list-group-item">
                <ul class="choose-skin list-unstyled mb-0">
                    <li data-theme="green"><div class="green"></div></li>
                    <li data-theme="orange"><div class="orange"></div></li>
                    <li data-theme="blush"><div class="blush"></div></li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                    <li data-theme="timber"><div class="timber"></div></li>
                    <li data-theme="blue"><div class="blue"></div></li>
                    <li data-theme="amethyst"><div class="amethyst"></div></li>
                </ul>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>Light Sidebar</span>
                <label class="switch sidebar_light">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>Gradient</span>
                <label class="switch gradient_mode">
                    <input type="checkbox" checked="">
                    <span class="slider round"></span>
                </label>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>Dark Mode</span>
                <label class="switch dark_mode">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>RTL version</span>
                <label class="switch rtl_mode">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </li>
        </ul>
        <hr>
        <div>
            <a href="javascript:void(0);" class="btn btn-dark btn-block" target="_blank">Buy this item</a>
            <a href="javascript:void(0);" target="_blank" class="btn btn-primary theme-bg gradient btn-block">View Portfolio</a>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Page top navbar -->
        @include('admin.include.navbar')
        <!-- Main left sidebar menu -->
        @include('admin.include.leftNav')

        <!-- Right bar chat  -->
        <div id="rightbar" class="rightbar">
            <div class="slim_scroll">
                <div class="chat_list">
                    <form>
                        <div class="input-group c_input_group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <div class="body">
                        <ul class="nav nav-tabs3 white mt-3 d-flex text-center">
                            <li class="nav-item flex-fill"><a class="nav-link active show" data-toggle="tab" href="#chat-Users">Chat</a></li>
                            <li class="nav-item flex-fill"><a class="nav-link" data-toggle="tab" href="#chat-Groups">Groups</a></li>
                            <li class="nav-item flex-fill"><a class="nav-link mr-0" data-toggle="tab" href="#chat-Contact">Contact</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane vivify fadeIn active show" id="chat-Users">
                                <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Louis Henry <small class="text-muted font-12">10 min</small></span>
                                                <span class="message">How do you do?</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Debra Stewart <small class="text-muted font-12">15 min</small></span>
                                                <span class="message">I was wondering...</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Lisa Garett <small class="text-muted font-12">18 min</small></span>
                                                <span class="message">I've forgotten how it felt before</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie <small class="text-muted font-12">23 min</small></span>
                                                <span class="message">Wasup for the third time like...</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Marshall Nichols <small class="text-muted font-12">27 min</small></span>
                                                <span class="message">But we’re probably gonna need a new carpet.</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Debra Stewart <small class="text-muted font-12">38 min</small></span>
                                                <span class="message">It’s not that bad...</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Lisa Garett <small class="text-muted font-12">45 min</small></span>
                                                <span class="message">How do you do?</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane vivify fadeIn" id="chat-Groups">
                                <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">PHP Groups<small class="text-muted font-12">10 min</small></span>
                                                <span class="message">How do you do?</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Family Groups <small class="text-muted font-12">18 min</small></span>
                                                <span class="message">I've forgotten how it felt before</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Friends holic <small class="text-muted font-12">23 min</small></span>
                                                <span class="message">Wasup for the third time like...</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">CL City 2 <small class="text-muted font-12">45 min</small></span>
                                                <span class="message">How do you do?</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane vivify fadeIn" id="chat-Contact">
                                <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">John Smith <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">johnsmith@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Merri Diamond <small class="text-muted"><i class="fa fa-heart"></i></small></span>
                                                <span class="message">hermanbeck@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Louis Henry <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">maryadams@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Andrew Patrick <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">mikethimas@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Claire Peters <small class="text-muted"><i class="fa fa-heart"></i></small></span>
                                                <span class="message">clairepeters@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Debra Stewart <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">It’s not that bad...</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Lisa Garett <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">eringonzales@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Louis Henry <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">susiewillis@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);" class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Debra Stewart <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                <span class="message">johnsmith@info.com</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stiky note div  -->
        <div class="sticky-note">
            <a href="javascript:void(0);" class="right_note"><i class="fa fa-close"></i></a>
            <div class="form-group c_form_group">
                <label>Write your note here</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter here...">
                    <div class="input-group-append"><button class="btn btn-dark btn-sm" type="button">Add</button></div>
                </div>
            </div>
            <div class="note-body">
                <div class="card note-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-10 text-muted">12 Apr 2020</span>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                            <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="note-detail">
                        <span>Commit code on github branch development</span>
                    </div>
                </div>
                <div class="card note-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-10 text-muted">12 Apr 2020</span>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="star active"><i class="fa fa-star-o"></i></a>
                            <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="note-detail">
                        <span>Meeting with client for new project.</span>
                    </div>
                </div>
                <div class="card note-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-10 text-muted">12 Apr 2020</span>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                            <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="note-detail">
                        <span>making this the first true generator on the Internet</span>
                    </div>
                </div>
                <div class="card note-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-10 text-muted">12 Apr 2020</span>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                            <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="note-detail">
                        <span>it look like readable English. Many desktop publishing</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main body part  -->
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Hi, Welcomeback!</h1>
                            <span>JustDo Dashboard,</span>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                            <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                                    <p class="text-muted mb-1">Purchases <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                                    <h5 class="mb-0">289</h5>
                                </div>
                                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                    <p class="text-muted mb-1">Today’s profit <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                                    <h5 class="mb-0">$541</h5>
                                </div>
                                <div class="mb-3 mb-xl-0">
                                    <p class="text-muted mb-1">Balance <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                                    <h5 class="mb-0">$98M</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">
                            <a class="navbar-brand" href="#">M.</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars text-muted"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item vivify swoopInTop delay-150 active"><a class="nav-link" href="index.html">Analytics</a></li>
                                    <li class="nav-item vivify swoopInTop delay-250"><a class="nav-link" href="index2.html">Cryptocurrency</a></li>
                                    <li class="nav-item vivify swoopInTop delay-350"><a class="nav-link" href="index3.html">Campaign</a></li>
                                    <li class="nav-item dropdown vivify swoopInTop delay-450">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">More</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="index4.html">eCommerce Analytics</a>
                                            <a class="dropdown-item" href="index5.html">Sales Monitoring</a>
                                            <a class="dropdown-item" href="index6.html">Finance Performance</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="ml-auto">
                                    <a href="app-todo.html" class="btn btn-default">ToDo</a>
                                    <a href="setting.html" class="btn btn-default">Settings</a>
                                    <a href="javascript:void(0);" target="_blank" class="btn btn-dark">Buy this item</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12">
                        <div class="card theme-bg gradient">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider1" class="carousel vert slide" data-ride="carousel" data-interval="2700">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Total Income</div>
                                                            <div class="mt-3 h1">$13,025</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">3.78% <i class="fa fa-caret-down"></i></div>
                                                                <span>This year</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Total Revenue</div>
                                                            <div class="mt-3 h1">$9,452</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">0.85% <i class="fa fa-caret-up"></i></div>
                                                                <span>This year</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Total Expense</div>
                                                            <div class="mt-3 h1">$4,124</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">2.04% <i class="fa fa-caret-down"></i></div>
                                                                <span>This year</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2800">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Total User</div>
                                                            <div class="mt-3 h1">1,258</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">7% <i class="fa fa-caret-up"></i></div>
                                                                <span>This month</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Sessions</div>
                                                            <div class="mt-3 h1">451</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">23.5% <i class="fa fa-caret-up"></i></div>
                                                                <span>This month</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Bounce Rate</div>
                                                            <div class="mt-3 h1">36.80</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">5% <i class="fa fa-caret-up"></i></div>
                                                                <span>This month</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Bitcoin Wallet</div>
                                                            <div class="mt-3 h1">4.25762</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">5.23% <i class="fa fa-caret-up"></i></div>
                                                                <span>This Week</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Ethereum Wallet</div>
                                                            <div class="mt-3 h1">3.15948</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">1.85% <i class="fa fa-caret-up"></i></div>
                                                                <span>This Week</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>NioWallet</div>
                                                            <div class="mt-3 h1">2.75342</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">1.25% <i class="fa fa-caret-down"></i></div>
                                                                <span>This Week</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider4" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Number of Meetings</div>
                                                            <div class="mt-3 h1">781</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                                <span>(30 days)</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Number of Clients</div>
                                                            <div class="mt-3 h1">10K</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                                <span>(30 days)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="section_title">
                            <div class="mr-3">
                                <h3>Overview</h3>
                                <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                            </div>
                            <div>
                                <div class="btn-group mb-3">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">14 March 2020</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Today’s</a>
                                            <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last 12 Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Custom Dates</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>This Year's Total Revenue</h2>
                                <small class="text-muted font-12">It is the period time a user is actively engaged with your website, page or app, etc</small>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu theme-bg gradient">
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="d-flex flex-row">
                                    <div class="pb-3">
                                        <h5 class="mb-0">$3,056</h5>
                                        <small class="text-muted font-11">Total Sales</small>
                                    </div>
                                    <div class="pb-3 pl-4 pr-4">
                                        <h5 class="mb-0">$1,098</h5>
                                        <small class="text-muted font-11">Total Profit</small>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-sm btn-default">Day</button>
                                            <button type="button" class="btn btn-sm btn-default">Week</button>
                                            <button type="button" class="btn btn-sm btn-primary theme-bg gradient">Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="flotChart" class="flot-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Sales By Campaign</h2>
                                <small class="font-12">The total number of Page Impressions within the date range</small>
                            </div>
                            <div class="body">
                                <div class="d-flex flex-row">
                                    <div class="pb-3">
                                        <h5 class="mb-0">$356</h5>
                                        <small class="text-muted font-11">Paid</small>
                                    </div>
                                    <div class="pb-3 pl-4 pr-4">
                                        <h5 class="mb-0">$198</h5>
                                        <small class="text-muted font-11">Viral</small>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-sm btn-default">D</button>
                                            <button type="button" class="btn btn-sm btn-primary theme-bg gradient">W</button>
                                            <button type="button" class="btn btn-sm btn-default">M</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-bar-rotated" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>My Portfolio</h2>
                                <small class="font-12">The total number of Page Impressions within the date range</small>
                            </div>
                            <div class="body">
                                <table class="table table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Apple</td>
                                            <td class="text-right">984.52</td>
                                            <td class="text-right"><span class="text-success">(0.25%) <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>Google</td>
                                            <td class="text-right">956.3</td>
                                            <td class="text-right"><span class="text-danger">(-0.15%) <i class="fa fa-caret-down"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>DMKT</td>
                                            <td class="text-right">89.74</td>
                                            <td class="text-right"><span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>Lenovo</td>
                                            <td class="text-right">89.74</td>
                                            <td class="text-right"><span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>TMLS</td>
                                            <td class="text-right">210.04</td>
                                            <td class="text-right"><span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>Dell</td>
                                            <td class="text-right">210.04</td>
                                            <td class="text-right"><span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>YOUS</td>
                                            <td class="text-right">218.47</td>
                                            <td class="text-right"><span class="text-danger">(-0.42%) <i class="fa fa-caret-down"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>TCS</td>
                                            <td class="text-right">48.75</td>
                                            <td class="text-right"><span class="text-danger">(-0.63%) <i class="fa fa-caret-down"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Campaign By Channel</h2>
                                <small class="font-12">The total number of Page Impressions within the date range</small>
                            </div>
                            <div class="body">
                                <div id="chart-donut-d" style="height: 220px"></div>
                                <div class="mt-2">
                                    <div class="form-group">
                                        <label class="d-block">Organic Search <span class="float-right">2,098</span></label>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%; background-color: #2c83b6;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Email Campaign <span class="float-right">1,002</span></label>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color: #a5d8a2;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label class="d-block">Referral Links <span class="float-right">780</span></label>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%; background-color: #9367b4;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Page Impressions</h2>
                                <small class="font-12">The total number of Page Impressions within the date range</small>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu theme-bg gradient">
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="d-flex flex-row">
                                    <div class="pb-3">
                                        <h5 class="mb-0">$356</h5>
                                        <small class="text-muted font-11">Paid</small>
                                    </div>
                                    <div class="pb-3 pl-4 pr-4">
                                        <h5 class="mb-0">$198</h5>
                                        <small class="text-muted font-11">Viral</small>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-sm btn-default">D</button>
                                            <button type="button" class="btn btn-sm btn-primary theme-bg gradient">W</button>
                                            <button type="button" class="btn btn-sm btn-default">M</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-bar-stacked" style="height: 320px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Organic Visits & Conversions</h2>
                                <small class="font-12">The total number of Page Impressions within the date range</small>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu theme-bg gradient">
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="d-flex flex-row">
                                    <div class="pb-3">
                                        <h5 class="mb-0">$356</h5>
                                        <small class="text-muted font-11">Rate</small>
                                    </div>
                                    <div class="pb-3 pl-4 pr-4">
                                        <h5 class="mb-0">$198</h5>
                                        <small class="text-muted font-11">Value</small>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-sm btn-default">Day</button>
                                            <button type="button" class="btn btn-sm btn-default">Week</button>
                                            <button type="button" class="btn btn-sm btn-primary theme-bg gradient">Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-OrganicVisits" style="height: 200px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2>Overall Rating</h2>
                            </div>
                            <div class="body">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0">4.3</h2>
                                    <div class="ml-2 mr-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked mt-3">
                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" title="" data-original-title="Avatar">
                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar6.jpg" data-toggle="tooltip" title="" data-original-title="Avatar">
                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" title="" data-original-title="Avatar">
                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" title="" data-original-title="Avatar">
                                </div>
                                <ul class="list-group list-group-flush ratings font-13 mt-3">
                                    <li class="list-group-item">
                                        <div>5.0</div>
                                        <div class="stars ml-2 mr-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span>4,178</span>
                                            <span class="font-10">58%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div>4.0</div>
                                        <div class="stars ml-2 mr-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span>2,091</span>
                                            <span class="font-10">28%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div>3.0</div>
                                        <div class="stars ml-2 mr-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span>984</span>
                                            <span class="font-10">15%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div>2.0</div>
                                        <div class="stars ml-2 mr-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span>430</span>
                                            <span class="font-10">8%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div>1.0</div>
                                        <div class="stars ml-2 mr-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span>307</span>
                                            <span class="font-10">18%</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2>Users Overview</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <label class="mb-0 font-13">New Users</label>
                                        <h4 class="font-22 font-weight-bold">2,025</h4>
                                    </div>
                                    <div class="col-6">
                                        <label class="mb-0 font-13">Return Visitors</label>
                                        <h4 class="font-22 font-weight-bold">1,254</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="d-block">New Users <span class="float-right">77%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Engagement <span class="float-right">23%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                                <small class="font-12">The total number of Page Impressions within the date range<a href="">View more</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="section_title">
                            <div class="mr-3">
                                <h3>Earning By Countries</h3>
                                <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                            </div>
                            <div>
                                <div class="btn-group mb-3">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">14 March 2020</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Today’s</a>
                                            <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last 12 Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Custom Dates</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                        <div id="apexspark1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                        <div id="apexspark2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                        <div id="apexspark3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                        <div id="apexspark4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div id="world-map-markers" class="jvector-map" style="height: 305px"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="w60">
                                                            <img src="assets/images/flag/au.svg" class="w30 rounded">
                                                        </td>
                                                        <td>
                                                            <a href="#" title="">Australia</a>
                                                            <p class="mb-0">Scott Ortega</p>
                                                        </td>
                                                        <td>
                                                            <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                            <small class="font-12 text-muted">Total Orders</small>
                                                        </td>
                                                        <td>
                                                            <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Returns</small>
                                                        </td>
                                                        <td>
                                                            <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Earnings</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w60">
                                                            <img src="assets/images/flag/ca.svg" class="w30 rounded">
                                                        </td>
                                                        <td>
                                                            <a href="#" title="">Canada</a>
                                                            <p class="mb-0">Scott Ortega</p>
                                                        </td>
                                                        <td>
                                                            <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                            <small class="font-12 text-muted">Total Orders</small>
                                                        </td>
                                                        <td>
                                                            <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Returns</small>
                                                        </td>
                                                        <td>
                                                            <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Earnings</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w60">
                                                            <img src="assets/images/flag/france.svg" class="w30 rounded">
                                                        </td>
                                                        <td>
                                                            <a href="#" title="">France</a>
                                                            <p class="mb-0">Scott Ortega</p>
                                                        </td>
                                                        <td>
                                                            <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                            <small class="font-12 text-muted">Total Orders</small>
                                                        </td>
                                                        <td>
                                                            <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Returns</small>
                                                        </td>
                                                        <td>
                                                            <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Earnings</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w60">
                                                            <img src="assets/images/flag/us.svg" class="w30 rounded">
                                                        </td>
                                                        <td>
                                                            <a href="#" title="">USA</a>
                                                            <p class="mb-0">Scott Ortega</p>
                                                        </td>
                                                        <td>
                                                            <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                            <small class="font-12 text-muted">Total Orders</small>
                                                        </td>
                                                        <td>
                                                            <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Returns</small>
                                                        </td>
                                                        <td>
                                                            <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Earnings</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w60">
                                                            <img src="assets/images/flag/nl.svg" class="w30 rounded">
                                                        </td>
                                                        <td>
                                                            <a href="#" title="">Netherlands</a>
                                                            <p class="mb-0">Scott Ortega</p>
                                                        </td>
                                                        <td>
                                                            <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                            <small class="font-12 text-muted">Total Orders</small>
                                                        </td>
                                                        <td>
                                                            <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Returns</small>
                                                        </td>
                                                        <td>
                                                            <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                            <small class="font-12 text-muted">Total Earnings</small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
