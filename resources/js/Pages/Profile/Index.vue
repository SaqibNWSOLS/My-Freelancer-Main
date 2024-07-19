<template>
  <Head title="My Profile" />
  <AuthenticatedLayout>
  
    <h5 class="text-xl border-b pb-2">Edit Profile</h5>
    <div class="flex flex-wrap  w-full ">
      <div class="w-full sm:w-1/4 border-r">
        <div class=" pr-4">
          <div class="flex flex-col justify-center items-center my-6">
    <label for="profile-upload" class="cursor-pointer">
      <img :src="image" class="  w-24 h-24" alt="Profile Image">
     
    </label>
    <p class="font-medium mt-4">{{ userDetail.name }}</p>
  </div>

  <ul   class=" -mb-px text-sm font-medium" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">

<li  v-if="$page.props.user.roles.includes('Freelancer')" class="side-item" v-for="(tab, index) in tabs"
        :key="tab.value"
        @click="selectTab(tab.value)"
        :class="['tab-item cursor-pointer py-2 px-4', { 'active-tab text-blue-500 border-b-2 border-blue-500': selectedTab === tab.value }]"
      >
  <i :class="'mdi '+ tab.icon "></i>
  <a href="#" class="ml-2 text-md">{{ tab.title }}</a>
</li>

    <li  v-if="$page.props.user.roles.includes('Employer')" class="side-item" v-for="(tab, index) in employerTabs"
        :key="tab.value"
        @click="selectTab(tab.value)"
        :class="['tab-item cursor-pointer py-2 px-4', { 'active-tab text-blue-500 border-b-2 border-blue-500': selectedTab === tab.value }]"
      >
  <i :class="'mdi '+ tab.icon "></i>
  <a href="#" class="ml-2 text-md">{{ tab.title }}</a>
</li>
    
  </ul>

  <!-- {
    title: "Hire Us",
    value: "#g",
    icon: "mdi-laptop",
  }, -->
        </div>
      </div>

      <div class="w-full sm:w-3/4">
        <div class="w-full p-4">
            <div class="tabs-content mt-4">
              <div key="contact-information" v-show="selectedTab === 'contact-information'">
          <ContactInformation  :userDetail="userDetail" :countries="countries" :selectTab="selectTab" />
        </div>
        <div key="profile-front-page" v-show="selectedTab === 'profile-front-page'">
          <ProfileFrontPage :profileFront="profileFront" :verfication="verfication" :userDetail="userDetail" :countries="countries" />
          </div>
           <div key="billboard" v-show="selectedTab === 'billboard'">
          <BillboardView :billBoards="billBoards" :billBoardDraft="billBoardDraft" />
           </div>
           <div key="screen-identity" v-show="selectedTab === 'screen-identity'">
          <ScreenIdentity :userDetail="userDetail" :flash="flash"  />
        </div>
           <div key="email-preference" v-show="selectedTab === 'email-preference'">
          <EmailPreference />
        </div>
           <div key="myfreelancer-store" v-show="selectedTab === 'myfreelancer-store'">
          <MyFreelancerStore />
        </div>
        <div key="id-verification" v-show="selectedTab === 'id-verification'">
          <IdVerification  :verfication="verfication" :userDetail="userDetail" :countries="countries" />
           </div>
           <div key="password" v-show="selectedTab === 'password'">
          <Password :flash="flash" />
          </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import BillboardView from '@/Components/Profile/Tabs/BillboardView.vue';
import ProfileAside from '@/Components/Profile/ProfileAside.vue';
import ContactInformation from '@/Components/Profile/Tabs/ContactInformation.vue';
import ProfileFrontPage from '@/Components/Profile/Tabs/ProfileFrontPage.vue';
import ScreenIdentity from '@/Components/Profile/Tabs/ScreenIdentity.vue';
import EmailPreference from '@/Components/Profile/Tabs/EmailPreference.vue';
import IdVerification from '@/Components/Profile/Tabs/IdVerification.vue';
import MyFreelancerStore from '@/Components/Profile/Tabs/MyFreelancerStore.vue';
import Password from '@/Components/Profile/Tabs/Password.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3';
const props = defineProps({
    userDetail: {
        type: Object,
    },
     verfication: {
        type: Object,
    },
    profileFront:{
       type: Object,
    },
    countries: {
        type: Array,
    },
    billBoards:{
      type:Array,
    },
    billBoardDraft:{
      type:Object,
    },
     flash:{
      type:Object,
    }
});
const  baseUrl=window.Laravel.baseUrl

const    tab="contact-information";


import { ref, reactive } from "vue";

const image =props.userDetail?.image ? `${baseUrl}${props.userDetail.image}` : ref('https://cdn-icons-png.freepik.com/512/6322/6322558.png');
const name = ref("");
const selectedTab = ref('contact-information'); // Make selectedTab reactive
const selectTab = (index) => {
  selectedTab.value = index;
};




const tabs = reactive([
  {
    title: "Contact Information",
    value: "contact-information",
    icon: "mdi-account-box",
  },
  {
    title: "Dashboard",
    value: "#d",
    icon: "mdi-home",
  },

  
  {
    title: "Screen Identity",
    value: "screen-identity",
    icon: "mdi-camera-metering-center",
  },
  {
    title: "Email Preference",
    value: "email-preference",
    icon: "mdi-email",
  },
  {
    title: "ID Verification",
    value: "id-verification",
    icon: "mdi-face-recognition",
  },
  {
    title: "Password",
    value: "password",
    icon: "mdi-eye",
  },
  {
    title: "Billboard",
    value: "billboard",
    icon: "mdi-billboard",
  },
  {
    title: "My Freelancer Store",
    value: "myfreelancer-store",
    icon: "mdi-store",
  },
  {
    title: "Profile Page Front View",
    value: "profile-front-page",
    icon: "mdi-page-layout-sidebar-right",
  },
]);


const employerTabs = reactive([
  {
    title: "Contact Information",
    value: "contact-information",
    icon: "mdi-account-box",
  },
  {
    title: "Screen Identity",
    value: "screen-identity",
    icon: "mdi-camera-metering-center",
  },
  {
    title: "Email Preference",
    value: "email-preference",
    icon: "mdi-email",
  },
  {
    title: "Password",
    value: "password",
    icon: "mdi-eye",
  }
]);
  
</script>

<style scoped>
.border-r {
  border-right: 1px solid #e5e7eb;
  padding-right: 1rem;
}
.pb-2 {
  padding-bottom: 0.5rem;
}
.side-item {
  border-top: 1px solid #e5e7eb;
  padding: 14px;
    font-size: 16px;
}
.pb-2 {
  padding-bottom: 0.5rem;
}
</style>
