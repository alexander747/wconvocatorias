<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
  <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>

  <!-- Datatable -->
  <link href="../assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- toast CSS -->
  <link href="../extends/toast-master/css/jquery.toast.css" rel="stylesheet">
  <script src="https://www.w3schools.com/lib/w3data.js"></script>


  <!-- Custom CSS -->
  <link href="dist/css/style.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>

<body class="skin-purple fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="loader">
      <div class="loader__figure"></div>
      <p class="loader__label">Univida</p>
   </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
 <!-- ============================================================== -->
 <!-- Topbar header - style you can find in pages.scss -->
 <!-- ============================================================== -->
 <header class="topbar">
   <nav class="navbar top-navbar navbar-expand-md navbar-dark">
     <!-- ============================================================== -->
     <!-- Logo -->
     <!-- ============================================================== -->
     <div class="navbar-header">
       <a class="navbar-brand" href="index.html">
         <!-- Logo icon --><b>
           <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
           <!-- Dark Logo icon -->
           <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
           <!-- Light Logo icon -->
           <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text --><span>
           <!-- dark Logo text -->
           <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
           <!-- Light Logo text -->    
           <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
           <!-- ============================================================== -->
           <!-- toggle and nav items -->
           <!-- ============================================================== -->
           <ul class="navbar-nav mr-auto">
             <!-- This is  -->
             <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
             <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
             <!-- ============================================================== -->
             <!-- Search -->
             <!-- ============================================================== -->
             <li class="nav-item">
               <form class="app-search d-none d-md-block d-lg-block">
                 <input type="text" class="form-control" placeholder="Search & enter">
              </form>
           </li>
        </ul>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <ul class="navbar-nav my-lg-0">
         <!-- ============================================================== -->
         <!-- Comment -->
         <!-- ============================================================== -->
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
             <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
             <ul>
               <li>
                 <div class="drop-title">Notifications</div>
              </li>
              <li>
                 <div class="message-center">
                   <!-- Message -->
                   <a href="javascript:void(0)">
                     <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                     <div class="mail-contnet">
                       <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)">
                       <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                       <div class="mail-contnet">
                         <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                         <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                         <div class="mail-contnet">
                           <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)">
                           <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                           <div class="mail-contnet">
                             <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                          </a>
                       </div>
                    </li>
                    <li>
                     <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                  </li>
               </ul>
            </div>
         </li>
         <!-- ============================================================== -->
         <!-- End Comment -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Messages -->
         <!-- ============================================================== -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
         </a>
         <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
            <ul>
              <li>
                <div class="drop-title">You have 4 new messages</div>
             </li>
             <li>
                <div class="message-center">
                  <!-- Message -->
                  <a href="javascript:void(0)">
                    <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                      <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                   </a>
                   <!-- Message -->
                   <a href="javascript:void(0)">
                      <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                      <div class="mail-contnet">
                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                     </a>
                     <!-- Message -->
                     <a href="javascript:void(0)">
                        <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                        <div class="mail-contnet">
                          <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                       </a>
                       <!-- Message -->
                       <a href="javascript:void(0)">
                          <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                          <div class="mail-contnet">
                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                         </a>
                      </div>
                   </li>
                   <li>
                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                 </li>
              </ul>
           </div>
        </li>
        <!-- ============================================================== -->
        <!-- End Messages -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- mega menu -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
         <div class="dropdown-menu animated bounceInDown">
           <ul class="mega-dropdown-menu row">
             <li class="col-lg-3 col-xlg-2 m-b-30">
               <h4 class="m-b-20">CAROUSEL</h4>
               <!-- CAROUSEL -->
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner" role="listbox">
                   <div class="carousel-item active">
                     <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                  </div>
                  <div class="carousel-item">
                     <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                  </div>
                  <div class="carousel-item">
                     <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!-- End CAROUSEL -->
         </li>
         <li class="col-lg-3 m-b-30">
          <h4 class="m-b-20">ACCORDION</h4>
          <!-- Accordian -->
          <div class="accordion" id="accordionExample">
            <div class="card m-b-0">
              <div class="card-header bg-white p-0" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group Item #1
                 </button>
              </h5>
           </div>

           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high.
           </div>
        </div>
     </div>
     <div class="card m-b-0">
       <div class="card-header bg-white p-0" id="headingTwo">
         <h5 class="mb-0">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
           aria-controls="collapseTwo">
           Collapsible Group Item #2
        </button>
     </h5>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high.
   </div>
