<template>

    <div v-if="changeEmailAddress" class="px-3 py-4 space-y-5">
      <p class="font-semibold py-5">
        Enter the email address you would like to have verified below. We will send a
        verification link to that address.
      </p>
      <div v-if="!codeSent">
        <p class="mb-3">Enter new email</p>
        <input 
          v-model="email" 
          class="p-2 w-3/4 bg-gray-100 mr-4" 
          type="text" 
          @input="validateEmail" 
        />
        <button 
          :disabled="!isValidEmail" 
          class="px-3 py-2 mt-3 mr-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed"
          @click="sendVerificationCode"
        >
          Verify Email Address
        </button>
        <button @click="showProfileChange" class="px-3 py-2 mt-3 mr-4 text-white font-semibold bg-[red]">Cancel</button>
        <p v-if="emailError" class="text-red-500">{{ emailError }}</p>
        <p v-if="email && !isValidEmail" class="text-red-500">Invalid email address</p>
      </div>
      <div v-else>
        <p class="mb-3">Enter the verification code sent to {{ email }}</p>
        <div class="flex space-x-2">
          <input
            v-for="(code, index) in verificationCode"
            :key="index"
            v-model="verificationCode[index]"
            class="p-2 w-12 bg-gray-100 text-center"
            type="text"
            maxlength="1"
            ref="codeInput"
            @input="focusNext(index)"
          />
          <p v-if="codeError" class="text-red-500">{{ codeError }}</p>
        </div>
        <button 
          :disabled="!isCodeComplete" 
          class="px-3 py-2 mt-3 text-white font-semibold bg-blue-800 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed"
          @click="verifyCode"
        >
          Submit
        </button>
      </div>
    </div>
</template>

<script>
import axios from 'axios'; // Ensure you have axios installed and imported



export default {
  data() {
    return {
      email: '',
      isValidEmail: false,
      codeSent: false,
      codeError:'',
      verificationCode: Array(6).fill(''),
      emailError: '' // New data property for email error message
    };
  },
    props: {
        changeEmailAddress: Boolean, 
        showProfileChange:Function,
    },
  methods: {
    validateEmail() {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      this.isValidEmail = emailPattern.test(this.email);
    },
    async sendVerificationCode() {
      try {
        const response = await axios.post('/email-code', { email: this.email });
        this.codeSent = true;
        this.emailError = ''; // Clear any previous error
      } catch (error) {
        if (error.response && error.response.data && error.response.data.message) {
          this.emailError = error.response.data.message; // Set the error message from the response
        } else {
          this.emailError = 'An unexpected error occurred. Please try again later.';
        }
      }
    },
    focusNext(index) {
      if (this.verificationCode[index].length === 1 && index < 5) {
        this.$refs.codeInput[index + 1].focus();
      } else if (this.verificationCode[index].length === 1 && index === 5) {
        this.$refs.codeInput[index].blur();
      }
    },
   async verifyCode() {
     try {
        const response = await axios.post('/verify-email-code', { email: this.email,verificationCode:this.verificationCode });
        this.codeSent = false;
        this.codeError = ''; // Clear any previous error
      } catch (error) {
        console.log(error)
        if (error.response.data.res) {
          this.codeError = error.response.data.res; // Set the error message from the response
        } else {
          this.codeError = error.res;
        }
      }
    }
  },
  computed: {
    isCodeComplete() {
      return this.verificationCode.every(code => code !== '');
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
