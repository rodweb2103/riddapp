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
                    <h3>Actualités</h3>
                    <!--<ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Blog grid</li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <!--<div class="row align-items-center mb-45">
                    <div class="col-lg-8 col-md-9">
                        <div class="section-title mt-rs-20">
                            <h2>Latest from our blogs</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 text-end">
                        <a href="blog.html" class="default-btn">View all blogs</a>
                    </div>
                </div>-->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img1.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> 12 Avr. 2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">les Etats Généraux vont insuffler une vitalité nouvelle à notre système scolaire, indique le Premier Ministre Patrick Achi </a></h3>
                                <p>Les Etats Généraux de l'Education Nationale (EGENA) vont insuffler une vitalité nouvelle au système scolaire ivoirien afin de faire de l'école un moteur...</p>
                                <a href="single-blog-1.html" class="read-btn">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img2.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> 8 Avr. 2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">Enseignement technique et formation professionnelle : le gouvernement veut porter le taux des effectifs de 5 à 30% d'ici 2030 </a></h3>
                                <p>Le ministre de l'Enseignement technique, de la Formation professionnelle et de l'Apprentissage, Koffi N'guessan, a relevé l'ambition du gouvernement d'accroître progressivement les effectifs du secteur ... </p>
                                <a href="single-blog-1.html" class="read-btn">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img3.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> 7 Avr. 2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">Une salle de classe construite avec des déchets plastiques recyclés </a></h3>
                                <p>Nestlé Côte d'Ivoire, la filiale ivoirienne du géant agroalimentaire, a offert jeudi à la commune de Treichville, dans le Sud d'Abidjan, une salle écologique, construite avec des déchets plastiques recyclés, à l'École régionale...</p>
                                <a href="single-blog-1.html" class="read-btn">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img4.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> 1 Avr. 2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">Excellence : Nialé Kaba offre des ordinateurs aux lauréates des concours d'entrée à l'ENSEA </a></h3>
                                <p>a ministre du Plan et du Développement, Nialé Kaba, a procédé, le mardi 29 mars 2022 à Abidjan, à la remise d'ordinateurs aux jeunes filles lauréates des concours d'entrée à l'Ecole Nationale de Statistique et Economie Appliquée (ENSEA), session 2021.
...</p>
                                <a href="single-blog-1.html" class="read-btn">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img5.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> 23 Mars 2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">BTS 2022 : le ministère de l'Enseignement Supérieur produit un communiqué </a></h3>
                                <p>Les inscriptions à la session 2022 du Brevet de technicien supérieur (BTS) sont ouvertes en ligne ce mercredi 13 mars pour s'achever le 31 mars 2022, délai de rigueur...</p>
                                <a href="single-blog-1.html" class="read-btn">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img6.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> 24 Février 2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">Employabilité : les journées des métiers de l'emploi se tiendront du 24 au 25 mars prochain</a></h3>
                                <p>En présence du Directeur de l'Observatoire de l'Insertion Professionnelle des Diplômés de l'Enseignement Supérieur (OIPDES) Mouhamandou Dosso, le Directeur Adjoint du Ministère de l'Enseignement Supérieur et de la Recherche Scientifique, le Professeur Djakalia Ouattara, a lancé...</p>
                                <a href="single-blog-1.html" class="read-btn">Lire plus</a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
							<a href="blog.html" class="prev page-numbers">
								<i class="flaticon-left-arrow"></i>
							</a>

							<span class="page-numbers current" aria-current="page">1</span>
							<a href="blog.html" class="page-numbers">2</a>
							<a href="blog.html" class="page-numbers">3</a>
							
							<a href="blog.html" class="next page-numbers">
								<i class="flaticon-chevron"></i>
							</a>
						</div>
                    </div>-->
                </div>
            </div>
        </div>

@endsection