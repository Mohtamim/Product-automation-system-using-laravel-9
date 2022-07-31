<div id="left-sidebar" class="sidebar">
    <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href="index.blade.php"><img src="{{ asset('assets/images/icon.svg') }}" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('assets/images/user.png') }}" class="user-photo" alt="User Profile Picture">
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
                <li class="active"><a href="index.blade.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li class="header">Apps</li>
                <li><a href="app-inbox.blade.php"><i class="fa-brands fa-product-hunt"></i> <span>Prodtucs</span> <span class="badge badge-default mr-0">12</span></a></li>
                <li><a href="app-chat.blade.php"><i class="fas fa-industry"></i> <span>Suppliers</span></a></li>
                <li><a href="app-calendar.blade.php"><i class="fa fa-users" aria-hidden="true"></i> <span>Customers</span></a></li>
                <li><a href="{{url('admin/unit-type')}}"><i class="fa fa-th-list"></i> <span>Unit Type</span></a></li>
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
