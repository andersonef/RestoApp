<!DOCTYPE html>
<html ng-app="restoApp" class="" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <title>Resto Pedidos - Sabor & Arte</title>
    <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> <!-- MANDATORY -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet"> <!-- MANDATORY -->
    <link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet"> <!-- MANDATORY -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.min.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset("assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js")}}"></script>
    <![endif]-->
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->
<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-default" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-default" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-default" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-default" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
<body class="fixed-topbar sidebar-condensed fixed-sidebar color-default bg-lighter theme-sdtl">
<section>
<!-- BEGIN SIDEBAR -->
<div class="sidebar">
    <div class="logopanel">
        <h1><a href="#" style="background: none;">Resto App</a></h1>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-top">
            <div class="userlogged clearfix">
                <i class="icon icons-faces-users-01"></i>
                <div class="user-details">
                    <h4>Sabor & Arte</h4>
                </div>
            </div>
        </div>
        <div class="menu-title">
            <span>Navegação</span>

        </div>
        <ul class="nav nav-sidebar" ng-controller="MenuController">
            <li class="tm nav-parent" ng-repeat="item in items">
                <a href="@{{item.linkMenu}}"><i class="@{{item.iconMenu}}"></i><span>@{{item.textMenu}}</span> <span ng-show="item.Menus.length" class="fa arrow"></span></a>
                <ul class="children collapse" style="display: none;" ng-show="item.Menus.length">
                    <li class="" ng-repeat="subitem in item.Menus"><a href="@{{subitem.linkMenu}}">@{{subitem.textMenu}}</a></li>
                </ul>
            </li>
            <!--
            <li class="tm nav-active">
                <a href="my-link.html"><i class="icon-home"></i><span>Active Menu 1</span></a>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="icon-puzzle"></i><span>Menu 2</span> <span class="fa arrow"></span></a>
                <ul class="children collapse" style="display: none;">
                    <li class=""><a href="submenu1.html">Submenu 1</a></li>
                    <li class=""><a href="submenu2.html">Submenu 2</a></li>
                    <li class=""><a href="submenu3.html">Submenu 3</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="icon-puzzle"></i><span>Menu 3</span> <span class="fa arrow"></span></a>
                <ul class="children collapse" style="display: none;">
                    <li class=""><a href="submenu1.html">Submenu 1</a></li>
                    <li class=""><a href="submenu2.html">Submenu 2</a></li>
                    <li class=""><a href="submenu3.html">Submenu 3</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="icon-bulb"></i><span>Menu 4</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="submenu1.html">Submenu 1</a></li>
                    <li><a href="submenu2.html">Submenu 2</a></li>
                    <li><a href="submenu3.html">Submenu 3</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="icon-screen-desktop"></i><span>Menu 5</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="submenu1.html">Submenu 1</a></li>
                    <li><a href="submenu2.html">Submenu 2</a></li>
                    <li><a href="submenu3.html">Submenu 3</a></li>
                </ul>
            </li>-->
        </ul>

        <div class="sidebar-footer clearfix" style="">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
                <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
                <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
                <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
                <i class="icon-power"></i></a>
        </div>
    </div>
</div>
<!-- END SIDEBAR -->
<div class="main-content">
<!-- BEGIN TOPBAR -->
<div class="topbar">
<div class="header-left" style="display: block;">       <div class="topnav">
    <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
    <ul class="nav nav-horizontal">
        <li class="active"><a href="mailbox.html"><span class="pull-right badge badge-primary">8</span><i class="icon-envelope"></i><span>Mailbox</span></a></li>
        <li><a href="email.html"><i class="icon-bar-chart"></i><span>Sales</span></a></li>
        <li class="nav-parent">
            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="30">
                <i class="fa fa-list"></i><span>Invoicing</span><i class="icons-arrows-06"></i>
            </a>
            <ul class="dropdown-menu children">
                <li><a href="#">All Invoices</a></li>
                <li><a href="#"> Create New</a></li>
                <li><a href="#"> Clients</a></li>
                <li><a href="#"> Templates</a></li>
                <li><a href="#"> Parameters</a></li>
            </ul>
        </li>
        <li><a href="email.html"><span class="pull-right badge badge-primary">2</span><i class="icon-notebook"></i><span>Reporting</span></a></li>
        <li><a href="email.html"><i class="icon-settings"></i><span>Settings</span></a></li>
    </ul>
</div>
</div>
<div class="header-right">
<ul class="header-menu nav navbar-nav">

