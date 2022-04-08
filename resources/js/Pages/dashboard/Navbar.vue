<template>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
          
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Offres</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <!--<form @submit.prevent="submit">-->
		        <div class="d-flex justify-content-between">
		          <Link
		                @click="submit"
			            method="post"
			            as="button"
			            class="btn btn-link nav-link"
			            ><i class="fas fa-sign-out-alt"></i></Link
                    >
		        </div>
	     <!--</form>-->
        <!--<a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>-->
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->
</template>

<script>
import { defineComponent } from "vue";
//import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue"
//import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue"
//import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
//import JetButton from "@/Jetstream/Button.vue"
import { Head, Link } from "@inertiajs/inertia-vue3"

export default defineComponent({
  components: {
    Head,
    //JetAuthenticationCard,
    //JetAuthenticationCardLogo,
    //JetButton,
    //JetDropdownLink,
    Link
  },

  props: {
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
	      is_admin: 0
      })
    };
  },

  methods: {
	
    submit() {
      this.form.post(this.route("logout"));
    }
  },

  
  
  
  
  
})
</script>

<style>
</style>