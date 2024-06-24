<template>
  <form @submit.prevent="submit" class="flex flex-col space-y-7" v-if="step == 1" novalidate>
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max ">Select An Account Type</p>
      <hr class="flex-1" />
    </div>
    
    <div class="flex flex-col sm:flex-row justify-between space-y-5 sm:space-y-0 sm:space-x-5">
      <div 
        @click="form.roleType = 'Employer'" 
        :class="{'bg-blue-500': form.roleType === 'Employer'}"
        class="w-full h-48 overflow-auto cursor-pointer rounded-lg border border-gray-300 p-4 flex flex-col items-center justify-center space-y-2 transition-colors duration-200"
      >
        <img width="70" height="70" src="https://www.guru.com/images/svg/Employer.svg" />
        <div>
          <h5 class="text-lg text-center">Employer</h5>
          <p class="text-sm text-center ">(I want to Hire)</p>
        </div>
      </div>
      <div 
        @click="form.roleType = 'Freelancer'" 
        :class="{'bg-blue-500': form.roleType === 'Freelancer'}"
        class="w-full h-48 overflow-auto cursor-pointer rounded-lg border border-gray-300 p-4 flex flex-col items-center justify-center space-y-2 transition-colors duration-200"
      >
        <img width="70" height="70" src="https://www.guru.com/images/svg/Freelancer.svg" />
        <div>
          <h5 class="text-lg text-center">Freelancer</h5>
          <p class="text-sm text-center ">(I am looking for Work)</p>
        </div>
      </div>
    </div>
    <div class="text-center">
       <p v-show="v$.roleType.$error" class="px-10 text-red-500">{{ v$?.roleType?.$error ? 'Please select above if you are a employer looking to hire or a freelancer looking for work.' : '' }}</p>
    </div>
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max ">Set Password</p>
      <hr class="flex-1" />
    </div>
    <div>
      <label for="password" class="block text-gray-700">Password *</label>
      <input 
        id="password"
        type="password" 
        v-model="form.password" 
        :class="{'border-red-500': v$.password.$error }" 
        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
      />
    
      <span class="text-red-500 text-sm">{{ v$.password.$error ? 'Your password must be between 8 and 16 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.' : '' }}</span>
    </div>
    <div>
      <label class="inline-flex items-center">
        <input 
          type="checkbox" 
          v-model="form.agreeToTerms" 
          class="form-checkbox text-blue-500" 
        />
        <span class="ml-2 text-gray-700">I agree to the Privacy Policy, Terms of Service and IP Policy.</span>
      </label>
      <p class="text-red-500 text-sm">{{ form.agreeToTerms==false ? 'You must agree to the terms' : '' }}</p>
    </div>
    <div>
      <label class="inline-flex items-center">
        <input 
          type="checkbox" 
          v-model="form.agreeToEmail" 
         class="form-checkbox text-blue-500" 
        />
        <span class="ml-2 text-gray-700">Send me useful emails to help me get the most out of myfreelancer.com</span>
      </label>
    </div>
    <div class=" flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5 justify-right text-right">

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
import { ref, computed } from 'vue';
import useVuelidate from '@vuelidate/core';
import { required, helpers } from '@vuelidate/validators';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
});

const form = useForm({
  password: '',
  roleType: '',
  agreeToTerms: false,
  agreeToEmail: false,
});

const strongPassword = helpers.regex( /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/);

const rules = {
  password: { required, strongPassword },
  roleType: { required },
  agreeToTerms: { required },
  agreeToEmail: {},
};

const v$ = useVuelidate(rules, form);

const isFormValid = computed(() => {
  return !v$.$invalid;
});

const submit = () => {
  v$.value.$touch();
  if (!v$.value.$invalid) {
    form.post(route('step2'), {
      onFinish: () => console.log('Form submitted successfully')
    });
  }
};
</script>
