<template>
  <app-layout title="Gestion compte employeur">
  
     <div class="container-fluid">
	     
	     
	     <jet-dialog-modal id="openOffer" maxWidth="lg">
        <template #title>
          {{ __("Éditer un compte candidat") }}
        </template>

        <template #content>
          
          <div class="mt-4">
	          
	          
	       <form id="msform">
		      <div class="row"> 
		       
		        <div class="col-6">
				  <div class="mb-3">
					<input type="hidden"  v-model="form.id"/>
				    <input type="text" placeholder="Nom" v-model="form.last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.last_name" style="display: block !important"/>
				  </div>
		        </div>
		        <div class="col-6">
				  <div class="mb-3">
					<input type="hidden"  v-model="form.id"/>
				    <input type="text" placeholder="Prénom" v-model="form.first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.first_name" style="display: block !important"/>
				  </div>
		        </div>
		        
		        
		        
		        
		      </div>
		        
		      
		      <div class="row"> 
			      
			   
			   <div class="col-4">
				  <div class="mb-3">
				    <input type="text" placeholder="Adresse e-mail" v-model="form.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.email" style="display: block !important"/>
				  </div>
		        </div>
		        
		        <div class="col-4">
				  <div class="mb-3">
				     <vue-tel-input :dropdownOptions='{showDialCodeInSelection:true,showFlags:true,showDialCodeInList:true,showSearchBox:true}' :inputOptions='{placeholder:"Téléphone"}' mode="international" :autoDefaultCountry="true"  v-model="form.phone_number"  enabledCountryCode="true"></vue-tel-input>
				    <jet-input-error :message="form.errors.phone_number" v-model="form.phone_number" style="display: block !important"/>
				  </div>
		        </div>
		        
		        
		       
			      
			   <div class="col-4">
				  <div class="mb-3">
					<select class="form-select" aria-label="Default select example" v-model="form.account_type">
                           <option selected disabled value="">--{{ __('Type de compte') }}--</option>
                           <option value="1">{{ __('Candidat') }}</option>
                           <option value="5">{{ __('Consultant') }}</option>
                    </select>
                    <!--<div v-if="form.errors.account_type" style="color:red;">{{ form.errors.account_type }}</div>-->
                    <jet-input-error v-if="form.errors.account_type" :message="form.errors.account_type" style="display: block !important"/>
				</div>
			      
		      </div>
		      </div>
			  
			  <div class="row">
								
				
		       
		     		        
		        <div class="col-12" v-if="form.account_type == 1">
				  <div class="mb-3">
					<select v-model="form.study_level" class="form-control">
						    <option selected disabled value>--{{ __('Niveau d\'étude') }}--</option>
						    <option :value="ct['id']" v-for="ct in study_level">{{ __(ct['text']) }}</option>
					</select>
				    <jet-input-error :message="form.errors.study_level" style="display: block !important"/>
				    
				  </div>
		        </div>
		        
		       
		        
		        <div class="col-7" v-if="form.account_type == 5">
				  <div class="mb-3">
					<select v-model="form.activity_sector" class="form-control">
						    <option selected disabled value>--{{__('Domaine d\'intervention') }}--</option>
						    <option :value="ct['id']" v-for="ct in activity_sector">{{ __(ct['text']) }}</option>
					</select>
				    <jet-input-error :message="form.errors.activity_sector" style="display: block !important"/>
				    
				  </div>
		        </div>
		        
		        <div class="col-5" v-if="form.account_type == 5">
				  <div class="mb-3">
					<select v-model="form.consult_level" class="form-control">
						    <option selected disabled value>--{{ __('Niveau') }}--</option>
						    <option :value="ct['id']" v-for="ct in consult_level">{{ __(ct['text']) }}</option>
					</select>
				    <jet-input-error :message="form.errors.consult_level" style="display: block !important"/>
				  </div>
		        </div>
		   			  
			  </div>
			
			  
           </form>
	       
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModal">
            {{ __("Annuler") }}
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" style="background-color: green !important;" @click="createCandidate" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            {{ __("Confirmer") }}
          </jet-button>
          
          
        </template>
      </jet-dialog-modal>
	     
	     
	     <div class="clearfix mt-4">
                <a @click="openOfferForm" class="btn btn-sm btn-info float-left" style="background-color: green !important">{{ __("Éditer un compte candidat") }}</a>
         </div>
         <div class="alert alert-success" v-if="$page.props.status!==null">
	              {{ $page.props.status }}
         </div>
       
        <!-- Main row -->
        <div class="row pt-3">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">{{ __("Liste des candidats") }}</h3>

                <div class="card-tools">
                  <!--<button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>{{ __("NOM") }}</th>
                      <th>{{ __("PRÉNOM") }}</th>
                      <th>{{ __("PAYS") }}</th>
                      <th>{{ __("VILLE") }}</th>
                      <th>{{ __("TÉLÉPHONE") }}</th>
                      <th>{{ __("PSEUDO") }}</th>
                      <th>{{ __("NIVEAU D'ÉTUDE") }}</th>
                      <th>{{ __("PROFIL") }}</th>
                      <!--<th>DOMAINE DE FORMATION</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="data in offerData">
                      <td>{{ data['last_name'] }}</td>
                      <td>{{ data['first_name'] }}</td>
                      <td>{{ data['country'] }}</td>
                      <td>
                        {{ data['city'] }}
                      </td>
                      <td>
                        {{ data['phone_number'] }}
                      </td>
                      <td>
                        {{ data['user_name'] }}
                      </td>
                      <td>
                        {{ data['study_level'] }}
                      </td>
                      <td>{{ data['account_type'] == 1 ? __('Étudiant') : __('Consultant') }}</td>
                      <!--<td>
                        {{ data['activity_sector'] }}
                      </td>-->
                    </tr>
                    <!--<tr>
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
                <Pagination :data="offerData" @pagination-change-page="getResults" align="center" class="mt-2"/>
                <!-- /.table-responsive -->
              </div>
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    
  </app-layout>
