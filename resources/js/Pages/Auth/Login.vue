<template>
  <Auth>
    <div class="container mx-auto max-w-screen-lg">
        <div class="flex md:flex-row mt-10 shadow-lg rounded-lg overflow-hidden">
            <div class="hidden md:flex items-center justify-center w-full md:w-1/2 p-10 bg-primary">
                <SignUpCarousel />
            </div>
            <div class="w-full md:w-1/2 bg-white p-10 flex flex-col gap-7">
                <h4 class="text-2xl text-center text-primary">Log In</h4>
                <form @submit.prevent="submit" novalidate class="flex flex-col gap-7">
                    <div class="flex items-center">
                        <hr class="flex-grow border-gray-300">
                        <!-- <p class="mx-1 text-xs">Social Media</p> -->
                        <hr class="flex-grow border-gray-300">
                    </div>
                    <div class="flex justify-center items-center gap-5">
                     <!--    <div class="cursor-pointer bg-black border text-center rounded-full p-2">
                            <i class="mdi mdi-apple text-white text-lg"></i>
                        </div> -->
                        <div class="cursor-pointer bg-primary border text-center rounded-full p-1">
                            <i class="mdi mdi-facebook text-white "  style="font-size:30px"></i>
                        </div>
                        <!-- <div class="cursor-pointer bg-blue-500 border text-center rounded-full p-2">
                            <i class="mdi mdi-linkedin text-white text-lg"></i>
                        </div> -->
                        <div class="cursor-pointer bg-white border text-center rounded-full p-1">
                            <i class="mdi mdi-google text-green-500 " style="font-size:30px"></i>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <hr class="flex-grow border-gray-300">
                        <p class="text-xs mx-1">OR</p>
                        <hr class="flex-grow border-gray-300">
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="form-group">
                            <label for="email" class="block">Email *</label>
                           <!--  <i class="mdi-email-outline mdi v-icon notranslate v-theme--myTheme v-icon--size-default"></i> -->
                            <input id="email" type="email" autocomplete="off" class="form-input mt-1 block w-full" v-model="form.email">
                            <p class="text-danger"> {{ form.errors.email }}</p>
                        </div>
                        <div class="form-group">
                            <label for="password" class="block">Password *</label>
                            <input id="password" type="password" class="form-input mt-1 block w-full" v-model="form.password">
                            <p class="text-danger"> {{ form.errors.password }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end flex-col md:flex-row">
                        <button type="submit" class="btn btn-primary text-lg bg-primary text-white py-2 px-4 pr-10 pl-10 rounded">Log in</button>
                    </div>
                </form>
                <p class="text-center mb-10">
                    Don't have an account? <a href="/register" class="text-primary">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    </Auth>
</template>

<script setup>
import { useRouter } from "vue-router";
import App from '@/Layouts/App.vue'
import SignUpCarousel from '@/Components/Register/SignUpCarousel.vue'
import Auth from '@/Layouts/Auth.vue'
import { Head, Link, useForm } from '@inertiajs/vue3';
import useVuelidate from '@vuelidate/core'
import { required, email, helpers } from '@vuelidate/validators'

const router = useRouter();

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
