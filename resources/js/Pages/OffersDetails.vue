<template>
  <app-layout-general title="Détails Offre">
    <!--<template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>
    <welcome />-->
    {{ offerDetails }}
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
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;margin-bottom: 0px;">
                <h1 class="text-center" style="margin-top: 55px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 43px;font-size: 26px;color: rgb(255,115,0);">{{ offerDetails['title'] }}</h1>
            </div>
            <div class="row justify-content-start" style="margin-top: 49px;">
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"><img class="d-xxl-flex mx-auto" src="/img/ic-yayo.png" style="width: 130px;margin-top: 19px;"></div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-start">
	                <div class="row">
                        <h5 style="color: rgb(0,0,0);" class="col-5">Nom de la société</h5>
	                    <span class="col-7">{{ offerDetails['company']['company_name'] }}</span>
                    </div>
                    <div class="row">
                        <h5 style="color: rgb(0,0,0);" class="col-5">Date de publication</h5>
                        <span class="col-7">{{ offerDetails['company']['company_name'] }}</span>
                    </div>
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Secteur d'activité</h5>
                       <span class="col-7">{{ offerDetails['company']['activity_sector']['activity_sector_name'] }}</span>
                    </div>
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Localisation</h5>
                       <span class="col-7">{{ offerDetails['location'] }}</span>
                    </div>
                    <div class="row">
                       <h5 style="color: rgb(0,0,0);" class="col-5">Type d'offre</h5>
                       <span class="col-7">{{ offerDetails['contract_type']['contract'] }}</span>
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
                    <p>{{ offerDetails['company']['company_about'] }}</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Détails de l'offre</h1>
                    <p>{{ offerDetails['offers_details'] }}</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Profil recherché</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintoccaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Date d'expiration de l'offre</h1>
                    <p>Lorem ipsum dolor sit amet, xx/xx/xxxx</p><button class="btn btn-lg" type="button" style="background: #ff7300;color: rgb(255,255,255);">Postuler</button>
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