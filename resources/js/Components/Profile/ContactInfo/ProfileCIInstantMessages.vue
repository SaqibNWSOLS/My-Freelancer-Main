<template>
  <div>
    <p class="mb-8"><b>Instant Messages</b></p>
    <div class="grid grid-cols-10 gap-1 justify-evenly">
      <div class="col-span-6">
        <div class="w-2/3">
          <input
            type="text"
            placeholder="Skype"
            v-model="form.skype"
            class="w-full border-bottom border-gray-300 py-2 focus:outline-none focus:border-blue-500"
          />
        </div>
      </div>
    </div>
    <div class="text-right w-2/3 mt-4">
      <button
        class="bg-blue-500 text-white px-4 py-2 rounded"
        @click="infoUpdate"
      >
        <i class="mdi mdi-plus-circle-outline mr-1"></i> Save
      </button>
    </div>
  </div>
</template>

<style scoped>
.flex-content {
  display: flex;
  gap: 1rem;
  justify-content: flex-start;
  align-items: start;
}
</style>

<script setup>
import { ref, onMounted } from "vue";

const form = ref({
  skype: "",
});


</script>
