

<template>
 <SweetAlert v-if="flash?.success"
                type="success"
                :title="flash?.title"
                :text="flash?.message"
                confirmButtonText="OK"
                @closed="closeAlert" />
      <HeaderApp />
      <div class="max-w-screen-lg mx-auto ">
      <div class="w-full p-4 ">
      <div class="mt-[130px]"></div>
            <slot />
            </div>
            </div>
      
</template>
<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import HeaderApp from './../Components/Landing/Header.vue'
import SweetAlert from './../Components/SweetAlert.vue'

 const props = defineProps({
   flash: Object, 

 });
</script>