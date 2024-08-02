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
          <a :href="route('job.proposal',job.slug)"><i class="mdi mdi-application-cog-outline mx-2 text-[green]"></i></a>
          <a :href="route('job.edit',job.id)"><i class="mdi mdi-pencil text-[#34415e]"></i></a>
         <a href="#"> <i @click="deleteJob(job.id)" class="mdi mdi-trash-can mx-2 text-[red]"></i></a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

      </div>

       
      </div>
    </div>
  </div>
  
</template>

<script setup>
import SweetAlert from '@/Components/SweetAlert.vue'; // Adjust the path based on your project structure

import { ref, computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import VOtpInput from "vue3-otp-input";
import { Inertia } from '@inertiajs/inertia';

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


const deleteJob=(id)=>{
   if (confirm('Are you sure you want to delete this tag?')) {
            try {
                const response = Inertia.delete(route('job.destroy', id));
                if (response && response.statusCode === 200) {
                    location.reload();
                } else {
                   
                    console.error('Failed to delete Faq:', response);
                   
                }
            } catch (error) {
                console.error('An error occurred while deleting Faq:', error);
            
            }
        }
}

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
