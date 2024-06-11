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
      <div class="flex justify-center space-x-2 mt-4">
           <v-otp-input v-model:value="form.codeInputs" :num-inputs="6" class="otp-input"></v-otp-input>

      </div>
      <p v-if="errorMessage" class="text-center text-red-500">{{ errorMessage }}</p>
    </div>
    <div class="text-right">
      <button 
       :disabled="(form.codeInputs).length !== 6"
        type="submit" 
        class="btn btn-primary text-lg bg-primary text-white py-2 px-4 pr-10 pl-10 rounded"
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

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import VOtpInput from "vue3-otp-input";

const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
});


const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});

const form = useForm({
    codeInputs: ''
});

const errorMessage = ref('');



const submit = () => {
   
        form.post(route('step3'), {
             onFinish: (response) => {
                console.log(response);
            },
        });
};
</script>
