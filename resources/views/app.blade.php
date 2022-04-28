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
        <!--<link rel="stylesheet" href="{{ mix('css/app.css') }}">-->
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
        
        <!--<link rel="stylesheet" href="{{ mix('css/app.css') }}">-->
        <link rel="stylesheet" href="{{ asset('/fonts/ionicons.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/fonts/simple-line-icons.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/fonts/fontawesome5-overrides.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/best-carousel-slide.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Boostrap-Tabs.css') }}">
	    <link rel="stylesheet" href="{{ asset('/fonts/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/font-awesome.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Bootstrap-4---Tabs-with-Arrows.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Brands.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Carousel-Hero.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/checkbox.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Contact-Form-Clean.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/count-numb.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Features-Boxed.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Footer-Dark.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Header-Blue.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Highlight-Blue.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Highlight-Phone.css') }}">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
	    <link rel="stylesheet" href="{{ asset('/css/Image-Tab-Gallery-Vertical.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Lightbox-Gallery.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Lista-Productos-Canito.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/loader.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/login-form-1.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/login-form.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Minimal-tabs-1.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Minimal-tabs.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Modal-Login-form.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Multi-step-form.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/MUSA_form-wizard-1.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/MUSA_form-wizard.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Navigation-Clean.css') }}">
	    <!--<link rel="stylesheet" href="{{ asset('/css/partenaire-slide.css') }}">-->
	    <link rel="stylesheet" href="{{ asset('/css/PJansari---Horizontal-Stepper-with-Redial-Progress-Bar.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/PJansari--Parallax-Video.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Projects-Clean.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Projects-Horizontal.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Registration-Form-with-Photo.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/step-form.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Team-1.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Team-Clean.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Team.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Testimonials.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/User-Tasks-and-User-Activity-Streams---List-Group-Component.css') }}">
	    <!--<link rel="stylesheet" href="{{ asset('/css/video-background.css') }}">-->
	    <link rel="stylesheet" href="{{ asset('/css/Video-Parallax-Background.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Video-Responsive.css') }}">
	    
	    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
 
        <!-- Title -->
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        
        <style>
	        
	       
	       #preloader-area {
			  position: absolute;
			  left: 45%;
			  top: 50%;
			  height: 100px;
			  width: 100px;
			  z-index: 90000;
			  right: 50%;
          }
	       #progressbar{
		       
		       padding-left: unset !important;
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
	       
	       .user-img img {
		     
		     -webkit-animation: unset !important;
		   }
	       
	       .courses-item {
		     
		     -webkit-box-shadow: unset !important;
		   }
	    </style>

        <!-- Scripts -->
        @routes
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        
    </head>
    <body class="bg-light">
	    
	     
	    
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
        
        <!--<script src="{{ asset('/js/bs-init.js') }}" defer></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js" defer></script>
	    <!--<script src="{{ asset('/js/count-jnumb.js') }}" defer></script>-->
	    <!--<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" defer></script>
	    <script src="{{ asset('/js/Image-Tab-Gallery-Vertical.js') }}" defer></script>
	    <script src="{{ asset('/js/Lightbox-Gallery.js') }}" defer></script>
	    <!--<script src="{{ asset('/js/Multi-step-form.js') }}?<?php echo uniqid(); ?>"></script>-->
	    <!--<script src="{{ asset('/js/MUSA_form-wizard.js') }}" defer></script>--->
	    <!--<script src="{{ asset('/js/PJansari---Horizontal-Stepper-with-Redial-Progress-Bar.js') }}" defer></script>-->
	    <!--<script src="{{ asset('/js/slick-animation.min.js') }}" defer></script>
	    <script src="{{ asset('/js/slick.min.js') }}" defer></script>
	    <!--<script src="{{ asset('/js/step-form.js') }}" defer></script>-->
	    <!--<script src="{{ asset('/js/Video-Parallax-Background.js') }}" defer></script>-->
	    
	    
	    <!--<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>-->
	    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- overlayScrollbars -->
		<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('js/adminlte.js') }}"></script>
		
		<!-- PAGE PLUGINS -->
		<!-- jQuery Mapael -->
		<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
		<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
		<!-- ChartJS -->
		<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
		
		
		<script src="/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/meanmenu.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/ajaxchimp.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/form-validator.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/contact-form-script.js" type="text/javascript"></script>
		
		<script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/magnific-popup.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/aos.js" type="text/javascript"></script>
		
		<script src="/assets/js/odometer.min.js" type="text/javascript"></script>
		<script src="/assets/js/appear.min.js" type="text/javascript"></script>
		
		<script src="/assets/js/tweenMax.min.js" type="text/javascript"></script>
		
		<script src="{{ asset('/assets/js/custom-vue.js') }}"></script>
		 <!-- Jquery Min JS -->
        <!--<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>-->
        <!-- Plugins JS -->
        <!--<script src="{{ asset('/assets/js/plugins.js') }}?<?php echo uniqid(); ?>"></script>
        <script src="{{ asset('/assets/js/custom.js') }}"></script>-->
        <script src="{{ mix('js/app.js') }}"></script>
        <script type="text/javascript">
	        
	        
	    </script>
		
		<!--<script src="{{ asset('js/demo.js') }}"></script>-->
	    
    </body>
</html>
