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
	       
	       .brand-item-logo1{
		       
		       height: 170px;
	       }
	    </style>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <!--<script src="{{ mix('js/app.js') }}"></script>-->
    </head>
    <body class="bg-light">
	    
	    <!-- Pre Loader -->
        <div id="preloader">
            <div id="preloader-area">
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
            </div>
            <div class="preloader-section preloader-left"></div>
            <div class="preloader-section preloader-right"></div>
        </div>
        <!-- End Pre Loader -->
        
        <!-- Start Navbar Area -->
        <div class="navbar-area ledu-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                   <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <!--<img src="assets/images/logos/logo-small.png" class="logo-one" alt="logo">
                                <img src="assets/images/logos/logo-small-white.png" class="logo-two" alt="logo">-->
                                <!--<img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo"/>-->
                                <img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/>
                                <img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/>
                                
                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <!--<img src="assets/images/logos/logo.png" class="logo-one" alt="Logo">
                            <img src="assets/images/logos/logo-2.png" class="logo-two" alt="Logo">-->
                            <img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 90px;"/>
                            <img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 90px;"/>
                        </a>

                        <!--<div class="nav-widget-form">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Search courses">
                                <button type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>-->

                        <!--<div class="navbar-category">
                            <div class="dropdown category-list-dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtoncategory" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='flaticon-list'></i>
                                    Categories
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtoncategory">
                                    <a href="courses-details.html" class="nav-link-item">
                                        <i class="flaticon-web-development"></i>
                                        Development
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-design"></i>
                                        Web designing
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-wellness"></i>
                                        Lifestyle
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-heart-beat"></i>
                                        Health & fitness
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-folder"></i>
                                        Data science
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-user"></i>
                                        Accounting
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-camera"></i>
                                        Photography
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-corporate"></i>
                                        Marketing
                                    </a>
                                </div>
                            </div>
                        </div>-->

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                
                                 <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Accueil
                                    </a>
                                 </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Offres
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Activités
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Actualités
                                    </a>
                                </li>

                                <!--<li class="nav-item">
                                      <a href="#" class="nav-link dropdown-toggle">
                                        Compte                                   </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">
                                                Connexion
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>-->
                                 <li class="nav-item">
                                      <a href="#" class="nav-link dropdown-toggle">
                                        <i class="fa fa-language"></i>Langue                                   
                                      </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">
                                                Francais
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">
                                                Anglais
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!--<li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>-->
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <a href="signup.html" class="default-btn two" style="background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162);">Se connecter</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-item">
                                    <form class="search-form">
                                        <input type="search" class="form-control" placeholder="Search courses">
                                        <button type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="side-item">
                                    <a href="signup.html" class="default-btn two">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
	    @yield('script')
    </body>
</html>
