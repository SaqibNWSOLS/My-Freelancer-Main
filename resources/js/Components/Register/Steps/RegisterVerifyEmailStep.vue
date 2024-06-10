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
        <input 
          v-for="(input, index) in 6" 
          :key="index" 
          type="text" 
          v-model="form.codeInputs[index]" 
          @input="moveFocus(index, $event)" 
          class="w-12 p-2 border-b-2 text-center focus:outline-none focus:border-blue-500 transition duration-200"
          maxlength="1"
          @keydown="onlyNumber($event)"
          required
        />
      </div>
      <p v-if="errorMessage" class="text-center text-red-500">{{ errorMessage }}</p>
    </div>
    <div class="text-right">
      <button 
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

const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
});


const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});

const form = useForm({
    codeInputs: Array(6).fill('')
});

const errorMessage = ref('');

const moveFocus = (index, event) => {
  if (event.inputType === "insertText" && event.target.value.length === 1 && index < 5) {
    event.target.nextElementSibling.focus();
  } else if (event.inputType === "deleteContentBackward" && event.target.value === '' && index > 0) {
    event.target.previousElementSibling.focus();
  }
};

const onlyNumber = (event) => {
  const key = event.key;
  if (!/^[0-9]$/.test(key) && key !== 'Backspace') {
    event.preventDefault();
  }
};

const submit = () => {
    errorMessage.value = '';  // Reset error message
    if (form.codeInputs.some(input => input === '')) {
        errorMessage.value = 'Kindly enter provided code';
    } else {
        form.post(route('step3'), {
             onFinish: (response) => {
                console.log(response);
            },
        });
    }
};
</script>
