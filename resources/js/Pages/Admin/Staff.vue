<template>
  <app-layout title="Gestion compte employeur">
  
     <div class="container-fluid">
	    
	    
	    
	     <jet-dialog-modal id="unsuspendAccount">
	        <template #title>
	          {{ __('Activer un compte') }}
	        </template>
	
	        <template #content>
	          
	          <div class="mt-4">
		          
			         {{ __('Confirmez vous l\'activation de ce compte ?') }} 
		          
	          </div>
	        </template>
	
	        <template #footer>
	          <jet-secondary-button data-dismiss="modal" @click="closeModal4">
	            {{ __('Non') }}
	          </jet-secondary-button>
	          
	          <jet-button class="btn btn-primary" @click="unsuspendAccount()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
	            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
	              <span class="visually-hidden">Loading...</span>
	            </div>
	
	            {{ __('Oui') }}
	          </jet-button>
	        </template>
        </jet-dialog-modal>
	    
	    <jet-dialog-modal id="suspendAccount">
	        <template #title>
	          {{ __('Suspendre un compte') }}
	        </template>
	
	        <template #content>
	          
	          <div class="mt-4">
		          
			         {{ __('Confirmez vous la suspension de ce compte ?') }}   
		          
	          </div>
	        </template>
	
	        <template #footer>
	          <jet-secondary-button data-dismiss="modal" @click="closeModal">
	            {{ __('Non') }}
	          </jet-secondary-button>
	          
	          <jet-button class="btn btn-primary" @click="suspendAccount()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
	            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
	              <span class="visually-hidden">Loading...</span>
	            </div>
	
	            {{ __('Oui') }}
	          </jet-button>
	        </template>
        </jet-dialog-modal>
        
        <jet-dialog-modal id="deleteAccount">
	        <template #title>
	          {{ __('Supprimer un compte') }}
	        </template>
	
	        <template #content>
	          
	          <div class="mt-4">
		          
			         {{ __('Confirmez vous la suppression de ce compte ?') }}   
		          
	          </div>
	        </template>
	
	        <template #footer>
	          <jet-secondary-button data-dismiss="modal" @click="closeModal2">
	            {{ __('Non') }}
	          </jet-secondary-button>
	          
	          <jet-button class="btn btn-primary" @click="deleteAccount()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
	            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
	              <span class="visually-hidden">Loading...</span>
	            </div>
	
	            {{ __('Oui') }}
	          </jet-button>
	        </template>
        </jet-dialog-modal>
	     
	    <jet-dialog-modal id="openOffer" maxWidth="lg">
        <template #title>
          {{ __('Éditer un compte staff') }}
        </template>

        <template #content>
          
          <div class="mt-4">
	          
	          
	          
	       <form id="msform">
		      <div class="row"> 
		       
		        <div class="col-12">
				  <div class="mb-3">
				    <input type="text" :placeholder="__('Email')" v-model="form.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.email" />
				  </div>
		        </div>
		        <!--<div class="col-12">
				  <div class="mb-3">
				    <input type="text" placeholder="Pseudo" v-model="form.user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.user_name" />
				  </div>
		        </div>-->
		        
		        <div class="col-12">
				  <div class="mb-3">
				    <input type="text" :placeholder="__('Nom')" v-model="form.first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.first_name" />
				  </div>
		        </div>
		        
		        <div class="col-12">
				  <div class="mb-3">
				    <input type="text" :placeholder="__('Prénom')" v-model="form.last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.last_name" />
				  </div>
		        </div>
		        
		        <!--<div class="col-12">
				  <div class="mb-3">
				    <input type="password" placeholder="Mot de passe" v-model="form.password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.password" />
				  </div>
		        </div>
		        
		        <div class="col-12">
				  <div class="mb-3">
				    <input type="password" placeholder="Mot de passe confirmation" v-model="form.password_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0px;">
				    <jet-input-error :message="form.errors.password_confirmation" />
				  </div>
		        </div>-->
		        
		      </div>
			  
           </form>
          </div>
        </template>

        <template #footer>
          <jet-secondary-button data-dismiss="modal" @click="closeModal3">
            {{ __('Annuler') }}
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" style="background-color: green !important;" @click="checkSaving" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            {{ __('Confirmer') }}
          </jet-button>
          
          
        </template>
      </jet-dialog-modal>
       
        <div class="clearfix mt-4">
           <a @click="openOfferForm" class="btn btn-sm btn-info float-left" style="background-color: green !important;">{{ __('Éditer un compte staff') }}</a>
        </div>
        <!-- Main row -->
        <div class="row pt-3">
          <!-- Left col -->
          <div class="alert alert-success" v-if="$page.props.status!==null">
	              {{ $page.props.status }}
          </div>
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">{{ __('Liste des comptes staff') }}</h3>

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
                      <th>{{ __('NOM') }}</th>
                      <th>{{ __('PRÉNOM') }}</th>
                      <th>{{ __('EMAIL') }}</th>
                      <!--<th>PSEUDO</th>-->
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="data in offerData">
                      <td>{{ data['last_name'] }}</td>
                      <td>{{ data['first_name'] }}</td>
                      <td>
                        {{ data['email'] }}
                      </td>
                      <!--<td>
                        {{ data['user_name'] }}
                      </td>-->
                      <td>
	                      
	                      <a href="#" @click="warningUnSuspend(data.id)" v-if="data.is_suspended == 1"><i class="fas fa-lock" style="padding: 10px;"></i></a>
	                      <a href="#" @click="warningSuspend(data.id)" v-if="data.is_suspended == 0"><i class="fas fa-unlock" style="padding: 10px;"></i></a>
			              <a href="#" @click="warningDelete(data.id)"><i class="fas fa-trash" style="color:red;padding: 10px;"></i></a>
	                      
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
                <Pagination :data="offerData" @pagination-change-page="getResults" align="center" class="mt-2" />
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

