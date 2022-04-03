<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/ionicons.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/fonts/simple-line-icons.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/fonts/fontawesome5-overrides.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/best-carousel-slide.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Boostrap-Tabs.css') }}">
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
	    <link rel="stylesheet" href="{{ asset('/css/partenaire-slide.css') }}">
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
	    <link rel="stylesheet" href="{{ asset('/css/video-background.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Video-Parallax-Background.css') }}">
	    <link rel="stylesheet" href="{{ asset('/css/Video-Responsive.css') }}">

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="bg-light">

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
        @yield('content')
        
        <script src="{{ asset('/js/bs-init.js') }}"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
	    <script src="{{ asset('/js/count-jnumb.js') }}"></script>
	    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	    <script src="{{ asset('/js/Image-Tab-Gallery-Vertical.js') }}"></script>
	    <script src="{{ asset('/js/Lightbox-Gallery.js') }}"></script>
	    <script src="{{ asset('/js/Multi-step-form.js') }}"></script>
	    <script src="{{ asset('/js/MUSA_form-wizard.js') }}"></script>
	    <script src="{{ asset('/js/PJansari---Horizontal-Stepper-with-Redial-Progress-Bar.js') }}"></script>
	    <!--<script src="{{ asset('/js/PJansari--Parallax-Video.js') }}"></script>-->
	    <script src="{{ asset('/js/slick-animation.min.js') }}"></script>
	    <script src="{{ asset('/js/slick.min.js') }}"></script>
	    <script src="{{ asset('/js/step-form.js') }}"></script>
	    <script src="{{ asset('/js/Video-Parallax-Background.js') }}"></script>
	    @yield('script')
    </body>
</html>
