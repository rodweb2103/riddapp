<template>
   <Head>
		<title>Détails annonces</title>
   </Head>
  <BaseLayout>
  <!-- Inner Banner -->
        <div class="inner-banner" style="background-image: url('/img/banniere-gradient.png') !important">
            <div class="container">
                <div class="inner-title">
	                <!--{{ offerDetails }}-->
	                {{ $page.props.flash }}
	                
	                <!--{{ $page.props }}-->
	                
                    <h3>{{ offerDetails['title'] }}</h3>
                    <!--<div class="rating">
                        <i class="ri-star-fill"></i>4k+ rating
                    </div>-->
                    <div class="inner-banner-content">
                        <!--<a href="instructors-details.html" class="user-area">
                            <img src="assets/images/courses/courses-instructors1.jpg" alt="Instructors">
                            <h3>{{ offerDetails['company_name'] }}</h3>
                        </a>-->
                        <ul class="course-list">
                            <li><i class="ri-time-fill" style="color:#fff;font-size: 25px;top:9px"></i> {{ offerDetails['publish_date'] }}</li>
                            <li><i class="ri-map-pin-fill" style="color:#fff;font-size: 25px;top:9px"></i>  {{ offerDetails['location'] }}</li>
                        </ul>
                    </div>
                    <!--<ul>
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
                                <!--<ul class="tabs">
                                    <li>
                                        Overview
                                    </li>
                                </ul>-->
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-into">
                                               <h3>Description</h3>
                                               <p>{{ offerDetails['offers_details'] }}</p>
                                            </div>
                                            <div class="courses-details-into">
                                                <h3>{{ __('Profil recherché') }}</h3>
                                                <p>
	                                                
	                                                {{ offerDetails['profile_details'] }}
	                                                
                                                </p>
                                            </div>
                                            
                                            <div class="courses-details-into">
                                                <h3>Niveau d'étude</h3>
                                                <p>
	                                                
	                                                {{ offerDetails['study_level'] }}
	                                                
	                                                
                                                </p>
                                            </div>
                                            
                                            <!--{{ $page.props.offerDetails.contract_type }}
                                            {{ $page.props['is_consult'] }}
                                            
                                            {{ $page.props['auth']['user'] && ((($page.props.offerDetails.contract_type == 1 || $page.props.offerDetails.contract_type == 2) && $page.props['is_candidate'] == 1) || ($page.props.offerDetails.contract_type == 3 && $page.props['is_consult'] == 1)) && $page.props.offer_is_bidded == 0 }}-->
                                            
                                <form @submit.prevent="submitCV" v-if="$page.props['auth']['user'] && ( (($page.props.offerDetails.contract_type == 1 || $page.props.offerDetails.contract_type == 2) && $page.props['is_candidate'] == 1) || ($page.props.offerDetails.contract_type == 3 && $page.props['is_consult'] == 1)) && $page.props.offer_is_bidded == 0">
                                            
                                              <button :disabled="formCV.processing" class="default-btn two" style="background: rgb(71,179,21) none repeat scroll 0% 0%;" href="https://beta.ridd.info/login">
                                                  <div v-show="formCV.processing" class="spinner-border spinner-border-sm" role="status">
									                <span class="visually-hidden">Loading...</span>
									              </div>
									              <div v-if="!formCV.processing">{{ __('Postuler à cette offre') }}</div></button>
                                              
                                              
                                              
                                            </form>
                                            <div style="color:green;" v-if="$page.props.offer_is_bidded == 1 && $page.props.status==null">Vous avez déjà postulé à cette offre</div>
                                            <div  style="color:green;" v-if="$page.props.offer_is_bidded == 1 && $page.props.status!=null">{{ $page.props.status }}</div>
                                            
                                            
                                            <Link v-if="!$page.props['auth']['user'] && $page.props['is_employer'] != 1" href="/login" class="default-btn two" style="background: rgb(240, 128, 0) none repeat scroll 0% 0%">{{ __('Se connecter') }}</Link>
                                            
                                            <Link v-if="$page.props['auth']['user'] && $page.props['is_employer'] == 1 && $page.props.can_edit_offer > 0" href="/account" class="default-btn two" style="background: rgb(240, 128, 0) none repeat scroll 0% 0%">{{ __('Modifier cette annonce') }}</Link>
                                            
                                            <!--<div class="courses-details-into">
                                                <h3>What you'll learn</h3>
                                                <p>
                                                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non
                                                    nisi. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia
                                                    eget consectetur sed, convallis at tellus.
                                                </p>
                                                <p>
                                                    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet
                                                    et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor felis porttitor volutpat.
                                                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vivamus suscipit tortor eget.
                                                </p>
                                             </div>-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="courses-details-sidebar pt-2">
                            <div class="mt-5">
	                            <img :src="offerDetails['profile_photo_url']" alt="Courses" class="rounded mx-auto d-block" style="width: 150px;" v-if="offerDetails['photo_url_tmp']!=null && offerDetails['photo_url_tmp']!=''"/>
	                            <img src="/img/user.jpg" alt="Courses" class="rounded mx-auto d-block" style="width: 150px;" v-if="offerDetails['photo_url_tmp']==null || offerDetails['photo_url_tmp']==''"/>
	                        </div>
                            <div class="content">
                                <h3 class="text-center">{{ offerDetails['company_name'] }}</h3>
                                <!--<span>This course includes:</span>-->
                                <ul class="courses-details-list">
                                    <li> <i class="ri-flag-2-line"></i> {{ offerDetails['company_activity_sector'] }}</li>
                                    <li><i class="ri-map-pin-fill"></i>{{ offerDetails['company_location'] }}</li>
                                    <li> <i class="ri-information-fill"></i> {{ offerDetails['company_about'] }}</li>
                                    <!--<li>Full lifetime access</li>
                                    <li>Access on mobile and TV</li>
                                    <li>Certificate of completion</li>-->
                                    <Link class="mt-3" :href="`${'/recruiters/offers/'+offerDetails['company_id']}`" style="color:rgb(240, 128, 0) !important;">Voir toutes les offres de ce recruteur</Link>
                                </ul>
                                <!--<a href="cart.html" class="default-btn">Add to cart</a>
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
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BaseLayout>
</template>

