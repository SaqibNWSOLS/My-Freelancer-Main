<template>
  <div v-if="otpScreen">
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
          <v-otp-input v-model:value="cform.codeInputs" :num-inputs="6" class="otp-input"></v-otp-input>
        </div>
        <div v-if="otpResend" class="w-full text-center mt-4" style="color:green">A new OTP has been sent, kindly verify</div>
        <div class="w-full text-center mt-4">
          <div v-if="flash" class="text-danger">{{ flash }}</div>
        </div>
        <p v-if="errorMessage" class="text-center text-red-500">{{ errorMessage }}</p>
      </div>
      <div class="text-right">
        <button 
          :disabled="cform.codeInputs.length !== 6"
          type="submit" 
          class="btn btn-primary text-lg bg-primary text-white py-2 px-4 pr-10 pl-10 rounded"
        >
          Verify
          <i class="mdi mdi-check ml-2"></i>
        </button>
      </div>
    </form>
     <div class="flex justify-end mt-5">
      <div class="md:w-3/3 text-right">
        <p>Having an issue? Click to <a href="#" class="text-primary" @click="resendEmailOtp">resend OTP</a></p>
        <p>Click to verify a different email?<a href="#"  class="text-primary" @click="emailScreen"> Change email</a></p>
        <p class="text-center mb-10">
         Click here if you want to cancel the registration process? <a :href="route('logout')" class="text-primary">Abort</a>
        </p>
      </div>
    </div>
  </div>
   <div v-if="emailScreenShow">
      <form @submit.prevent="submitEmail" novalidate class="flex flex-col space-y-7">

    <div class="flex h-60 justify-center flex-col space-y-3">
   
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
    <div class="flex justify-end mt-5">
      <div class="md:w-3/3 text-right">
        <p>Continue using the? <a href="#"  class="text-primary" @click="otpScreenShow">previous email</a></p>
        <p class="text-center mb-10">
         Click here if you want to cancel the registration process? <a :href="route('logout')" class="text-primary">Abort</a>
        </p>
      </div>
    </div>
   </div>
  
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
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import VOtpInput from "vue3-otp-input";
import useVuelidate from '@vuelidate/core'
import { required, email } from '@vuelidate/validators'
import { computed } from 'vue';
import { router } from '@inertiajs/vue3'

const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
  flash: String,
});

const cform = useForm({
  codeInputs: ''
});

const errorMessage = ref('');
let otpScreen = ref(true); // Use 'let' instead of 'const'
let emailScreenShow = ref(false); // Use 'let' instead of 'const'
let otpResend = ref(false); // Use 'let' instead of 'const'

const emailScreen = () => {
  otpScreen.value = false; // Now you can change the value
  emailScreenShow.value=true;
  console.log(otpScreen.value);
};

const otpScreenShow = () => {
  otpScreen.value = true; // Now you can change the value
  emailScreenShow.value=false;
  console.log(otpScreen.value);
};

const submit = () => {
  cform.post(route('step3'), {
    onFinish: (response) => {
      otpResend.value=false
    },
  });
};



const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});
const form = useForm({
    email: '',
});

const rules = {
  email: { required, email },
};

const v$ = useVuelidate(rules, form);

const isFormValid = computed(() => {
  return v$.value.$invalid === false;
});


const resendEmailOtp = () => {
    router.post(route('resend-email-otp'),{}, {
        onFinish: () => {otpResend.value=true; console.log(1)},
    });
};

const submitEmail = () => {
    form.post(route('change-email'), {
        onSuccess: () => otpScreenShow(),
    });
};
</script>
