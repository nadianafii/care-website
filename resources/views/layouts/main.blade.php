<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />

      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>

      @yield('head')
   </head>
   <body>
    <div class="container">
        <div class="row">
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
              <div class="full">
                 <div class="center-desk">
                    <div class="logo"> <a href="/"><img src="images/logo.png" alt="logo"/></a> </div>
                 </div>
              </div>
           </div>
           <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
              <div class="menu-area">
                 <div class="limit-box">
                    <nav class="main-menu">
                       <ul class="menu-area-main">
                          <li class="active"> <a href="/">Home</a> </li>
                          <li> <a href="/abouts">About</a> </li>
                          <li> <a href="/products">product</a> </li>
                          <li> <a href="/blogs"> Blog</a> </li>
                          <li> <a href="/contacts">Contact</a> </li>
                       </ul>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </div>
      @yield('content')  
      @yield('scripts')
   </body>
</html>
