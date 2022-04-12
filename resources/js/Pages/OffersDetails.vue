<template>
  <app-layout-general title="Détails Offre">
    <!--<template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>
    <welcome />-->
   
    <header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 360.27px;background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162);padding-bottom: 0px;transform-style: preserve-3d;">
        <div class="container hero">
            <nav class="navbar navbar-light navbar-expand-lg d-xl-flex navigation-clean" style="background: rgba(177,30,44,0);padding-top: 0;padding-bottom: 0;margin-top: -41px;">
                <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="assets/img/logo-ridd.jpg" style="width: 115px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    <section id="carousel" style="margin-top: 24px;">
        <div class="container">
            <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carousel-1" style="height: 300px;">
                <div class="carousel-inner" style="height: 300px;">
                    <div class="carousel-item active" style="height: auto;"><img class="img-fluid w-100 d-block" alt="Slide Image" style="margin-top: 0px;opacity: 1;filter: brightness(0%);" src="/img/ades3.jpg"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="filter: brightness(0%);"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="filter: brightness(0%);"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            </div>
        </div>
    </section>
    <section style="height: auto;padding-bottom: 42px;">
	    <!--{{ offerDetails }}-->
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;margin-bottom: 0px;">
                <h1 class="text-center" style="margin-top: 55px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 43px;font-size: 26px;color: rgb(255,115,0);">{{ offerDetails['title'] }}</h1>
            </div>
            <div class="row justify-content-start" style="margin-top: 49px;">
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
	                <!--<img class="d-xxl-flex mx-auto" src="/img/ic-yayo.png" style="width: 130px;margin-top: 19px;">-->
	                <img class="d-xxl-flex mx-auto" :src="offerDetails['profile_photo_url']" style="width: 130px;margin-top: 19px;">
	                
	                
	             </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-start">
	                <div class="row">
                        <h5 style="color: rgb(0,0,0);" class="col-5">Nom de la société</h5>
	                    <span class="col-7">{{ offerDetails['company_name'] }}</span>
                    </div>
                    <div class="row">
                        <h5 style="color: rgb(0,0,0);" class="col-5">Date de publication</h5>
                        <span class="col-7">{{ offerDetails['company_name'] }}</span>
                    </div>
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Secteur d'activité</h5>
                       <span class="col-7">{{ offerDetails['company_activity_sector'] }}</span>
                    </div>
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Localisation</h5>
                       <span class="col-7">{{ offerDetails['location'] }}</span>
                    </div>
                    
                    
                    <!--"id_offer" => $offer_details[0]->id_offer,
	     "title" => $offer_details[0]->title,
	     "offers_details" => $offer_details[0]->offers_details,
	     "publish_date" => $offer_details[0]->publish_date,
	     "offer_type" => $offer_details[0]->contract_type->contract,
	     "contract_duration" => $offer_details[0]->contract_type->contract_duration,
	     "location" => $offer_details[0]->location,
	     "profile_details" => $offer_details[0]->profile_details,
	     "company_name" => $offer_details[0]->company->company_name,
	     "company_about" => $offer_details[0]->company->company_about,
	     "company_location" => $offer_details[0]->company->company_location,
	     "profile_photo_url" => $offer_details[0]->company->profile_photo_url,
	     "company_activity_sector" => $offer_details[0]->company->activity_sector->activity_sector_name-->
                    
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Type d'offre</h5>
                       <span class="col-7">{{ offerDetails['offer_type'] }}</span>
                    </div>
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Contrat</h5>
                       <span class="col-7">{{ offerDetails['contract_duration'] }}</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start" style="margin-top: 49px;">
                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <h1 class="text-start" style="margin-top: 55px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Détails de l'entreprise</h1>
                    <p>{{ offerDetails['company_about'] }}</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Détails de l'offre</h1>
                    <p>{{ offerDetails['offers_details'] }}</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Profil recherché</h1>
                    <p>{{ offerDetails['profile_details'] }}</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Date d'expiration de l'offre</h1>
                    <p>Lorem ipsum dolor sit amet, xx/xx/xxxx</p><p><button class="btn btn-lg" type="button" style="background: #ff7300;color: rgb(255,255,255);">Postuler</button></p>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>    
  </app-layout-general>
</template>

<style type="text/css">
	
	li.list-group-item{
		margin-bottom:40px;
		/*border-bottom: 1px solid !important;*/
		background: transparent !important;
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