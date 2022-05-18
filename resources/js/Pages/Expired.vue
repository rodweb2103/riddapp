<template>
  <app-layout title="Expired">
  
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center container">
  
	    <div><i class="fas fa-frown" style="font-size: 90px;color:orange"></i></div>
	    <div class="container-fluid text-center error mt-4" v-html="$page.props['status']">
		    
	    </div>
	    <Link href="/offers/fee" class="btn btn-primary mt-4" style="background-color:green !important">Je renouvelle mon pack</Link>
    </div>
  </app-layout>
</template>

<style>
	
	.error > p{
		
		color: #000 !important;
	}
	
</style>

<script>


	
	
import { defineComponent } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
import { Head,Link } from '@inertiajs/inertia-vue3';
//import Welcome from "@/Pages/Admin/Welcome.vue"
//import Welcome from "@/Jetstream/Welcome.vue"

export default defineComponent({
  components: {
    AppLayout,
    Link
    //Welcome
  }
});
</script>