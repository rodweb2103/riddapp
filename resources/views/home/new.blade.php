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
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/fontawesome5-overrides.min.css') }}">
        <!-- Icon Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/iconplugins.css') }}?<?php echo uniqid(); ?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}?<?php echo uniqid(); ?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/theme-dark.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/photoswipe.css') }}">
 
        <!-- Title -->
        <title>Ledu - Education Courses & Online Training HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/img/favicon.png">
        
        <style>
	        
	        footer-widget .social-link li a i {
		  font-size: 20px !important;
		  width: 42px !important;
		  height: 42px !important;
		  line-height: 40px !important;
  }
	        
	        .testim .owl-carousel .owl-item img {
  display: block;
  width: 100%;
  height: 110px !important;
}

	        
	        
	      #preloader-area {
			  position: absolute;
			  left: 45%;
			  top: 50%;
			  height: 100px;
			  width: 160px;
			  z-index: 90000;
			  right: 50%;
          }
	        
	        
	       .counter-content h3 .odometer {
		     font-weight: bold;
		   }
	        
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
		   
		   
		   #demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
		img.zoom {
		    width: 100%;
		    height: 200px;
		    border-radius:5px;
		    object-fit:cover;
		    -webkit-transition: all .3s ease-in-out;
		    -moz-transition: all .3s ease-in-out;
		    -o-transition: all .3s ease-in-out;
		    -ms-transition: all .3s ease-in-out;
		}
		        
		 
		.transition {
		    -webkit-transform: scale(1.2); 
		    -moz-transform: scale(1.2);
		    -o-transform: scale(1.2);
		    transform: scale(1.2);
		}
		    .modal-header {
		   
		     border-bottom: none;
		}
		    .modal-title {
		        color:#000;
		    }
		    .modal-footer{
		      display:none;  
		    }
		   
	    </style>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <!--<script src="{{ mix('js/app.js') }}"></script>-->
    </head>
    <body class="">
	    
	    <!-- Pre Loader -->
        <div id="preloader">
            <div id="preloader-area" class="position-absolute top-50 start-50 translate-middle">
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
        <div class="navbar-area ledu-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                   <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="/">
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
                                    <a href="/" class="nav-link">
                                        {{ __('Accueil') }}
                                    </a>
                                 </li>

                                <li class="nav-item">
                                    <a href="{{ route('annonces') }}" class="nav-link">
                                        {{ __('Offres') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('activites') }}" class="nav-link">
                                        {{ __('Activités') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/news" class="nav-link">
                                        {{ __('Actualités') }}
                                    </a>
                                </li>
                                
                                
                                <li class="nav-item">
                                    <a href="/orientations" class="nav-link">
                                        {{ __('Orientations') }}
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
                                        <!--<i class="fa fa-language"></i>-->
                                        <!--{{ __('Langue') }}-->
                                        @if(app()->getLocale()=="fr")
                                           <img style="width: 20px;" class="flag-img" src="{{ asset('/flags/4x3/fr.svg') }}" alt="Flag of France">
                                        @else
                                           
                                           <img style="width: 20px;" class="flag-img" src="{{ asset('/flags/4x3/us.svg') }}" alt="Flag of USA">
                                        
                                        @endif
                                                                    
                                      </a>
                                    <ul class="dropdown-menu" style="width: unset !important;min-width: 5rem;">
                                        <li class="nav-item">
                                            <a href="{{ asset('/fr') }}" class="nav-link">
                                                <!--{{ __('Français') }}-->
                                                <img style="width: 80%;" class="flag-img" src="{{ asset('/flags/4x3/fr.svg') }}" alt="Flag of France">
                                                
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ asset('/en') }}" class="nav-link">
                                                <!--{{ __('Anglais') }}-->
                                                <img style="width: 80%;" class="flag-img" src="{{ asset('/flags/4x3/us.svg') }}" alt="Flag of USA">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                @auth
                                 <li class="nav-item">
                                      <a href="#" class="nav-link dropdown-toggle">
                                        {{ __('Bonjour') }}, {{ \Auth::user()->first_name }}                                  
                                      </a>
                                      
                                      
                                    
                                    <ul class="dropdown-menu">
                                        <!--<li class="nav-item">
                                            <a href="blog.html" class="nav-link">
                                                Francais
                                            </a>
                                        </li>-->
                                        <li class="nav-item">
                                        @if(\Auth::user()->hasRole('Employer') || \Auth::user()->hasRole('Student') || \Auth::user()->hasRole('Consultant') || \Auth::user()->hasRole('Staff'))
	                                         <a href="{{ route('user.dashboard') }}" class="nav-link" style="background: transparent;font-size: 17px;color:#000 !important;font-weight: 500"> 
								               {{ __('Mon compte') }}
								             </a>
								        @endif
								        @if(\Auth::user()->hasRole('Admin'))
							             <a href="{{ route('admin.dashboard') }}"  class="nav-link" style="background: transparent;font-size: 17px;color:#000 !important;font-weight: 500"> 
							               {{ __('Administration') }}
							             </a>
							            @endif
                                        </li>
                                        <li class="nav-item">
                                        <form method="POST" action='/logout' id="frm">
	                                        @csrf
	                                        <!--<a class="nav-link" href="#" onclick="logoutUser()">{{ __('Déconnexion') }}</a>-->
	                                        <a style="background: transparent;font-size: 17px;color:#000;font-weight: 500"
								            href="#"
								            
								            class="nav-link"
								            >{{ __('Déconnexion') }}</a
		                                 >
                                        </li>
                                        </form>
                                        <!--<Link  :href="route('logout')" class="nav-link">
							               Se deconnecter
							             </Link>-->
							             <!--<Link
								            :href="route('logout')"
								            method="post"
								            as="button"
								            class="nav-link"
								            >Déconnexion</Link
		                                 >-->
                                        </li>
                                    </ul>
                                </li>
                               @endauth

                                <!--<li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>-->
                            </ul>
                            @guest
                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <a href="/login" class="default-btn two" style="background:  rgb(240, 128, 0);">{{ __('Se connecter') }}</a>
                                </div>
                            </div>
                            <div class="others-options d-flex align-items-center ml-20">
                                <div class="optional-item">
                                    <a href="/login" class="default-btn two" style="background: green">{{ __('Créer un compte') }}</a>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu" v-if="!$page.props.user">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container" v-dropmenu v-if="!$page.props.user">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                               <!-- <div class="side-item">
                                    <form class="search-form">
                                        <input type="search" class="form-control" placeholder="Search courses">
                                        <button type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>-->

                                <div class="side-item">
                                    <a href="{{ route('login') }}" class="default-btn two">{{ __('Se connecter') }}</a>
                                    <div class="separator">{{ __('OU') }}</div>
                                    <a href="{{ route('register') }}" class="default-btn two">{{ __('Créer un compte') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        
        
        
        <footer class="footer-area" style="background: var(--bgColor);">
            <div class="container pt-100 pb-70">
                 <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <!--<div class="footer-logo">
                                <a href="index.html">
                                    <img src="/img/LG-RIDD@2x.png" alt="Images" style="width: 100px;">
                                </a>
                            </div>-->
                            <!--<p>{{ __('Le Réseau Ivoirien des Diplômés de la Diaspora (RIDD) est une organisation née le 15 Novembre 2017 à l’initiative des jeunes ivoiriens diplômés dee la diaspora.') }}</p>-->
                            
                            <div class="footer-widget ps-5">
                            <h3>{{ __('Nos contacts') }}</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="ri-map-pin-2-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Location') }}:</h4>
                                        <span>Côte d'Ivoire</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-mail-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Email') }}:</h4>
                                        <span><a href="mailto:hello@ledu.com">hello@ridd.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Phone') }}:</h4>
                                        <span><a href="tel:098765432150">0000000000000</a></span>
                                    </div>
                                </li>
                            </ul>
                            
                            
                            
                        </div>
                            
                            <!--<ul class="social-link">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    
                    <!--<div class="col-lg-3 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>{{ __('Nos contacts') }}</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="ri-map-pin-2-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Location') }}:</h4>
                                        <span>Côte d'Ivoire</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-mail-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Email') }}:</h4>
                                        <span><a href="mailto:hello@ledu.com">hello@ridd.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Phone') }}:</h4>
                                        <span><a href="tel:098765432150">0000000000000</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                    
                    
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>{{ __('Moyens de paiement') }}</h3>
                            <!--<h1>Souscrivez à votre newsletter afin d'être au parfum de toutes les activités du RIDD</h1>-->
				            
				            <div class="newsletter-area pb-100">
					                <div class="row">
					                    
					                    <div class="col-lg-12">
						                   <img src="/img/bouton-payment.png"/>
					                   </div>
				            </div>
				            
                            <!--<ul class="footer-contact">-->
	                            <!--<li>
	                                 <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
				                     <h2>Subscribe our newsletter</h2>-->
	                                 <!--<div class="newsletter-area section-bg ptb-100">
				            <div class="container">
				                <div class="row">
				                    <div class="col-lg-5">
				                        <div class="section-title mt-rs-20">
				                            <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
				                            <h2>Subscribe our newsletter</h2>
				                        </div>
				                    </div>
				                    <div class="col-lg-7">
				                        <form class="newsletter-form" data-toggle="validator" method="POST" novalidate="true">
				                            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required="" autocomplete="off">
				                            <button class="subscribe-btn disabled" type="submit" style="pointer-events: all; cursor: pointer;">
				                                Subscribe Now  <i class="flaticon-paper-plane"></i>
				                            </button>
				                            <div id="validator-newsletter" class="form-result"></div>
				                        </form>
				                    </div>
				                </div>
				            </div>-->
	                            <!--</li>
                            </ul>-->
                            
                            
                            

                        </div>
                            
                            <!--<ul class="footer-contact">
                                <li>
                                    <i class="ri-map-pin-2-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Location') }}:</h4>
                                        <span>Côte d'Ivoire, Marcory Remblais</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-mail-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Email') }}:</h4>
                                        <span><a href="mailto:hello@ledu.com">contact@ridd.ci</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Phone') }}:</h4>
                                        <span><a href="tel:098765432150">+2250779379838</a></span>
                                    </div>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>{{ __('Newsletter') }}</h3>
                            <!--<h1>Souscrivez à votre newsletter afin d'être au parfum de toutes les activités du RIDD</h1>-->
				            
				            <div class="newsletter-area pb-100">
					                <div class="row">
					                    <div class="col-lg-12">
					                        <form class="newsletter-form" data-toggle="validator" method="POST" novalidate="true">
					                            <input type="email" class="form-control" placeholder="{{ __('Entrer votre adresse e-mail') }}" name="EMAIL" required="" autocomplete="off">
					                            <button  class="subscribe-btn disabled" type="submit" style="pointer-events: all; cursor: pointer;background: rgb(240, 128, 0) !important;">
					                                {{ __('S\'abonner') }}  <i class="flaticon-paper-plane"></i>
					                            </button>
					                            <!--<div id="validator-newsletter" class="form-result"></div>-->
					                        </form>
					                    </div>
					                    
				            </div>
				            
                            <!--<ul class="footer-contact">-->
	                            <!--<li>
	                                 <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
				                     <h2>Subscribe our newsletter</h2>-->
	                                 <!--<div class="newsletter-area section-bg ptb-100">
				            <div class="container">
				                <div class="row">
				                    <div class="col-lg-5">
				                        <div class="section-title mt-rs-20">
				                            <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
				                            <h2>Subscribe our newsletter</h2>
				                        </div>
				                    </div>
				                    <div class="col-lg-7">
				                        <form class="newsletter-form" data-toggle="validator" method="POST" novalidate="true">
				                            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required="" autocomplete="off">
				                            <button class="subscribe-btn disabled" type="submit" style="pointer-events: all; cursor: pointer;">
				                                Subscribe Now  <i class="flaticon-paper-plane"></i>
				                            </button>
				                            <div id="validator-newsletter" class="form-result"></div>
				                        </form>
				                    </div>
				                </div>
				            </div>-->
	                            <!--</li>
                            </ul>-->
                            
                            
                            

                        </div>
                            
                            <!--<ul class="footer-contact">
                                <li>
                                    <i class="ri-map-pin-2-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Location') }}:</h4>
                                        <span>Côte d'Ivoire, Marcory Remblais</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-mail-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Email') }}:</h4>
                                        <span><a href="mailto:hello@ledu.com">contact@ridd.ci</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <div class="content">
                                        <h4>{{ __('Phone') }}:</h4>
                                        <span><a href="tel:098765432150">+2250779379838</a></span>
                                    </div>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    
                </div>
                 <div class="row">
	                 <div class="col-12 text-center">
		                 <div class="footer-widget">
                            <!--<div class="footer-logo">
                                <a href="index.html">
                                    <img src="/img/LG-RIDD@2x.png" alt="Images" style="width: 100px;">
                                </a>
                            </div>-->
                            <!--<p>{{ __('Le Réseau Ivoirien des Diplômés de la Diaspora (RIDD) est une organisation née le 15 Novembre 2017 à l’initiative des jeunes ivoiriens diplômés dee la diaspora.') }}</p>-->
                            
                            <div class="footer-widget ps-5">
                            
                            
                            <ul class="social-link mt-3">
                                <li class="social-title">{{ __('Nous suivre') }}:</li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                            
                            <!--<ul class="social-link">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
	                 </div>
                 </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            <!--Copyright @<script>document.write(new Date().getFullYear())</script>2022 <b>Ledu</b> All Rights Reserved 
                            <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>-->
                            {{ __('Propulsé par') }} yayotech © 2022
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
        
        
         <!-- Jquery Min JS -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <!-- Plugins JS -->
        <script src="{{ asset('/assets/js/plugins.js') }}?<?php echo uniqid(); ?>"></script>
        <!-- Custom  JS -->
        <script src="{{ asset('/assets/js/custom.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
	        function logoutUser(){
		        
		        document.getElementById('frm').submit();
	        }
	        $(document).ready(function(){
		        
		        $('body').addClass('loaded'); 
		        
		        
		        
	        });
	        </script>
	    @yield('script')
    </body>
</html>
