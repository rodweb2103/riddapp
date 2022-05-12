<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Plugins CSS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/fontawesome5-overrides.min.css') }}">
        <!-- Icon Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/iconplugins.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}?<?php echo uniqid(); ?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/theme-dark.css') }}">
 
        <!-- Title -->
        <title>Ledu - Education Courses & Online Training HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        
        <style>
	        
	       .counter-content i::after {
		      
		      background: unset !important;
		   }
	        
	       .brand-item img {
		     
		     opacity: unset !important;
		     -webkit-filter: unset !important;
		   
		   }
	        
	       .play-area::before {
		      
		      background-color : unset !important;
		   }
	       
	       .brand-item-logo1{
		       
		       height: 170px;
	       }
	       
	       .courses-item {
		     
		     -webkit-box-shadow: unset !important;
		   }
	    </style>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <!--<script src="{{ mix('js/app.js') }}"></script>-->
    </head>
    <body class="">
	    
	    <!-- Pre Loader -->
        <div id="preloader">
            <div id="preloader-area" class="position-absolute top-50 start-50 translate-middle" style="height: 100px;width: 160px;z-index: 90000;right: 50%;">
                <!--<div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>-->
                 <img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 150px;"/>
            </div>
            <div class="preloader-section preloader-left"></div>
            <div class="preloader-section preloader-right"></div>
        </div>
        <!-- End Pre Loader -->
        
        <!-- Start Navbar Area -->
        @yield('content')
        

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
        
        
         <!-- Jquery Min JS -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <!-- Plugins JS -->
        <script src="{{ asset('/assets/js/plugins.js') }}?<?php echo uniqid(); ?>"></script>
        <!-- Custom  JS -->
        <script src="{{ asset('/assets/js/custom.js') }}"></script>
        
        <script>
	        $(document).ready(function(){
		        
		        $('body').addClass('loaded'); 
	        });
	        </script>
	    @yield('script')
    </body>
</html>
