<script setup>
import { useRouter } from "vue-router";
const router = useRouter();
const goToPostJob = () => router.push({ path: "/app/post-job" });
</script>

<template>
  <button @click="goToPostJob" class="py-1 text-xs btn-text" >
    <i class="mdi mdi-plus mr-2"></i>
    Post Job
  </button>
</template>

<style scoped>
.btn-text {
  background-color: transparent;
  border-radius: 0.375rem;
  padding: 0.25rem 0.5rem;
}
</style>
