<template>
  <Head title="Compte" />
  
   <div class="container-fluid">
	   
	   
	   <jet-dialog-modal id="chatAdmin">
        <template #title>
          {{ __("Centre de support") }}
        </template>

        <template #content>
          
          <div class="mt-4">
	          
		         {{ data_support }}    
	          
          </div>
        </template>

        <template #footer>
          <jet-secondary-button  @click="closeModal3">
            {{ __("Fermer") }}
          </jet-secondary-button>
        </template>
      </jet-dialog-modal>
	   
	   
	   <jet-dialog-modal id="deleteOffer">
        <template #title>
          {{ __("Supprimer annonce") }}
        </template>

        <template #content>
          
          <div class="mt-4">
	          
		         {{ __("Confirmez vous la suppression des annonces selectionnées ?") }}   
	          
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModal2">
            {{ __("Non") }}
          </jet-secondary-button>
          
          <jet-button style="background-color: green;" class="btn" @click="deleteOffer()" :class="{ 'text-white-50': form2.processing }" :disabled="form2.processing">
            <div v-show="form2.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            {{ __("Oui") }}
          </jet-button>
        </template>
      </jet-dialog-modal>
	   
	   <jet-dialog-modal id="openOffer" maxWidth="lg">
        <template #title>
          {{ __("Éditer une annonce") }}
        </template>

        <template #content>
          
          <div class="mt-4">
	          
	       
	          
	       <form id="msform">
		      <div class="row"> 
		       
		        <div class="col-12">
				  <div class="mb-3">
					<input type="hidden"  v-model="form.id"/>
				    <input type="text" placeholder="Titre annonce" v-model="form.offer_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.offer_title" />
				  </div>
		        </div>
		        <!--<div class="col-6">  
				  <div class="mb-3">
				    <select class="form-control" v-model="form.activity_sector">
					    <option selected disabled value>--Secteur d'activité--</option>
				    </select>
				    <Select2 v-model="form.activity_sector" :options="activity_sector" :settings="{placeholder:'-Secteur d\'activité--',width:'100%',dropdownParent:'#openOffer'}"/>
				    <jet-input-error :message="form.errors.activity_sector" />
				  </div>
		        </div>-->
		      </div>
			  
			  <div class="row">
				  
				 <!--<div class="col-6">
			  
					  <div class="mb-3">
					    <textarea class="form-control" placeholder="Localisation" v-model="form.location" rows="5" style="margin-bottom: 0px;"></textarea>
					    <jet-input-error :message="form.errors.location" />
					  </div>
				 </div>-->
				 
			    <div class="col-4">
				  
					 
					    <!--<Select2 v-model="form.contract_type" :options="contract_type" :settings="{placeholder:'--Type de contrat--',width:'100%',dropdownParent:'#openOffer'}"/>-->
					    <select v-model="form.contract_type" class="form-control">
						    <option selected disabled value>--{{ __("Type d'offre") }}--</option>
						    <option :value="ct['id']" v-for="ct in contract_type">{{ __(""+ct['text']+"") }}</option>
					    </select>
					    <jet-input-error :message="form.errors.contract_type" />
				 </div>
				 
				 <div class="col-4">
					  <div class="mb-3">
					    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
					    <!--<select class="form-control"  v-model="form.contract_duration">
						    <option selected disabled value>--Durée du contrat--</option>
						    <option value="CDD">CDD</option>
						    <option value="CDI">CDI</option>
					    </select>-->
					    <!--<Select2 v-model="form.contract_duration" :options="contract_duration" :settings="{placeholder:'--Durée du contrat--',width:'100%',dropdownParent:'#openOffer'}"/>-->
					    <select v-model="form.contract_duration" class="form-control">
						    <option selected disabled value>--{{ __("Durée du contrat") }}--</option>
						    <option :value="ct" v-for="ct in contract_duration">{{ __(""+ct+"") }}</option>
					    </select>
					    <jet-input-error :message="form.errors.contract_duration" />
					  </div>
			    </div>
			    
			    <div class="col-4">  
					    <!--<Select2 v-model="form.study_level" :options="study_level" :settings="{placeholder:'--Niveau d\'étude--',width:'100%',dropdownParent:'#openOffer'}"/>-->
					    <select v-model="form.study_level" class="form-control">
						    <option selected disabled value>--{{ __("Niveau d'étude") }}--</option>
						    <option :value="ct['id']" v-for="ct in study_level">{{ __(""+ct['text']+"") }}</option>
					    </select>
					    <jet-input-error :message="form.errors.study_level" />
			    </div>
			  
			  
			  </div>
			  
			  <!--<div class="row">
			    
			    <div class="col-6">
				  <div class="mb-3">
				  
				    <Select2 v-model="form.contract_duration" :options="contract_duration" :settings="{placeholder:'--Durée du contrat--',width:'100%'}"/>
				    <jet-input-error :message="form.errors.contract_duration" />
				  </div>
			    </div>
			    <div class="col-6">  
					    <Select2 v-model="form.study_level" :options="study_level" :settings="{placeholder:'--Niveau d\'étude--',width:'100%'}"/>
					    <jet-input-error :message="form.errors.study_level" />
			    </div>
			  
			  </div>-->
			   <div class="row">
				  
				 <div class="col-12">
			  
					  <div class="mb-3">
					    
					    <textarea class="form-control" :placeholder="__('Localisation')" v-model="form.location" rows="5" style="margin-bottom: 0px;"></textarea>
					    <jet-input-error :message="form.errors.location" />
					  </div>
				 </div>
				 
				 <!--<div class="col-6">
				  
					 
					    <Select2 v-model="form.contract_type" :options="contract_type" :settings="{placeholder:'--Type de contrat--',width:'100%'}"/>
					    <jet-input-error :message="form.errors.contract_type" />
				 </div>-->
			  
			  
			  </div>
			  <div class="row">
			    <div class="col-12">
				  <div class="mb-3">
				    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
				    <textarea class="form-control" :placeholder="__('Détails de l\'offre')" v-model="form.offer_details" rows="10" style="margin-bottom: 0px;"></textarea>
				    <jet-input-error :message="form.errors.offer_details" />
				  </div>
			    </div>
			  </div>
			  
			  <div class="row">
				  
				 <div class="col-12">
			  
					  <div class="mb-3">
					    
					    <textarea class="form-control" :placeholder="__('Détails sur le profil recherché')" v-model="form.profile_details" rows="5" style="margin-bottom: 0px;"></textarea>
					    <jet-input-error :message="form.errors.profile_details" />
					  </div>
				 </div>
				 
				 <!--<div class="col-6">
				  
					 
					    <Select2 v-model="form.contract_type" :options="contract_type" :settings="{placeholder:'--Type de contrat--',width:'100%'}"/>
					    <jet-input-error :message="form.errors.contract_type" />
				 </div>-->
			  
			  
			  </div>
			  
           </form>
	          
            <!--<jet-input type="password" placeholder="Password"
                       ref="password"
                       v-model="form.password"
                       :class="{ 'is-invalid': form.errors.password }"
                       @keyup.enter="deleteUser" />

            <jet-input-error :message="form.errors.password" />-->
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModal">
            {{ __("Annuler") }}
          </jet-secondary-button>
          
          <jet-button class="btn" style="background-color: green;" @click="checkSaving" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            {{ __("Confirmer") }}
          </jet-button>
          <!--<jet-button v-if="editMode == 0" class="btn btn-primary" @click="createOffer" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>
          
          <jet-button v-if="editMode == 1" class="btn btn-primary" @click="editOffer" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>-->
          
        </template>
      </jet-dialog-modal>

       
        <!-- /.row -->
        
        <!--<div class="row pt-2">
	        
	        <div class="col-md-3">
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Candidats</span>
                <span class="info-box-number">5,200</span>
              </div>
            </div>
           
	        </div>
	        
	        <div class="col-md-3">
	            <div class="info-box mb-3 bg-danger">
	              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
	
	              <div class="info-box-content">
	                <span class="info-box-text">Offres postées</span>
	                <span class="info-box-number">114,381</span>
	              </div>
	            </div>
	        </div>
            
            	        
        </div>-->
        
        <!-- /.card-body -->
              <div class="clearfix mt-4">
                <button @click="openOfferForm" class="btn btn-sm btn-info float-left" style="background-color: green;">{{ __("Créer une annonce") }}</button>
                <button :disabled="form2.cv_rows.length == 0" @click="openDeleteOffer" class="btn btn-sm btn-info float-left" style="background-color: red;">{{ __("Supprimer une annonce") }}</button>
              </div>
              <div class="alert alert-success" v-if="$page.props.status!==null && $page.props.status!=='null'">
	              {{ $page.props.status }}
              </div>
        
        <!-- Main row -->
        <div class="row pt-2">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">{{ __("Offres") }}</h3>

                <!--<div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>-->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
	                  <th><input type="checkbox" @click="selectRows($event)"/></th>
                      <th>{{ __("ID Annonce") }}</th>
                      <th>{{ __("Titre Annonce") }}</th>
                      <th>{{ __("Libellé Annonce") }}</th>
                      <th>{{ __("Statut annonce") }}</th>
                      <th>{{ __("Action") }}</th>
                      <th>{{ __("Candidats") }}</th>
                    </tr>
                    </thead>
                    <tbody>
	                    <tr v-for="data in offerData['data']">
		                    <td><input type="checkbox" v-model="form2.cv_rows" :value="data.id_offer" @click="selectRow($event,data.id_offer)"/></td>
		                    <td>{{ data.id }}</td>
		                    <td>{{ data.title }}</td>
		                    <td>{{ data.offers_details }}</td>
		                    
		                    <td>
			                    
			                    <span class="badge badge-success" v-if="data.publish_status == 1">{{ __("Publié") }}</span>
			                    <span class="badge badge-warning" v-if="data.publish_status == 0">{{ __("En attente") }}</span>
			                    <span class="badge badge-danger" v-if="data.publish_status == -1">{{ __("Rejeté") }}</span>
			                    
		                    </td>
		                    <td>
			                    <a href="#" @click="loadOffer(data.id)"><i class="fas fa-eye" style="padding: 2px;"></i></a>
			                    <!--<a href="#" @click="openDeleteOffer(data.id)"><i class="fas fa-trash" style="color:red;padding: 2px;"></i></a>-->
			                    <a href="#" v-if="data.publish_status == -1" @click="openChatAdmin(data)"><i class="fas fa-comment" style="color:grey;padding:2px;"></i></a>
			                    <Link :href="`${'/view/cv/candidates/'+data.id}`" v-if="data.publish_status != -1 && data.candidates > 0 && data.publish_status != 0"><i class="fas fa-file-pdf"></i></Link>
			               </td>
			               <td>{{ data.candidates }}</td>
		                    
	                    </tr>
                    <!--<tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>-->
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <Pagination :data="offerData" align="center" class="mt-2" @pagination-change-page="getResults" />
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
  
