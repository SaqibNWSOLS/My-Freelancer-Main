<script setup>

import { useForm, useField } from "vee-validate";

const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
});


const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});

const name = useField("name");
const email = useField("email");


</script>

<template>
  <form @submit.prevent="submit" novalidate class="flex flex-col space-y-7" v-if="step === 0">
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max text-gray-500">Select Social Media</p>
      <hr class="flex-1" />
    </div>
    <div class="flex justify-evenly items-center space-x-5">
      <div class="cursor-pointer bg-black border text-center rounded-full p-2">
        <i class="mdi mdi-apple text-white text-xl"></i>
      </div>
      <div class="cursor-pointer bg-blue-600 border text-center rounded-full p-2">
        <i class="mdi mdi-facebook text-white text-xl"></i>
      </div>
      <div class="cursor-pointer bg-blue-400 border text-center rounded-full p-2">
        <i class="mdi mdi-linkedin text-white text-xl"></i>
      </div>
      <div class="cursor-pointer bg-white border text-center rounded-full p-2">
        <i class="mdi mdi-google text-green-500 text-xl"></i>
      </div>
    </div>
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max text-gray-500">OR</p>
      <hr class="flex-1" />
    </div>
    <div class="flex flex-col space-y-3">
      <div>
        <label class="block text-gray-700" for="name">Full Name *</label>
        <input
          id="name"
          type="text"
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          v-model="name.value"
        />
        <span class="text-red-500 text-sm">{{ name.errorMessage }}</span>
      </div>
      <div>
        <label class="block text-gray-700" for="email">Email *</label>
        <input
          id="email"
          type="email"
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          @input="checkEmail"
          v-model="email.value"
        />
        <span class="text-red-500 text-sm">{{ email.errorMessage }}</span>
      </div>
    </div>
    <div class="flex justify-end flex-col md:flex-row">
      <button
       @click="nextStep" 
        type="submit"
        class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 disabled:opacity-50"
        :disabled="!isFieldValid('email') || !isFieldValid('name')"
      >
        Proceed
        <i class="mdi mdi-step-forward ml-2"></i>
      </button>
    </div>
  </form>
</template>

<style scoped>
.min-w-max {
  min-width: max-content;
}
</style>
