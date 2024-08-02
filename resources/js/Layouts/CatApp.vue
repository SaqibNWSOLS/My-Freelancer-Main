

<template>

 <SweetAlert v-if="flash?.success"
                type="success"
                :title="flash?.title"
                :text="flash?.message"
                confirmButtonText="OK"
                @closed="closeAlert" />

      <HeaderApp :categories="props.categories" />
            <slot />
      <FooterApp :categories="categories" />
</template>
<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import HeaderApp from './../Components/Landing/CatHeader.vue'
import FooterApp from './../Components/Landing/Footer.vue'
import SweetAlert from '@/Components/SweetAlert.vue'

   const props = defineProps({
    categories: {
        type: Array,

    },
 flash: Object, 
 });

</script>