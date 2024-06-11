<template>
  <div class="text-center relative">
    <div @mouseover="openMenu" @mouseleave="closeMenu">
      <button class="px-2 h-7 text-xs btn-text" @click="toggleMenu">
        <i class="mdi mdi-account mr-1"></i>
        <i v-if="isMenuOpen" class="mdi mdi-menu-up"></i>
        <i v-else class="mdi mdi-menu-down"></i>
      </button>
       <div v-if="isMenuOpen" @mouseover="openMenu" style="width:max-content" class="absolute z-10 top-8 right-0 bg-white shadow-md rounded-md mt-1">
      <ul>
        <li class="py-2 px-4 cursor-pointer hover:bg-gray-100"><a :href="route('profile.index')">Manage Profile</a></li>
        <li class="py-2 px-4 cursor-pointer hover:bg-gray-100" :href="route('job.create')" v-if="$page.props.user.roles.includes('Freelancer')" ><a :href="route('front-view')">View My Page</a></li>
        <!-- <li v-for="(item, index) in items" :key="index" :value="index" class="py-2 px-4 cursor-pointer hover:bg-gray-100">
          {{ item.title }}
        </li> -->
        <li class="py-2 px-4 cursor-pointer hover:bg-gray-100" ><a :href="route('logout')">Logout</a></li>
      </ul>
    </div>
  </div>
    </div>

   
</template>

<script setup>
import { useRouter } from "vue-router";
import { ref } from 'vue';

const isMenuOpen = ref(false);
const items = [
  { title: "View Cash Account" },
  { title: "Payment Methods" },
  { title: "Help" },
];
const router = useRouter();

const goToMyProfile = () => router.push({ path: "/app/profile" });

const goToMyPage = ()=> router.push({path: "/front-page"});

const logoutUser = () => {
  localStorage.removeItem("authUser");
  localStorage.removeItem("token");
  return router.replace({ path: "/sign-up" });
};

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

/*const openMenu = () => {
  isMenuOpen.value = true;
};

const closeMenu = () => {
  isMenuOpen.value = false;
};*/
</script>

<style scoped>
.btn-text {
  background-color: transparent;
  border: none;
}
</style>
