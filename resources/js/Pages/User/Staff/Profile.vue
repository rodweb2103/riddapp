<template>
  <app-layout title="Dashboard">
    
    <div class="container-fluid">
	    
	    
	    <jet-dialog-modal id="loadImage">
        <template #title>
          Charger une image
        </template>
      
        <template #content>
          
          <div class="mt-4">
	             <!--{{ $page.props['user'] }} ====-->
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
          
          <jet-button class="btn btn-primary" style="background-color: green !important;" @click="uploadImage()" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
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
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
	             
	             
	              
	              <i @click="loadImage" class="fas fa-user-circle img-circle elevation-2" style="font-size: 70px;" v-if="imageSrcProfile==''"></i>
                  <img v-if="imageSrcProfile!=''" style="border: unset !important;" class="profile-user-img img-fluid img-circle" @click="loadImage" :src="imageSrcProfile" alt="User profile picture">
                  
                </div>

                <h1 class="profile-username text-center">{{ $page.props['user']['first_name'] }} {{ $page.props['user']['last_name'] }}</h1>

                <!--<h3 class="profile-username text-center">Nina Mcintire</h3>
                <p class="text-muted text-center">Software Engineer</p>-->

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
                      <!--<div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Pseudo</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputName" placeholder="Name" v-model="formUser.email">
                        </div>
                      </div>-->
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" v-model="formUser.email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Mot de passe</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <!--<div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label" style="font-weight: unset !important;">Confirmer mot de passe</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="inputName2" placeholder="Name">
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
                          <jet-button class="btn btn-primary"  :class="{ 'text-white-50': formUser.processing }" :disabled="formUser.processing" style="background-color: green !important;">
				            <div v-show="formUser.processing" class="spinner-border spinner-border-sm" role="status">
				              <span class="visually-hidden">Loading...</span>
				            </div>
				
				            {{ __("Mettre à jour") }}
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
      formUser: this.$inertia.form({
	    id:this.$page.props['user']['id'],
	    first_name : this.$page.props['user']['first_name'],
	    //company_name : this.$page.props['user']['company_name'],
	    //company_location : this.$page.props['user']['company_location'],
	    //company_about : this.$page.props['user']['company_about'],
	    //company_website : this.$page.props['user']['company_website'],
	    last_name : this.$page.props['user']['last_name'],
	    user_name : this.$page.props['user']['user_name'],
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
	        onSuccess: (data) => {vm.formUser.reset()},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
	      
      },
      uploadImage() {
        let vm = this;
        this.$refs.cropper.getCroppedCanvas().toBlob(function (blob) {
	        
	      vm.form['avatar'] = blob;
	      console.log(blob);
	      
	      vm.form.post(route('admin.image.upload'), {
	        preserveScroll: true,
	        onSuccess: (data) => { vm.closeModal();vm.imageSrcProfile=data.props['status'];},
	        //onError: () => this.$refs.password.focus(),
	        onFinish: () => {}/*this.form.reset()*/,
          });
          
          /*let formData = new FormData()
          // Add name for our image
          formData.append("name", "image-name-" + new Date().getTime())

          // Append image file
          formData.append("file", blob)

          axios
            .post("/api/store", formData)
            .then(response => {
              console.log(response.data)
            })
            .catch(function (error) {
              console.log(error)
            })*/
        })
      },

			
  }
});
</script>