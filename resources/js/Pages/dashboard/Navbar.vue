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
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>
    
    
    <!--<Link :href="route('profile.show')">
		                <span class="icon"><i class="mdi mdi-account"></i></span>
                        <span>Profile</span>
                  </Link>
		           
                  <form @submit.prevent="logout">
                        <jet-dropdown-link as="button">
                            <span class="icon"><i class="mdi mdi-logout"></i></span>
                            <span>Log Out</span>
                        </jet-dropdown-link>
                  </form>-->
    
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <!--<i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>-->
          Account
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
	      <!--<Link :href="route('profile.show')" class="dropdown-item">-->
	      <jet-dropdown-link :href="route('profile.show')" class="dropdown-item">
	         <i class="far fa-comments"></i>
	         Profile
            <!--<div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>-->
          </jet-dropdown-link>
          <div class="dropdown-divider"></div>
          <form @submit.prevent="logout">
            <jet-dropdown-link as="button">
                <i class="far fa-comments"></i>
                Log Out
            </jet-dropdown-link>
          </form>
          <!--<a href="#" class="dropdown-item">
	         <i class="far fa-comments"></i>
	         Logout
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>-->
          <!--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
        </div>
      </li>
    </ul>

   
  </nav>
  <!-- /.navbar -->
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
export default {
  components: {
    Head,
    Link,
    JetDropdownLink
    
  },
  methods: {
	
    logout() {
      this.$inertia.post(route('logout'))
      
    },
  },

}
</script>

<style>

</style>