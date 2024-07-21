
<template>
  <header class='p-4 border-b border-black'>
    <div class='theme-container flex flex-wrap gap-5 justify-between px-2 max-w-[1250px] mx-auto w-full; '>
        <div class='flex flex-col md:flex-row justify-center items-center w-full md:w-max gap-4 '>
            <a :href="route('/')"><img src='@/assets/images/main_logo.png' class='h-[40px] w-[200px]' alt='profile' height={50}
            width={150} /></a>
            <form :action="route('all-banners')" class='flex w-full'>
                <input name="search" class='border w-full border-black rounded-l-md outline-0  px-5 md:w-[350px]'
                placeholder=' What services are you looking for today? ' type='text' parentClass='mb-4' />
                <span class='bg-black text-white p-3 font-bold'>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            </form>
        </div>
        <div class='flex'>
            <ul  v-if="$page?.props?.auth?.user?.name" class=' flex gap-4 py-2 px-6'>
                <li class="text-xl"> <i class="fa-regular fa-heart"></i></li>
                <li class='text-xl'><i class="fa-regular fa-envelope"></i></li>
                <div class='relative text-xl'><i class="fa-regular fa-bell"></i>
                    <span class='bg-red-900 rounded-full h-[8px] -top-1 right-1 w-[8px] absolute'></span>
                </div>
            </ul>
              <div v-if="!$page?.props?.auth?.user?.name" class='flex gap-3 items-center h-full'>
                 <ul class="*:inline-block *:px-3 *:py-2 *:cursor-pointer hidden lg:block ml-9">
               <li  v-if="!$page?.props?.auth?.user?.name"> <a href="/login">Login</a></li>
          <li  v-if="!$page?.props?.auth?.user?.name"> <a href="/register">Sign Up</a></li>
        </ul>
        </div>
            <div v-if="$page?.props?.auth?.user?.name" class='flex gap-3 items-center h-full'>
               
                <h2 class='font-bold'> Orders</h2>
                <figure class='shrink-0 relative'  @click="toggleMenu">
                    <img :src='$page?.props?.auth?.user?.image ? baseUrl+$page?.props?.auth?.user?.name:"https://cdn-icons-png.freepik.com/512/6322/6322558.png"' class='rounded-full h-[40px] w-[40px]' alt='profile'
                    height={40} width={40} />
                </figure>
                <span class='font-bold text-green-700'>{{ $page?.props?.auth?.user?.name }}</span>
                  <div v-if="isMenuOpen" @mouseover="openMenu" style="width:max-content" class="z-20 absolute top-14 ml-10 bg-white shadow-md rounded-md mt-1">
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
    </div>
</header>
 <div class="relative z-10 hidden md:block border-b border-black">
    <button @click="toggleMenu" class="md:hidden p-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
    <ul :class="['flex-col md:flex-row  max-w-[1250px] mx-auto w-full; flex gap-4 md:gap-6 p-4 flex-wrap ', {'hidden md:flex': !isMenuOpen}]">
      <li v-for="(category, index) in props.categories" :key="index" class="relative group z-10">
        <a :href="route('category',category.slug)" @click="toggleDropdown(index)" class=" border-b border-black md:border-none md:hover:border-black">
          {{ category.name }}
        </a>
        <div :class="['absolute w-auto grid grid-cols-4 left-0 top-full  bg-white shadow-lg rounded-lg', {'hidden group-hover:block md:none': !isDropdownOpen[index]}]">
          <ul class="p-4 space-y-2 col-span-1 w-max table" style="columns:3">
            <li v-for="(subCategory, subIndex) in category.child_categories" :key="subIndex" style="display:inline-block">
              <a href="#" class="font-bold block px-4 py-2 hover:bg-gray-100">{{ subCategory.name }}</a>
              <ul style="columns:1">
                <li  v-for="(subChildCategory, subIndex) in subCategory.sub_child_categories" :key="subIndex"><a :href="route('banners',subChildCategory.slug)" class="block px-4 py-2 hover:bg-gray-100">{{ subChildCategory.name }}</a></li>
                </ul>
            </li>
            
          </ul>
        </div>
      </li>
    </ul>
  </div>
</template>
<script setup >
import { ref } from 'vue'

const  baseUrl=window.Laravel.baseUrl

   const props = defineProps({
    categories: {
        type: Array,
    },

 });
   const isMenuOpen=ref(false);
const isDropdownOpen=ref([]);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};


    const toggleDropdown=(index)=>{
      this.$set(this.isDropdownOpen, index, !this.isDropdownOpen[index]);
    }</script>
