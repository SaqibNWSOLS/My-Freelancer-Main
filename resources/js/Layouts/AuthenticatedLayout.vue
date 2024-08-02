

<template>
  
       
<AuthHeader />
      
           <div class="container ">
              <div class="max-w-screen-lg mx-auto">
               <div class="mt-8">
                  <slot />
               </div>
              </div>
           </div>
           <FooterApp :categories="categories" />
</template>
<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import AuthHeader from '@/Components/Auth/AuthHeader.vue'
import FooterApp from './../Components/Landing/Footer.vue'

 const props = defineProps({
    categories: {
        type: Array,
    },

 });
</script>