<template>
  <Head title="Compte" />
  
   <div class="container-fluid">
	   
	           
        <!-- Main row -->
        <div class="row pt-2">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">{{ __('Achats entreprise') }}</h3>

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
                      <th>{{ __('ID Annonce') }}</th>
                      <th>{{ __('Entreprise') }}</th>
                      <th>{{ __('Pack') }}</th>
                      <th>{{ __('Date transaction') }}</th>
                    </tr>
                    </thead>
                    <tbody>
	                    <tr v-for="data in offerData['data']">
		                    <td>{{ data.id }}</td>
		                    <td>{{ data.company_name }}</td>
		                    <td>{{ data.pack_name }}</td>
		                    <td>{{ data.date_transaction }}</td>
	                    </tr>
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
      id_delete : 0,
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
        
      })
    }
  },
  mounted(){
	  
	  
	  this.getResults();
	        
      
  },
  methods:{
	  
	  getResults(page = 1) {
		    let vm = this;
            axios.post('/ajax/transaction/admin?page=' + page)
                .then(response => {
	                
	                //console.log(response.data);
                    vm.offerData = response.data;
            });
      }
  }
})
</script>