</div>
</div>
<div class="card m-b-0">
  <div class="card-header bg-white p-0" id="headingThree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
      aria-controls="collapseThree">
      Collapsible Group Item #3
   </button>
</h5>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
  <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high.
 </div>
</div>
</div>
</div>
</li>
<li class="col-lg-3  m-b-30">
 <h4 class="m-b-20">CONTACT US</h4>
 <!-- Contact -->
 <form>
   <div class="form-group">
     <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
     <div class="form-group">
       <input type="email" class="form-control" placeholder="Enter email"> </div>
       <div class="form-group">
         <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
      </div>
      <button type="submit" class="btn btn-info">Submit</button>
   </form>
</li>
<li class="col-lg-3 col-xlg-4 m-b-30">
 <h4 class="m-b-20">List style</h4>
 <!-- List style -->
 <ul class="list-style-none">
   <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
   <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
   <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
   <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
   <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
</ul>
</li>
</ul>
</div>
</li>
<!-- ============================================================== -->
<!-- End mega menu -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- User Profile -->
<!-- ============================================================== -->
<li class="nav-item dropdown u-pro">
  <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
  <div class="dropdown-menu dropdown-menu-right animated flipInY">
    <!-- text-->
    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
    <!-- text-->
    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
    <!-- text-->
    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
    <!-- text-->
    <div class="dropdown-divider"></div>
    <!-- text-->
    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
    <!-- text-->
    <div class="dropdown-divider"></div>
    <!-- text-->
    <a href="pages-login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
    <!-- text-->
 </div>
</li>
<!-- ============================================================== -->
<!-- End User Profile -->
<!-- ============================================================== -->
<li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
</ul>
</div>
</nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
         </ul>
      </li>
      <li class="nav-small-cap">--- PERSONAL</li>
      <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
         <ul aria-expanded="false" class="collapse">
           <li><a href="index.html">Minimal </a></li>
           <li><a href="index2.html">Analytical</a></li>
           <li><a href="index3.html">Demographical</a></li>
           <li><a href="index4.html">Modern</a></li>
        </ul>
     </li>
     <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
        <ul aria-expanded="false" class="collapse">
          <li><a href="app-calendar.html">Calendar</a></li>
          <li><a href="app-chat.html">Chat app</a></li>
          <li><a href="app-ticket.html">Support Ticket</a></li>
          <li><a href="app-contact.html">Contact / Employee</a></li>
          <li><a href="app-contact2.html">Contact Grid</a></li>
          <li><a href="app-contact-detail.html">Contact Detail</a></li>
       </ul>
    </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
     <ul aria-expanded="false" class="collapse">
       <li><a href="app-email.html">Mailbox</a></li>
       <li><a href="app-email-detail.html">Mailbox Detail</a></li>
       <li><a href="app-compose.html">Compose Mail</a></li>
    </ul>
 </li>
 <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="ui-cards.html">Cards</a></li>
    <li><a href="ui-user-card.html">User Cards</a></li>
    <li><a href="ui-buttons.html">Buttons</a></li>
    <li><a href="ui-modals.html">Modals</a></li>
    <li><a href="ui-tab.html">Tab</a></li>
    <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
    <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
    <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
    <li><a href="ui-notification.html">Notification</a></li>
    <li><a href="ui-progressbar.html">Progressbar</a></li>
    <li><a href="ui-nestable.html">Nestable</a></li>
    <li><a href="ui-range-slider.html">Range slider</a></li>
    <li><a href="ui-timeline.html">Timeline</a></li>
    <li><a href="ui-typography.html">Typography</a></li>
    <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
    <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
    <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
    <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
    <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
    <li><a href="ui-list-media.html">List Media</a></li>
    <li><a href="ui-ribbons.html">Ribbons</a></li>
    <li><a href="ui-grid.html">Grid</a></li>
    <li><a href="ui-carousel.html">Carousel</a></li>
    <li><a href="ui-date-paginator.html">Date-paginator</a></li>
    <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
    <li><a href="ui-spinner.html">Spinner</a></li>
    <li><a href="ui-scrollspy.html">Scrollspy</a></li>
    <li><a href="ui-toasts.html">Toasts</a></li>
 </ul>
