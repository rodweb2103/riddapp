<template>
    <Head>
		<title>Annonces recruteur - {{ $page.props.compant_name_offer }}</title>
   </Head>
    <BaseLayout>
    <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg" >
            <div class="container">
                <div class="inner-title text-center">
	                <div>
	                  <img :src="$page.props.photo" alt="Team Images" style="width: 120px;border-radius: 100px;" v-if="$page.props.photo_url!='' && $page.props.photo_url!=null">
	                  <img src="/img/user.jpg" alt="Team Images" style="width: 120px;border-radius: 100px;" v-if="$page.props.photo_url=='' || $page.props.photo_url==null">
	                   <!--<i class="fas fa-user-circle img-circle elevation-2 mr-3" style="font-size: 90px;color:#fff;" v-if="$page.props.photo_url=='' || $page.props.photo_url== null"></i>-->
	                  
	                  
	                  <!--<i class="fas fa-user-circle img-circle elevation-2 mr-3" style="font-size: 50px;" v-if="data['url_profile']=='' || data['url_profile']== null"></i>
	                                    <img :src="data['company_profile_photo']"  v-if="data['url_profile']!='' && data['url_profile']!=null" style="width: 70%;"/>-->
	                  
	                </div>
                    <h3 class="mt-2">{{ $page.props.compant_name_offer }}</h3>
                    
                    <!--<ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Courses List</li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Events Area -->
        <div class="event-area pt-100 pb-100">
            <div class="container-fluid">
	            
	            
	            <div class="row">
		            
		          <div class="col-md-8">
	            
	                <div class="product-topper mb-45">
	                    <div class="row align-items-center">
	                        
	                        
	                        <div class="col-lg-4 col-md-6 col-12">
	                            <div class="product-title">
	                               <select @change="getResults(1)" v-model="form.contract_type"  style="width: 100%;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
				                      <option selected value="">{{ __('Toutes les offres') }}</option>
								      <option :value="ct['id']" v-for="ct in contract_type">{{ __(''+ct['text']) }}</option>
						           </select>
	                            </div>
	                        </div>
	                        
	                        <div class="col-lg-4 col-md-6 col-12">
	                            <div class="product-title">
	                                <select @change="getResults(1)" v-model="form.contract_duration" style="width: 100%;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
				                        
									    <option selected value="">CDI et CDD</option>
									    <option  v-for="ct in contract_duration">{{ ct }}</option>
						            </select>
	                            </div>
	                        </div>
	                        
	                        <div class="col-lg-4 col-md-6 col-12">
	                            <div class="product-title">
	                                <select @change="getResults(1)" v-model="form.study_level"  style="width: 100%;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
				                        <option selected value="">{{ __('Niveaux d\'étude') }}</option>
									    <option :value="ct['id']" v-for="ct in study_level">{{ ct['text'] }}</option>
						            </select>
	                            </div>
	                        </div>
	                        
	                        <!--<div class="col-lg-3 col-md-6">
	                            <div class="product-title">
	                                <select @change="getResults(1)" v-model="form.study_level"  style="width: 220px;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
				                        <option selected value="">{{ __('Secteur d\'activité') }}</option>
									    <option :value="ct['id']" v-for="ct in study_level">{{ ct['text'] }}</option>
						            </select>
	                            </div>
	                        </div>-->
	                        
	                        <div class="col-lg-12 col-md-6 mt-4">
	                            <div class="product-title">
	                                <!--<h3>We found  <span> 09 </span>courses available for you</h3>-->
	                                <h2><span>{{ total_offer }}</span> {{ __('offre(s) disponible(s)') }}</h2>
	                            </div>
	                        </div>
	
	                        <!--<div class="col-lg-3 col-md-6">
	                            <div class="product-list">
	                                <select class="form-select" aria-label="Default select example">
	                                    <option selected>Default Price</option>
	                                    <option value="1">Price High To Low</option>
	                                    <option value="2">Price Low To High</option>
	                                </select>
	                                <i class="ri-arrow-down-s-line"></i>
	                            </div>
	                        </div>-->
	                    </div>
	                    
	                </div>
	                
	                <div class="row">
		                <div class="d-flex justify-content-center mt-5" v-if="loading == true">
		                    <div class="spinner-border text-primary" role="status" id="main">
							  <span class="sr-only">Loading...</span>
							</div>
	                    </div>
	                    <div class="col-lg-6" v-for="data in offerData['data']" v-if="loading == false">
	                        <div class="event-item box-shadow">
	                            <div class="event-img">
	                                <a href="event-details.html">
	                                    <!--<img src="assets/images/events/event-img1.jpg" alt="Events" v-if="data['company_profile_photo']==''" style="width: 70%;"/>
	                                    
	                                    <img :src="data['company_profile_photo']" alt="Events" v-if="data['company_profile_photo']!=''" style="width: 70%;"/>-->
	                                    <img :src="data['company_profile_photo']"  v-if="data['url_profile']!='' && data['url_profile']!=null" style="width: 70%;"/>
	                                    <img src="/img/user.jpg"  v-if="data['url_profile']=='' || data['url_profile']== null" style="width: 70%;"/>
	                                    
	                                    
	                                    
	                                </a>
	                            </div>
	                            <div class="event-content">
	                                <ul class="event-list">
	                                    <li><i class="ri-time-fill"></i> {{ data['offer_duration'] }}</li>
	                                    <li>
	                                        <!--<i class="ri-vidicon-fill"></i> 
	                                        17 lectures-->
	                                         <span v-if="data['id'].includes('EMPL')" style="background: #08921e;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;margin-right: 8px;">{{ __('Emploi') }}</span>
		                                     <span v-if="data['id'].includes('STG')" style="background: #ff7300;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;margin-right: 8px;">{{ __('Stage') }}</span>
		                                     <span v-if="data['id'].includes('CLT')" style="background: #c90c00;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;margin-right: 8px;">{{ __('Consultance') }}</span>
	                                    </li>
	                                </ul>
	                                <h4><Link :href="`${'/annonces/'+data['id']}`">{{ data['title'] }}</Link></h4>
	                                <p>{{ data['offers_details'] }}</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <Pagination :data="offerData" @pagination-change-page="getResults" align="center" class="mt-2" v-if="loading == false"/>
	                
	                
	                
		          </div>
		          <div class="col-md-4">
			         <div class="row">
				      <div class="col-12">
			             <img src="https://beta.ridd.info/img/bannieres/ezgif.com-gif-maker.gif" alt="Team Images">
				      </div>
			          <div class="col-12 mt-4">
			            <img src="https://beta.ridd.info/img/bannieres/banner-yayo1-side.png" alt="Team Images">
			          </div>
			          <div class="col-12 mt-4">
			            <img src="https://beta.ridd.info/img/bannieres/banner-yayo4-side.jpg" alt="Team Images">
			          </div>
			         </div>
			          
		          </div>
                
                
	            </div>
                <!--<div class="row">
                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="assets/images/events/event-img1.jpg" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 18 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <h3><a href="courses-details.html">University admissions could face emergency controls</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="assets/images/events/event-img2.jpg" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 18 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                                </ul>
                                <h3><a href="courses-details.html">As learning moves online trigger warnings must too</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="assets/images/events/event-img3.jpg" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 44 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 37 lectures</li>
                                </ul>
                                <h3><a href="courses-details.html">Java programming masterclass name for software developers</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="assets/images/events/event-img4.jpg" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 16 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <h3><a href="courses-details.html">Online learning can prepare to students for fast-changing</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="assets/images/events/event-img5.jpg" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 07 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 37 lectures</li>
                                </ul>
                                <h3><a href="courses-details.html">The complete digital marketing course - 12 courses in 1</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="assets/images/events/event-img6.jpg" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 04 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 27 lectures</li>
                                </ul>
                                <h3><a href="courses-details.html">The python mega course: build 10 real world applications</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 text-center">
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
                    </div>
                </div>-->
            </div>
        </div>
    </BaseLayout>
