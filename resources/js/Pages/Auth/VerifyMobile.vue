<template>
  <Auth><h4></h4>
  <div class="py-15 flex flex-col gap-5">
    <h4 class="text-2xl">Welcome to My Freelancer!</h4>
    <p class="text-lg">
      To ensure a seamless and secure experience, we encourage our users to
      verify their phone number and set up account security.
    </p>
    <div class="gap-5 w-2/3" v-if="step === 0">
      <VerifyMobileAddNumber :next="nextStep" />
    </div>
    <div class="gap-5 w-2/3" v-if="step === 1">
      <VerifyMobileEnterCode
        :next="nextStep"
        :prev="previousStep"
        :form="form"
      />
    </div>
  </div>
</Auth>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import VerifyMobileAddNumber from '@/Components/Auth/VerifyMobileAddNumber.vue';
import VerifyMobileEnterCode from '@/Components/Auth/VerifyMobileEnterCode.vue';
import Auth from '@/Layouts/Auth.vue'

const step = ref(0)
const router = useRouter()
const form = ref({
  code: '',
})
const nextStep = () => {
  if (step.value === 0) return ++step.value
  if (form.value.code !== '123456') {
    alert('Invalid code')
    return
  }
  router.replace({ path: '/app/profile' })
}
const previousStep = () => --step.value
</script>