</li>
<li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="form-basic.html">Basic Forms</a></li>
    <li><a href="form-layout.html">Form Layouts</a></li>
    <li><a href="form-addons.html">Form Addons</a></li>
    <li><a href="form-material.html">Form Material</a></li>
    <li><a href="form-float-input.html">Floating Lable</a></li>
    <li><a href="form-pickers.html">Form Pickers</a></li>
    <li><a href="form-upload.html">File Upload</a></li>
    <li><a href="form-mask.html">Form Mask</a></li>
    <li><a href="form-validation.html">Form Validation</a></li>
    <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
    <li><a href="form-dropzone.html">File Dropzone</a></li>
    <li><a href="form-icheck.html">Icheck control</a></li>
    <li><a href="form-img-cropper.html">Image Cropper</a></li>
    <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
    <li><a href="form-typehead.html">Form Typehead</a></li>
    <li><a href="form-wizard.html">Form Wizard</a></li>
    <li><a href="form-xeditable.html">Xeditable Editor</a></li>
    <li><a href="form-summernote.html">Summernote Editor</a></li>
    <li><a href="form-tinymce.html">Tinymce Editor</a></li>
 </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="table-basic.html">Basic Tables</a></li>
    <li><a href="table-layout.html">Table Layouts</a></li>
    <li><a href="table-data-table.html">Data Tables</a></li>
    <li><a href="table-footable.html">Footable</a></li>
    <li><a href="table-jsgrid.html">Js Grid Table</a></li>
    <li><a href="table-responsive.html">Responsive Table</a></li>
    <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
    <li><a href="table-editable-table.html">Editable Table</a></li>
 </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="widget-data.html">Data Widgets</a></li>
    <li><a href="widget-apps.html">Apps Widgets</a></li>
    <li><a href="widget-charts.html">Charts Widgets</a></li>
 </ul>
</li>
<li class="nav-small-cap">--- EXTRA COMPONENTS</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="layout-single-column.html">1 Column</a></li>
    <li><a href="layout-fix-header.html">Fix header</a></li>
    <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
    <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
    <li><a href="layout-boxed.html">Boxed Layout</a></li>
    <li><a href="layout-logo-center.html">Logo in Center</a></li>
 </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge badge-pill badge-info">25</span></span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="starter-kit.html">Starter Kit</a></li>
    <li><a href="pages-blank.html">Blank page</a></li>
    <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
      <ul aria-expanded="false" class="collapse">
        <li><a href="pages-login.html">Login 1</a></li>
        <li><a href="pages-login-2.html">Login 2</a></li>
        <li><a href="pages-register.html">Register</a></li>
        <li><a href="pages-register2.html">Register 2</a></li>
        <li><a href="pages-register3.html">Register 3</a></li>
        <li><a href="pages-lockscreen.html">Lockscreen</a></li>
        <li><a href="pages-recover-password.html">Recover password</a></li>
     </ul>
  </li>
  <li><a href="pages-profile.html">Profile page</a></li>
  <li><a href="pages-animation.html">Animation</a></li>
  <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
  <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
  <li><a href="pages-invoice.html">Invoice</a></li>
  <li><a href="pages-treeview.html">Treeview</a></li>
  <li><a href="pages-utility-classes.html">Helper Classes</a></li>
  <li><a href="pages-search-result.html">Search result</a></li>
  <li><a href="pages-scroll.html">Scrollbar</a></li>
  <li><a href="pages-pricing.html">Pricing</a></li>
  <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
  <li><a href="pages-gallery.html">Gallery</a></li>
  <li><a href="pages-faq.html">Faqs</a></li>
  <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
     <ul aria-expanded="false" class="collapse">
       <li><a href="pages-error-400.html">400</a></li>
       <li><a href="pages-error-403.html">403</a></li>
       <li><a href="pages-error-404.html">404</a></li>
       <li><a href="pages-error-500.html">500</a></li>
       <li><a href="pages-error-503.html">503</a></li>
    </ul>
 </li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="chart-morris.html">Morris Chart</a></li>
    <li><a href="chart-chartist.html">Chartis Chart</a></li>
    <li><a href="chart-echart.html">Echarts</a></li>
    <li><a href="chart-flot.html">Flot Chart</a></li>
    <li><a href="chart-knob.html">Knob Chart</a></li>
    <li><a href="chart-chart-js.html">Chartjs</a></li>
    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
    <li><a href="chart-extra-chart.html">Extra chart</a></li>
    <li><a href="chart-peity.html">Peity Charts</a></li>
 </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="icon-material.html">Material Icons</a></li>
    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
    <li><a href="icon-themify.html">Themify Icons</a></li>
    <li><a href="icon-weather.html">Weather Icons</a></li>
    <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
    <li><a href="icon-flag.html">Flag Icons</a></li>
 </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="map-google.html">Google Maps</a></li>
    <li><a href="map-vector.html">Vector Maps</a></li>
 </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
  <ul aria-expanded="false" class="collapse">
    <li><a href="javascript:void(0)">item 1.1</a></li>
    <li><a href="javascript:void(0)">item 1.2</a></li>
    <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
      <ul aria-expanded="false" class="collapse">
        <li><a href="javascript:void(0)">item 1.3.1</a></li>
        <li><a href="javascript:void(0)">item 1.3.2</a></li>
        <li><a href="javascript:void(0)">item 1.3.3</a></li>
        <li><a href="javascript:void(0)">item 1.3.4</a></li>
     </ul>
  </li>
  <li><a href="javascript:void(0)">item 1.4</a></li>
