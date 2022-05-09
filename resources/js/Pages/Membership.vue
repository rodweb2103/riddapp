<template>
    <Head>
		<title>Abonnement PACK</title>
   </Head>
    <BaseLayout>
        <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ __('Acheter votre pack') }}</h3>
                    <!--<ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Pricing Plan</li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Pricing Area -->
        <div class="pricing-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-card">
                            <div class="top-content">
                                <h3>STANDARD</h3>
                                <h2 style="font-size: 20px;">76€<sub>/ {{ __('Mois') }}</sub></h2>
                            </div>
                            <ul>
                                <li><i class="ri-check-line"></i> 3 {{ __('annonces à poster') }}</li>
                                <li><i class="ri-check-line"></i> 5 {{ __('profils consultables') }}</li>
                                <li><i class="ri-close-fill" style="color:red;"></i> <del>{{ __('Annonces en tête de liste') }}</del></li>
                                <li><i class="ri-close-fill" style="color:red;"></i> <del>Mise en vue</del></li>
                                <li><i class="ri-check-line"></i> {{ __('Durée de diffusion sur le site') }} (7 {{ __('jours') }})</li>
                                <!--<li><i class="ri-check-line"></i> Exercise files</li>
                                <li><i class="ri-close-fill"></i> Try for free forever</li>
                                <li><i class="ri-close-fill"></i> All personal features</li>
                                <li><i class="ri-close-fill"></i> Certification practice</li>
                                <li><i class="ri-close-fill"></i> Full access to single course</li>-->
                            </ul>
                            <!--<a href="pricing.html" class="default-btn">{{ __('Acheter votre pack') }}</a>-->
                            <form @submit.prevent="submitPayment(1)">
					                  <div class="mt-4 d-flex justify-content-between">
						                 
						                 <div class="col-md-3 col-12 text-center">
	                                            <button  :class="{ 'text-white-50': form.processing && form.pack_id == 1,'default-btn':true }" :disabled="form.processing">
										              <div v-show="form.processing && form.pack_id == 1" class="spinner-border spinner-border-sm" role="status">
										                <span class="visually-hidden">Loading...</span>
										              </div>
										              <!--<div v-if="!form.processing">{{__('Acheter votre pack') }}</div>-->
										              <div v-if="form.pack_id != 1">{{__('Acheter votre pack') }}</div>
		                                         </button>
                                         </div> 
						                 
					                     
					                  </div>
					      </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-card">
                            <div class="top-content">
                                <h3>PROFESSIONNEL</h3>
                                <h2 style="font-size: 20px;">230€<sub>/ {{ __('Mois') }}</sub></h2>
                            </div>
                            <ul>
                                <li><i class="ri-check-line"></i> 5 {{ __('annonces à poster') }}</li>
                                <li><i class="ri-check-line"></i> 15 {{ __('profils consultables') }}</li>
                                <li><i class="ri-close-fill" style="color:red;"></i> <del>{{ __('Annonces en tête de liste') }}</del></li>
                                <li><i class="ri-close-fill" style="color:red;"></i> <del>Mise en vue</del></li>
                                <li><i class="ri-check-line"></i> {{ __('Durée de diffusion sur le site') }} (14 {{ __('jours') }})</li>
                                <!--<li><i class="ri-check-line"></i> Exercise files</li>
                                <li><i class="ri-check-line"></i> Try for free forever</li>
                                <li><i class="ri-check-line"></i> All personal features</li>
                                <li><i class="ri-close-fill"></i> Certification practice</li>
                                <li><i class="ri-close-fill"></i> Full access to single course</li>-->
                            </ul>
                            <!--<a href="pricing.html" class="default-btn">{{ __('Acheter votre pack') }}</a>-->
                            <form @submit.prevent="submitPayment(2)">
					                  <div class="mt-4 d-flex justify-content-between">
						                 
						                 
						                 <div class="col-md-3 col-12 text-center">
	                                            <button  :class="{ 'text-white-50': form.processing && form.pack_id == 2,'default-btn':true }" :disabled="form.processing">
										              <div v-show="form.processing && form.pack_id == 2" class="spinner-border spinner-border-sm" role="status">
										                <span class="visually-hidden">Loading...</span>
										              </div>
										              <!--<div v-if="!form.processing  form.pack_id == 2">{{__('Acheter votre pack') }}</div>--> 
										              <div v-if="form.pack_id != 2">{{__('Acheter votre pack') }}</div>
		                                         </button>
                                         </div> 
						                 
					                     
					                  </div>
					      </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-card">
                            <div class="top-content">
                                <h3>PREMIUM</h3>
                                <h2 style="font-size: 20px;">460€<sub>/ {{ __('Mois') }}</sub></h2>
                            </div>
                            <ul>
                                <li><i class="ri-check-line"></i> 5 {{ __('annonces à poster') }}</li>
                                <li><i class="ri-check-line"></i> 15 {{ __('profils consultables') }}</li>
                                <li><i class="ri-check-line"></i> {{ __('Annonces en tête de liste') }}</li>
                                <li><i class="ri-check-line"></i> Mise en vue</li>
                                <li><i class="ri-check-line"></i> {{ __('Durée de diffusion sur le site') }} (30 jours)</li>
                                <!--<li><i class="ri-check-line"></i> All personal features</li>
                                <li><i class="ri-check-line"></i> Certification practice</li>
                                <li><i class="ri-check-line"></i> Full access to single course</li>-->
                            </ul>
                            <!--<a href="pricing.html" class="default-btn">{{ __('Acheter votre pack') }}</a>-->
                            <form @submit.prevent="submitPayment(3)">
					                  <div class="mt-4 d-flex justify-content-between">
						                 
						                 
						                 <div class="col-md-3 col-12 text-center">
	                                            <button  :class="{ 'text-white-50': form.processing && form.pack_id == 3,'default-btn':true }" :disabled="form.processing">
										              <div v-show="form.processing && form.pack_id == 3" class="spinner-border spinner-border-sm" role="status">
										                <span class="visually-hidden">Loading...</span>
										              </div>
										              <div v-if="form.pack_id != 2">{{__('Acheter votre pack') }}</div>
		                                         </button>
                                         </div> 
						                 
					                     
					                  </div>
					      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Area End -->

    </BaseLayout>
</template>

<style type="text/css">
	
	.inner-banner-bg {
      background-image: url('/img/bannieres/banniere-offres.png');
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
    
    /*.event-item .event-img {
	    
	    max-width: 70px;
	    margin-right: unset !important;
	
	}*/
    
   	
	p{
		
		font-weight: unset !important;
	}
</style>
<script>
//import Select2 from 'vue3-select2-component';

//var paydunya = require('paydunya');

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
      form: this.$inertia.form({
        
          pack_id:0
      })
    }
  },
  mounted(){
	  
	  
	   
      
      
  },
  methods:{
	  
	  scrollToTop() {
        window.scrollTo(0,0);
      },
      submitPayment(pack_id){
	      
	      	//payment_ads
	      	//alert(pack_id);
	      	this.form['pack_id'] = pack_id;
	      	this.form.post(route('payment_ads'), {
		        preserveScroll: true,
		        onSuccess: (data) => {
			        this.form.pack_id = 0
			        //vm.total_offer = data['total'];
                    //vm.offerData = data['data'];
		        },
		        //onError: () => this.$refs.password.focus(),
		        onFinish: () => { this.form.pack_id = 0 },
            });   
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
            axios.post('/offers?page=' + page,{'contract_type':vm.form.contract_type,'contract_duration':vm.form.contract_duration,'study_level':vm.form.study_level})
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