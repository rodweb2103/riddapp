<template>
  <div>
    <Head :title="title" />
    <header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 360.27px;background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162);padding-bottom: 0px;transform-style: preserve-3d;">
        <div class="container hero">
            <nav class="navbar navbar-light navbar-expand-lg d-xl-flex navigation-clean" style="background: rgba(177,30,44,0);padding-top: 0;padding-bottom: 0;margin-top: -41px;">
                <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="/img/LG-RIDD@2x.png" style="width: 115px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-2">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 18px;">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);font-size: 18px;">Offres</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);font-size: 18px;">Activités</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);font-size: 18px;">Actualités</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);font-size: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-circle text-start" style="font-size: 33px;padding-right: 9px;color: rgb(255,255,255);margin-top: -5px;">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                                    </svg>Compte&nbsp;</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Connexion</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);font-size: 18px;"><i class="fa fa-language" style="font-size: 26px;padding-left: 0px;padding-right: 7px;margin-top: -2px;"></i>Langue&nbsp;</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Francais</a><a class="dropdown-item" href="#">Anglais</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="highlight-blue" style="background: rgba(30,106,221,0);">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-size: 47.44px;font-weight: bold;margin-top: -26px;">Les Offres du RIDD</h2>
                    </div>
                    <div class="buttons"></div>
                </div>
            </section>
        </div>
     </header>
     <slot></slot>
     <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 text-center item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Offres</a></li>
                        <li><a href="#">Activités</a></li>
                        <li><a href="#">Actualités</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 text-center item">
                    <h3>Qui sommes-nous?</h3>
                    <ul>
                        <li><a href="#">RIDD</a></li>
                        <li><a href="#">Equipe</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center item text">
                    <h3>RIDD-PLATEFORME</h3>
                    <p>Le Réseau Ivoirien des Diplômés de la Diaspora<br>(RIDD) est une organisation née le 15 Novembre<br>2017 à l’initiative des jeunes ivoiriens diplômés<br>de la diaspora.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-linkedin"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Propulsé par yayotech © 2022</p>
        </div>
    </footer>
    
  </div>
</template>

<script>

import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'


export default {
  props: {
    title: String,
  },

  components: {
    Head,
    JetApplicationLogo,
    JetBanner,
    JetApplicationMark,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    Link,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },
  mounted(){
	 
  },
  methods: {
	
    
  },
  computed: {
    path() {
      return window.location.pathname
    }
  }
}
</script>
