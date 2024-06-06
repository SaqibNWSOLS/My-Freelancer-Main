<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Header from './../Components/Admin/Header.vue'
import Sidebar from './../Components/Admin/Sidebar.vue'
import Footer from './../Components/Admin/Footer.vue'

</script>

<template>

  <main class="page-wrapper">

      <div class="page-body-wrapper xl:w-full 4xl:w-[calc(100%_-_14.375rem)] w-[calc(100%_-_15.8125rem)] ml-auto transition-all duration-300">
        <Header />
   <Sidebar />
     <div class="page-body">

            <slot />
      
     </div>
     </div>
     <Footer />
     </main> 
</template>
<style src="@/admin_assets/css/style.css"></style>
<style src="@/admin_assets/css/vendors/custom-select.css"></style>
