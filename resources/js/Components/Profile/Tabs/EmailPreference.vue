<template>
      
  <div class="border flex flex-col gap-5 shadow-md rounded-lg">
    <div class="border-b bg-card-header ">
      <h2 class="text-xl p-4">Edit Contact Information</h2>
    </div>
    <div class="px-3 py-4 space-y-5">
      <p class="font-semibold py-5">
        Enter the email address you would like to have verified below. We will send a
        verification link to that address.
      </p>
      <div>
        <p class="mb-3">Enter new email</p>
        <input 
          v-model="email" 
          class="p-2 w-3/4 bg-gray-100 mr-4" 
          type="text" 
          @input="validateEmail" 
        />
        <button 
          :disabled="!isValidEmail" 
          class="px-3 py-2 mt-3 mr-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed">
          Verify Email Address
        </button>
        <!-- <button class="px-3 py-2 font-semibold bg-gray-100 hover:bg-gray-200">
          Cancel
        </button> -->
        <p v-if="email && !isValidEmail" class="text-red-500">Invalid email address</p>
      </div>
      <div class="space-x-3">
        <!-- Add any additional content here -->
      </div>
    </div>
  </div>

</template>

<script>
export default {
  data() {
    return {
      email: '',
      isValidEmail: false
    };
  },
  methods: {
    validateEmail() {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      this.isValidEmail = emailPattern.test(this.email);
    }
  }
};
</script>

<style>
input[type=text]:focus {
  border: 1px solid #55555542;
  outline: none;
}
</style>
