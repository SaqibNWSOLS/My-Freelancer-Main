<template>
    <AdminLayout>
    <main class="page-wrapper"> 
      <!-- Page Body Start-->
      <div class="page-body h-[100vh] !mt-0 bg-cover bg-no-repeat  bg-[url('../../assets/images/dotsbg.jpg')]">
        <div class="!flex items-center justify-center h-full p-[.9375rem] common-animate-main ratio_asos">
          <div class=" grid grid-cols-12 gap-0 mx-auto w-full max-w-[70%] xl:max-w-[50%] md:max-w-[70%] sm:max-w-[80%] 2sm:max-w-[100%] xl:flex xl:justify-center">
            <div class="relative col-span-5 bg-white 2xl:col-span-6 z-1 xl:col-span-12 rounded-xl max-w-[29.375rem] min-w-[18.75rem] sm:min-w-[22.75rem] 2sm:min-w-[18.75rem] h-max">
              <form class="theme-form flex flex-col gap-3 !m-0 p-8 2sm:p-4" >
                <h3>My Freelancer Account</h3>
                <p>Enter your email id and password for log in to your account</p>
                <div>
                  <input type="email" placeholder="Enter your id" required>
                </div>
                <div class="relative">
                  <input type="password" id="password" name="password" required="" placeholder="Enter your Password">
                  <div class="password-icon"><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye"> </i><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye-off"> </i></div>
                </div>
                <div class="flex justify-between items-center gap-1">
                  <div class="flex items-center gap-2">
                    <label class="checkbox w-[1rem] h-[1rem] cursor-pointer">  
                      <input class="peer" type="checkbox"><span class="checkbox-indicator peer-checked:!bg-primary !border-primary"> <i data-feather="check"></i></span>
                    </label><span>Remember Me</span>
                  </div>
                  <div class="!mb-0"><a href="forgot-password.html">Forgot Password? </a></div>
                </div><a class="btn btn-primary !text-white hover:drop-shadow-lg my-2" href="index.html">Sign in</a>
                
                
              </form>
            </div>
            <div class="col-span-7 rounded-lg 2xl:col-span-6 z-1 xl:col-span-12 xl:hidden">
              <div class="relative flex items-center justify-center"><img class="w-[75%] 2xl:w-full" src="https://admin.pixelstrap.com/My Freelancer/assets/images/svg/login.svg" alt=""><img class="common-animate animate-ping bottom-[35%] absolute left-[25%] w-[33%] animate__animated animate__infinite animate__shakeY animate__slower" src="https://admin.pixelstrap.com/My Freelancer/assets/images/svg/login2.svg" alt="register vector"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Body End-->
    </main>
</AdminLayout>
</template>

<script setup>
import { useRouter } from "vue-router";
import App from '@/Layouts/App.vue'
import SignUpCarousel from '@/Components/Register/SignUpCarousel.vue'
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { Head, Link, useForm } from '@inertiajs/vue3';
import useVuelidate from '@vuelidate/core'
import { required, email, helpers } from '@vuelidate/validators'

const router = useRouter();
const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({});

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<style scoped>
.bg-primary{
  background-color: rgb(79,134,196) !important;
}
.text-primary {
    color: #007bff;
}
</style>