<style>
	.invalid-feedback{
		
		display: block !important;
	}
	
</style>
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
      viewDataOffer : {},
      form: this.$inertia.form({
        //password: '',
        id : 0,
        email:'',
        user_name:'',
        first_name:'',
        last_name:'',
        password:'',
        password_confirmation:'',
       
        
      })
    }
  },
  mounted(){
	  
	  
	  this.getResults();
	  
	   
      
      
  },
  methods:{
	  
	  getResults(page = 1) {
		    let vm = this;
            axios.get('/admin/ajax/staff/users?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
	                vm.total_offer = response.data['total'];
                    vm.offerData = response.data['data'];
            });
      },
	  checkSaving(){
		 let vm = this;
		 /*if(vm.editMode == 1){
			 
			 
	     this.form.post(route('employer.edit.offer'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal(); this.form.reset();this.editOffer=0;},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset(),
          });
			 
		 
		 }else{*/
			 
	     this.form.post(route('ajax_staff_create'), {
	        preserveScroll: true,
	        onSuccess: () => { this.modal3.hide(); this.form.reset();this.getResults();},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
			 
			 //vm.createOffer();
		 /*}*/  
	  },
      warningSuspend(id){
	      
	      this.id_delete = id;
	      let el = document.querySelector('#suspendAccount')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()
	      
      },
      warningDelete(id){
	      
	      this.id_delete = id;
	      let el2 = document.querySelector('#deleteAccount')
	      this.modal2 = new bootstrap.Modal(el2)
	      this.modal2.show();
	      
      },
      openOfferForm(){
	      
	      let el3 = document.querySelector('#openOffer')
	      this.modal3 = new bootstrap.Modal(el3)
	      this.modal3.show();
      },
      warningUnSuspend(id){
	      
	      this.id_delete = id;
	      let el4 = document.querySelector('#unsuspendAccount')
	      this.modal4 = new bootstrap.Modal(el4)
	      this.modal4.show();
      },
	  closeModal(){
		  
		  //this.form.reset()
          this.modal.hide()
	  },
	  unsuspendAccount(){
		  
		  this.form['id'] = this.id_delete;
		  this.form.post(route('ajax_staff_unsuspend'), {
	        preserveScroll: true,
	        onSuccess: () => { this.modal4.hide();this.getResults();this.id_delete = 0;},
	        onFinish: () => {}/*this.form.reset()*/,
          });
	  },
	  suspendAccount(){
		  this.form['id'] = this.id_delete;
		  this.form.post(route('ajax_staff_suspend'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal();this.getResults();this.id_delete = 0;},
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  },
	  deleteAccount(){
		  
		  this.form['id'] = this.id_delete;
		  this.form.post(route('ajax_staff_delete'), {
	        preserveScroll: true,
	        onSuccess: () => { this.closeModal2();this.getResults();this.id_delete = 0;},
	        onFinish: () => {}/*this.form.reset()*/,
          });
		  
	  },
	  closeModal2(){
		  
          this.modal2.hide()
	  },
	  closeModal3(){
		  
          this.modal3.hide()
	  },
	  closeModal4(){
		  
          this.modal4.hide()
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