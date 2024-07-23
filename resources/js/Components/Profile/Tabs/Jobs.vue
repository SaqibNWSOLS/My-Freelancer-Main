<template>
   <SweetAlert v-if="flash?.success"
                type="success"
                :title="flash?.title"
                :text="flash?.message"
                confirmButtonText="OK"
                @closed="closeAlert" />
  <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b bg-card-header">
        <h2 class="p-4 text-lg">My Jobs</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-1 gap-4 p-4">
      
      <div>
      <div class="overflow-hidden overflow-x-hidden">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <tr v-for="(job, index) in jobs" :key="index">
        <td class="px-6 py-4 whitespace-nowrap">{{ ++index }}</td>
        <td class="px-6 py-4 ">{{ job.title }}</td>
        <td class="px-6 py-4 whitespace-nowrap">
          <!-- Add your action buttons here -->
        </td>
      </tr>
    </tbody>
  </table>
</div>

      </div>

       
      </div>
    </div>
  </div>
  <div class="p-5">
    <Modal :show="showModal" @close="showModal = false">
      <div class="mr-3">
        <h1 class="text-xl">OTP Verfication</h1>
        <p class="mb-3 mt-4">A digit OTP has been sent to your connected email.<br>Kindly verify to change your password.</p>
        <div class="relative">
          <v-otp-input v-model:value="form.codeInputs" :num-inputs="6" class="otp-input"></v-otp-input>
          <p class="text-danger">{{ otpError }}</p>
        </div>
        <div class="text-right">
          <button type="submit" @click="submitForm" class="px-3 py-2 mt-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 rounded-md">
            Submit
          </button>
        </div>
      </div>
    </Modal>
  </div>
</template>

<script setup>
import SweetAlert from '@/Components/SweetAlert.vue'; // Adjust the path based on your project structure

import { ref, computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import VOtpInput from "vue3-otp-input";

const props = defineProps({
    flash:{
      type:Object,
    },
    jobs:Array,

 });

const form = useForm({
  password: null,
  password_confirmation: null,
  codeInputs: ''
});

const passwordVisibility = ref({
  password: false,
  password_confirmation: false,
});
const showModal = ref(false);

const otpSent = ref(false);
const otpError = ref('');

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
  showModal.value = true;
  // Implement actual OTP sending logic here
}

const passwordsMatch = computed(() => {
  return form.password === form.password_confirmation;
});

const submitForm = () => {
  form.post(route('updatePassword'), {
    onSuccess: (response) => {
      if (response.props?.flash?.otp_sent) {
        otpSent.value = true;
        showModal.value = true;
      } else {
       form.reset();
         showModal.value = false;
      }
    },
  });
};

const verifyOTP = () => {
  // Implement OTP verification logic here
  // If successful:
  form.reset();
  otpError.value = '';
  showModal.value = false;
  // If failed:
  // otpError.value = 'Invalid OTP. Please try again.';
};
</script>
