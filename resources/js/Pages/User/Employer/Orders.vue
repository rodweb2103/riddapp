<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>
    <orders-list/>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
import OrdersList from "@/Pages/User/Employer/OrdersList.vue"

export default defineComponent({
  components: {
    AppLayout,
    OrdersList
  }
});
</script>
