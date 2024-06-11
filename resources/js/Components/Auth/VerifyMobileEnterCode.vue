<template>
  <div class="w-full">
    <h6 class="text-lg font-semibold">Verify Your Number</h6>
    <p class="text-sm">
      A 6-digit verification code has been sent to the number {{ props.form?.phone }}
    </p>
  </div>
  <div class="w-full mt-4">
    <v-otp-input v-model:value="props.form.code" :num-inputs="6" class="otp-input"></v-otp-input>


  </div>
 <div class="w-full text-center mt-4">
    <div v-if="props.flash" class="text-danger">{{ props.flash }}</div>
</div>
  <div class="w-full text-right mt-4">

    <button
      class="text-white bg-gray-400 py-2 px-4 rounded-md"
      :class="((props.form.code).length === 6) ? 'bg-green-500' : ''"
      :disabled="(props.form.code).length !== 6"
      @click="check()"
    >
      Verify
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1.707-11.707a1 1 0 00-1.414-1.414L7 9.586 5.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
      </svg>
    </button>

  </div>
  <div class="w-full flex gap-5 items-center mt-4">
    <p class="text-base">Having Trouble?</p>
    <button class="text-blue-500 underline" @click="prev()">Change Phone Number</button>
    <button class="text-blue-500 underline">Resend Verification Code</button>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

import VOtpInput from "vue3-otp-input";


const props = defineProps({
  next: Function,
  prev: Function,
  form: Object,
  flash: Object,
});

console.log(props.flash);
onMounted(() => {
 
  
});

const check = () => {
   console.log((props.form.code));

  if ((props.form.code).length === 6) {
      props.form.post(route('verify-mobile'), {
        onSuccess: () =>console.log(1),
    });
  } else {
    alert("Invalid code");
  }
};
</script>

<style scoped>
.otp-input {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
}
</style>
