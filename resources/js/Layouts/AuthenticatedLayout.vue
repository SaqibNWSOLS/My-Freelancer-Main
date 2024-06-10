

<template>
  
       
<AuthHeader />
      
           <div class="container ">
              <div class="max-w-screen-lg mx-auto">
               <div class="mt-8">
                  <slot />
               </div>
              </div>
           </div>
</template>
<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import AuthHeader from '@/Components/Auth/AuthHeader.vue'
</script>