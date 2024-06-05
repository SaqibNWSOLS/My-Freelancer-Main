<script setup>
import { useField, useForm } from "vee-validate";

const props = defineProps({
  step: Number,
});

const { handleSubmit, isFieldValid, isSubmitting } = useForm({});

const code = useField("code");
</script>

<template>
  <form @submit.prevent="submit" class="flex flex-col space-y-7" v-if="step === 2" novalidate>
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max text-gray-500">Verify Email</p>
      <hr class="flex-1" />
    </div>
    <div class="h-60 flex flex-col justify-center">
      <p class="text-center text-gray-700 text-lg">
        Please enter the 6-digit code sent to your email
      </p>
      <input 
        type="text" 
        v-model="code.value" 
        :class="{'border-red-500': !isFieldValid('code')}" 
        class="mt-4 p-2 border-b-2 focus:outline-none focus:border-blue-500 transition duration-200"
        placeholder="Enter code"
        maxlength="6"
      />
    </div>
    <div class="text-right">
      <button 
        type="submit" 
        :disabled="!isFieldValid('code') || isSubmitting"
        class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200"
      >
        Verify
        <i class="mdi mdi-check ml-2"></i>
      </button>
    </div>
  </form>
</template>

<style scoped>
.height {
  height: 15rem;
}
.min-w-max {
  min-width: max-content;
}
</style>