<style type="text/css">
	
	li.list-group-item{
		margin-bottom:40px;
		/*border-bottom: 1px solid !important;*/
		background: transparent !important;
	}
	.inner-banner {
      
      z-index: unset !important;
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
	offerDetails : Array,
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  data() {
    return {
      modal: null,
      modal2: null,
      id_delete : 0,
      total_offer:0,
      activity_sector : {},
      study_level : {},
      contract_type: {},
      contract_duration: ['CDD', 'CDI'],
      offerData: {},
      editMode : 0,
      viewDataOffer : {},
      formCV:this.$inertia.form({
	      
	      id_offer:this.offerDetails['id']
	  }),
      form: this.$inertia.form({
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
        
      })
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
	  
	  submitCV(){
		  
		  
		 this.formCV.post(route('candidate.post.cv'), {
	        preserveScroll: true,
	        onSuccess: () => {},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  },
	  getResults(page = 1) {
		    let vm = this;
            axios.get('/offers?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
	                vm.total_offer = response.data['total'];
                    vm.offerData = response.data['data'];
            });
      },
      openDeleteOffer(id){
	      
	      this.id_delete = id;
	      let el2 = document.querySelector('#deleteOffer')
	      this.modal2 = new bootstrap.Modal(el2)
	      this.modal2.show()
	      
      },
      loadOffer(data){
	      this.viewDataOffer = data;
	      let el = document.querySelector('#openOffer')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()  
      },
	  closeModal(){
		  
		  //this.form.reset()
          this.modal.hide()
	  },
	  closeModal2(){
		  
          this.modal2.hide()
	  },
	  removeOffer(id){
		  this.form['id'] = this.id_delete;
		  this.form.post(route('candidate.unbid.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal2();this.getResults();this.id_delete = 0;},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  }
  }
})
</script>