</ul>
</li>
<li class="nav-small-cap">--- SUPPORT</li>
<li> <a class="waves-effect waves-dark" href="../documentation/documentation.html" aria-expanded="false"><i class="far fa-circle text-danger"></i><span class="hide-menu">Documentation</span></a></li>
<li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
<li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
      </div>

      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <button onclick="cargarcombodepartamentos();" id="buttoAddCity" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Registrar Tipo Convocatoria</button>
       </div>
    </div>

 </div>
 <!-- ============================================================== -->
 <!-- End Bread crumb and right sidebar toggle -->
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- Start Page Content -->
 <!-- ============================================================== -->
 <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">


        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tipo Convocatorias</h4>
                <div class="table-responsive m-t-40">
                  <table id="datatableConvocatorias" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Url</th>
                        <th>Sigla</th>
                        <th>Acción</th>
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- /row modal registra Convocatorias-->
<div class="row">
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 70%">
      <div class="modal-content" >
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Registrar Tipo Convocatoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
       </div>
       <form id="frmDatos" method="POST" enctype="multipart/form-data" >
          <div class="modal-body">

            <div class="form-group">
              <label for="message-text" class="control-label">Nombre Convocatoria:</label>
              <textarea class="form-control" id="nombreconvocatoria" name="nombreconvocatoria" style="height: 40px" required></textarea>
           </div>

           <div class="form-group">
              <label for="message-text" class="control-label">Descripción:</label>
              <textarea class="form-control" id="descripcion" name="descripcion" style="height: 40px" required></textarea>
           </div>

           <div class="form-group">
            <label for="message-text" class="control-label">Estado:</label>
              <!-- <select name="estado" id="estado" class="custom-select" required="">
                <option value="activo" selected>Activo</option>
                <option value="inactivo" selected>Inactivo</option>
              </select> -->
              <div>
                <input type="radio" class="check" id="flat-radio-1" name="estado" data-radio="iradio_flat-red" value="1">
                <label for="flat-radio-1">Activo</label><br>
                <input type="radio" class="check" id="flat-radio-2" name="estado" checked data-radio="iradio_flat-red" value="0">
                <label for="flat-radio-2">Inactivo</label>
              </div>
            </div>

          
          <div class="form-group">
             <label for="message-text" class="control-label">Tipo Sigla:</label>
             <textarea class="form-control" id="sigla" name="sigla" style="height: 40px" required></textarea>
          </div>

          <div class="form-group">
             <label for="message-text" class="control-label">Url:</label>
             <input type="url" name="url" style="height: 40px" class="form-control" required>
          </div>

          <div>
             <input type="hidden" id="accion" name="accion" value="3">
          </div>


        <div class="modal-footer">
         <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Cerrar</button>
         <button type="submit" id="guardar-ciudad" class="btn btn-info waves-effect waves-light">Guardar</button>
      </div>
   </div>
