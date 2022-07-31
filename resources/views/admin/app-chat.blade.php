
<div id="body" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
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
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="index.blade.php"><img src="assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                    </div>
                    <form id="navbar-search" class="navbar-form search-form">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                    </form>
                </div>
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" class="right_note icon-menu" title="Right Menu">Notes</a></li>
                            <li class="dropdown hidden-xs">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">Create</a>
                                <div class="dropdown-menu pb-0 mt-0">
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">User</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Product</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Category</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Report</a>
                                </div>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="notification-dot msg">4</span>
                                </a>
                                <ul class="dropdown-menu right_chat email mt-0 animation-li-delay">
                                    <li class="header theme-bg gradient mt-0 text-light">You have 4 New eMail</li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">James Wert <small class="float-right font-12">Just now</small></span>
                                                    <span class="message">Update GitHub</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie <small class="float-right font-12">12min ago</small></span>
                                                    <span class="message">New Messages</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Louis Henry <small class="float-right font-12">38min ago</small></span>
                                                    <span class="message">Design bug fix</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media mb-0">
                                                <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="float-right font-12">2hr ago</small></span>
                                                    <span class="message">Fix Bug</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="notification-dot info">4</span>
                                </a>
                                <ul class="dropdown-menu feeds_widget mt-0 animation-li-delay">
                                    <li class="header theme-bg gradient mt-0 text-light">You have 4 New Notifications</li>
                                    <li>
                                        <a href="#">
                                            <div class="mr-4"><i class="fa fa-check text-red"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted font-12">9:10 AM</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mr-4"><i class="fa fa-user text-info"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-info">New User <small class="float-right text-muted font-12">9:15 AM</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mr-4"><i class="fa fa-question-circle text-warning"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted font-12">9:17 AM</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mr-4"><i class="fa fa-thumbs-o-up text-success"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-success">2 New Feedback <small class="float-right text-muted font-12">9:22 AM</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown language-menu hidden-xs">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                <div class="dropdown-menu language_widget mt-0">
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="assets/images/flag/us.svg" alt="US English" > US English</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="assets/images/flag/gb.svg" alt="UK English" > UK English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="assets/images/flag/russia.svg" alt="Russian" > Russian</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="assets/images/flag/arabia.svg" alt="Arabic" > Arabic</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="assets/images/flag/france.svg" alt="French" > French</a>
                                </div>
                            </li>
                            <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="fa fa-comments-o"></i></a></li>
                            <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                            <li><a href="page-login.blade.php" class="icon-menu"><i class="fa fa-power-off"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="recent_searche" style="display: none;">
                    <div class="card mb-0">
                        <div class="header">
                            <h2>Recent search result</h2>
                            <ul class="header-dropdown dropdown">
                                <li><a href="javascript:void(0);">Clear data</a></li>
                                <li><a href="page-search-results.blade.php"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-l-0 p-r-0">
                                    <h6><a href="#">Crush it - Bootstrap Admin Application Template &amp; Ui Kit</a></h6>
                                    <p class="text-muted">It is a long established fact that a reader will be distracted.</p>
                                    <div class="text-muted font-13">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-secondary margin-0">React</span></li>
                                            <li class="list-inline-item">Dec 27 2020</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item p-l-0 p-r-0">
                                    <h6><a href="#">Epic Pro - HR &amp; Project Management Admin Template and UI Kit</a></h6>
                                    <p class="text-muted">he point of using Lorem Ipsum is that it has a more-or-less English.</p>
                                    <div class="text-muted font-13">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-success margin-0">blade.php</span></li>
                                            <li class="list-inline-item">Oct 13 2020</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item p-l-0 p-r-0">
                                    <h6><a href="#">Qubes - Responsive Admin Dashboard Template</a></h6>
                                    <p class="text-muted">Commodo excepteur non ut aliqua ex qui velit sed esse consequat in </p>
                                    <div class="text-muted font-13">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-danger margin-0">Bootstrap</span></li>
                                            <li class="list-inline-item">Sep 27 2020</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main left sidebar menu -->
        <div id="left-sidebar" class="sidebar">
            <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
            <div class="navbar-brand">
                <a href="index.blade.php"><img src="assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="assets/images/user.png" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Web Developer,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alan Green</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="page-profile.blade.php"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="app-inbox.blade.php"><i class="fa fa-envelope"></i>Messages</a></li>
                            <li><a href="setting.blade.php"><i class="fa fa-gear"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.blade.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu animation-li-delay">
                        <li class="header">Main</li>
                        <li><a href="index.blade.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <li class="header">Apps</li>
                        <li><a href="app-inbox.blade.php"><i class="fa fa-envelope"></i> <span>Email</span> <span class="badge badge-default mr-0">12</span></a></li>
                        <li class="active"><a href="app-chat.blade.php"><i class="fa fa-comments"></i> <span>Chat</span></a></li>
                        <li><a href="app-calendar.blade.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                        <li><a href="app-todo.blade.php"><i class="fa fa-th-list"></i> <span>Todo List</span></a></li>

                        <li><a href="app-filemanager.blade.php"><i class="fa fa-folder"></i> <span>File Manager</span></a></li>
                        <li><a href="app-contacts.blade.php"><i class="fa fa-address-book"></i> <span>Contacts</span></a></li>
                        <li><a href="app-scrumboard.blade.php"><i class="fa fa-tasks"></i> <span>Scrumboard</span></a></li>
                        <li><a href="page-news.blade.php"><i class="fa fa-globe"></i> <span>Blog</span></a></li>
                        <li><a href="page-social.blade.php"><i class="fa fa-share-alt-square"></i> <span>Social</span></a></li>
                        <li class="header">Vendors</li>
                        <li>
                            <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>ui Elements</span></a>
                            <ul>
                                <li><a href="ui-helper-class.blade.php">Helper Classes</a></li>
                                <li><a href="ui-bootstrap.blade.php">Bootstrap UI</a></li>
                                <li><a href="ui-typography.blade.php">Typography</a></li>
                                <li><a href="ui-tabs.blade.php">Tabs</a></li>
                                <li><a href="ui-buttons.blade.php">Buttons</a></li>
                                <li><a href="ui-icons.blade.php">Icons</a></li>
                                <li><a href="ui-notifications.blade.php">Notifications</a></li>
                                <li><a href="ui-colors.blade.php">Colors</a></li>
                                <li><a href="ui-dialogs.blade.php">Dialogs</a></li>
                                <li><a href="ui-list-group.blade.php">List Group</a></li>
                                <li><a href="ui-media-object.blade.php">Media Object</a></li>
                                <li><a href="ui-modals.blade.php">Modals</a></li>
                                <li><a href="ui-nestable.blade.php">Nestable</a></li>
                                <li><a href="ui-progressbars.blade.php">Progress Bars</a></li>
                                <li><a href="ui-range-sliders.blade.php">Range Sliders</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms Elements</span></a>
                            <ul>
                                <li><a href="forms-basic.blade.php">Basic Elements</a></li>
                                <li><a href="forms-advanced.blade.php">Advanced Elements</a></li>
                                <li><a href="forms-validation.blade.php">Form Validation</a></li>
                                <li><a href="forms-wizard.blade.php">Form Wizard</a></li>
                                <li><a href="forms-dragdropupload.blade.php">Drag &amp; Drop Upload</a></li>
                                <li><a href="forms-cropping.blade.php">Image Cropping</a></li>
                                <li><a href="forms-summernote.blade.php">Summernote</a></li>
                                <li><a href="forms-editors.blade.php">CKEditor</a></li>
                                <li><a href="forms-markdown.blade.php">Markdown</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Tables</span></a>
                            <ul>
                                <li><a href="table-normal.blade.php">Normal Tables</a></li>
                                <li><a href="table-jquery-datatable.blade.php">Jquery Datatables</a></li>
                                <li><a href="table-editable.blade.php">Editable Tables</a></li>
                                <li><a href="table-color.blade.php">Tables Color</a></li>
                                <li><a href="table-filter.blade.php">Table Filter</a></li>
                                <li><a href="table-dragger.blade.php">Table dragger</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#charts" class="has-arrow"><i class="fa fa-pie-chart"></i><span>Charts</span></a>
                            <ul>
                                <li><a href="chart-apex.blade.php">Apex Charts</a></li>
                                <li><a href="chart-c3.blade.php">C3 Charts</a></li>
                                <li><a href="chart-morris.blade.php">Morris Chart</a></li>
                                <li><a href="chart-flot.blade.php">Flot Chart</a></li>
                                <li><a href="chart-chartjs.blade.php">ChartJS</a></li>
                                <li><a href="chart-jquery-knob.blade.php">Jquery Knob</a></li>
                                <li><a href="chart-sparkline.blade.php">Sparkline Chart</a></li>
                            </ul>
                        </li>
                        <li class="header">More Pages</li>
                        <li><a href="widgets.blade.php"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a></li>
                        <li>
                            <a href="#Pages" class="has-arrow"><i class="fa fa-folder"></i><span>Pages</span></a>
                            <ul>
                                <li><a href="page-login.blade.php">Login</a></li>
                                <li><a href="page-register.blade.php">Register</a></li>
                                <li><a href="page-forgot-password.blade.php">Forgot Password</a></li>
                                <li><a href="page-404.blade.php">Page 404</a></li>
                                <li><a href="page-blank.blade.php">Blank Page</a></li>
                                <li><a href="page-search-results.blade.php">Search Results</a></li>
                                <li><a href="page-profile.blade.php">Profile </a></li>
                                <li><a href="page-invoices.blade.php">Invoices </a></li>
                                <li><a href="page-gallery.blade.php">Image Gallery </a></li>
                                <li><a href="page-timeline.blade.php">Timeline</a></li>
                                <li><a href="page-pricing.blade.php">Pricing</a></li>
                            </ul>
                        </li>
                        <li><a href="map-jvectormap.blade.php"><i class="fa fa-map"></i> <span>jVector Maps</span></a></li>
                        <li class="extra_widget">
                            <div class="form-group">
                                <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Server Load <span class="float-right">50%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

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
                        <div class="col-xl-5 col-md-5 col-sm-12">
                            <h1>Hi, Welcomeback!</h1>
                            <span>JustDo Chat App,</span>
                        </div>
                        <div class="col-xl-7 col-md-7 col-sm-12 text-md-right hidden-xs">
                            <div class="d-flex align-items-center justify-content-md-end mt-4 mt-md-0 flex-wrap vivify pullUp delay-550">
                                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                    <p class="text-muted mb-1">Answered</p>
                                    <h5 class="mb-0">13</h5>
                                </div>
                                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                    <p class="text-muted mb-1">Missed</p>
                                    <h5 class="mb-0">6</h5>
                                </div>
                                <div class="mb-3 mb-xl-0">
                                    <a href="#" class="btn btn-dark">Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="chatapp_list">
                                <ul class="nav nav-tabs2 mb-4 d-flex text-center">
                                    <li class="nav-item flex-fill"><a data-toggle="tab" class="nav-link active show" href="#chats-Users">Chat</a></li>
                                    <li class="nav-item flex-fill"><a data-toggle="tab" class="nav-link" href="#chats-Groups">Groups</a></li>
                                    <li class="nav-item flex-fill"><a data-toggle="tab" class="nav-link mr-0" href="#chats-Contact">Contact</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane vivify fadeIn active show" id="chats-Users">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
                                        <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Louis Henry <small class="text-muted">10 min</small></span>
                                                        <span class="message">How do you do?</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online active">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Debra Stewart <small class="text-muted">15 min</small></span>
                                                        <span class="message">I was wondering...</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Lisa Garett <small class="text-muted">18 min</small></span>
                                                        <span class="message">I've forgotten how it felt before</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Folisise Chosielie <small class="text-muted">23 min</small></span>
                                                        <span class="message">Wasup for the third time like...</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Marshall Nichols <small class="text-muted">27 min</small></span>
                                                        <span class="message">But we’re probably gonna need a new carpet.</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Debra Stewart <small class="text-muted">38 min</small></span>
                                                        <span class="message">It’s not that bad...</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Lisa Garett <small class="text-muted">45 min</small></span>
                                                        <span class="message">How do you do?</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane vivify fadeIn" id="chats-Groups">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
                                        <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">PHP Groups<small class="text-muted">10 min</small></span>
                                                        <span class="message">How do you do?</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Family Groups <small class="text-muted">18 min</small></span>
                                                        <span class="message">I've forgotten how it felt before</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Friends holic <small class="text-muted">23 min</small></span>
                                                        <span class="message">Wasup for the third time like...</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">CL City 2 <small class="text-muted">45 min</small></span>
                                                        <span class="message">How do you do?</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane vivify fadeIn" id="chats-Contact">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
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
                            <div class="chatapp_body">
                                <div class="chat-header">
                                    <a href="javascript:void(0);" class="open_detail">
                                        <div class="media mb-0">
                                            <img class="rounded-circle w35" src="assets/images/user.png" alt="">
                                            <div class="media-body mr-3 ml-3 text-muted">
                                                <h6 class="m-0">Deborah Cox</h6>
                                                <small>Webdeveloper</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-default hidden-xs"><i class="fa fa-file"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="fa fa-image"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="fa fa-video-camera"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="message_data">
                                        <li class="right clearfix">
                                            <img class="user_pix" src="assets/images/xs/avatar7.jpg" alt="avatar">
                                            <div class="message">
                                                <a href="#" class="smily"><i class="fa fa-smile-o"></i></a>
                                                <span>Hi Aiden, how are you?<br> How is the project coming along?</span>
                                            </div>
                                            <span class="data_time">10:12 AM, Today</span>
                                        </li>
                                        <li class="left clearfix">
                                            <img class="user_pix" src="assets/images/user.png" alt="avatar">
                                            <div class="message">
                                                <a href="#" class="smily"><i class="fa fa-smile-o"></i></a>
                                                <span>Are we meeting today?</span>
                                                <div class="alert alert-primary mb-0 mt-2">
                                                    <i class="fa fa-file-word-o mr-2"></i> <span>finame12.doc</span>
                                                </div>
                                            </div>
                                            <span class="data_time">10:12 AM, Today</span>
                                        </li>
                                        <li class="right clearfix">
                                            <img class="user_pix" src="assets/images/xs/avatar5.jpg" alt="avatar">
                                            <div class="message">
                                                <a href="#" class="smily"><i class="fa fa-smile-o"></i></a>
                                                <span>How is the project coming along?</span>
                                            </div>
                                            <span class="data_time">10:12 AM, Today</span>
                                        </li>
                                        <li class="divider clearfix">
                                            <span>yesterday</span>
                                        </li>
                                        <li class="left clearfix">
                                            <img class="user_pix" src="assets/images/user.png" alt="avatar">
                                            <div class="message">
                                                <a href="#" class="smily"><i class="fa fa-smile-o"></i></a>
                                                <span>Project has been already finished and I have<br> results to show you.</span>
                                            </div>
                                            <span class="data_time">10:16 AM, Today</span>
                                        </li>
                                        <li class="right clearfix">
                                            <img class="user_pix" src="assets/images/xs/avatar5.jpg" alt="avatar">
                                            <div class="message">
                                                <a href="#" class="smily"><i class="fa fa-smile-o"></i></a>
                                                <span>How is the project coming along?</span>
                                                <div class="mt-2">
                                                    <img class="w100" src="assets/images/image-gallery/1.jpg" alt="">
                                                    <img class="w100" src="assets/images/image-gallery/2.jpg" alt="">
                                                    <img class="w100" src="assets/images/image-gallery/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <span class="data_time">10:12 AM, Today</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message">
                                    <div class="form-group c_form_group mb-0">
                                        <textarea type="text" row="" class="form-control" placeholder="Enter text here..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="user_detail">
                                <div class="text-center mb-4">
                                    <div class="profile-image"><img src="assets/images/user.png" class="rounded-circle mb-3" alt=""></div>
                                    <h4 class="m-b-0">Louis Pierce</h4>
                                    <span>Washington, d.c.</span>
                                </div>
                                <div class="text-center">
                                    <small class="text-muted">Address: </small>
                                    <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                                    <small class="text-muted">Email address: </small>
                                    <p>louispierce@example.com</p>
                                    <small class="text-muted">Mobile: </small>
                                    <p>+ 202-222-2121</p>
                                    <small class="text-muted">Birth Date: </small>
                                    <p class="m-b-0">October 17th, 93</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<!-- Vedor js file and create bundle with grunt  -->


<!-- Project core js file minify with grunt -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $('.open_detail').on('click', function() {
		$('.user_detail').toggleClass('open');
	});
</script>

