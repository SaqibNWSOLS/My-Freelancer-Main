<template>
    <AdminLayout>
          <template v-slot:header-content>
            <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
                 <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs  transition-all"><a :href="route('admin-dashboard')">Dashboard</a></span>
                </li>
                <li>/</li>
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all text-primary"><a :href="route('employees.index')">Employer</a></span>
                </li>
            </ul>
           
        </template>
  <div class="col-span-12 lg:col-span-12 bg-white shadow-lg p-6">
    <form method="post">
      <div class="flex flex-wrap -mx-4 mb-6">
        <div class="w-full md:w-1/3 px-4 mb-6 md:mb-0">
          <div class="profile-img text-center">
            <img :src="profilePhoto" alt="Profile Image" class="rounded-full w-48 h-48 object-cover mx-auto" />
            <div class="mt-4">
              <label class="">
               {{ freelancer.name }} (Employer)
              </label>
            </div>
          </div>
        </div>
    
      </div>
      <div class="flex flex-wrap -mx-4">
    
        <div class="w-full md:w-2/3 px-4">
          <div class="tab-content profile-tab">
            <div v-if="activeTab === 'home'" id="home">
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">User Id</div>
                  <div class="w-1/2">{{ freelancer.id }} </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Name</div>
                  <div class="w-1/2">{{ freelancer.name }} </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Email</div>
                  <div class="w-1/2">{{ freelancer.email }} </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Phone</div>
                  <div class="w-1/2">{{ freelancer.phone }} </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Profession</div>
                  <div class="w-1/2">Web Developer and Designer</div>
                </div>
              </div>
            </div>
            <div v-if="activeTab === 'profile'" id="profile">
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Experience</div>
                  <div class="w-1/2">Expert</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Hourly Rate</div>
                  <div class="w-1/2">10$/hr</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Total Projects</div>
                  <div class="w-1/2">230</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">English Level</div>
                  <div class="w-1/2">Expert</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="flex">
                  <div class="w-1/2 text-gray-700">Availability</div>
                  <div class="w-1/2">6 months</div>
                </div>
              </div>
              <div>
                <div class="w-full text-gray-700 font-bold mb-2">Your Bio</div>
                <p class="text-gray-600">Your detail description</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</AdminLayout>
</template>

<script setup>
import { ref } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
const  baseUrl=window.Laravel.baseUrl

const activeTab = ref('home');

const props=defineProps({
    freelancer: {
        type: Object,
    }
});

const profilePhoto=props.freelancer?.header_photo? baseUrl+props.freelancer?.header_photo : ref('https://w7.pngwing.com/pngs/846/897/png-transparent-user-male-avatar-account-profile-web-ui-color-icon.png');

</script>

<style scoped>
.profile-img img {
  border-radius: 50%;
}
.file-btn input {
  display: none;
}
</style>