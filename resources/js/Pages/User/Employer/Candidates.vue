<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>
    <candidates-list/>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
import CandidatesList from "@/Pages/User/Employer/CandidatesList.vue"

export default defineComponent({
  components: {
    AppLayout,
    CandidatesList
  }
});
</script>
