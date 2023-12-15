<!DOCTYPE html>
<html  lang="en" >
  <!-- BEGIN: Head-->
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="FOOD.ISHOVE.GE">
    <meta name="keywords" content="">
    <meta name="author" content="Nika Tavartkiladze">
   
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/quill.snow.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/flatpickr.min.css')}}">
    

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/semi-dark-layout.min.css')}}">
    

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/form-flat-pickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/form-pickadate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/ext-component-swiper.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/form-file-uploader.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/ext-component-toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slide/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slide/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slide/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slide/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>

        html, body {
        height: 100%;
        margin: 0!important;
        padding: 0!important;
        }
        html, body, p, h1, h2, h3, h4, h5, a, li, label
        {
        font-family: Sans-serif!important;
        }
        .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
        table tr td, th, input, select option, label, h1, h2, h3,h4,h5,h6, ol li, .form-control, .ck .ck-icon, .dz-message
        {
            color:black!important;
        }
        
        table, thead, input, select, textarea,checkbox, .select2, #blog-editor-wrapper, .dropzone
        {
            border: 1px double #55b536!important;
            border-collapse: unset!important;
            border-radius: 25px;
        }
        
        .text-primary
        {
            color:white!important;
        }
        input[type='checkbox'] 
        {
          accent-color: #39911d;
        }
        .d-none
        {
            display:flex!important;
        }
        .breadcrumb-item.active
        {
        color: #7367F0;
        }
        a
        {
            text-decoration: none;
        }
        .jqte
        {
            text-align: justify;
            margin: 0!important;
        }
        .fa
        {
            color: white;
        }
        .header-navbar .navbar-container .dropdown-menu-media .media-list .media:hover, .header-navbar .navbar-container ul.navbar-nav li.dropdown-cart .media img
        {
            background: #0c2e3e!important;
        }
        
        .pagination
        {
           margin-top:20px;
           text-align:center;
        }
        .pagination a 
        {
           color: #7367F0;
           float: left;
           padding: 8px 16px;
           text-decoration: none;
           font-weight: bold;
        }
        a.active
        {
           background:#39911d;
           color:white;
           border-radius: 50%;
        }
        .tabe td
        {
            padding: 2px 5px!important;
        }
        .ing span
        {
            font-size:14px; color:black!important;
        }
        ul.pagination li a
        {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }
     
       .ing
       {
            font-size: 18px;
            display: inline-block;
            margin: 5px;
            padding: 10px;
            border-radius: 4px;
            background-color: silver;
            color: black;
            line-height: 20px;
        }

    </style>

  </head>
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" style="color:black;" >

    
  
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" >
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('MainPage')}}" target="_blank">
              <h2 class="brand-text" style="color:white!important;">ALLFOODS</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content" >
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          
         
          <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('foods.index')}}"><span class="menu-title text-truncate">{{__('all.Food')}}</span></a>
          </li>
          
         
        </ul>
      </div>
    </div>
   <br>


   @yield('content')
   <br>
   <br>
   
    <script src="{{asset('assets/slide/js/jquery.magnific-popup.min.js')}}"></script>
        
    <script src="{{asset('assets/slide/js/aos.js')}}"></script>
    
    <script src="{{asset('assets/slide/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/slide/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/slide/js/main.js')}}"></script>
    <script src="{{asset('assets/admin/js/vendors.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/select2.full.min.js')}}"></script>
   
    <script src="{{asset('assets/admin/js/katex.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/highlight.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/quill.min.js')}}"></script>

    <script src="{{asset('assets/admin/js/app-menu.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/app.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/customizer.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/form-file-uploader.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/ext-component-swiper.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/form-pickers.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/page-blog-edit.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dropzone.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('assets/admin/js/page-account-settings.min.js')}}"></script>

   
   
  </body>
  <!-- END: Body-->
</html>