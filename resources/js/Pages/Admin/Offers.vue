<template>
  <app-layout title="Gestion des offres">
  
     <div class="container-fluid">
       
        <!-- Main row -->
        <div class="row pt-3">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Liste des offres</h3>

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
                      <th>ID</th>
                      <th>Titre annonce</th>
                      <th>Infos annonces</th>
                      <th>Statut publication</th>
                      <th>Date publication</th>
                      <th>Entreprise</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="data in offerData">
                      <td>{{ data['id'] }}</td>
                      <td>{{ data['title'] }}</td>
                      <td>{{ data['offers_details'] }}</td>
                      <td>
	                    <span class="badge badge-warning" v-if="data['publish_status'] == 0">Non publié</span>
	                    <span class="badge badge-success" v-if="data['publish_status'] == 1">Publié</span>
                        <!--<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>-->
                      </td>
                      <td>
	                      {{ data['offer_date'] }}
                      </td>
                       <td>
	                      {{ data['company_name'] }}
                      </td>
                      <td>
	                      
	                      <a href="#" @click="loadOffer(data.id)"><i class="fas fa-info-circle" style="padding: 10px;"></i></a>
			              <a href="#" @click="openDeleteOffer(data.id)"><i class="fas fa-trash" style="color:red;padding: 10px;"></i></a>
			              <a href="#" @click="unpublishOffer(data.id)" v-if="data['publish_status'] == 1"><i class="fas fa-eye-slash" style="color:red;padding: 10px;"></i></a>
			              <a href="#" @click="publishOffer(data.id)" v-if="data['publish_status'] == 0"><i class="fas fa-eye" style="color:green;padding: 10px;"></i></a>
	                      
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
	  
	   
      
      
  },
  methods:{
	  
	  getResults(page = 1) {
		    let vm = this;
            axios.get('/admin/ajax/offers?page=' + page)
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