<template>
  <Head title="Compte" />
  
  
   <div class="container-fluid">
	   
	   
	    <jet-dialog-modal id="openOffer">
	        <template #title>
	          Détails annonce
	        </template>
	
	        <template #content>
	          
	          <div class="mt-4 row">
		          
		          <div class="col-3">
			          <img :src="viewDataOffer['company_profile_photo']" style="width: 90px;"/>
		          </div>
		          
		          <div class="col-9">
			          <h3>{{ viewDataOffer['title'] }}</h3>
			          <div>{{ viewDataOffer['company_name'] }}</div>
			          <p class="mt-3">{{ viewDataOffer['offers_details_more'] }}</p>
			          <i class="fas fa-map-marker-alt"></i><span style="padding: 4px;">{{ viewDataOffer['offer_location'] }}</span>
		          </div>
		             <!--<div>Titre annonce : {{ viewDataOffer }}</div>{{ viewDataOffer }}
			         Confirmez vous la suppression de cette annonce ?-->  
		          
	          </div>
	        </template>
	
	        <template #footer>
	          <jet-button data-dismiss="modal" @click="closeModal">
	            Fermer
	          </jet-button>
	        </template>
         </jet-dialog-modal>
         
         <jet-dialog-modal id="deleteOffer">
	        <template #title>
	          Retirer son offre
	        </template>
	
	        <template #content>
	          
	          <div class="mt-4 text-center">
		          
		             Confirmez vous la suppression de votre offre ?
		              
		          
	          </div>
	        </template>
	
	        <template #footer>
	          <jet-secondary-button data-dismiss="modal" @click="closeModal2">
	            Non
	          </jet-secondary-button>
	          
	          <!--<jet-button @click="removeOffer">
	            Oui
	          </jet-button>-->
	          <jet-button class="btn btn-primary" @click="removeOffer()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
		            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
		              <span class="visually-hidden">Loading...</span>
		            </div>
		
		            Oui
             </jet-button>
	        </template>
         </jet-dialog-modal>
       
        <!-- /.row -->
        
        <!-- Main row -->
        <div class="row pt-5">
	      <div class="alert alert-success" v-if="$page.props.status!==null && $page.props.status!=='null'">
	              {{ $page.props.status }}
          </div>
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Mes Candidtatures</h3>

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
                      <th>ID Annonce</th>
                      <th>Titre Annonce</th>
                      <th>Entreprise</th>
                      <th>Libellé Annonce</th>
                      <th>Offre soumise il y'a</th>
                      <th>Statut Offre</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
	                    <tr v-for="data in offerData">
		                    <td>{{ data.id }}</td>
		                    <td>{{ data.title }}</td>
		                    <td>{{ data.company_name }}</td>
		                    <td>{{ data.offers_details }}</td>
		                    <td>{{ data.offer_date }}</td>
		                    <td>
			                    
			                    <span class="badge badge-success" v-if="data.offer_status == 1">Accepté</span>
			                    <span class="badge badge-danger" v-if="data.offer_status == 2">Rejeté</span>
			                    <span class="badge badge-warning" v-if="data.offer_status == 0">En attente</span>
			                    
		                    </td>
		                    <td>
			                    <a href="#" @click="loadOffer(data)"><i class="fas fa-eye" style="padding: 10px;"></i></a>
			                    <a href="#" @click="openDeleteOffer(data.offer_id)"><i class="fas fa-times-circle" style="color:red;padding: 10px;"></i></a>
			               </td>
		                    
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
              <Pagination :data="offerData" @pagination-change-page="getResults" />
             
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
	
	p{
		font-weight: unset !important;
		color: unset !important;
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
      id_delete : 0,
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
            axios.get('/myoffers?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
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