<template>
       <Head>
		  <link rel="icon" type="image/png" href="/img/favicon.png">
       </Head>
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
        <!--{{ $page.props }}-->
        <!-- End Pre Loader -->
        <!-- Start Navbar Area -->
        <div class="navbar-area ledu-area" id="ledu-area">
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

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" v-mainmenu>
                            <ul class="navbar-nav">
                                
                                 <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        {{ __('Accueil') }}
                                    </a>
                                 </li>

                                <li class="nav-item">
                                    <a :href="route('annonces')" class="nav-link">
                                        {{ __('Offres') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a :href="route('activites')" class="nav-link">
                                        {{ __('Activités') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/news" class="nav-link">
                                        {{ __('Actualités') }}
                                    </a>
                                </li>
                                
                                 <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        {{ __('Orientations') }}
                                    </a>
                                </li>

                                 <li class="nav-item">
                                      <a href="#" class="nav-link dropdown-toggle">
                                        <!--<i class="fa fa-language"></i>-->
                                        
                                           <img v-if="$page.props.locale=='fr'" style="width: 20px;" class="flag-img" src="/flags/4x3/fr.svg" alt="Flag of France">
                                           <img v-if="$page.props.locale=='en'" style="width: 20px;" class="flag-img" src="/flags/4x3/us.svg" alt="Flag of USA">
                                        
                                        
                                        
                                        <!--{{ __('Langue') }}-->
                                                                         
                                      </a>
                                    <ul class="dropdown-menu" style="width: unset !important;min-width: 5rem;">
                                        <li class="nav-item">
                                            <a href="/fr" class="nav-link">
                                                <!--{{ __('Français') }}-->
                                                <img  style="width: 20px;" class="flag-img" src="/flags/4x3/fr.svg" alt="Flag of France">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/en" class="nav-link">
                                                <!--{{ __('Anglais') }}-->
                                                <img  style="width: 20px;" class="flag-img" src="/flags/4x3/us.svg" alt="Flag of USA">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="nav-item" v-if="$page.props.user">
                                      <a href="#" class="nav-link dropdown-toggle">
                                        {{ __('Bonjour') }}, {{ $page.props.user['first_name'] }}                                   
                                      </a>
                                    <ul class="dropdown-menu">
                                      <li class="nav-item">
                                         <Link style="background: transparent;font-size: 17px;color:#000 !important;font-weight: 500" :href="route('user.dashboard')" v-if="$page.props.is_employer || $page.props.is_candidate || $page.props.is_consult || $page.props.is_staff" class="nav-link"> 
							               {{ __('Mon compte') }}
							             </Link>
							             <Link style="background: transparent;font-size: 17px;color:#000 !important;font-weight: 500" :href="route('admin.dashboard')" v-if="$page.props.admin" class="nav-link"> 
							               {{ __('Administration') }}
							             </Link>
                                        </li>
                                        <li class="nav-item">
                                        <!--<Link  :href="route('logout')" class="nav-link">
							               Se deconnecter
							             </Link>-->
							             <Link style="background: transparent;font-size: 17px;color:#000;font-weight: 500"
								            :href="route('logout')"
								            method="post"
								            as="button"
								            class="nav-link"
								            v-if="$page.props.user">{{ __('Déconnexion') }}</Link
		                                 >
                                        </li>
                                       
                                    </ul>
                                </li>

                                <!--<li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>-->
                            </ul>

                            <div class="others-options d-flex align-items-center" v-if="!$page.props.user">
                                <div class="optional-item">
	                                <Link  :href="route('login')" class="default-btn two" style="background: rgb(240, 128, 0);">
							               {{ __('Se connecter') }}
							        </Link>
                                    <!--<a href="signup.html" class="default-btn two" style="background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162);">Se connecter</a>-->
                                </div>
                                
                            </div>
                            <div class="others-options d-flex align-items-center ml-20" v-if="!$page.props.user">
                                <div class="optional-item">
                                    <Link href="/register" class="default-btn two" style="background:  green none repeat scroll 0% 0%;">{{ __('Créer un compte') }}</Link>
                                </div>
                            </div>
                            
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
                                    <Link :href="route('login')" class="default-btn two">{{ __('Se connecter') }}</Link>
                                    <div class="separator">{{ __('OU') }}</div>
                                    <Link :href="route('register')" class="default-btn two"  style="background:  rgb(71,179,21);">{{ __('Créer un compte') }}</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <slot></slot> 
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
					                            <input type="email" class="form-control" :placeholder="__('Entrer votre adresse e-mail')" name="EMAIL" required="" autocomplete="off">
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
</template>

<style>
	
	

</style>

<script>
import { defineComponent } from "vue"
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
  components: {
    Head,
    Link,
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  updated(){
	
	 //alert("ggggggg");  
  },
  mounted(){
	  
	  //let fontAwesome = document.createElement('script')
      //fontAwesome.setAttribute('src', '/assets/js/plugins.js')
      //document.body.appendChild(fontAwesome)
      
      
      $('body').addClass('loaded');
      
      //let fontAwesome2 = document.createElement('script')
      //fontAwesome2.setAttribute('src', '/assets/js/custom.js')
      //document.head.appendChild(fontAwesome2)
	  
      /*$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	  });*/
	 //console.log(jQuery('.mean-menu'));
	 //alert(""); 
  }
})
</script>