<template>
  <AuthenticatedLayout>
    <div class="max-w-6xl mx-auto items-center text-center grid min-h-[100vh]">
  <h1 class="font-semibold text-xl py-2">Working in progress</h1>
</div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { ref, watch,onMounted} from 'vue'
import Quill from 'quill'
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.css'
</script>