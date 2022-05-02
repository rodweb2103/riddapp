@extends('home.new')
@section('content')


        <!-- Banner Area -->
        <div class="banner-area" style="background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162);">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="banner-content">
                            <!--<span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>-->
                            <h1 style="color: #fff" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">{{ __('Vivier de compétences au service de la Côte d\'Ivoire') }}</h1>
                            <p style="color: #fff">{{ __('Le Réseau Ivoirien des Diplômés de la Diaspora (RIDD) est une organisation née le 15 Novembre 2017 à l’initiative des jeunes ivoiriens diplômés dee la diaspora.') }}</p>
                            @guest
                            <a class="btn btn-lg" role="button" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="/register" style="background: rgb(71,179,21);border-style: none;width: 159.5px;color: rgb(255,255,255);">{{ __('Rejoindre') }}</a>
                            
                            @endguest
                            
                            @auth
                               <a class="btn btn-lg" role="button" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="/register" style="background: rgb(71,179,21);border-style: none;color: rgb(255,255,255);">{{ __('Accéder aux offres') }}</a>
                            @endauth
                            <!--<div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <form class="banner-form" data-toggle="validator" method="POST">
                                    <input type="email" class="form-control" placeholder="Search your courses" name="EMAIL" required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        <i class="ri-search-line"></i> Search now
                                    </button>
                                </form>
                            </div>-->
                            <!--<ul class="banner-popular-tag" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <li class="title">Popular search:</li>
                                <li><a href="courses.html">Design,</a></li>
                                <li><a href="courses.html">Development,</a></li>
                                <li><a href="courses.html">Marketing,</a></li>
                                <li><a href="courses.html">Affiliate</a></li>
                            </ul>-->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="banner-img" data-speed="0.05" data-revert="true">
                            <img src="/img/student-bg-det2.png" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Man" />
                            <!--<div class="bg-shape">
                                <img src="assets/images/home-one/home-one-shape.png" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Shape" />
                            </div>-->
                            <!--<div class="top-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <i class="flaticon-student"></i>
                                <div class="content">
                                    <h3>250K</h3>
                                    <p>Assisted student</p>
                                </div>
                            </div>
                            <div class="right-content" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <i class="flaticon-checked"></i>
                                <div class="content">
                                    <h3>Congratulations</h3>
                                    <p>Your admission completed</p>
                                </div>
                            </div>

                            <div class="left-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <div class="content">
                                    <img src="assets/images/home-one/user-img.jpg" alt="User" />
                                    <h3>User experience class</h3>
                                    <p>Today at 12.00 PM</p>
                                </div>
                                <a href="signup.html" class="join-btn">Join now</a>
                            </div>-->
                            <!--<div class="banner-img-shape" >
                                <div class="shape1" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <img src="assets/images/home-one/shape3.png" alt="Shape" />
                                </div>
                                <div class="shape2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <img src="assets/images/home-one/shape2.png" alt="Shape" />
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape">
                <div class="banner-shape1">
                    <img src="assets/images/home-one/shape1.png" alt="Shape" />
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Counter Area -->
       
        <!-- Counter Area End -->

        <!-- Featured Area -->
        <!--<div class="featured-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center mb-45">
                    <div class="col-lg-8 col-md-9">
                        <div class="section-title mt-rs-20">
                            <h2>Explore top featured categories</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 text-end">
                        <a href="courses.html" class="default-btn">Explore more</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-web-development"></i>
                                <h3>Development</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-design"></i>
                                <h3>Web designing</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-wellness"></i>
                                <h3>Lifestyle</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-heart-beat"></i>
                                <h3>Health & fitness</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-corporate"></i>
                                <h3>Gov. exams</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-camera"></i>
                                <h3>Photography</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-user"></i>
                                <h3>Accounting</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-folder"></i>
                                <h3>Data science</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Featured Area End -->
         <div class="courses-area pb-70 mt-5" style="margin-top: 90px !important;">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <h2>{{ __('Mission') }}</h2>
                    <p>
                        {{ __('Notre ADN, notre raison d\'être et les objectifs à atteindre se résument à') }}
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="#">
                                <img src="/img/pexels-pavel-danilyuk-7942434.jpg" alt="Courses" />
                            </a>
                            <div class="content">
	                            <p class="description" style="font-family: Montserrat, sans-serif;color: rgb(0,0,0);font-size: 18px;">{{ __('Contribuer à créer un cadre propice au retour des diplômés de la diaspora ivoirienne') }}</p>
                                <!--<a href="courses.html" class="tag-btn">Design</a>
                                <div class="price-text">$120</div>
                                <h3><a href="courses-details.html">UI/UX design pattern for succesfull software applications</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors1.jpg" alt="Instructors">
                                        <h3>David warner</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>4k+ rating
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="#">
                                <img src="/img/pexels-keira-burton-6146978.jpg" alt="Courses" />
                            </a>
                            <div class="content">
	                            <p class="description" style="font-family: Montserrat, sans-serif;color: rgb(0,0,0);font-size: 18px;">{{ __('Faire la promotion des étudiants ivoiriens formés à l’extérieur') }}</p>
                                <!--<a href="courses.html" class="tag-btn">Accounting</a>
                                <div class="price-text">$129</div>
                                <h3><a href="courses-details.html">Basic knowledge about hodiernal bharat in history</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 27 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors2.jpg" alt="Instructors">
                                        <h3>David malan</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>2k+ rating
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="#">
                                <img src="/img/pexels-ron-lach-9850088.jpg" alt="Courses" />
                            </a>
                            <div class="content">
	                            <p class="description" style="font-family: Montserrat, sans-serif;color: rgb(0,0,0);font-size: 18px;">{{ __('Promouvoir l\'entreprenariat jeune sur le territoire national et international') }}</p>
                                <!--<a href="courses.html" class="tag-btn">Physics</a>
                                <div class="price-text">$100</div>
                                <h3><a href="courses-details.html">Visual effects for games in unity beginner to intermediate</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 02 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors3.jpg" alt="Instructors">
                                        <h3>Emma jhonson</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>1k+ rating
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img4.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Business</a>
                                <div class="price-text">$140</div>
                                <h3><a href="courses-details.html">The complete accounting & bank financial course 2021</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors4.jpg" alt="Instructors">
                                        <h3>Jesse joslin</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>7k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img5.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Finance</a>
                                <div class="price-text">$159</div>
                                <h3><a href="courses-details.html">The complete business plan course includes 50 templates</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 03 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors5.jpg" alt="Instructors">
                                        <h3>Lance altman</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>5k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img6.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Banking</a>
                                <div class="price-text">$200</div>
                                <h3><a href="courses-details.html">Full web designing course with 20 web template designing</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 06 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 10 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors6.jpg" alt="Instructors">
                                        <h3>Altman lucas </h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>3k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        
         <div class="counter-area pt-100 pb-70" style="background-color: rgb(17,149,4) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="fas fa-user-graduate"></i>
                            <h3><span class="odometer" data-count="2000">0000</span></h3>
                            <p>{{ __('Profils de diverses formations') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
	                        <!--<i class="flaticon-online-course"></i>-->
                            <i class="far fa-lightbulb"></i>
                            <h3><span class="odometer" data-count="30">00</span></h3>
                            <p>{{ __('Porteurs d\'idées et prototypes de projets') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="fas fa-award"></i>
                            <h3><span class="odometer" data-count="30">00</span></h3>
                            <p>{{ __('Lauréats prix d\'excellence révélés') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="fas fa-globe-africa"></i>
                            <h3><span class="odometer" data-count="10">00</span></h3>
                            <p>{{ __('Coordinations à l\'international') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses Area -->
        <div class="courses-area pb-70 mt-4" style="margin-top: 90px !important;">
            <div class="container-fluid" style="max-width: unset !important;">
                <div class="section-title text-center mb-45">
                    <h2>{{ __('Nos représentations') }}</h2>
                    <!--<p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>-->
                </div>
                <div class="row">
	                <div class="">
		                <!--<video style="width: 100%;height:auto;" playsinline autoplay muted loop data-wf-ignore="true" data-object-fit="cover">
                <source src="https://beta.ridd.info/video-map-ridd-final.mp4" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':30}}]" wp-attr="[{'target':'src','replace':'%1'}]">
            </video>-->
	                    <!--<a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn">
	                        <i class='flaticon-play-button-arrowhead'></i>
	                    </a>-->
	                    <!--<video style="width: 100%;height:auto;"  data-wf-ignore="true" data-object-fit="cover">
                <source src="https://beta.ridd.info/video-map-ridd-final.mp4" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':30}}]" wp-attr="[{'target':'src','replace':'%1'}]">
            </video>-->
                      <img src="/img/MAP-RIDD-REP-WHITE@2x.png"/>
                    </div>
                    <!--<div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img1.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Design</a>
                                <div class="price-text">$120</div>
                                <h3><a href="courses-details.html">UI/UX design pattern for succesfull software applications</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors1.jpg" alt="Instructors">
                                        <h3>David warner</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>4k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img2.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Accounting</a>
                                <div class="price-text">$129</div>
                                <h3><a href="courses-details.html">Basic knowledge about hodiernal bharat in history</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 27 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors2.jpg" alt="Instructors">
                                        <h3>David malan</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>2k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Physics</a>
                                <div class="price-text">$100</div>
                                <h3><a href="courses-details.html">Visual effects for games in unity beginner to intermediate</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 02 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors3.jpg" alt="Instructors">
                                        <h3>Emma jhonson</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>1k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img4.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Business</a>
                                <div class="price-text">$140</div>
                                <h3><a href="courses-details.html">The complete accounting & bank financial course 2021</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors4.jpg" alt="Instructors">
                                        <h3>Jesse joslin</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>7k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img5.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Finance</a>
                                <div class="price-text">$159</div>
                                <h3><a href="courses-details.html">The complete business plan course includes 50 templates</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 03 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors5.jpg" alt="Instructors">
                                        <h3>Lance altman</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>5k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img6.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Banking</a>
                                <div class="price-text">$200</div>
                                <h3><a href="courses-details.html">Full web designing course with 20 web template designing</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 06 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 10 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors6.jpg" alt="Instructors">
                                        <h3>Altman lucas </h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>3k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        
        <div class="courses-area pb-70 mt-4">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <h2>{{ __('Valeurs') }}</h2>
                    <p>
                        {{ __('Nos valeurs sont les principes fondamentaux qui régissent notre approche de travail et les conditions de collaboration.') }}
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
	                        
	                    <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="/img/98297-book-idea.gif" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Business</a>
                                <div class="price-text">$140</div>
                                <h3><a href="courses-details.html">The complete accounting & bank financial course 2021</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors4.jpg" alt="Instructors">
                                        <h3>Jesse joslin</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>7k+ rating
                                    </div>
                                </div>-->
                                 <h3 class="name" style="text-align: center;color:#000 !important">{{ __('Créativité') }}</h3>
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-lg-4 col-md-6">
	                    
	                    <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="/img/94206-working.gif" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Business</a>
                                <div class="price-text">$140</div>
                                <h3><a href="courses-details.html">The complete accounting & bank financial course 2021</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors4.jpg" alt="Instructors">
                                        <h3>Jesse joslin</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>7k+ rating
                                    </div>
                                </div>-->
                                 <h3 class="name" style="text-align: center;color:#000 !important">{{ __('Sens de la responsabilité') }}</h3>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-lg-4 col-md-6">
	                    
	                    <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="/img/17304-star.gif" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Business</a>
                                <div class="price-text">$140</div>
                                <h3><a href="courses-details.html">The complete accounting & bank financial course 2021</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors4.jpg" alt="Instructors">
                                        <h3>Jesse joslin</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>7k+ rating
                                    </div>
                                </div>-->
                                 <h3 class="name" style="text-align: center;color:#000 !important">{{ __('Excellence') }}</h3>
                            </div>
                        </div>
                        
                    </div>

                    <!--<div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img4.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Business</a>
                                <div class="price-text">$140</div>
                                <h3><a href="courses-details.html">The complete accounting & bank financial course 2021</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors4.jpg" alt="Instructors">
                                        <h3>Jesse joslin</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>7k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img5.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Finance</a>
                                <div class="price-text">$159</div>
                                <h3><a href="courses-details.html">The complete business plan course includes 50 templates</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 03 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors5.jpg" alt="Instructors">
                                        <h3>Lance altman</h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>5k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="courses-details.html">
                                <img src="assets/images/courses/courses-img6.jpg" alt="Courses" />
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">Banking</a>
                                <div class="price-text">$200</div>
                                <h3><a href="courses-details.html">Full web designing course with 20 web template designing</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-time-fill"></i> 06 hr 00 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 10 lectures</li>
                                </ul>
                                <div class="bottom-content">
                                    <a href="instructors-details.html" class="user-area">
                                        <img src="assets/images/courses/courses-instructors6.jpg" alt="Instructors">
                                        <h3>Altman lucas </h3>
                                    </a>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>3k+ rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        
        <!-- Courses Area End -->

        <!-- Play Area -->
        <div class="play-area ptb-10 testim">
            <div class="container">
                <div class="title text-center mb-45">
                    <!--<h2> We worked with <span>250+ </span> leading universities and companies</h2>-->
                    <h2 style="font-size: 35px;">{{ __('Nos partenaires') }}</h2>
                </div>
                <div class="brand-slider owl-carousel owl-theme pb-100">
                    <div class="brand-item">
                        <img src="{{ asset('img/Union-europeene.png') }}" class="brand-item-logo1" alt="Images">
                        <!--<img src="assets/images/brand-logo/brand-logo1.png" class="brand-item-logo2" alt="Images">-->
                    </div>

                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/2.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo2.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/sup-techno.png') }}" class="brand-item-logo1" alt="Images">
                    </div>

                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/3.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo3.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/rti1.png') }}" class="brand-item-logo1" alt="Images">
                    </div>

                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/4.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo4.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/rigrh.png') }}" class="brand-item-logo1" alt="Images">
                    </div>

                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/5.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo5.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/my-adress.png') }}" class="brand-item-logo1" alt="Images">
                    </div>

                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/jil-group.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/impact-hub.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/holy-lounge.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/expert-fr.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/EAT.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/DGIE.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/cooperation-allemande.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/baloon.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/Acomap.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                    <div class="brand-item">
                        <!--<img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">-->
                         <img src="{{ asset('img/abk-art.png') }}" class="brand-item-logo1" alt="Images">
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Play Area End -->
        
        <div class="testimonials-area  ptb-100">
            <div class="container">
                <div class="section-title mb-45 text-center">
                    <h2>{{ __('Témoignages') }}</h2>
                </div>
                <div class="testimonials-slider owl-carousel owl-theme">
                    <div class="testimonials-card">
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img1.jpg" alt="testimonials" />
                            <h3>Nikolas albart</h3>
                            <span>Student</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <div class="testimonials-card">
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img2.jpg" alt="testimonials" />
                            <h3>Terry ambady</h3>
                            <span>Content strategist</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <div class="testimonials-card">
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                            <h3>Cory zamora</h3>
                            <span>Photographer</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <div class="testimonials-card">
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                            <h3>Jonquil von</h3>
                            <span>Photographer</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instructors Area -->
        <div class="instructors-area pb-70">
            <div class="container">
                <div class="row align-items-center mb-45 text-center">
                    <div class="col-lg-12 col-md-9">
                        <div class="section-title mt-rs-20">
                            <h2>{{ __('Notre équipe') }}</h2>
                            <!--<p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>-->
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-3 text-end">
                        <a href="instructors.html" class="default-btn">View all instructor</a>
                    </div>-->
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-item">
                            <div class="instructors-img">
                                <a href="#">
                                    <img src="{{ asset('img/staff/Photo-President.png') }}" alt="Team Images">
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
                                <h3><a href="instructors-details.html">Steve ESSIS</a></h3>
                                <span>{{ __('Président Éxecutif du RIDD') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-item">
                            <div class="instructors-img">
                                <a href="#">
                                    <img src="{{ asset('img/staff/Photo-staff1.png') }}" alt="Team Images">
                                </a>
                                <!--<ul class="instructors-social">
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
                                </ul>-->
                            </div>
                            <div class="content">
                                <h3><a href="instructors-details.html">Sarah DIGBEU</a></h3>
                                <span>{{ __('Responsable des partenariats à l\'international') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-item">
                            <div class="instructors-img">
                                <a href="instructors-details.html">
                                    <img src="{{ asset('img/staff/Photo-staff2.png') }}" alt="Team Images">
                                </a>
                                <!--<ul class="instructors-social">
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
                                </ul>-->
                            </div>
                            <div class="content">
                                <h3><a href="instructors-details.html">Jules MADÉ</a></h3>
                                <span>{{ __('Responsable projet à l\'international') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-item">
                            <div class="instructors-img">
                                <a href="#">
                                    <img src="{{ asset('img/staff/Photo-staff3.png') }}" alt="Team Images">
                                </a>
                                <!--<ul class="instructors-social">
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
                                </ul>-->
                            </div>
                            <div class="content">
                                <h3><a href="#">Cyrille BOUAZO</a></h3>
                                <span>{{ __('Responsable des coordinations à l\'international') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instructors Area End -->

        <!-- Testimonials Area -->
        <!--<div class="testimonials-area pb-100">
            <div class="container">
                <div class="section-title mb-45 text-center">
                    <h2>What our happy student say</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
                <div class="testimonials-slider owl-carousel owl-theme">
                    <div class="testimonials-item">
                        <img src="assets/images/testimonials/testimonials-img1.jpg" alt="testimonials" />
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <h3>Nikolas brooten</h3>
                        <span>Student</span>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                    <div class="testimonials-item">
                        <img src="assets/images/testimonials/testimonials-img2.jpg" alt="testimonials" />
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <h3>Terry ambady</h3>
                        <span>Content strategist</span>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                    <div class="testimonials-item">
                        <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <h3>Cory zamora</h3>
                        <span>Photographer</span>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                    <div class="testimonials-item">
                        <img src="assets/images/testimonials/testimonials-img4.jpg" alt="testimonials" />
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <h3>Jonquil von</h3>
                        <span>Photographer</span>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Testimonials Area End -->

        <!-- Enrolled Area -->
        <!--<div class="enrolled-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrolled-content">
                            <div class="section-title">
                                <h2>We have the most qualified instructors in your hometown.</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> Full lifetime access</li>
                                        <li><i class="flaticon-check"></i> Certificate of completion</li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> 20+ downloadable resources</li>
                                        <li><i class="flaticon-check"></i> Free trial 7 days</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="courses.html" class="default-btn">Enrolled today</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enrolled-img" data-speed="0.05" data-revert="true">
                            <img src="assets/images/enrolled/enrolled-img.png" alt="Enrolled" />
                            <div class="bg-shape">
                                <img src="assets/images/enrolled/enrolled-shape.png" alt="Shape" />
                            </div>
                            <div class="top-content">
                                <div class="enrolled-img-content">
                                    <i class="flaticon-mail-inbox-app"></i>
                                    <div class="content">
                                        <h3>Inbox</h3>
                                        <p>Work with us!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content">
                                <div class="enrolled-img-content">
                                    <i class="flaticon-discount"></i>
                                    <div class="content">
                                        <h3>Get 40% off</h3>
                                        <p>Every course</p>
                                    </div>
                                </div>
                            </div>

                            <div class="left-content">
                                <div class="enrolled-img-content">
                                    <i class="flaticon-reading-book active"></i>
                                    <div class="content">
                                        <h3>110k+ students</h3>
                                        <p>Learn daily</p>
                                    </div>
                                </div>
                            </div>
                            <div class="enrolled-img-shape">
                                <div class="shape1">
                                    <img src="assets/images/enrolled/enrolled-shape2.png" alt="Shape" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Enrolled Area End -->

        <!-- Blog Area -->
        
        <!--<div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center mb-45">
                    <div class="col-lg-8 col-md-9">
                        <div class="section-title mt-rs-20">
                            <h2>Nos dernières actualités</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 text-end">
                        <a href="blog.html" class="default-btn">View all blogs</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="single-blog-1.html">
                                <img src="assets/images/blog/blog-img1.jpg" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> Jan 12,2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">All that is wrong with codding in the field of apprentices</a></h3>
                                <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="single-blog-1.html" class="read-btn">Read More</a>
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
                                    <li><i class="ri-calendar-todo-fill"></i> Jan 13,2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">learning</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">How to use technology to adapt your talent to the world</a></h3>
                                <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="single-blog-1.html" class="read-btn">Read More</a>
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
                                    <li><i class="ri-calendar-todo-fill"></i> Jan 15,2022  </li>
                                    <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Courses</a></li>
                                </ul>
                                <h3><a href="single-blog-1.html">Here are the things to look for when selecting an online course</a></h3>
                                <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="single-blog-1.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Blog Area End -->

        <!-- Footer Contact Area -->
        <!--<div class="footer-contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="section-title">
                            <h2>We will assist you in furthering your career and growth.</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-end">
                        <a href="contact.html" class="default-btn">Contact us now</a>
                    </div>
                </div>
            </div>
        </div>-->

@endsection