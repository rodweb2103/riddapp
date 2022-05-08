<!--<template>
    
    <BaseLayout>
   
       <div class="row pt-2">
          <div class="col-md-8 offset-md-2">
           
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Offres candidats</h3>

              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nom du candidat</th>
                      <th>Prénom du candidat</th>
                      <th>Date de soumission</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
	                    <tr v-for="data in offerData['data']">
		                    <td>{{ data.last_name }}</td>
		                    <td>{{ data.first_name }}</td>
		                    <td>{{ data.offers_details }}</td>
		                   
		                    <td>
			                    <a href="#" @click="loadOffer(data.id)"><i class="fas fa-eye" style="padding: 10px;"></i></a>
			                    <a href="#" @click="openDeleteOffer(data.id)"><i class="fas fa-trash" style="color:red;padding: 10px;"></i></a>
			                    <Link :href="`${'/view/cv/candidates/'+data.id}`"><i class="fas fa-file-pdf" style="padding: 10px;"></i></Link>
			               </td>
		                    
	                    </tr>
                    
                    </tbody>
                  </table>
                </div>

              </div>
              <Pagination :data="offerData" @pagination-change-page="getResults" />
             
            </div>
          </div>
          
        </div>
    </BaseLayout>
</template>-->
<template>
  <Head title="Compte" />
  
   <div class="container-fluid">
	   
	   
	   <jet-dialog-modal id="deleteOffer">
        <template #title>
          Supprimer une annonce
        </template>

        <template #content>
          
          <div class="mt-4">
	          
		         Confirmez vous la suppression de cette annonce ?    
	          
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModal2">
            Non
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" @click="deleteOffer()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Oui
          </jet-button>
        </template>
      </jet-dialog-modal>
      
      <!--<jet-dialog-modal id="viewPDF">
        <template #title>
        </template>

        <template #content style="width: 700px;">
          
          <div class="mt-4">
	          
		       <embed v-bind:src="getUrl" frameborder="0" width="100%" height="400px"/>
	          
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModalPDF">
            FERMER
          </jet-secondary-button>
        </template>
      </jet-dialog-modal>-->
      
	   
      <!--<div class="clearfix mt-4">
        <a @click="openOfferForm" class="btn btn-sm btn-info float-left">Éditer une annonce</a>
      </div>-->
        
        <!-- Main row -->
        <div class="row pt-2">
          <!-- Left col -->
          <div class="col-md-12">
            
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Offres</h3>
                  <!--<pdf src="https://beta.ridd.info/storage/cv/cv_Cedric_Yeo.pdf"></pdf>-->
                  <!--<embed src="https://beta.ridd.info/storage/cv/cv_Cedric_Yeo.pdf" frameborder="0" width="100%" height="400px">-->
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nom du candidat</th>
                      <th>Prénom du candidat</th>
                      <!--<th>Date de soumission</th>-->
                      <th>Consulter CV</th>
                    </tr>
                    </thead>
                    <tbody>
	                    <tr v-for="data in offerData['data']">
		                    <td>{{ data.last_name }}</td>
		                    <td>{{ data.first_name }}</td>
		                    <!--<td>{{ data.offers_duration }}</td>-->
		                   
		                    <td>
			                    <a target="_blank" @click="viewPDFCandidates()" :href="data.cv_candidates"><i class="fas fa-file-pdf" style="padding: 10px;"></i></a>
			               </td>
		                    
	                    </tr>
                    
                    </tbody>
                  </table>
                </div>
              <Pagination :data="offerData" @pagination-change-page="getResults" align="center" class="mt-2"/>
              
              <!-- /.card-footer -->
            </div>
          </div>
          
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
   </div>
  
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
//import pdf from 'vue-pdf'
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
    BaseLayout,
    //pdf
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
      getUrl:null,
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
	  
	  /*axios.get('/activity/sector').then(response => {
		  
		  
		  this.activity_sector = response.data;
      });
      
      
      
      axios.get('/study/level').then(response => {
		  
		  
		  this.study_level = response.data;
      }); 
      
      
      axios.get('/contract/types').then(response => {
		  
		  
		  this.contract_type = response.data;
      });*/  
      
      
  },
  methods:{
	  
	  scrollToTop() {
        window.scrollTo(0,0);
      },
      closeModalPDF(){
	     
	     //this.modal.hide() 
      },
      viewPDFCandidates(url){
	      
	      
	      let el = document.querySelector('#viewPDF')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()  
	      this.getUrl = "https://beta.ridd.info/storage/cv/cv_Cedric_Yeo.pdf";
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
            axios.post('/ajax/view/cv/candidates?page=' + page,{'offer_cand':this.$page.props.offer_cand})
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