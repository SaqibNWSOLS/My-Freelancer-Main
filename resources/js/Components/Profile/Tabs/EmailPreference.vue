<template>
  <div class="border flex flex-col gap-5 shadow-md ">
    <div class="border-b bg-card-header">
      <h2 class="text-xl p-4">Email Preferences</h2>
    </div>
    <div class="px-3 py-4 space-y-5">
      <p class="font-semibold py-5">
        Kindly choose your settings to stay updated in the future. Checked boxes show you will recieve emails regarding this in future!
      </p>
       <label><input type="checkbox" name=""><span class="ml-3">Would you like to get updates regarding the latest news.</span></label><br><br>
       <label><input type="checkbox" name=""><span class="ml-3">Would you like to get updates regarding the latest project.</span></label><br><br>
       <label><input type="checkbox" name=""><span class="ml-3">Would you like to get updates regarding the latest events.</span></label><br><br>
       <label><input type="checkbox" name=""><span class="ml-3">Would you like to get updates regarding the latest guidelines.</span></label><br><br>

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
