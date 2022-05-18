<template>
  <app-layout title="Dashboard">
    
    <div class="container-fluid">
	           
	           <!--<ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>-->
    </div>
  </app-layout>
</template>

<style>

.note-modal .modal-dialog {
	
	margin-top: 90px !important;
}

.modal-backdrop{
	
	display: none !important;
}

.ck-content{
           height: 500px;
       }

</style>

<script>
//import 'babel-polyfill';
//import myUpload from 'vue-image-crop-upload';
import { defineComponent,ref } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
//import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
//import Editor from 'ckeditor5-custom-build/src/ckeditor';
//import Editor from "@/ckeditor.js"
//import Image from '@ckeditor/ckeditor5-image/src/image';
//import ImageResizeEditing from '@ckeditor/ckeditor5-image/src/imageresize/imageresizeediting';
//import ImageResizeHandles from '@ckeditor/ckeditor5-image/src/imageresize/imageresizehandles';
//import LinkImage from '@ckeditor/ckeditor5-link'

//import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
//import Base64UploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/base64uploadadapter';
//import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
//import EssentialsPlugin from '@ckeditor/ckeditor5-essentials/src/essentials';
//import UploadAdapterPlugin from '@ckeditor/ckeditor5-adapter-ckfinder/src/uploadadapter';
//import AutoformatPlugin from '@ckeditor/ckeditor5-autoformat/src/autoformat';
//import Image from '@ckeditor/ckeditor5-image/src/image';
//import ImageResizeEditing from '@ckeditor/ckeditor5-image/src/imageresize/imageresizeediting';
//import ImageResizeHandles from '@ckeditor/ckeditor5-image/src/imageresize/imageresizehandles';

//import Image from '@ckeditor/ckeditor5-image/src/image';
//import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';




class MyUploadAdapter {
   
    constructor( loader ) {
		/**
		 * `FileLoader` instance to use during the upload.
		 *
		 * @member {module:upload/filerepository~FileLoader} #loader
		 */
		this.loader = loader;
	}

	/**
	 * Starts the upload process.
	 *
	 * @see module:upload/filerepository~UploadAdapter#upload
	 * @returns {Promise}
	 */
	upload() {
		return new Promise( ( resolve, reject ) => {
			const reader = this.reader = new window.FileReader();

			reader.addEventListener( 'load', () => {
				resolve( { default: reader.result } );
			} );

			reader.addEventListener( 'error', err => {
				reject( err );
			} );

			reader.addEventListener( 'abort', () => {
				reject();
			} );

			this.loader.file.then( file => {
				reader.readAsDataURL( file );
			} );
		} );
	}

	/**
	 * Aborts the upload process.
	 *
	 * @see module:upload/filerepository~UploadAdapter#abort
	 * @returns {Promise}
	 */
	abort() {
		this.reader.abort();
	}
      
}


function MyCustomUploadAdapterPlugin( editor ) {
    editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        // Configure the URL to the upload script in your back-end here!
        return new MyUploadAdapter( loader );
    };
}



export default defineComponent({
  components: {
    AppLayout,
   
  },
  data() {
    return {
	  imageSrc: "",
	  imageSrcProfile: this.$page.props['image_profile'],//"/img/user4-128x128.jpg",
      croppedImageSrc: "",
      modal: null,
      //editor:Editor,
      editorData: '',
      editorConfig: {
            extraPlugins: [MyCustomUploadAdapterPlugin],
            //plugins:[Image, ImageResizeEditing, ImageResizeHandles],
            toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList']
            
      },
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
	        onSuccess: (data) => {/*vm.formUser.reset()*/},
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