</form>
</div>
</div>
</div>
</div>
<!-- /fin row modal -->


<!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- /row modal actualizar ciudad-->
<div class="row">
  <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 70%">
      <div class="modal-content" >
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Actualizar  Tipo Convocatoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
       </div>
       <form id="frmDatos2" method="POST" enctype="multipart/form-data" >
          <div class="modal-body">

             <div class="form-group">
              <label for="message-text" class="control-label">Nombre Convocatoria:</label>
              <textarea class="form-control" id="actnombre" name="actnombre" style="height: 40px" required></textarea>
           </div>

           <div class="form-group">
              <label for="message-text" class="control-label">Descripción:</label>
              <textarea class="form-control" id="actdescripcion" name="actdescripcion" style="height: 40px" required></textarea>
           </div>

           <div class="form-group">
              <label for="message-text" class="control-label">Estado:</label>
               <div>
                <input type="radio" class="check" id="radio1" name="actestado" data-radio="iradio_flat-red" value="1">
                <label for="flat-radio-1">Activo</label><br>
                <input type="radio" class="check" id="radio2" name="actestado" data-radio="iradio_flat-red" value="0">
                <label for="flat-radio-2">Inactivo</label>
              </div>
             <!--  <select name="actestado" id="actestado" class="custom-select" required="">
             </select> -->
          </div>

          <div class="form-group">
             <label for="message-text" class="control-label">Tipo Sigla:</label>
             <textarea class="form-control" id="actsigla" name="actsigla" style="height: 40px" required></textarea>
          </div>

          <div class="form-group">
             <label for="message-text" class="control-label">Url:</label>
             <!-- <textarea class="form-control" id="acturl" name="acturl" style="height: 40px" required></textarea> -->
             <input type="url" id="acturl" name="acturl" style="height: 40px" class="form-control" required>
          </div>



           <div>
              <input type="hidden" id="accion" name="accion" value="6">
              <input type="hidden" name="id" id="id">
           </div>


           <div class="modal-footer">
              <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Cerrar</button>
              <button type="submit" id="actualizar-convocatoria" class="btn btn-info waves-effect waves-light">Guardar</button>
           </div>
        </div>
     </form>
  </div>
</div>
</div>
</div>
<!-- /fin row modal -->

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- /row modal borrar -->
<div class="row">
  <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 70%">
      <div class="modal-content" >
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Borrar Tipo Convocatoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
       </div>
       <form id="frmDatos3" method="POST" enctype="multipart/form-data" >
          <div class="modal-body">

            <div class="form-group">
              <label for="message-text" class="control-label">¿Esta seguro que desea eliminar la Convocatoria? </label>
           </div>

           <div>
              <input type="hidden" id="accion" name="accion" value="4">
              <input type="hidden" name="idborrar" id="idborrar">
           </div>


           <div class="modal-footer">
              <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Cancelar</button>
              <button type="submit" id="borrarconvocatoria" class="btn btn-info waves-effect waves-light">Eliminar</button>
           </div>
        </div>
     </form>
  </div>
</div>
</div>
</div>
<!-- /fin row modal -->




</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
  <div class="slimscrollright">
    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
    <div class="r-panel-body">
      <ul id="themecolors" class="m-t-20">
        <li><b>With Light sidebar</b></li>
        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme working">5</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
     </ul>
     <ul class="m-t-20 chatonline">
        <li><b>Chat option</b></li>
        <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
       </li>
       <li>
          <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
       </li>
    </ul>
 </div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
  © 2019 Eliteadmin by themedesigner.in
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/node_modules/popper/popper.min.js"></script>
<script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>

<!-- This is data table -->
<script src="../assets/node_modules/datatables/datatables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<!--Wave Effects -->
<script src="js/waves.js"></script>
<script src="../extends/toast-master/js/jquery.toast.js"></script>
<script src="js/toastr.js"></script>



<!-- script para ajuntar desde la carpeta codigojs -->
<script src="codigoJs/convocatorias.js"></script>


</body>

</html>