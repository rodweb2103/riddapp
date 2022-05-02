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
                    <h3>Nos activités</h3>
                    <!--<ul>
                        <li>
                            <a href="index.html">Aucune</a>
                        </li>
                        <!--<li>Courses</li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Courses Area -->
        <div class="courses-area pt-100 pb-70">
            <div class="container">
                <!--<div class="product-topper mb-45" style="display:none;">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-6">
                            <div class="product-title">
                                <h3>We found  <span> 09 </span>courses available for you</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-list">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Default Price</option>
                                    <option value="1">Price High To Low</option>
                                    <option value="2">Price Low To High</option>
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                </div>-->
               
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="{{ route('adestiv') }}">
                                <img src="{{ asset('/img/Cadre-adestiv.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Design</a>-->
                                <!--<div class="price-text">$120</div>-->
                                <h3><a href="{{ route('adestiv') }}" class="text-center">ADESTIV</a></h3>
                                <!--<ul class="course-list">
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
                            <a href="{{ route('campagne_sensibilisation') }}">
                                <img src="{{ asset('/img/Cadre-campagne.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Accounting</a>-->
                                <!--<div class="price-text">$129</div>-->
                                <h3><a href="{{ route('campagne_sensibilisation') }}" class="text-center">CAMPAGNE DE SENSIBILISATION</a></h3>
                                <!--<ul class="course-list">
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
                            <a href="{{ route('jiomi') }}">
                                <img src="{{ asset('/img/Cadre-jiomi.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Physics</a>-->
                                <!--<div class="price-text">$100</div>-->
                                <h3><a href="{{ route('jiomi') }}" class="text-center">JIOMI</a></h3>
                                <!--<ul class="course-list">
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

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="{{ route('tribune_ridd') }}">
                                <img src="{{ asset('/img/Cadre-tribune.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Business</a>-->
                                <!--<div class="price-text">$140</div>-->
                                <h3><a href="{{ route('tribune_ridd') }}" class="text-center">TRIBUNE DU RIDD</a></h3>
                                <!--<ul class="course-list">
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
                            </div>
                        </div>
                    </div>
                    
                    

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="{{ route('journees_portes_ouvertes') }}">
                                <img src="{{ asset('/img/Cadre-orientation.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Finance</a>-->
                                <!--<div class="price-text">$159</div>-->
                                <h3><a href="{{ route('journees_portes_ouvertes') }}" class="text-center">JOURNÉE PORTE OUVERTE</a></h3>
                                <!--<ul class="course-list">
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
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="{{ route('cafe_ridd') }}">
                                <img src="{{ asset('/img/Cadre-cafe.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Banking</a>-->
                                <!--<div class="price-text">$200</div>-->
                                <h3><a href="{{ route('cafe_ridd') }}" class="text-center">CAFÉ DU RIDD</a></h3>
                                <!--<ul class="course-list">
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
                                </div>-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="{{ route('actions_sociales') }}">
                                <img src="{{ asset('/img/Cadre-action.png') }}" alt="Courses" />
                            </a>
                            <div class="content">
                                <!--<a href="courses.html" class="tag-btn">Banking</a>-->
                                <!--<div class="price-text">$200</div>-->
                                <h3><a href="{{ route('actions_sociales') }}" class="text-center">ACTIONS SOCIALES</a></h3>
                                <!--<ul class="course-list">
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
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
							<a href="courses.html" class="prev page-numbers">
								<i class="flaticon-left-arrow"></i>
							</a>

							<span class="page-numbers current" aria-current="page">1</span>
							<a href="courses.html" class="page-numbers">2</a>
							<a href="courses.html" class="page-numbers">3</a>
							
							<a href="courses.html" class="next page-numbers">
								<i class="flaticon-chevron"></i>
							</a>
						</div>
                    </div>-->
                </div>
            </div>
        </div>
@endsection