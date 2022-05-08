<template>
  <app-layout title="Gestion des offres">
  
     <div class="container-fluid">
	    
	    
	    <!--<jet-dialog-modal id="deleteOffer" maxWidth="lg">
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
            Annuler
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" @click="removeOffer" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>
        </template>
       </jet-dialog-modal>
	     
	    <jet-dialog-modal id="unpubOffer" maxWidth="lg">
        <template #title>
          Publier une annonce
        </template>

        <template #content>
          
          <div class="mt-4">
	          Confirmez vous la dépublication de cette annonce ?
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModalUnpubOffer">
            Annuler
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" @click="unpublishOffer" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>
        </template>
       </jet-dialog-modal>
	     
	    <jet-dialog-modal id="pubOffer" maxWidth="lg">
        <template #title>
          Publier une annonce
        </template>

        <template #content>
          
          <div class="mt-4">
	          Confirmez vous la publication de cette annonce ?
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModalpubOffer">
            Annuler
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" @click="publishOffer" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>
        </template>
       </jet-dialog-modal>-->
	     
	     
	    <jet-dialog-modal id="openOffer" maxWidth="lg">
        <template #title>
          {{ __('Visualiser une annonce') }}
        </template>

        <template #content>
          
          <div class="mt-4">
	          
	          
	          
	       <form id="msform">
		      <div class="row"> 
		       
		        <div class="col-12">
				  <div class="mb-3">
					<input type="hidden"  v-model="form.id"/>
				    <input type="text" :placeholder="__('Titre annonce')" v-model="form.offer_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;" disabled>
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
					    <select v-model="form.contract_type" class="form-control" disabled>
						    <option selected disabled value>--{{ __('Type d\'offre') }}--</option>
						    <option :value="ct['id']" v-for="ct in contract_type">{{ __(ct['text']) }}</option>
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
					    <select v-model="form.contract_duration" class="form-control" disabled>
						    <option selected disabled value>--{{ __('Durée du contrat') }}--</option>
						    <option :value="ct" v-for="ct in contract_duration">{{ __(ct) }}</option>
					    </select>
					    <jet-input-error :message="form.errors.contract_duration" />
					  </div>
			    </div>
			    
			    <div class="col-4">  
					    <!--<Select2 v-model="form.study_level" :options="study_level" :settings="{placeholder:'--Niveau d\'étude--',width:'100%',dropdownParent:'#openOffer'}"/>-->
					    <select v-model="form.study_level" class="form-control" disabled>
						    <option selected disabled value>--{{ __('Durée du contrat') }}--</option>
						    <option :value="ct['id']" v-for="ct in study_level">{{ __(ct['text']) }}</option>
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
					    
					    <textarea class="form-control" :placeholder="__('Localisation')" v-model="form.location" rows="5" style="margin-bottom: 0px;" disabled></textarea>
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
				    <textarea class="form-control" :placeholder="__('Détails de l\'offre')" v-model="form.offer_details" rows="10" style="margin-bottom: 0px;" disabled></textarea>
				    <jet-input-error :message="form.errors.offer_details" />
				  </div>
			    </div>
			  </div>
			  
			  <div class="row">
				  
				 <div class="col-12">
			  
					  <div class="mb-3">
					    
					    <textarea class="form-control" :placeholder="__('Détails sur le profil recherché')" v-model="form.profile_details" rows="5" style="margin-bottom: 0px;" disabled></textarea>
					    <jet-input-error :message="form.errors.profile_details"/>
					  </div>
				 </div>
				 
				 
				 <div class="col-12">
			  
					  <div class="mb-3">
					    
					    <textarea class="form-control" :placeholder="__('Notes explicatives sur le rejet de cette annonce')" v-model="form.admin_notes" rows="5" style="margin-bottom: 0px;"></textarea>
					    <jet-input-error :message="form.errors.admin_notes" style="display: block"/>
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
          <jet-secondary-button data-dismiss="modal" @click="closeModal" :disabled="form.processing">
            {{ __('Fermer') }}
          </jet-secondary-button>
          <jet-secondary-button :disabled="form.processing" @click="loadPublishOffer(form.id,1)"  data-dismiss="modal" v-if="form.publish_status == 0 || form.publish_status == -1"  style="background-color: green;color:#fff">
            <div v-show="form.processing && form.choice == 1" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>{{ __('Publier') }}
          </jet-secondary-button>
          <jet-secondary-button :disabled="form.processing"  v-if="form.publish_status != -1" data-dismiss="modal" @click="rejectOffer(form.id,2)" style="background-color: #ffc107;color:#000;">
            <div v-show="form.processing && form.choice == 2" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            {{ __('Rejeter') }}
          </jet-secondary-button>
          
          <jet-secondary-button :disabled="form.processing" @click="loadUnpublishOffer(form.id,3)" v-if="form.publish_status == 1 || form.publish_status == -1" style="background-color: red;color:#fff" data-dismiss="modal">
            <div v-show="form.processing && form.choice == 3" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>{{ __('Retirer') }}
          </jet-secondary-button>
          <!--<jet-secondary-button data-dismiss="modal" @click="closeModal">
            Annuler
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" @click="checkSaving" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>-->
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
       
        <!-- Main row -->
        <div class="row pt-3">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->
            <div class="alert alert-success" v-if="$page.props.status!==null">
	              {{ $page.props.status }}
            </div>
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">{{ __('Liste des offres') }}</h3>

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
	                  <th><input type="checkbox"/></th>
                      <th>{{ __('ID') }}</th>
                      <th>{{ __('Titre Annonce') }}</th>
                      <th>{{ __('Infos annonce') }}</th>
                      <th>{{ __('Statut') }}</th>
                      <th>{{ __('Date') }}</th>
                      <th>{{ __('Entreprise') }}</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="data in offerData['data']">
	                  <td><input type="checkbox"/></td>
                      <td>{{ data['id'] }}</td>
                      <td>{{ data['title'] }}</td>
                      <td>{{ data['offers_details'] }}</td>
                      <td>
	                    <span class="badge badge-warning" v-if="data['publish_status'] == 0">{{ __('Non publié') }}</span>
	                    <span class="badge badge-success" v-if="data['publish_status'] == 1">{{ __('Publié') }}</span>
	                    <span class="badge badge-danger" v-if="data['publish_status'] == -1">{{ __('Rejété') }}</span>
                        <!--<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>-->
                      </td>
                      <td>
	                      {{ data['offer_duration'] }}
                      </td>
                       <td>
	                      {{ data['company_name'] }}
                      </td>
                      <td>
	                      
	                      <a href="#" @click="loadOffer(data.id_offer)"><i class="fas fa-info-circle" style="padding:5px;"></i></a>
			              <a href="#" @click="openDeleteOffer(data.id_offer)" v-if="$page.props.is_admin == 1"><i class="fas fa-trash" style="color:red;padding:5px;"></i></a>
			              <!--<a href="#" @click="loadUnpublishOffer(data.id_offer)" v-if="data['publish_status'] == 1"><i class="fas fa-eye-slash" style="color:red;"></i></a>
			              <a href="#" @click="loadPublishOffer(data.id_offer)" v-if="data['publish_status'] == 0"><i class="fas fa-eye" style="color:green;"></i></a>-->
	                      
                      </td>
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
                <!-- /.table-responsive -->
              </div>
              <Pagination :data="offerData" align="center" class="mt-2" @pagination-change-page="getResults" />
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
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
      modalunpub:null,
      modalpub:null,
      id_delete : 0,
      total_offer:0,
      activity_sector : {},
      study_level : {},
      contract_type: {},
      contract_duration: ['CDD', 'CDI'],
      offerData: {},
      editMode : 0,
      choice : 0,
      viewDataOffer : {},
      form: this.$inertia.form({
        //password: '',
        id : 0,
        offer_title:'',
        choice : 0,
        activity_sector:'',
        profile_details:'',
        location:'',
        contract_type:'',
        contract_duration:'',
        offer_details:'',
        study_level:'',
        offer_details:'',
        publish_status:0,
        admin_notes:""
        
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
            axios.get('/admin/ajax/offers?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
	                vm.total_offer = response.data['total'];
                    vm.offerData = response.data;
            });
      },
      openDeleteOffer(id){
	      
	      this.id_delete = id;
	      let el2 = document.querySelector('#deleteOffer')
	      this.modal2 = new bootstrap.Modal(el2)
	      this.modal2.show()
	      
      },
      loadOffer(id){
	      //this.viewDataOffer = data;
	     this.form.errors = {};
	     const filteredResult = this.offerData['data'].find((e) => e.id_offer == id);
	     
	     console.log(filteredResult);
	     
	     
	     this.form.offer_title=filteredResult['title'];
	     this.form.publish_status=filteredResult['publish_status'];
         this.form.profile_details=filteredResult['profile_details'];
         this.form.location=filteredResult['location'];
         this.form.contract_type=filteredResult['contract_type'];
         this.form.contract_duration=filteredResult['contract_duration'];
         this.form.offer_details=filteredResult['offers_details_more'];
         this.form.study_level=filteredResult['study_level'];
         this.form.id = filteredResult['id_offer'];
	      
	      
	      let el = document.querySelector('#openOffer')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()  
      },
	  closeModal(){
		  
		  //this.form.reset()
          this.modal.hide()
	  },
	  closeModalUnpubOffer(){
		  
		  //this.form.reset()
		  
          this.modalunpub.hide()
	  },
	  closeModalpubOffer(){
		  
		  //this.form.reset()
          this.modalpub.hide()
	  },
	  closeModal2(){
		  
          this.modal2.hide()
	  },
	  rejectOffer(id){
		  
		  
		  this.form['id'] = id;
		  this.form.choice = 2;
		  this.$swal.fire({
			  title: 'Confirmez vous le rejet de cette annonce ?',
			  text: "",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Oui',
			  cancelButtonText:'Non'
			}).then((result) => {
			  if (result.isConfirmed) {
				  
				 this.form.post(route('employer.reject.offer'), {
			        preserveScroll: true,
			        onSuccess: () => {this.modal.hide();this.getResults();},
			        //onError: () => this.$refs.password.focus(),
			        onFinish: () => {}/*this.form.reset()*/,
                });
			    /*Swal.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )*/
			  }
		  });
		  
	  },
	  loadUnpublishOffer(id){
		  
		  this.form['id'] = id;
		  this.form.choice = 3;
		  
		  this.$swal.fire({
			  title: 'Confirmez vous la retrait de cette annonce ?',
			  text: "",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Oui',
			  cancelButtonText:'Non'
			}).then((result) => {
			  if (result.isConfirmed) {
				  
				 this.form.post(route('employer.unpublish.offer'), {
			        preserveScroll: true,
			        onSuccess: () => {this.modal.hide();this.getResults();},
			        //onError: () => this.$refs.password.focus(),
			        onFinish: () => {}/*this.form.reset()*/,
                });
			    /*Swal.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )*/
			  }
		  });
		  
		  //let el = document.querySelector('#unpubOffer')
	      //this.modalunpub = new bootstrap.Modal(el)
	      //this.modalunpub.show()
		  
	  },
	  loadPublishOffer(id){
		  
		  this.form.choice = 1;
		  this.form['id'] = id;
          //this.$swal('Hello Vue world!!!');
          
          this.$swal.fire({
			  title: 'Confirmez vous la publication de cette annonce ?',
			  text: "",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Oui',
			  cancelButtonText:'Non'
			}).then((result) => {
			  if (result.isConfirmed) {
				  
				 this.form.post(route('employer.publish.offer'), {
			        preserveScroll: true,
			        onSuccess: () => { this.modal.hide();this.getResults();},
			        //onError: () => this.$refs.password.focus(),
			        onFinish: () => {}/*this.form.reset()*/,
                });
			    /*Swal.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )*/
			  }
		  })
          
          //let el = document.querySelector('#pubOffer')
	      //this.modalpub = new bootstrap.Modal(el)
	      //this.modalpub.show()
		  
	  },
	  unpublishOffer(){
		  
		  
		  
		  
		  //this.form['id'] = id;
		  this.form.post(route('employer.unpublish.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModalUnpubOffer();this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  },
	  publishOffer(){
		  
		  this.form.post(route('employer.publish.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModalpubOffer();this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
          
		  
	  },
	  removeOffer(){
		  this.form['id'] = this.id_delete;
		  this.form.post(route('employer.delete.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal2();this.getResults();this.id_delete = 0;},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  }
  }
})

</script>