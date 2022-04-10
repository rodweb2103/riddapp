<template>
  <Head title="Compte" />
   <div class="container-fluid">
	   
	   <jet-dialog-modal id="openOffer" maxWidth="lg">
        <template #title>
          Créer une annonce
        </template>

        <template #content>
          

          <div class="mt-4">
	          
	       <form>
		      <div class="row"> 
		       
		        <div class="col-6">
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">TITRE ANNONCE</label>
				    <input type="text" v-model="form.offer_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				    <jet-input-error :message="form.errors.offer_title" />
				  </div>
		        </div>
		        <div class="col-6">  
				  <div class="mb-3 form-check">
				    <label class="" for="exampleCheck1">SECTEUR D'ACTIVITÉ</label>
				    <select class="form-control" v-model="form.activity_sector">
				    </select>
				    <jet-input-error :message="form.errors.activity_sector" />
				  </div>
		        </div>
		      </div>
			  
			  <div class="row">
				  
				 <div class="col-6">
			  
					  <div class="">
					    <label class="" for="exampleCheck1">LOCALISATION</label>
					    <input type="text" v-model="form.location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					    <jet-input-error :message="form.errors.location" />
					  </div>
				 </div>
				 
				 <div class="col-6">
				  
					  <div class="mb-3 form-check">
					    <label class="" for="exampleCheck1">TYPE DE CONTRAT</label>
					    <select class="form-control" v-model="form.contract_type">
					    </select>
					    <jet-input-error :message="form.errors.contract_type" />
					  </div>
				 </div>
			  
			  
			  </div>
			  
			  <div class="row">
			    
			    <div class="col-6">
				  <div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">DURÉE CONTRAT</label>
				    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
				    <select class="form-control"  v-model="form.contract_duration">
					    <option selected disabled value>--</option>
					    <option value="CDD">CDD</option>
					    <option value="CDI">CDI</option>
				    </select>
				    <jet-input-error :message="form.errors.contract_duration" />
				  </div>
			    </div>
			    <div class="col-6">  
				  <div class="mb-3 form-check">
					    <label for="exampleInputEmail1" class="form-label">NIVEAU D'ÉTUDE</label>
					    <select class="form-control" v-model="form.study_level">
					    </select>
					    <jet-input-error :message="form.errors.study_level" />
			      </div>
			    </div>
			  
			  </div>
			  
			  <div class="row">
			    <div class="col-12">
				  <div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">DETAILS DE L'OFFRE</label>
				    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
				    <textarea class="form-control" v-model="form.offer_details" rows="10"></textarea>
				    <jet-input-error :message="form.errors.offer_details" />
				  </div>
			    </div>
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
            Annuler
          </jet-secondary-button>

          <jet-button class="btn btn-primary" @click="createOffer" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>
        </template>
      </jet-dialog-modal>

       
        <!-- /.row -->
        
        <div class="row pt-2">
	        
	        <div class="col-md-3">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Candidats</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
           
	        </div>
	        
	        <div class="col-md-3">
	            <div class="info-box mb-3 bg-danger">
	              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
	
	              <div class="info-box-content">
	                <span class="info-box-text">Offres postées</span>
	                <span class="info-box-number">114,381</span>
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	        </div>
            
            
            <!-- /.info-box -->
            
            

            <!--<div class="card">
              <div class="card-header">
                <h3 class="card-title">Browser Usage</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
	                
	                
                  
                </div>
              </div>
              <div class="card-footer p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      United States of America
                      <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      India
                      <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      China
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>-->
            <!-- /.card -->
            
            <!-- /.card -->
          
	        
        </div>
        
        <!-- /.card-body -->
              <div class="clearfix">
                <a @click="openOfferForm" class="btn btn-sm btn-info float-left">Créer une annonce</a>
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
                <h3 class="card-title">Dernières Offres</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
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
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              
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

<style scoped>
  .invalid-feedback{
	  
	  display: block !important;
  }
</style>

<script>
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
    JetButton
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
      activity_sector : [],
      study_level : [],
      form: this.$inertia.form({
        //password: '',
        offer_title:'',
        activity_sector:'',
        location:'',
        contract_type:'',
        contract_duration:'',
        offer_details:'',
        study_level:''
        
      })
    }
  },
  mounted(){
	  
	  axios.get('/activity/sector').then(response => {
		  
		  
		  this.activity_sector = response.data;
      });
      
      
      
      axios.get('/study/level').then(response => {
		  
		  
		  this.study_level = response.data;
      });  
  },
  methods:{
	  
	  openOfferForm() {
	      //this.form.password = '';
	
	      let el = document.querySelector('#openOffer')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()
	
	      //setTimeout(() => this.$refs.password.focus(), 250)
      },
	  closeModal(){
		  
		  this.form.reset()
          this.modal.hide()
	  },
	  createOffer(){
		  
		  this.form.post(route('employer.create.offer'), {
	        preserveScroll: true,
	        onSuccess: () => this.closeModal(),
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => this.form.reset(),
          });
	  }
  }
})
</script>
