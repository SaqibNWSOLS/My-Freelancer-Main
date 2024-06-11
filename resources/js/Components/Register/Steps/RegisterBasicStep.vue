

<template>
  <form @submit.prevent="submit" novalidate class="flex flex-col space-y-7" v-if="step === 0">
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max text-gray-500">Select Social Media</p>
      <hr class="flex-1" />
    </div>
    <div class="flex justify-center items-center space-x-5">
<!--       <div class="cursor-pointer bg-black border text-center rounded-full p-2">
        <i class="mdi mdi-apple text-white text-xl"></i>
      </div> -->
      <div class="cursor-pointer bg-blue-600 border text-center rounded-full p-1">
        <i class="mdi mdi-facebook text-white " style="font-size:30px"></i>
      </div>
 <!--      <div class="cursor-pointer bg-blue-400 border text-center rounded-full p-2">
        <i class="mdi mdi-linkedin text-white text-xl"></i>
      </div> -->
      <div class="cursor-pointer bg-white border text-center rounded-full p-1">
        <i class="mdi mdi-google text-green-500 " style="font-size:30px"></i>
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
           class="form-input mt-1 block w-full"
        
          v-model="form.name"
        />
         <p class="text-danger"> {{ form.errors.name }}</p>
      </div>
      <div>
        <label class="block text-gray-700" for="email">Email *</label>
        <input
          id="email"
          type="email"
         class="form-input mt-1 block w-full"
          @input="checkEmail"
          v-model="form.email"
        />
        <p class=" text-danger"> {{ form.errors.email }}</p>
      </div>
    </div>
    <div class="flex justify-end flex-col md:flex-row">
      <button
       :disabled="!isFormValid"
        type="submit"
        class="btn btn-primary text-lg bg-primary text-white py-2 px-4 pr-10 pl-10 rounded"
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

<script setup>

import { Head, Link, useForm } from '@inertiajs/vue3';
import useVuelidate from '@vuelidate/core'
import { required, email } from '@vuelidate/validators'
import { computed } from 'vue';

const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
});


const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});
const form = useForm({
    email: '',
    name: '',
});

const rules = {
  email: { required, email },
  name: { required },
};

const v$ = useVuelidate(rules, form);

const isFormValid = computed(() => {
  return v$.value.$invalid === false;
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => console.log(3),
    });
};
</script>