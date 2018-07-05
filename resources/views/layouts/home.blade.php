<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>MaterialWrap - jQuery full version</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor.bundle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.bundle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/theme-a.css') }}">
</head>
<body>
<div id="app_wrapper">
    <header id="app_topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <div class="nav-wrapper">
                <ul class="nav navbar-nav pull-left left-menu">
                    <li class="app_menu-open">
                        <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav left-menu hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="nav-link">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="dropdown dropdown-lg app_menu_launcher hidden-xs">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <span>Dropdown</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-left btn-primary p-15 text-center">
                            <li>
                                <ul>
                                    <li><a href="app-mail.html"><i class="zmdi zmdi-email"></i><span>Mail</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="app-notes.html"><i class="mdi mdi-lightbulb"></i><span>Notes</span></a></li>
                                    <li><a href="app-taskboard.html"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown mega">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link" aria-expanded="false">
                            <span>Mega</span>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu full-width p-l-10">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-4">
                                    <h3>Pages <span class="badge status info">10</span></h3>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <ul>
                                                <li>
                                                    <a href="page-profile.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i> Profile</a>
                                                </li>
                                                <li>
                                                    <a href="page-invoice.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Invoice</a>
                                                </li>
                                                <li>
                                                    <a href="page-timeline.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="page-locations.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Locations</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul>
                                                <li>
                                                    <a href="page-pricing-tables.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Pricing Tables</a>
                                                </li>
                                                <li>
                                                    <a href="page-gallery.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="login.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Login</a>
                                                </li>
                                                <li>
                                                    <a href="lock-screen.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Lock Screen</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h3 class="p-t-15 p-b-15">New Arrivals</h3>
                                        <div class="col-xs-12">
                                            <div id="new_arrivals_megamenu" class="row">
                                                <div><img src="assets/img/ecom/products/39_Ie8T.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="assets/img/ecom/products/39_8wMD.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="assets/img/ecom/products/39_JnFC.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="assets/img/ecom/products/2830_S4ql.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="assets/img/ecom/products/4107_PPxC.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="assets/img/ecom/products/5764_YK7g.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h3 class="p-t-15 p-b-15">Today's Analysis</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="ct-chart ct-golden-section " id="chartist_megaMenu"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown avatar-menu">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<span class="meta">
									<span class="avatar">
										<img src="assets/img/profiles/02.jpg" alt="" class="img-circle max-w-35">
										<i class="badge mini success status"></i>
									</span>
									<span class="name">Mike Jones</span>
									<span class="caret"></span>
								</span>
                        </a>
                        <ul class="dropdown-menu btn-primary dropdown-menu-right">
                            <li>
                                <a href="page-profile.html"><i class="zmdi zmdi-account"></i> Profile</a>
                            </li>
                            <li>
                                <a href="app-mail.html"><i class="zmdi zmdi-email"></i> Messages</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Account Settings</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="select-menu hidden-xs hidden-sm">
                        <select class="select form-control country" style="display:none">
                            <option option="EN">English</option>
                            <option option="ES">Español</option>
                            <option option="FN"> Français</option>
                            <option option="IT">Italiano</option>
                        </select>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-navsearch-open>
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs hidden-sm">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                            <span class="badge mini status danger"></span>
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
                            <li class="dropdown-menu-header">
                                <ul class="card-actions icons  left-top">
                                    <li class="withoutripple">
                                        <a href="javascript:void(0)" class="withoutripple">
                                            <i class="zmdi zmdi-settings"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h5>NOTIFICATIONS</h5>
                                <ul class="card-actions icons right-top">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Dakota Johnson</div>
                                                    <div class="list-group-item-text">Do you want to grab some sushi for lunch?</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Todd Cook</div>
                                                    <div class="list-group-item-text">Let's schedule a meeting with our design team at 10am.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Jennifer Ross</div>
                                                    <div class="list-group-item-text">We're looking to hire two more protypers to our team.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a href="javascript:void(0)">
                                    All notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="last">
                        <a href="javascript:void(0)" data-toggle-state="sidebar-overlay-open" data-key="rightSideBar">
                            <i class="mdi mdi-playlist-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="search" action="" class="navbar-form" id="navbar_form">
                <div class="form-group">
                    <input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
                    <i data-navsearch-close class="zmdi zmdi-close close-search"></i>
                </div>
                <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
        </nav>
    </header>
    <aside id="app_sidebar-left">
        <div id="logo_wrapper">
            <ul>
                <li class="logo-icon">
                    <a href="index.html">
                        <div class="logo">
                            <img src="assets/img/logo/logo-icon.png" alt="Logo">
                        </div>
                        <h1 class="brand-text">MedicineMS</h1>
                    </a>
                </li>
                <li class="menu-icon">
                    <a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
                        <i class="mdi mdi-backburger"></i>
                    </a>
                </li>
            </ul>
        </div>
        <nav id="app_main-menu-wrapper" class="scrollbar">
            <!-- sidebar menu -->
            @include('partials.left-menu')
            <!-- /sidebar menu -->
        </nav>
    </aside>
    <section id="content_outer_wrapper" class="">
        <div id="content_wrapper">
            @yield('content')
            <!-- ENDS $content -->
        </div>
        <footer id="footer_wrapper">
            <div class="footer-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h6>Want to Work with Us?</h6>
                        <p>Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse
                            tilde hoodie, art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage.</p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="javascript:void(0)">About Us </a></li>
                            <li><a href="javascript:void(0)">Careers</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h6>Email Newsletters</h6>
                        <p>Sign up for new MaterialWrap content, updates, and offers.</p>
                        <div class="form-group is-empty">
                            <div class="input-group">
                                <label class="control-label sr-only" for="footerEmail">Email Address</label>
                                <input type="email" class="form-control" id="footerEmail" placeholder="Enter your email address...">
                                <span class="input-group-btn">
								<button type="button" class="btn btn-white btn-fab animate-fab btn-fab-sm">
									<i class="zmdi zmdi-mail-send"></i>
								</button>
							</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copy-wrapper">
                    <div class="col-xs-8">
                        <p class="copy">&copy; Copyright <time class="year"></time> MaterialWrap - All Rights Reserved</p>
                    </div>
                    <div class="col-xs-4">
                        <ul class="social">
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <aside id="app_sidebar-right">
        <div class="sidebar-inner sidebar-overlay">
            <div class="tabpanel">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active" role="presentation"><a href="#sidebar_chat" data-toggle="tab" aria-expanded="true">Chat</a></li>
                    <li role="presentation"><a href="#sidebar_activity" data-toggle="tab">Activity</a></li>
                    <li role="presentation"><a href="#sidebar_settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="sidebar_chat">
                        <form class="m-l-15 m-r-15 m-t-30">
                            <div class="input-group search-target">
                                <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                                <div class="form-group is-empty">
                                    <input type="text" value="" placeholder="Filter contacts..." class="form-control" data-search-trigger="open">
                                </div>
                            </div>
                        </form>
                        <ul class="description">
                            <li class="title">
                                Online
                            </li>
                        </ul>
                        <ul class="list-group p-0">
                            <li class="list-group-item" data-chat="open" data-chat-name="John Smith">
                                <span class="pull-left"><img src="assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">John Smith</div>
                                    <div class="list-group-item-text">New York, NY</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
                                <span class="pull-left"><img src="assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Allison Grayce</div>
                                    <div class="list-group-item-text">Seattle, WA</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
                                <span class="pull-left"><img src="assets/img/profiles/18.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Ashley Ford</div>
                                    <div class="list-group-item-text">Denver, CO</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
                                <span class="pull-left"><img src="assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Johanna Kollmann </div>
                                    <div class="list-group-item-text">Palo Alto, Ca</div>
                                </div>
                            </li>
                        </ul>
                        <ul class="description">
                            <li class="title">
                                Busy
                            </li>
                        </ul>
                        <ul class="list-group p-0">
                            <li class="list-group-item" data-chat="open" data-chat-name="Mike Jones">
                                <span class="pull-left"><img src="assets/img/profiles/03.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini warning status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Mike Jones </div>
                                    <div class="list-group-item-text">San Francisco, CA</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Nikki Clark">
                                <span class="pull-left"><img src="assets/img/profiles/06.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini warning status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Nikki Clark </div>
                                    <div class="list-group-item-text">Sarasota, FL</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Jason Kendall">
                                <span class="pull-left"><img src="assets/img/profiles/15.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini warning status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Jason Kendall </div>
                                    <div class="list-group-item-text">New York, NY</div>
                                </div>
                            </li>
                        </ul>
                        <ul class="description">
                            <li class="title">
                                Offline
                            </li>
                        </ul>
                        <ul class="list-group p-0">
                            <li class="list-group-item" data-chat="open" data-chat-name="Josh Hemsley">
                                <span class="pull-left"><img src="assets/img/profiles/16.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini danger status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Josh Hemsley</div>
                                    <div class="list-group-item-text">Salem, MA</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="James Hart">
                                <span class="pull-left"><img src="assets/img/profiles/09.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini danger status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">James Hart</div>
                                    <div class="list-group-item-text">Salem, MA</div>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-fab btn-fab-sm animate-fab" data-chat="open" id="chat_fab_new">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                    <div class="tab-pane fade" id="sidebar_activity">
                        <div class="sidebar-timeline">
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">15 minutes ago</small>
                                    <p><a href="#" class="accent">Mike Jones</a> fixed z-index conflict sidebar.scss</p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">30 minutes ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Hazel	Dean</a> left a comment on product page designs.</p>
                                    <p><em>"Yuccie shoreditch trust fund, artisan tumblr sustainable cronut unicorn blog seitan. "</em></p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">45 minutes ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Molly</a> requested time off for training.</p>
                                    <p><em>"Snackwave church-key cardigan you probably haven't heard of them, asymmetrical microdosing cronut "</em></p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">3 hours ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Frederick	Roy</a> commented your post.</p>
                                    <p><em>"Skateboard dreamcatcher la croix, edison bulb sustainable sriracha vexillologist kombucha master cleanse."</em></p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">1 hour ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Holly Cobb</a> Uploaded 6 new photos.</p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 hours ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Neal Stephens</a> setup a meeting with<a href="#" class="text-success"> Jason Kendall</a>.</p>
                                    <p><em>"Authentic aesthetic tattooed, PBR&B squid tote bag schlitz vaporware glossier yr man braid direct trade disrupt poke.  "</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sidebar_settings">
                        <div class="color-container">
                            <h3 class="title">Preset Color Options</h3>
                            <div class="row">
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-a.css">
                                            <input type="radio" name="setting-theme" checked="checked">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-a"></span>
											<span class="color bg-shade-theme-a"></span>
										</span>
                                            <span class="color bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-b.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-b"></span>
											<span class="color bg-shade-theme-b"></span>
										</span>
                                            <span class="color  bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-c.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-c"></span>
											<span class="color bg-shade-theme-c"></span>
										</span>
                                            <span class="color  bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-d.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-d"></span>
											<span class="color bg-shade-theme-d"></span>
										</span>
                                            <span class="color  bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-e.css">
                                            <input type="radio" name="setting-theme" checked="checked">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-e"></span>
											<span class="color bg-shade-theme-e"></span>
										</span>
                                            <span class="color bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-f.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-f"></span>
											<span class="color bg-shade-theme-f"></span>
										</span>
                                            <span class="color  bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-g.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-g"></span>
											<span class="color bg-shade-theme-g"></span>
										</span>
                                            <span class="color  bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-h.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-h"></span>
											<span class="color bg-shade-theme-h"></span>
										</span>
                                            <span class="color  bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title m-t-30">Layout Mode</h3>
                            <ul class="description">
                                <li>
                                    <div class="radio block"><label><input type="radio" name="layoutMode" value="" checked>FULL WIDTH</label></div>
                                </li>
                                <li>
                                    <div class="radio block"><label><input type="radio" name="layoutMode" value="boxed-layout">BOXED</label></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <section id="chat_compose_wrapper">
        <div class="tippy-top">
            <div class="recipient">Allison Grayce</div>
            <ul class="card-actions icons right-top">
                <li>
                    <a href="javascript:void(0)">
                        <i class="zmdi zmdi-videocam"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu btn-primary dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)">Option One</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Option Two</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Option Three</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" data-chat="close">
                        <i class="zmdi zmdi-close"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="chat-wrapper scrollbar">
            <div class="chat-message ">
                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Hey Mike, we have funding for our new project!</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper ">
                        <div class="chat-message-content">
                            <p>Awesome! Photo booth banh mi pitchfork kickstarter whatever, prism godard ethical 90"s cray selvage.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>


                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="assets/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer id="compose-footer">
            <form class="form-horizontal compose-form">
                <ul class="card-actions icons left-bottom">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-attachment-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-mood"></i>
                        </a>
                    </li>
                </ul>
                <div class="form-group m-10 p-l-75 is-empty">
                    <div class="input-group">
                        <label class="sr-only">Leave a comment...</label>
                        <input type="text" class="form-control form-rounded input-lightGray" placeholder="Leave a comment..">
                        <span class="input-group-btn">
						<button type="button" class="btn btn-blue btn-fab  btn-fab-sm">
							<i class="zmdi zmdi-mail-send"></i>
						</button>
					</span>
                    </div>
                </div>
            </form>
        </footer>
    </section>
</div>
<div class="modal fade" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="schedule_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel-2">Title goes here</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci mi, in pharetra ligula. Nulla facilisi. Nulla
                    facilisi. Mauris convallis venenatis massa, quis consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies bibendum.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Ok</button>
            </div>
        </div>
        <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
</div>
<script src="{{URL::asset('assets/js/vendor.bundle.js') }}"></script>
<script src="{{URL::asset('assets/js/app.bundle.js') }}"></script>
</body>

</html>