</template>

<style>
  .invalid-feedback{
	  
	  display: block !important;
  }
  .select2-container .select2-selection--single .select2--container{
     margin-top: -8px !important;
     background: red !important;
  }
  
  .select2-selection{
	  
	  height: 40px !important;
  }
  
  span.select2-container.select2-container--default.select2-container--open {
    z-index: 100003;
}

span.select2-selection.select2-selection--single {
    outline: none;
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
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  data() {
    return {
      modal: null,
      modal2: null,
      modal2: null,
      id_delete : 0,
      data_support:'',
      activity_sector : {},
      study_level : {},
      contract_type: {},
      contract_duration: ['CDD', 'CDI'],
      offerData: {},
      editMode : 0,
      form: this.$inertia.form({
        //password: '',
        id : 0,
        offer_title:'',
        profile_details:'',
        activity_sector:'',
        location:'',
        contract_type:'',
        contract_duration:'',
        offer_details:'',
        study_level:'',
        offer_details:''
        
      }),
      form2: this.$inertia.form({
	      cv_rows: []
	  })
    }
  },
  updated(){
	  //this.getResults();
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
	  
	  selectRows(event){
		  
		  if (event.target.checked) {
			  
			  for(var key in this.offerData['data']){
				  
				  this.form2['cv_rows'].push(this.offerData['data'][key]["id_offer"]);
			  }
	      
	      }else{
		      
		      
		      this.form2['cv_rows'] = [];
	      }
	  },
	  selectRow(event,id){
		  
		  if (event.target.checked) {
			  
				  
				  this.form2['cv_rows'].push(id);
	      
	      }else{
		      
		      
		      const index = this.form2['cv_rows'].indexOf(id);
		      if (index > -1) {
				  this.form2['cv_rows'].splice(index, 1); // 2nd parameter means remove one item only
				  //this.form['cv_id'] = [];
			  }
		      
	      }
	  },
	  getResults(page = 1) {
		    let vm = this;
            axios.post('/company/offers?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
                    vm.offerData = response.data;
            });
      },
      openChatAdmin(data){
	      
	      this.data_support = data.admin_notes;
	      let el3 = document.querySelector('#chatAdmin')
	      this.modal3 = new bootstrap.Modal(el3)
	      this.modal3.show()
	      
      },
      openDeleteOffer(id){
	      
	      this.id_delete = id;
	      let el2 = document.querySelector('#deleteOffer')
	      this.modal2 = new bootstrap.Modal(el2)
	      this.modal2.show()
	      
      },
	  openOfferForm(editMode = 0) {
	      //this.form.password = '';
	
	      let el = document.querySelector('#openOffer')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()
	      
	      
	      this.editMode = editMode;
	      
	      
	
	      //setTimeout(() => this.$refs.password.focus(), 250)
      },
      loadOffer(id){
	     
	     //this.editMode = 1;
	     this.form.errors = {};
	     
	     const filteredResult = this.offerData['data'].find((e) => e.id == id);
	     
	     console.log(filteredResult);
	     
	     
	     this.form.offer_title=filteredResult['title'];
         this.form.profile_details=filteredResult['profile_details'];
         this.form.location=filteredResult['location'];
         this.form.contract_type=filteredResult['contract_type'];
         this.form.contract_duration=filteredResult['contract_duration'];
         this.form.offer_details=filteredResult['offers_details_more'];
         this.form.study_level=filteredResult['study_level'];
         this.form.id = filteredResult['id_offer'];
	                //this.form.offer_details=response.data['data'][0]['offer_details'];
	     
	     /*axios.get('/view/offer/'+id)
                .then(response => {
	                
	                this.form.offer_title=response.data['data'][0]['title'];
	                this.form.profile_details=response.data['data'][0]['profile_details'];
	                this.form.location=response.data['data'][0]['location'];
	                this.form.contract_type=response.data['data'][0]['contract_type'];
	                this.form.contract_duration=response.data['data'][0]['contract_duration'];
	                this.form.offer_details=response.data['data'][0]['offers_details'];
	                this.form.study_level=response.data['data'][0]['study_level'];
	                this.form.id = response.data['data'][0]['id_offer'];
	                //this.form.offer_details=response.data['data'][0]['offer_details'];
	                console.log(response.data);
	                //this.editMode = 0;
                    //vm.offerData = response.data['data'];
         });*/
	     
	     this.openOfferForm(1);  
      },
	  closeModal(){
		  
		  this.form.reset()
          this.modal.hide()
          this.editMode = 0;
	  },
	  closeModal2(){
		  
          this.modal2.hide()
	  },
	  closeModal3(){
		  
          this.modal3.hide()
	  },
	  editOffer(){
		  
		  
		 //console.log(id.target); 
		  
         //this.form['id'] = id;
         this.form.post(route('employer.edit.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal(); this.form.reset();this.editOffer=0;this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
      },
	  deleteOffer(id){
		  //this.form['id'] = this.id_delete;
		  this.form2.post(route('employer.delete.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal2();this.getResults();this.id_delete = 0;this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  },
	  checkSaving(){
		 let vm = this;
		 
		 //console.log(vm.editMode);return false;
		 
		 if(vm.editMode == 1){
			 
			 
	     this.form.post(route('employer.edit.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal();this.form.reset();this.editOffer=0;this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
			 
		 
		 }else{
			 
			 
			  this.form.post(route('employer.create.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal(); this.form.reset();this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
			 
			 //vm.createOffer();
		 }  
	  },
	  createOffer(){
		  
		  this.form.post(route('employer.create.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal(); this.form.reset();this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
	  }
  }
})
</script>
