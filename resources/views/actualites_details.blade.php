@extends('home.new')
@section('content')
        <style>
	      
	      .inner-banner::before {
		  
		      background-image: url('/img/banniere-gradient.png') !important;
		  }
	    
	    </style>
	    <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-content pr-20">
                            <div class="blog-preview-img">
                                <img src="{{ asset('assets/images/blog/blog-details.jpg') }}" alt="Blog Details">
                            </div>
                            <ul class="tag-list">
                                <li><i class="ri-calendar-todo-fill"></i> 12 Avr. 2022  </li>
                                <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                            </ul>
                            <h2>les Etats Généraux vont insuffler une vitalité nouvelle à notre système scolaire, indique le Premier Ministre Patrick Achi </h2>
                            <p>
                                Le Premier Ministre ivoirien, Patrick Achi, a indiqué le 11 avril 2022 à Abidjan, que les Etats Généraux de l'Education Nationale (EGENA) vont insuffler une vitalité nouvelle au système scolaire ivoirien afin de faire de l'école un moteur d'inclusion sociale, économique et civique. C'était à l'occasion du lancement des journées de validation.
                            </p>
                            <p>« Les Etats Généraux de l'Education Nationale (EGENA) vont insuffler une vitalité nouvelle au système scolaire ivoirien afin de faire de l'école un moteur d'inclusion sociale, économique et civique qui impulse et consolide les liens entre les différentes composantes de la société. Ils consistent à inviter toute la nation au chevet de notre système éducatif pour mettre en relief ses forces et faiblesse et surtout inventer ensemble des solutions pour mieux faire demain », a déclaré Patrick Achi.

Et d'ajouter que les EGENA ont pour objectif primordial de co-construire un pacte social durable en faveur d'une école ivoirienne centrée sur la réussite des élèves et l'appropriation des valeurs de la République. L'institution scolaire permettant de forger, sans distinction ni discrimination, une culture commune à tous les enfants de la nation.</p>
                            <!--<blockquote class="blockquote"> 
                                <i class="flaticon-quotation"></i>
                                <p>
                                    “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    temporincididunt ut labore dolore magna aliqua.“
                                </p>
                            </blockquote>-->
                            <p>
                                Pour Patrick Achi, les enjeux de l'école sont exigeants. Pour les années à venir, le gouvernement doit construire des milliers de classes au cycle primaire et scolariser près de 2 millions d'élèves chaque année. L'Etat devra construire des centaines de collèges, en plus de recruter et former des dizaines de milliers d'enseignants, en leur offrant de bonnes conditions de vie et de travail.
                            </p>
                            <p>Selon le Chef du gouvernement, au bout du processus, il s'agit d'acquérir un capital humain instruit et suffisamment bien informé pour s'adapter en permanence aux différents changements. L'école ivoirienne se doit d'être une école digitale et interactive en phase avec son siècle.

Le Premier Ministre Patrick Achi avait présidé le 19 juillet 2021 à Abidjan le lancement des EGENA.</p>
                            <div class="article-share">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="article-tag">
                                            <ul>
                                                <li class="title"><i class="ri-price-tag-3-fill"></i></li>
                                                <li><a href="tags.html" target="_blank"> Source : Primature</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--<div class="col-lg-6 col-md-6">
                                        <div class="article-social-icon">
                                            <ul class="social-icon">
                                                <li class="title">Share :</li>
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
                                    </div>-->
                                </div>
                            </div>

                            <!--<div class="comments-form">
                                <div class="contact-form">
                                    <h4>Leave A Reply</h4>
                                    <p>Your email address will not be published. Required fields are marked</p>
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Comment..."></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="agree-label">
                                                    <input type="checkbox" id="chb1">
                                                    <label for="chb1">
                                                        Save my info for the next comment
                                                    </label>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">
                                                    Post A Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>-->
                        </div>
                    </div>
                   

                    <div class="col-lg-4">
                        <div class="side-bar-area">
	                        
	                        
	                        <div class="row">
						      <div class="col-12">
					             <img src="https://beta.ridd.info/img/bannieres/ezgif.com-gif-maker.gif" alt="Team Images">
						      </div>
					          <div class="col-12 mt-4">
					            <img src="https://beta.ridd.info/img/bannieres/banner-gauto.png" alt="Team Images">
					          </div>
					          <div class="col-12 mt-4">
					            <img src="https://beta.ridd.info/img/bannieres/banner-yayo4-side.jpg" alt="Team Images">
					          </div>
					         </div>
	                        
                            <!--<div class="side-bar-widget">
                                <form class="search-form">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <button type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Categories</h3>
                                <div class="side-bar-categories">
                                    <ul>
                                        <li>
                                            <a href="categories.html" target="_blank">
                                                Education
                                            </a>
                                        </li>
                                        <li>
                                            <a href="categories.html" target="_blank">
                                                Business
                                            </a>
                                        </li>
                                        <li>
                                            <a href="categories.html" target="_blank">
                                                Human resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="categories.html" target="_blank">
                                                Investment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="categories.html" target="_blank">
                                                Lifestyle
                                            </a>
                                        </li>
                                        <li>
                                            <a href="categories.html" target="_blank">
                                                Mangement
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->

                            <!--<div class="side-bar-widget">
                                <h3 class="title">Actualités populaires</h3>
                                <div class="widget-popular-post">
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg1" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <p>12 Avr. 2022</p>
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                    les Etats Généraux vont insuffler une vitalité nouvelle à notre système scolaire, indique le Premier Ministre Patrick Achi 
                                                </a>
                                            </h4>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg2" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <p>8 Avr. 2022</p>
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                    Enseignement technique et formation professionnelle : le gouvernement veut porter le taux des effectifs de 5 à 30% d'ici 2030
                                                </a>
                                            </h4>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg3" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <p>7 Avr. 2022</p>
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                    Une salle de classe construite avec des déchets plastiques recyclés
                                                </a>
                                            </h4>
                                        </div>
                                    </article>
                                </div>
                            </div>-->

                            <!--<div class="side-bar-widget">
                                <h3 class="title">Tags</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="tags.html" target="_blank"> Education</a></li>
                                    <li><a href="tags.html" target="_blank">Investment</a></li>
                                    <li><a href="tags.html" target="_blank">Lifestyle</a></li>
                                    <li><a href="tags.html" target="_blank">Business</a></li>
                                    <li><a href="tags.html" target="_blank">Mangement</a></li>
                                    <li><a href="tags.html" target="_blank">Human</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection