<template>
  <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b bg-card-header">
        <h2 class="p-4 text-lg">Change Your Password</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
        <div class="col-span-1 md:col-span-1 p-4">
          <p class="mb-3">Ensure your new password is strong and unique. Avoid using common phrases or personal information. Never reuse passwords across multiple sites. Use a password manager for better security. Monitor your account for any suspicious activity.</p>
        </div>
        <form @submit.prevent="verifyOTP">
          <div v-if="!otpSent" class="col-span-1 md:col-span-1">
            <div class="mr-3">
              <p class="mb-3 mt-4">Enter New Password</p>
              <div class="relative">
                <input v-model="form.password" :type="passwordVisibility['password'] ? 'text' : 'password'" class="p-2 w-full bg-gray-100 border border-gray-300 rounded-md" />
                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                  <i @click="togglePasswordVisibility('password')" class="cursor-pointer text-gray-500 mdi mdi-eye" v-if="!passwordVisibility['password']"></i>
                  <i @click="togglePasswordVisibility('password')" class="cursor-pointer text-gray-500 mdi mdi-eye-off" v-else></i>
                </span>
                <p class="text-danger">{{ form.errors.password }}</p>
              </div>
              <p class="mb-3 mt-4">Confirm Password</p>
              <div class="relative">
                <input v-model="form.password_confirmation" :type="passwordVisibility['password_confirmation'] ? 'text' : 'password'" class="p-2 w-full bg-gray-100 border border-gray-300 rounded-md" />
                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                  <i @click="togglePasswordVisibility('password_confirmation')" class="cursor-pointer text-gray-500 mdi mdi-eye" v-if="!passwordVisibility['password_confirmation']"></i>
                  <i @click="togglePasswordVisibility('password_confirmation')" class="cursor-pointer text-gray-500 mdi mdi-eye-off" v-else></i>
                </span>
                <p class="text-danger">{{ form.errors.password_confirmation }}</p>
              </div>
              <p v-if="form.password && !isPasswordStrong" class="text-red-500 mt-2">Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.</p>
              <div class="text-right">
                <button :disabled="!isPasswordConfirmed || !isPasswordStrong" type="button" @click="sendOTP" class="px-3 py-2 mt-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed rounded-md">
                  Send OTP
                </button>
              </div>
            </div>
          </div>
          <div v-else class="col-span-1 md:col-span-1">
            <div class="mr-3">
              <p class="mb-3 mt-4">Enter OTP</p>
              <div class="relative">
                <v-otp-input v-model:value="form.codeInputs" :num-inputs="6" class="otp-input"></v-otp-input>
                <p class="text-danger">{{ otpError }}</p>
              </div>
              <div class="text-right">
                <button type="submit" class="px-3 py-2 mt-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 rounded-md">
                  Verify OTP & Change Password
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref, computed } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import VOtpInput from "vue3-otp-input";

const form = useForm({
    password: null,
    password_confirmation: null,
    codeInputs:'',
});

const passwordVisibility = ref({
    password: false,
    password_confirmation: false,
});

const otpSent = ref(false);
const otpError = ref('');

const isPasswordConfirmed = computed(() => {
  return form.password && form.password === form.password_confirmation;
});

const isPasswordStrong = computed(() => {
  const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return passwordRegex.test(form.password);
});

const togglePasswordVisibility = (field) => {
  passwordVisibility.value[field] = !passwordVisibility.value[field];
}

const sendOTP = () => {
  // Mock sending OTP request
  otpSent.value = true;
  // Implement actual OTP sending logic here
}

const verifyOTP = () => {
  if (codeInputs.value === '123456') { // Replace with actual OTP verification logic
    submitForm();
  } else {
    otpError.value = 'Invalid OTP';
  }
}

const submitForm = () => {
  form.post(route('updatePassword'), {
    onSuccess: () => {
      form.reset();
      otp.value = '';
      otpSent.value = false;
    },
  });
};
</script>
