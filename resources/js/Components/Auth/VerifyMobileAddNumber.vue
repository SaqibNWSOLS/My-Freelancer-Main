<template>
  <div class="w-full">
    <h6 class="text-lg font-semibold">Verify Your Phone Number (Required)</h6>
    <p class="text-sm">
      Get more control over your account and the ability to connect with
      Freelancers.
    </p>
  </div>
  <div class="w-full flex">
    <input  ref="phone" v-model="form.phone" id="phoneC" name="phone" type="tel" class="py-2 bg-white border shadow-sm text-black w-full">
  </div>
  <p class="text-danger">{{ props.form?.errors?.phone }}</p>
  <div class="w-full">
    <h6 class="text-base font-semibold">Would you like to verify your number?</h6>
    <p class="text-sm">You will receive a 6-digit code</p>
  </div>
  <div class="w-full text-right">
    <button
      class="bg-blue-500 text-white py-2 px-4 rounded-md flex items-center justify-center"
      @click="updateMobileNumber"
    >
      Send Code
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1.707-11.707a1 1 0 00-1.414-1.414L7 9.586 5.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
</template>

<style>
/* Additional styles if needed */
</style>

<script setup>
import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
import { ref, onMounted } from "vue";
const phone = ref(null)

const props = defineProps({
  next: Function,
  form: Object,
});

let iti = null;
onMounted(() => {
  iti = intlTelInput(phone.value, {
    initialCountry: "auto",
    geoIpLookup: function(success, failure) {
      fetch("/proxy")
        .then(function(res) {  return res.json(); })
        .then(function(data) { success(data.country_code); })
        .catch(function() { failure(); });
    },
    strictMode: true,
    countrySearch: false,
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js",
  });
});


const updateMobileNumber = async () => {

   props.form.post(route('send-code'), {
        onSuccess: () =>props.next(),
    });
  
};
</script>