<!-- BEGIN NOTIFICATION DROPDOWN -->
<li class="dropdown" id="notifications-header">
    <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-bell"></i>
        <span class="badge badge-danger badge-header">6</span>
    </a>
    <ul class="dropdown-menu">
        <li class="dropdown-header clearfix">
            <p class="pull-left">12 Pending Notifications</p>
        </li>
        <li>
            <ul class="dropdown-menu-list withScroll mCustomScrollbar _mCS_1" data-height="220" style="height: 220px;"><div class="mCustomScrollBox mCS-light" id="mCSB_1" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                <li>
                    <a href="#">
                        <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                        Steve have rated your photo
                        <span class="dropdown-time">Just now</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                        John added you to his favs
                        <span class="dropdown-time">15 mins</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-file-text p-r-10 f-18"></i>
                        New document available
                        <span class="dropdown-time">22 mins</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">40 mins</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                        Meeting in 1 hour
                        <span class="dropdown-time">1 hour</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bell p-r-10 f-18"></i>
                        Server 5 overloaded
                        <span class="dropdown-time">2 hours</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                        Bill comment your post
                        <span class="dropdown-time">3 hours</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">2 days</span>
                    </a>
                </li>
            </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
        </li>
        <li class="dropdown-footer clearfix">
            <a href="#" class="pull-left">See all notifications</a>
            <a href="#" class="pull-right">
                <i class="icon-settings"></i>
            </a>
        </li>
    </ul>
</li>
<!-- END NOTIFICATION DROPDOWN -->
<!-- END MESSAGES DROPDOWN -->
<!-- BEGIN USER DROPDOWN -->
<li class="dropdown" id="user-header">
    <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img src="{{ asset('assets/images/avatars/user1.png') }}" alt="user image">
        <span class="username">Minha Conta</span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
        </li>
        <li>
            <a href="#"><i class="icon-calendar"></i><span>My Calendar</span></a>
        </li>
        <li>
            <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
        </li>
        <li>
            <a href="#"><i class="icon-logout"></i><span>Logout</span></a>
        </li>
    </ul>
</li>
<!-- END USER DROPDOWN -->

</ul>
</div>
<!-- header-right -->
</div>
<!-- END TOPBAR -->
<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
    @yield('content')
</div>
<!-- END PAGE CONTENT -->

<!-- END PAGE CONTENT -->
</div>
<!-- END MAIN CONTENT -->
</section>
<div id="quickview-sidebar" class="">

<div class="quickview-header">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#chat" data-toggle="tab">Chat</a></li>
        <li><a href="#notes" data-toggle="tab">Notes</a></li>
        <li><a href="#settings" data-toggle="tab" class="settings-tab">Settings</a></li>
    </ul>