</template>

<script>
import { defineComponent } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
//import Welcome from "@/Pages/Welcome.vue"
//import Welcome from "@/Jetstream/Welcome.vue"

import { Head, Link } from '@inertiajs/inertia-vue3';

import JetActionSection from '@/Jetstream/ActionSection.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import JetButton from '@/Jetstream/Button.vue'
//import BaseLayout from '@/Pages/BaseLayout.vue'

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
    AppLayout
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
      consult_level:'',
      viewDataOffer : {},
      form: this.$inertia.form({
        //password: '',
        account_type:'',
        phone_number:'',
        email : '',
        first_name:'',
        last_name:'',
        account_type:'',
        study_level:'',
        activity_sector:'',
        consult_level:''
        
      })
    }
  },
  mounted(){
	  
	  //alert("");
	  this.getResults();
	  
	  axios.get('/study/level').then(response => {
		  
		  this.study_level = response.data;
      });
      
      axios.get('/consult/level').then(response => {
		  
		  
		  this.consult_level = response.data;
      });
      
      axios.get('/activity/sector').then(response => {
		  
		  
		  this.activity_sector = response.data;
      });
	   
      
      
  },
  methods:{
	  
	  getResults(page = 1) {
		    let vm = this;
            axios.get('/admin/ajax/candidates?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
	                vm.total_offer = response.data['total'];
                    vm.offerData = response.data['data'];
            });
      },
      openOfferForm(editMode = 0) {
	      //this.form.password = '';
	      let el = document.querySelector('#openOffer')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()
	      this.editMode = editMode;
	      
	
	      //setTimeout(() => this.$refs.password.focus(), 250)
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
	  createCandidate(){
		  
		  this.form.post(route('candidate.create'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal();this.getResults();this.id_delete = 0;},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  }
  }
})

</script>