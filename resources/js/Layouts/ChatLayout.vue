

<template>
  
       
<AuthHeader />
      
           <div class="container bg-white ">
              <div class="">
               <div class="m-5" style="margin:10px">
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