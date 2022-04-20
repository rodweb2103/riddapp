<template>
  <app-layout title="Dashboard">
    
    <div class="container-fluid">
	    
	    
	    
	    
	    
	    <jet-dialog-modal id="loadImage">
        <template #title>
          Charger une image
        </template>
      
        <template #content>
          
          <div class="mt-4">
	             <!--{{ $page.props['user'] }}-->
		        <vue-cropper v-if="imageSrc!=''"
				  class="mr-2 mb-4"
				  style="height: 190px;"
				  ref="cropper"
				  :guides="true"
				  :src="imageSrc"
				></vue-cropper>  
			    <input type="file" ref="fileupload" name="image" accept="image/*" @change="setImage"/>
			    
			    <!--<progress v-if="form.progress" :value="form.progress.percentage" max="100">
			      {{ form.progress.percentage }}%
			    </progress>-->
	            
          </div>
        </template>

        <template #footer>
         <jet-secondary-button data-dismiss="modal" @click="closeModal">
            Annuler
          </jet-secondary-button>
          
          <jet-button class="btn btn-primary" @click="uploadImage()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Confirmer
          </jet-button>
        </template>
      </jet-dialog-modal>
	   
        <div class="row pt-5">
          <div class="col-md-3">
            <!-- Profile Image -->
            <!--{{ $page.props['candidate_details'] }}-->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
	             
                  <!--<img class="profile-user-img img-fluid img-circle" @click="loadImage" :src="imageSrcProfile" alt="User profile picture">-->
                  
                  
                  <i @click="loadImage" class="fas fa-user-circle img-circle elevation-2" style="font-size: 70px;" v-if="imageSrcProfile==''"></i>
                  <img v-if="imageSrcProfile!=''" class="profile-user-img img-fluid img-circle" @click="loadImage" :src="imageSrcProfile" alt="User profile picture">
                  
                </div>

                <h1 class="profile-username text-center">{{ $page.props['user']['first_name'] }} {{ $page.props['user']['last_name'] }}</h1>
                <p class="text-muted text-center" v-if="$page.props['user']['user_name']!=''">@{{ $page.props['user']['user_name'] }}</p>

              </div>
              <!-- /.card-body -->
            </div>
            
            <div class="card card-primary" style="padding: unset !important;">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Domaine de Formation</strong>

                <p class="text-muted">
                  {{ $page.props['candidate_details']['activity_sector_company_user']['activity_sector_name'] }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>Adresse</strong>

                <p class="text-muted">{{ $page.props['candidate_details']['city'] }}, {{ $page.props['candidate_details']['country_user']['name'] }}</p>

                <hr>
                <input type="file" @change="uploadPDF" @input="form.pdf = $event.target.files[0]" ref="cv_upload" style="display: none;"/>
                <strong><i class="fas fa-pencil-alt mr-1"></i> CV</strong>

                <p class="text-muted" v-if="$page.props['candidate_details']['cv_profile'] == null || $page.props['candidate_details']['cv_profile'] == ''">
	                
	                
	                <div>
		                <div>Aucun CV disponible<i class="fas fa-upload" @click="loadPDF"></i></div>
		                
		                
		                
		            </div>
	                
                  <!--<span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>-->
                </p>
                <p>
	                {{ $page.props['file_cv'] }} <i class="fas fa-upload" @click="loadPDF"></i> 
	                
                </p>
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
					      {{ form.progress.percentage }}%
			    </progress>

                <hr>

                <!--<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <!--<ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>-->
                <label>Éditer vos informations personnelles</label>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" @submit.prevent="updateProfile">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Pseudo</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputName" placeholder="" v-model="formUser.user_name">
                          <div v-if="formUser.errors.user_name" style="color:red;">{{ formUser.errors.user_name }}</div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmail" placeholder="" v-model="formUser.email">
                           <div v-if="formUser.errors.email" style="color:red;">{{ formUser.errors.email }}</div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Nom</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmail" placeholder="" v-model="formUser.last_name">
                           <div v-if="formUser.errors.last_name" style="color:red;">{{ formUser.errors.last_name }}</div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Prénom</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmail" placeholder="" v-model="formUser.first_name">
                           <div v-if="formUser.errors.first_name" style="color:red;">{{ formUser.errors.first_name }}</div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Mot de passe</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="inputName2" placeholder="" v-model="formUser.password">
                        </div>
                      </div>
                      <!--<div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Confirmer mot de passe</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="inputName2" placeholder="" v-model="formUser.password_confirmation">
                        </div>
                      </div>-->
                      <!--<div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>-->
                      <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                          <!--<button type="submit" class="btn btn-danger">Mettre à jour</button>-->
                           <jet-button class="btn btn-primary"  :class="{ 'text-white-50': formUser.processing }" :disabled="formUser.processing">
				            <div v-show="formUser.processing" class="spinner-border spinner-border-sm" role="status">
				              <span class="visually-hidden">Loading...</span>
				            </div>
				
				            Mettre à jour
				          </jet-button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
  
    <!--<template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>-->
    <!--<welcome />-->
  </app-layout>
</template>

<style type="text/css">
 
 .profile-user-img {
	 border: unset !important;
 }

</style>

<script>
	
	

//import 'babel-polyfill';
import myUpload from 'vue-image-crop-upload';
import { defineComponent,ref } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
//import Welcome from "@/Pages/Welcome.vue"
//import Welcome from "@/Jetstream/Welcome.vue"
import VueCropper from 'vue-cropperjs';
import 'cropperjs/dist/cropper.css';

import JetActionSection from '@/Jetstream/ActionSection.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import JetButton from '@/Jetstream/Button.vue'


export default defineComponent({
  components: {
    AppLayout,
    VueCropper,
    JetActionSection,
    JetDangerButton,
    JetDialogModal,
    JetInput,
    JetInputError,
    JetSecondaryButton,
    JetButton,
    //Welcome
  },
  data() {
    return {
	  imageSrc: "",
	  imageSrcProfile: this.$page.props['image_profile'],//"/img/user4-128x128.jpg",
      croppedImageSrc: "",
      modal: null,
      modal2: null,
      pdfFile:'',
      formUser: this.$inertia.form({
	    id : this.$page.props['user']['id'],
	    user_name : this.$page.props['user']['user_name'],
	    first_name : this.$page.props['user']['first_name'],
	    last_name : this.$page.props['user']['last_name'],
	    email : this.$page.props['user']['email'],
	    password : '',
	    //password_confirmation : '',
        //password: '',
        //id : 0,
        //offer_title:'',
        //activity_sector:'',
        //location:'',
        //contract_type:'',
        //contract_duration:'',
        //offer_details:'',
        //study_level:'',
        //offer_details:''
        
      }),
      form: this.$inertia.form({
	    pdf : '',
	    avatar : ''
        //password: '',
        //id : 0,
        //offer_title:'',
        //activity_sector:'',
        //location:'',
        //contract_type:'',
        //contract_duration:'',
        //offer_details:'',
        //study_level:'',
        //offer_details:''
        
      })
    }
  },
  computed:{
	  
	  imageSrcProfile(){
		  
		  //console.log(this.$page.props['image_profile']);
		  //return this.$page.props['profile_photo_url'];
	  }  
  },
  methods: {
	  
	  closeModal(){
		  
          this.modal.hide()
	  },
	  closeModal2(){
		  
		  this.modal2.hide()
	  },
      loadPDF(){
	      
	      this.$refs.cv_upload.click();
	      //let el = document.querySelector('#loadPDF');
	      //this.modal2 = new bootstrap.Modal(el)
	      //this.modal2.show()
	      
      },
	  loadImage(){
	      
	      let el = document.querySelector('#loadImage')
	      this.modal = new bootstrap.Modal(el)
	      this.modal.show()
	      
      },
	  chooseFile(){
		  
		  this.$refs.fileupload.click();
		  
	  },
	  setImage: function (e) {
        const file = e.target.files[0]
        if (!file.type.includes("image/")) {
          alert("Please select an image file")
          return
        }
        if (typeof FileReader === "function") {
          const reader = new FileReader()
          reader.onload = event => {
            this.imageSrc = event.target.result
            
            

            // Rebuild cropperjs with the updated source
            //this.$refs.cropper.replace(event.target.result)
          }
          reader.readAsDataURL(file)
        } else {
          alert("Sorry, FileReader API not supported")
        }
      },
      cropImage() {
        // Get image data for post processing, e.g. upload or setting image src
        this.croppedImageSrc = this.$refs.cropper.getCroppedCanvas().toDataURL()
      },
      updateProfile(){
	      
	      this.formUser.post(route('profile.update'), {
	        preserveScroll: true,
	        onSuccess: (data) => {this.formUser['password'] = ''},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
	      
      },
      uploadPDF(){
	      
	      let vm = this;
	      //this.$refs.cropper2.getCroppedCanvas().toBlob(function (blob) {
		        
		      //vm.form['pdf'] = blob;
		      //console.log(blob);
		      
		      vm.form.post(route('profile.pdf.upload'), {
		        preserveScroll: true,
		        onSuccess: (data) => {vm.pdfFile=data.props['status'];},
		        //onError: () => this.$refs.password.focus(),
		        onFinish: () => {}/*this.form.reset()*/,
	          });
          
          //})
	      
      },
      uploadImage() {
        let vm = this;
        this.$refs.cropper.getCroppedCanvas().toBlob(function (blob) {
	        
	      vm.form['avatar'] = blob;
	      console.log(blob);
	      
	      vm.form.post(route('profile.image.upload'), {
	        preserveScroll: true,
	        onSuccess: (data) => { vm.closeModal();vm.imageSrcProfile=data.props['status'];},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
          
        })
      },

			
  }
});
</script>