</div>
<div class="quickview">
<div class="tab-content">
<div class="tab-pane fade active in" id="chat">
    <div class="chat-body current">
        <div class="chat-search">
            <form class="form-inverse" action="#" role="search">
                <div class="append-icon">
                    <input type="text" class="form-control" placeholder="Search contact...">
                    <i class="icon-magnifier"></i>
                </div>
            </form>
        </div>
        <div class="chat-groups">
            <div class="title">GROUP CHATS</div>
            <ul>
                <li><i class="turquoise"></i> Favorites</li>
                <li><i class="turquoise"></i> Office Work</li>
                <li><i class="turquoise"></i> Friends</li>
            </ul>
        </div>
        <div class="chat-list">
            <div class="title">FAVORITES</div>
            <ul>
                <li class="clearfix">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/avatars/avatar13.png') }}" alt="avatar">
                    </div>
                    <div class="user-details">
                        <div class="user-name">Bobby Brown</div>
                        <div class="user-txt">On the road again...</div>
                    </div>
                    <div class="user-status">
                        <i class="online"></i>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/avatars/avatar5.png') }}" alt="avatar">
                        <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                        <div class="user-name">Alexa Johnson</div>
                        <div class="user-txt">Still at the beach</div>
                    </div>
                    <div class="user-status">
                        <i class="away"></i>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/avatars/avatar10.png') }}" alt="avatar">
                    </div>
                    <div class="user-details">
                        <div class="user-name">Bobby Brown</div>
                        <div class="user-txt">On stage...</div>
                    </div>
                    <div class="user-status">
                        <i class="busy"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="chat-list">
            <div class="title">FRIENDS</div>
            <ul>
                <li class="clearfix">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/avatars/avatar7.png') }}" alt="avatar">
                        <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                        <div class="user-name">James Miller</div>
                        <div class="user-txt">At work...</div>
                    </div>
                    <div class="user-status">
                        <i class="online"></i>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/avatars/avatar11.png') }}" alt="avatar">
                    </div>
                    <div class="user-details">
                        <div class="user-name">Fred Smith</div>
                        <div class="user-txt">Waiting for tonight</div>
                    </div>
                    <div class="user-status">
                        <i class="offline"></i>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/avatars/avatar8.png') }}" alt="avatar">
                    </div>
                    <div class="user-details">
                        <div class="user-name">Ben Addams</div>
                        <div class="user-txt">On my way to NYC</div>
                    </div>
                    <div class="user-status">
                        <i class="offline"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="chat-conversation">
        <div class="conversation-header">
            <div class="user clearfix">
                <div class="chat-back">
                    <i class="icon-action-undo"></i>
                </div>
                <div class="user-details">
                    <div class="user-name">James Miller</div>
                    <div class="user-txt">On the road again...</div>
                </div>
            </div>
        </div>
        <div class="conversation-body">
            <ul>
                <li class="img">
                    <div class="chat-detail">
                        <span class="chat-date">today, 10:38pm</span>
                        <div class="conversation-img">
                            <img src="{{ asset('assets/images/avatars/avatar4.png') }}" alt="avatar 4">
                        </div>
                        <div class="chat-bubble">
                            <span>Hi you!</span>
                        </div>
                    </div>
                </li>
                <li class="img">
                    <div class="chat-detail">
                        <span class="chat-date">today, 10:45pm</span>
                        <div class="conversation-img">
                            <img src="{{ asset('assets/images/avatars/avatar4.png') }}" alt="avatar 4">
                        </div>
                        <div class="chat-bubble">
                            <span>Are you there?</span>
                        </div>
                    </div>
                </li>
                <li class="img">
                    <div class="chat-detail">
                        <span class="chat-date">today, 10:51pm</span>
                        <div class="conversation-img">
                            <img src="{{ asset('assets/images/avatars/avatar4.png') }}" alt="avatar 4">
                        </div>
                        <div class="chat-bubble">
                            <span>Send me a message when you come back.</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="conversation-message">
            <input type="text" placeholder="Your message..." class="form-control form-white send-message">
            <div class="item-footer clearfix">
                <div class="footer-actions">
                    <i class="icon-rounded-marker"></i>
                    <i class="icon-rounded-camera"></i>
                    <i class="icon-rounded-paperclip-oblique"></i>
                    <i class="icon-rounded-alarm-clock"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="notes">
    <div class="list-notes current withScroll mCustomScrollbar _mCS_4" style="height: auto;"><div class="mCustomScrollBox mCS-light" id="mCSB_4" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
        <div class="notes ">
            <div class="row">
                <div class="col-md-12">
                    <div id="add-note">
                        <i class="fa fa-plus"></i>ADD A NEW NOTE
                    </div>
                </div>
            </div>
            <div id="notes-list">
                <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Reset my account password</p>
                        </div>
                        <p class="note-desc hidden">Break security reasons.</p>
                        <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                </div>
                <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Call John</p>
                        </div>
                        <p class="note-desc hidden">He have my laptop!</p>
                        <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                </div>
                <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Buy a car</p>
                        </div>
                        <p class="note-desc hidden">I'm done with the bus</p>
                        <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                </div>
                <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Don't forget my notes</p>
                        </div>
                        <p class="note-desc hidden">I have to read them...</p>
                        <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                </div>
                <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Reset my account password</p>
                        </div>
                        <p class="note-desc hidden">Break security reasons.</p>
                        <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                </div>
                <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Call John</p>
                        </div>
                        <p class="note-desc hidden">He have my laptop!</p>
                        <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                </div>
                <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Buy a car</p>
                        </div>
                        <p class="note-desc hidden">I'm done with the bus</p>
                        <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                </div>
                <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                        <div>
                            <p class="note-name">Don't forget my notes</p>
                        </div>
                        <p class="note-desc hidden">I have to read them...</p>
                        <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
    <div class="detail-note note-hidden-sm">
        <div class="note-header clearfix">
            <div class="note-back">
                <i class="icon-action-undo"></i>
            </div>
            <div class="note-edit">Edit Note</div>
            <div class="note-subtitle">title on first line</div>
        </div>
        <div id="note-detail">
            <div class="note-write">
                <textarea class="form-control" placeholder="Type your note here"></textarea>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="settings">
    <div class="settings">
        <div class="title">ACCOUNT SETTINGS</div>
        <div class="setting">
            <span> Show Personal Statut</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
            <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
        </div>
        <div class="setting">
            <span> Show my Picture</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
            <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
        </div>
        <div class="setting">
            <span> Show my Location</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
            <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
        </div>
        <div class="title">CHAT</div>
        <div class="setting">
            <span> Show User Image</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
        </div>
        <div class="setting">
            <span> Show Fullname</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
        </div>
        <div class="setting">
            <span> Show Location</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
        </div>
        <div class="setting">
            <span> Show Unread Count</span>
            <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
            </label>
        </div>
        <div class="title">STATISTICS</div>
        <div class="settings-chart">
            <div class="clearfix">
                <div class="chart-title">Stat 1</div>
                <div class="chart-number">82%</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary setting1" data-transitiongoal="82"></div>
            </div>
        </div>
        <div class="settings-chart">
            <div class="clearfix">
                <div class="chart-title">Stat 2</div>
                <div class="chart-number">43%</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary setting2" data-transitiongoal="43"></div>
            </div>
        </div>
        <div class="m-t-30" style="width:100%">
            <canvas id="setting-chart" height="300"></canvas>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id="morphsearch" class="morphsearch">

    <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search...">
        <button class="morphsearch-submit" type="submit">Search</button>
    </form>
    <div class="morphsearch-content withScroll mCustomScrollbar _mCS_5" style="height: auto;"><div class="mCustomScrollBox mCS-light" id="mCSB_5" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
        <div class="dummy-column user-column">
            <h2>Users</h2>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/avatars/avatar1_big.png') }}" alt="Avatar 1">
                <h3>John Smith</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/avatars/avatar2_big.png') }}" alt="Avatar 2">
                <h3>Bod Dylan</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/avatars/avatar3_big.png') }}" alt="Avatar 3">
                <h3>Jenny Finlan</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/avatars/avatar4_big.png') }}" alt="Avatar 4">
                <h3>Harold Fox</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/avatars/avatar5_big.png') }}" alt="Avatar 5">
                <h3>Martin Hendrix</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/avatars/avatar6_big.png') }}" alt="Avatar 6">
                <h3>Paul Ferguson</h3>
            </a>
        </div>
        <div class="dummy-column">
            <h2>Articles</h2>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="1">
                <h3>How to change webdesign?</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/2.jpg') }}" alt="2">
                <h3>News From the sky</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/3.jpg') }}" alt="3">
                <h3>Where is the cat?</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="4">
                <h3>Just another funny story</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/5.jpg') }}" alt="5">
                <h3>How many water we drink every day?</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/6.jpg') }}" alt="6">
                <h3>Drag and drop tutorials</h3>
            </a>
        </div>
        <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/7.jpg') }}" alt="7">
                <h3>Design Inspiration</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/8.jpg') }}" alt="8">
                <h3>Animals drawing</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/9.jpg') }}" alt="9">
                <h3>Cup of tea please</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/10.jpg') }}" alt="10">
                <h3>New application arrive</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/11.jpg') }}" alt="11">
                <h3>Notification prettify</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="{{ asset('assets/images/gallery/12.jpg') }}" alt="12">
                <h3>My article is the last recent</h3>
            </a>
        </div>
    </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
    <!-- /morphsearch-content -->
    <span class="morphsearch-close"></span>
