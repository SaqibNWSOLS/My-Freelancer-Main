

<template>
  <main class="page-wrapper">
    <div class="page-body-wrapper xl:w-full 4xl:w-[calc(100%_-_14.375rem)] w-[calc(100%_-_15.8125rem)] ml-auto transition-all duration-300">
      <Header>
      <template v-slot:header-content>
        <!-- This slot will be filled by the page that uses the admin layout -->
        <slot name="header-content"></slot>
      </template>
    </Header>
      <Sidebar />
      <div class="page-body">
        <div class="grid grid-cols-12 justify-center ">
          <slot />
        </div>
      </div>
    </div>
    <Footer />
  </main> 
</template>
<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Header from './../Components/Admin/Header.vue'
import Sidebar from './../Components/Admin/Sidebar.vue'
import Footer from './../Components/Admin/Footer.vue'
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
  font-family: 'Poppins', sans-serif !important;
}
.dt-paging-button.current{
    background-color: red !important;
    color: white !important;
}
div.dt-container .dt-paging .dt-paging-button {
    padding: 4px 11px !important;
    color: white !important;
    border-radius: 54px !important;
     background-color: #33bfbf ;
}

</style>

<style src="@/admin_assets/css/admin.css"></style>

<style src="@/admin_assets/css/style.css"></style>
<style src="@/admin_assets/css/vendors/custom-select.css"></style>

<script>
const  baseUrl=window.Laravel.baseUrl

export default {
  name: 'AdminScripts',
  mounted() {
    this.loadScript(baseUrl+'admin_assets/js/feather.min.js');
    this.loadScript(baseUrl+'admin_assets/js/feather-custom.js');
    this.loadScript(baseUrl+'admin_assets/js/custom-select.js');
    this.loadScript(baseUrl+'admin_assets/js/sidebar.js');
    this.loadScript(baseUrl+'admin_assets/js/script.js');
  },
  methods: {
    loadScript(src) {
      const script = document.createElement('script');
      script.src = src;
      script.async = true;
      document.body.appendChild(script);
    }
  }
}
</script>