</template>

<style type="text/css">
	
	.inner-banner-bg {
      background-image: url('/img/banniere-gradient.png');
    }
    
    .inner-banner::before {
	  background: unset !important;
	}
    
	li.list-group-item{
		margin-bottom:40px;
		/*border-bottom: 1px solid !important;*/
		border-bottom: 2px solid rgb(215, 215, 215) !important;
		background: transparent !important;
	}
	
	#main {
		
		width: 8rem !important;
        height: 8rem !important;
    
    }
    
    .event-item .event-img {
	    
	    max-width: 80px;
	    margin-right: unset !important;
	
	}
    
   	
	p{
		
		font-weight: unset !important;
	}
</style>
<script>
//import Select2 from 'vue3-select2-component';
import { defineComponent } from "vue"
import { Head, Link } from '@inertiajs/inertia-vue3';


import JetActionSection from '@/Jetstream/ActionSection.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import JetButton from '@/Jetstream/Button.vue'
import BaseLayout from '@/Pages/BaseLayout.vue'


export default defineComponent({
  components: {
    Head,
    Link,
    JetActionSection,
    JetDangerButton,
    JetDialogModal,
    JetInput,
    JetInputError,
    JetSecondaryButton,
    JetButton,
    BaseLayout
    //Select2
  },

  props: {
	
	employer: Array,
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  data() {
    return {
      modal: null,
      modal2: null,
      loading:false,
      id_delete : 0,
      total_offer:0,
      activity_sector : {},
      study_level : {},
      contract_type: {},
      contract_duration: ['CDD', 'CDI'],
      offerData: {},
      editMode : 0,
      viewDataOffer : {},
      form :{
	       
	      contract_type:'',
          contract_duration:'', 
          study_level:'',
      }
      /*form: this.$inertia.form({
        //password: '',
        id : 0,
        offer_title:'',
        activity_sector:'',
        location:'',
        contract_type:'',
        contract_duration:'',
        offer_details:'',
        study_level:'',
        offer_details:''
        
      })*/
    }
  },
  mounted(){
	  
	  
	  this.getResults();
	  
	  axios.get('/activity/sector').then(response => {
		  
		  
		  this.activity_sector = response.data;
      });
      
      
      
      axios.get('/study/level').then(response => {
		  
		  
		  this.study_level = response.data;
      }); 
      
      
      axios.get('/contract/types').then(response => {
		  
		  
		  this.contract_type = response.data;
      });  
      
      
  },
  methods:{
	  
	  scrollToTop() {
        window.scrollTo(0,0);
      },
	  getResults(page = 1) {
		    let vm = this;
		    /*this.form.post('/offers?page='+page, {
		        preserveScroll: true,
		        onSuccess: (data) => {
			        
			        vm.total_offer = data['total'];
                    vm.offerData = data['data'];
		        },
		        //onError: () => this.$refs.password.focus(),
		        onFinish: () => {}/*this.form.reset(),
            });*/
            this.scrollToTop();
            vm.loading = true;
            axios.post('/view/company/offers?page=' + page,{'contract_type':vm.form.contract_type,'contract_duration':vm.form.contract_duration,'study_level':vm.form.study_level,'company_id':this.$page.props.id})
                .then(response => {
	                
	                vm.loading = false;
	                //console.log(response.data);
	                vm.total_offer = response.data['total'];
                    vm.offerData = response.data;
            });
      },
	  
  }
})
</script>