</div>
<!-- Preloader -->
<div class="loader-overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="{{asset("assets/plugins/jquery/jquery-1.11.1.min.js")}}"></script>
<script src="{{asset("assets/plugins/jquery/jquery-migrate-1.2.1.min.js")}}"></script>
<script src="{{asset("assets/plugins/gsap/main-gsap.min.js")}}"></script> <!-- HTML Animations -->
<script src="{{asset("assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js")}}"></script>
<script src="{{asset("assets/plugins/jquery-block-ui/jquery.blockUI.min.js")}}"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="{{asset("assets/plugins/translate/jqueryTranslator.min.js")}}"></script> <!-- Translate Plugin with JSON data -->
<script src="{{asset("assets/plugins/bootbox/bootbox.min.js")}}"></script>
<script src="{{asset("assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js")}}"></script> <!-- Custom Scrollbar sidebar -->
<script src="{{asset("assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js")}}"></script> <!-- Show Dropdown on Mouseover -->
<script src="{{asset("assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js")}}"></script> <!-- Animated Progress Bar -->
<script src="{{asset("assets/plugins/switchery/switchery.min.js")}}"></script> <!-- IOS Switch -->
<script src="{{asset("assets/plugins/charts-sparkline/sparkline.min.js")}}"></script> <!-- Charts Sparkline -->
<script src="{{asset("assets/plugins/retina/retina.min.js")}}"></script>  <!-- Retina Display -->
<script src="{{asset("assets/plugins/jquery-cookies/jquery.cookies.js")}}"></script> <!-- Jquery Cookies, for theme -->
<script src="{{asset("assets/plugins/bootstrap/js/jasny-bootstrap.min.js")}}"></script> <!-- File Upload and Input Masks -->
<script src="{{asset("assets/plugins/select2/select2.min.js")}}"></script> <!-- Select Inputs -->
<script src="{{asset("assets/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js")}}"></script> <!-- Select Inputs -->
<script src="{{asset("assets/plugins/bootstrap-loading/lada.min.js")}}"></script> <!-- Buttons Loading State -->
<script src="{{asset("assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js")}}"></script> <!-- Time Picker -->
<script src="{{asset("assets/plugins/multidatepicker/multidatespicker.min.js")}}"></script> <!-- Multi dates Picker -->
<script src="{{asset("assets/plugins/colorpicker/spectrum.min.js")}}"></script> <!-- Color Picker -->
<script src="{{asset("assets/plugins/touchspin/jquery.bootstrap-touchspin.min.js")}}"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
<script src="{{asset("assets/plugins/autosize/autosize.min.js")}}"></script> <!-- Textarea autoresize -->
<script src="{{asset("assets/plugins/icheck/icheck.min.js")}}"></script> <!-- Icheck -->
<script src="{{asset("assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js")}}"></script> <!-- Inline Edition X-editable -->
<script src="{{asset("assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js")}}"></script> <!-- File Upload and Input Masks -->
<script src="{{asset("assets/plugins/prettify/prettify.min.js")}}"></script> <!-- Show html code -->
<script src="{{asset("assets/plugins/slick/slick.min.js")}}"></script> <!-- Slider -->
<script src="{{asset("assets/plugins/countup/countUp.min.js")}}"></script> <!-- Animated Counter Number -->
<script src="{{asset("assets/plugins/noty/jquery.noty.packaged.min.js")}}"></script>  <!-- Notifications -->
<script src="{{asset("assets/plugins/backstretch/backstretch.min.js")}}"></script> <!-- Background Image -->
<script src="{{asset("assets/plugins/charts-chartjs/Chart.min.js")}}"></script>  <!-- ChartJS Chart -->
<script src="{{asset("assets/plugins/bootstrap-slider/bootstrap-slider.js")}}"></script> <!-- Bootstrap Input Slider -->
<script src="{{asset("assets/plugins/visible/jquery.visible.min.js")}}"></script> <!-- Visible in Viewport -->
<script src="{{asset("assets/js/sidebar_hover.js")}}"></script>
<script src="{{asset("assets/js/application.js")}}"></script> <!-- Main Application Script -->
<script src="{{asset("assets/js/plugins.js")}}"></script> <!-- Main Plugin Initialization Script -->
<script src="{{asset("assets/js/widgets/notes.js")}}"></script>
<script src="{{asset("assets/js/quickview.js")}}"></script> <!-- Quickview Script -->
<script src="{{asset("assets/js/pages/search.js")}}"></script> <!-- Search Script -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="{{asset("assets/plugins/datatables/jquery.dataTables.min.js")}}"></script> <!-- Tables Filtering, Sorting & Editing -->
<script src="{{asset("assets/plugins/summernote/summernote.js")}}"></script>
<script src="{{asset("assets/plugins/skycons/skycons.js")}}"></script>
<script src="{{asset("assets/plugins/simple-weather/jquery.simpleWeather.min.js")}}"></script>
<script src="{{asset("assets/js/widgets/widget_weather.js")}}"></script>
<script src="{{asset("assets/js/widgets/todo_list.js")}}"></script>
<!-- END PAGE SCRIPTS -->
</body>
</html>
  <!-- In production use:
  <script src="{{asset("//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js")}}"></script>
  -->
  <script src="{{asset("bower_components/angular/angular.js")}}"></script>
  <script src="{{asset("bower_components/angular-route/angular-route.js")}}"></script>
  <script src="{{asset("app.js")}}"></script>
  <script src="{{asset("view1/view1.js")}}"></script>
  <script src="{{asset("view2/view2.js")}}"></script>
  <script src="{{asset("components/version/version.js")}}"></script>
  <script src="{{asset("components/version/version-directive.js")}}"></script>
  <script src="{{asset("components/version/interpolate-filter.js")}}"></script>
</body>
</html>
