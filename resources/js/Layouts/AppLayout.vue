<template>
  <div>
    <Head :title="title" />
    <!--<div class="alert-box" style="background: linear-gradient(74deg, rgb(255, 115, 0) 27%, rgb(255, 199, 0)), rgb(255, 255, 255);">
           <span class="badge">Announcement</span> Some Text
    </div>-->
    <div class="wrapper">
      
	      <!--<Preloader></Preloader>-->
	      <Navbar></Navbar>
	      <Sidebar></Sidebar>
	
	      <div class="content-wrapper">
	        
	        <!--<ContentHeader></ContentHeader>-->
	
	        <section class="content">
	          <!--<div class="container-fluid my-5">-->
	            
	            <!-- Page Content -->
			    <!--<main class="container my-5">-->
			      <slot></slot>
			    <!--</main>-->
	            
	          <!--</div>-->
	        </section>
	        
	      </div>
	      
	      <Footer></Footer>
	      <ControlSidebar></ControlSidebar>
      
    </div>

    
  </div>
</template>

<script>

import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'


//import AppLayout from '@/Pages/AppLayout.vue'

import $ from 'jquery'
import "../../../node_modules/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"
import "../../../node_modules/admin-lte/plugins/select2/css/select2.min.css"
import Preloader from "@/Pages/dashboard/Preloader.vue"
import ContentHeader from "@/Pages/dashboard/ContentHeader.vue"
//import ExampleForm from "@/Pages/components/ExampleForm.vue"
import Navbar from "@/Pages/dashboard/Navbar.vue";
import Sidebar from "@/Pages/dashboard/Sidebar.vue";
import Footer from "@/Pages/dashboard/Footer.vue";
import ControlSidebar from "@/Pages/dashboard/ControlSidebar.vue"



export default {
  props: {
    title: String,
  },

  components: {
    Head,
    JetApplicationLogo,
    JetBanner,
    JetApplicationMark,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    Link,
    Preloader,
    ContentHeader,
    //ExampleForm,
    Navbar,
    Sidebar,
    Footer,
    ControlSidebar
  },

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },
  mounted(){
	 
	 this.initializeSelect2();  
  },
  methods: {
	
	initializeSelect2() {
      //Initialize Select2 Elements
      $(".select2").select2();
      //Initialize Select2 Elements
      $(".select2bs4").select2({
        theme: "bootstrap4",
      });
    },
    switchToTeam(team) {
      this.$inertia.put(route('current-team.update'), {
        'team_id': team.id
      }, {
        preserveState: false
      })
    },

    //logout() {
    //  this.$inertia.post(route('logout'));
    //},
  },

  computed: {
    path() {
      return window.location.pathname
    }
  }
}
</script>
