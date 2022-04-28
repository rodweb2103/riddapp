@extends('home.new')
@section('content')
        <style>
	      
	      .inner-banner::before {
		  
		      background-image: url('/img/banniere-gradient.png') !important;
		  }
	    
	    </style>
	     <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Bourse universitaire en Microbiologie Médicale</h3>
                    <!--<ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Event Details</li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Event Details Area -->
        <div class="event-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="event-details-content pr-20">
                            <div class="event-preview-img">
                                <img src="{{ asset('assets/images/events/event-details1.jpg') }}" alt="Event Details">
                            </div>
                            <h2>Description</h2>
                            <p>
                                Le programme de bourses turques (Türkiye Bursları) de l’Université de Koç sont un programme de bourses internationales financé par le gouvernement turc.

Ce programme fournit un soutien financier aux étudiants internationaux dans le cadre de leur programme d’études prévu dans certaines universités turques publiques et fondations.

En effet, le programme de Türkiye Bursları offre un soutien aux étudiants de tous les pays qui souhaitent poursuivre des études de premier cycle, de Master ou de doctorat.

Il aide également les universitaires et les chercheurs post-doctoraux à collaborer avec des chercheurs turcs.

L’Université de Koç propose des bourses conjointes avec des bourses turques depuis 2019 pour les étudiants internationaux.

Le programme de bourses turques à l’Université de Koç propose :
                    <ul class="courses-details-list">
                         <li>100% de bourses d’études</li>
                         <li>Hébergement en dortoir (selon le soutien mensuel offert par les bourses turques)</li>
                         <li>Allocation mensuelle (selon le soutien mensuel offert par les bourses turques)</li>
                         <li>Vols</li>
                         <li>Autres avantages (Cours de cours de langue turque pendant les études, aide à la demande de visa, activités extra-scolaires d’intégration sociale et culturelle).</li>
                    </ul> 


                            </p>

                            <!--<h3>Localisation</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, voluptatibus eveniet natus porro autem laborum sin
                                molestiae explicabo consectetur ad laboriosam nostrum aliquid ducimus. Vel et vitae nam aperiam nostrum
                                It is a long established fact that a reader will be distracted
                            </p>
                            <div class="contact-map event-details-mt-30">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.972641599872!2d-122.40869708532713!3d37.790680919018435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808bfb7cb35b%3A0x9b649f6a7d9c50e8!2s560%20Bush%20St%20%235%2C%20San%20Francisco%2C%20CA%2094108%2C%20USA!5e0!3m2!1sen!2sbd!4v1641381557316!5m2!1sen!2sbd"></iframe>
                            </div>
                            <h3 class="event-details-mt-30">Our speakers</h3>
                            <div class="row justify-content-center event-details-mt-30">
                                <div class="col-lg-3 col-md-6">
                                    <div class="instructors-item instructors-item-bg">
                                        <div class="instructors-img">
                                            <a href="instructors-details.html">
                                                <img src="assets/images/instructors/instructors-img1.jpg" alt="Team Images">
                                            </a>
                                            <ul class="instructors-social">
                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="ri-instagram-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="ri-twitter-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <i class="ri-linkedin-box-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h3><a href="instructors-details.html">Sally welch</a></h3>
                                            <span>Web designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="instructors-item instructors-item-bg">
                                        <div class="instructors-img">
                                            <a href="instructors-details.html">
                                                <img src="assets/images/instructors/instructors-img2.jpg" alt="Team Images">
                                            </a>
                                            <ul class="instructors-social">
                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="ri-instagram-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="ri-twitter-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <i class="ri-linkedin-box-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h3><a href="instructors-details.html">Jesse joslin</a></h3>
                                            <span>Content strategist</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="instructors-item instructors-item-bg">
                                        <div class="instructors-img">
                                            <a href="instructors-details.html">
                                                <img src="assets/images/instructors/instructors-img3.jpg" alt="Team Images">
                                            </a>
                                            <ul class="instructors-social">
                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="ri-instagram-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="ri-twitter-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <i class="ri-linkedin-box-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h3><a href="instructors-details.html">Lance altman</a></h3>
                                            <span>Photographer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="instructors-item instructors-item-bg">
                                        <div class="instructors-img">
                                            <a href="instructors-details.html">
                                                <img src="assets/images/instructors/instructors-img4.jpg" alt="Team Images">
                                            </a>
                                            <ul class="instructors-social">
                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="ri-instagram-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="ri-twitter-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <i class="ri-linkedin-box-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h3><a href="instructors-details.html">Jonquil von</a></h3>
                                            <span>Art director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="event-sidebar">
                            <h3 class="title">Informations</h3>
                            <ul>
                                <li>Localisation <span>Turquie</span></li>
                                <li>Organisme <span>Koç Üniversitesi</span></li>
                                <li>Année académique <span>2022-2023</span></li>
                                <li>Niveau <span>Master</span></li>
                                <li>Spécialité <span>Microbiologie Médicale</span></li>
                                <li>Pays Cibles <span>Africains, Européens, Maghrébins</span></li>
                                <li>Montant de la Bourse <span>125.000 TL</span></li>
                                <li>Adresse mail<span>Koçbourse@gmail.com</span></li>
                                <li>Site internet <span>www.KoçÜniversitesi.com</span> </li>
                                <li>Date limite pour postuler<span>21 mai 2022</span> </li>
                            </ul>
                        </div>
                        
                        <div class="row">
					          <div class="col-12 mt-4">
					            <img src="https://beta.ridd.info/img/bannieres/banner-yayo1-side.png" alt="Team Images">
					          </div>
					          
					     </div>

                        <!--<div class="event-popular-post">
                            <article class="item">
                                <a href="single-blog-1.html" class="thumb">
                                    <span class="full-image cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                   
                                    <h4 class="title-text">
                                        <a href="single-blog-1.html">
                                            As learning moves online trigger warnings must too
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                                </div>
                            </article>

                            <article class="item">
                                <a href="single-blog-1.html" class="thumb">
                                    <span class="full-image cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                   
                                    <h4 class="title-text">
                                        <a href="single-blog-1.html">
                                            Java programming masterclass name for software developers
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                                </div>
                            </article>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Area End -->

@endsection