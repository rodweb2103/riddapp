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
                <div class="inner-title">
                    <h3>Actions Sociales</h3>
                    <!--<div class="rating">
                        <i class="ri-star-fill"></i>4k+ rating
                    </div>
                    <div class="inner-banner-content">
                        <a href="instructors-details.html" class="user-area">
                            <img src="assets/images/courses/courses-instructors1.jpg" alt="Instructors">
                            <h3>David warner</h3>
                        </a>
                        <ul class="course-list">
                            <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
                        </ul>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Courses details</li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Courses Details Area -->
        <div class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-contact">
                            <div class="tab courses-details-tab">
                               
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-into">
                                               <h3>Concept</h3>
                                                <p>
                                                  Étendre nos mains de soutien à offrir des dons en vivres et non vivres à nos communautés.</p>
                                                   
                                                   
                                            </div>
                                            <div class="courses-details-into">
                                                <h3>Objectif </h3>
                                                <p>
                                         Porter assistance et communiquer de l'amour envers les autres. Le RIDD c'est aussi une famille avec le sens du partage et de l'amour..
                                                </p>
                                                
                                             
                                            </div>
                                            
                                                                                          
                                             
                                             <!--<div class="courses-details-into">
                                                <h3>Cible</h3>
                                                <p>
                                        Les cibles directes : membres du bureau national du RIDD, les coordinations à l’international et les porteurs de projets du réseau; La cible finale : jeunesse ivoirienne</p>
                                             </div>-->


                                                <div class="courses-details-into">
                                                <h3>Cible</h3>
                                                  
                                                 <ul class="courses-details-list">
                                                    <li>Communautés défavorisées et en situation d’handicaps.</li>
                                                    <li>Orphelins.</li>
                                                    <li>Sourd-muets.</li>
                                                    <li>Prisonniers et des personnes en conditions de vie précaires.</li>
                                                </ul>  
                                                
                                             </div>

                                                
                                                                                          
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Portofolio Area -->
                    <div class="row pswp-gallery" id="my-gallery">
	                    @foreach(\File::glob(public_path() . '/img/Actions-sociales/*.*') as $v)
	                
	                
	                   <div class="col-lg-4 col-md-6">
	                        <div class="courses-item">
		                        <a href="{{ asset('/img/Actions-sociales/'.basename($v)) }}" class="fancybox" data-pswp-width="2500"
	      data-pswp-height="1667">
	                                <img src="{{ asset('/img/Actions-sociales/'.basename($v)) }}"  alt="Courses"/>
		                        </a>
	                        </div>
                        </div>
	                
	                
	                
	                @endforeach
                    <!--<div class="col-lg-4 col-md-6">
                        <div class="courses-item">
	                        <a href="assets/images/courses/courses-img2.jpg" class="fancybox" data-pswp-width="2500"
      data-pswp-height="1667">
                                <img src="assets/images/courses/courses-img1.jpg"  alt="Courses"/>
	                        </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img2.jpg" class="fancybox" data-pswp-width="2500"
      data-pswp-height="1667">
                                <img src="assets/images/courses/courses-img2.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg" class="fancybox" data-pswp-width="2500"
      data-pswp-height="1667">
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg" class="fancybox"
	                            data-pswp-width="2500"
      data-pswp-height="1667"
		                         
			                >
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg" class="fancybox"
	                           data-pswp-width="2500"
      data-pswp-height="1667"   
		                     >
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg"
	                            
	                            data-pswp-width="2500"
      data-pswp-height="1667"
	                            
		                      >
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg" class="fancybox"
	                            data-pswp-width="2500"
      data-pswp-height="1667"
		                         
			                >
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg" class="fancybox"
	                           data-pswp-width="2500"
      data-pswp-height="1667"   
		                     >
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="assets/images/courses/courses-img3.jpg"
	                            
	                            data-pswp-width="2500"
      data-pswp-height="1667"
	                            
		                      >
                                <img src="assets/images/courses/courses-img3.jpg" alt="Courses" />
                            </a>
                        </div>
                    </div>-->
                    
                    <!--<div class="pswp-gallery" id="my-gallery">
    <a
      href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-2500.jpg"
      data-pswp-width="1875"
      data-pswp-height="2500"
      target="_blank"
    >
      <img
        src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-200.jpg"
        alt=""
      />
    </a>
    <a
      href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-2500.jpg"
      data-pswp-width="1669"
      data-pswp-height="2500"
      target="_blank"
    >
      <img
        src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-200.jpg"
        alt=""
      />
    </a>
    <a
      href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"
      data-pswp-width="2500"
      data-pswp-height="1666"
      target="_blank"
    >
      <img
        src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg"
        alt=""
      />
    </a>
  </div>-->

   <br/>
   
<!-- Portofolio Area end-->

                    
                    <div class="col-lg-4">
                        <!--<div class="courses-details-sidebar">
                            <img src="assets/images/courses/courses-img10.jpg" alt="Courses" />
                            <div class="content">
                                <h3>$120</h3>
                                <span>This course includes:</span>
                                <ul class="courses-details-list">
                                    <li>8.5 hours on-demand video</li>
                                    <li>2 articles</li>
                                    <li>16 downloadable resources</li>
                                    <li>Full lifetime access</li>
                                    <li>Access on mobile and TV</li>
                                    <li>Certificate of completion</li>
                                </ul>
                                <a href="cart.html" class="default-btn">Add to cart</a>
                                <ul class="social-link">
                                    <li class="social-title">Share this course:</li>
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
            </div>
            </div>
        </div>
	   
@endsection
@section('script')

<script type="module">
import PhotoSwipeLightbox from '/js/photoswipe-lightbox.esm.js';
const lightbox = new PhotoSwipeLightbox({
  gallery: '#my-gallery',
  children: 'a',
  pswpModule: () => import('/js/photoswipe.esm.js')
});
lightbox.init();
</script>

@endsection