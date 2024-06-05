<script setup>
import { useForm, useField } from "vee-validate";

const props = defineProps({
  step: Number,
  previousStep: Function,
  nextStep: Function,
});

const { handleSubmit, isFieldValid, isSubmitting } = useForm({});

const password = useField("password");
const roleType = useField("roleType");
const agreeToTerms = useField("agreeToTerms");
const agreeToEmail = useField("agreeToEmail");
</script>

<template>
  <form @submit.prevent="submit" class="flex flex-col space-y-7" v-if="step == 1" novalidate>
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max text-gray-500">Select An Account Type</p>
      <hr class="flex-1" />
    </div>
    <span v-show="roleType.errorMessage" class="px-10 text-red-500">{{ roleType.errorMessage }}</span>
    <div class="flex flex-col sm:flex-row justify-between space-y-5 sm:space-y-0 sm:space-x-5">
      <div 
        @click="roleType.value = 'employer'" 
        :class="{'bg-blue-500': roleType.value === 'employer'}"
        class="w-full h-48 overflow-auto cursor-pointer rounded-lg border border-gray-300 p-4 flex flex-col items-center justify-center space-y-2 transition-colors duration-200"
      >
        <img width="70" height="70" src="https://www.guru.com/images/svg/Employer.svg" />
        <div>
          <h5 class="text-lg text-center">Employer</h5>
          <p class="text-sm text-center text-gray-500">(I want to Hire)</p>
        </div>
      </div>
      <div 
        @click="roleType.value = 'freelancer'" 
        :class="{'bg-blue-500': roleType.value === 'freelancer'}"
        class="w-full h-48 overflow-auto cursor-pointer rounded-lg border border-gray-300 p-4 flex flex-col items-center justify-center space-y-2 transition-colors duration-200"
      >
        <img width="70" height="70" src="https://www.guru.com/images/svg/Freelancer.svg" />
        <div>
          <h5 class="text-lg text-center">Freelancer</h5>
          <p class="text-sm text-center text-gray-500">(I am looking for Work)</p>
        </div>
      </div>
    </div>
    <div class="flex items-center">
      <hr class="flex-1" />
      <p class="mx-1 min-w-max text-gray-500">Set Password</p>
      <hr class="flex-1" />
    </div>
    <div>
      <label for="password" class="block text-gray-700">Password *</label>
      <input 
        id="password"
        type="password" 
        v-model="password.value" 
        :class="{'border-red-500': password.errorMessage}" 
        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
      />
      <span class="text-red-500 text-sm">{{ password.errorMessage }}</span>
    </div>
    <div>
      <label class="inline-flex items-center">
        <input 
          type="checkbox" 
          v-model="agreeToTerms.value" 
          :disabled="isSubmitting" 
          class="form-checkbox text-blue-500" 
        />
        <span class="ml-2 text-gray-700">I agree to the Privacy Policy, Terms of Service and IP Policy.</span>
      </label>
      <span class="text-red-500 text-sm">{{ agreeToTerms.errorMessage }}</span>
    </div>
    <div>
      <label class="inline-flex items-center">
        <input 
          type="checkbox" 
          v-model="agreeToEmail.value" 
          :disabled="isSubmitting" 
          class="form-checkbox text-blue-500" 
        />
        <span class="ml-2 text-gray-700">Send me useful emails to help me get the most out of myfreelancer.com</span>
      </label>
    </div>
    <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5 justify-between">
      <button 
        type="button" 
        @click="previousStep" 
        :disabled="isSubmitting"
        class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400 transition-colors duration-200"
      >
        <i class="mdi mdi-step-backward mr-2"></i>Back
      </button>
      <button 
       @click="nextStep" 
        type="submit" 
        :disabled="!isFieldValid('roleType') || !isFieldValid('password') || !isFieldValid('agreeToTerms') || isSubmitting" 
        class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-200"
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
