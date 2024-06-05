<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import HeaderApp from './../Components/Auth/Header.vue'

</script>

<template>
      <HeaderApp />
      <div class="max-w-screen-lg mx-auto">
      <div class="w-full p-4 ">
            <slot />
            </div>
            </div>
      
</template>
