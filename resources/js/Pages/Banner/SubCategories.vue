<template>
    <CatApp :categories="categories">

<main class="  max-w-[1250px] mx-auto w-full;">
    <div class="slider-container">
        <div class="slider">
         
            <div class="slide slide3 graphics-design h-[350px] rounded-md mt-4 w-full flex flex-col justify-center gap-10 items-center"
                :style="{ backgroundImage: `url(${bannerImage})` }">
                <h1 class="  text-5xl md:text-6xl  font-bold text-white ">{{ catDetail.name }}</h1>
                <div class="flex items-center px-2 font-bold border border-white">
                    <figure>
                        <img src='@/assets/images/image052.png' class="h-[40px] w-[40px]" height={40} width={40} alt='' />
                    </figure>
                    <h2 class="text-white">How MyFreelancer Works</h2>
                </div>
            </div>
        </div>
        <!-- <div class="flex justify-center gap-4 mt-4">
            <button
            class=" next-btn rounded-full bg-gray-300 h-[40px] w-[40px] flex justify-center items-center">&#10094;</button>
            <button
            class="prev-btn rounded-full bg-gray-300 h-[40px] w-[40px] flex justify-center items-center">&#10095;</button>
        </div> -->
    </div>
    <div class="flex justify-between py-4 ">
        <h2 class="text-2xl font-bold">Most popular in {{ catDetail.name }}</h2>
       <!--  <div class="flex gap-2">
            <button class="prev-btn">
            <img src='@/assets/images/image020.png' class="" height={40} width={40} alt='' />
            </button>
            <button class="next-btn">
            <img src='@/assets/images/image019.png' class="" height={40} width={40} alt='' />
            </button>
        </div> -->
    </div>
    <div class="flex gap-10  p-7 md:p-4  flex-wrap md:flex-nowrap ">
        <div v-for="(tag, index) in tags" :key="index" class="flex items-center gap-2 border-2 rounded-md border-gray-300 px-5 py-1 ">
            <figure>
                <img :src='tag.icon?baseUrl+tag.icon:"https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png"' class=" h-[50px] w-[60px]" height={40} width={40} alt='' />
            </figure>
            <h2 class="font-bold">{{ tag.name }}</h2>
            <span><i class="fa-solid fa-arrow-right"></i></span>
        </div>
        
    </div>
    <div class="flex items-center gap-2 py-5">
        <h2 class="text-2xl font-bold ">Explore {{ catDetail.name }} </h2>
      <!--   <span>(10,000)</span> -->
    </div>
    <div class="   md:px-2 md:py-4 ">
        <div class="grid  grid-cols-1 md:grid-cols-4  gap-3">
            <div class=" " v-for="(category, index) in catDetail.child_categories" :key="index">
                <figure>
                    <img :src='category.icon?baseUrl+category.icon:"https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png"' class="h-[170px] w-full" height={40} width={40} alt='' />
                </figure>
                <ul class="">
                    <p class="font-bold">{{ category.name }}</p>
                    <p class="mb-1"  v-for="(sub_category, index) in category.sub_child_categories" :key="index">
                        <a :href="route('banners',sub_category.slug)">{{ sub_category.name }}</a></p>
                  
                </ul>
            </div>
           

        </div>
    </div>
</main>
<div   v-if="tags.length>0" class=" flex-wrap justify-center  md:flex-nowrap  grid  p-7 gap-4 md:gap-2" style="background-color: whitesmoke;">
     <div class="w-full mb-5 text-center">
        <h1 class=" text-4xl lg:text-3xl font-semibold leading-[55px]">Explore More {{ catDetail.name }} Services</h1>
    </div>
    <ul class="tags  max-w-[1250px] mx-auto w-full;">
        <li v-for="(tag, index) in tags" :key="index"><a href="#" class="related-link" target="">{{ tag.name }}</a></li>
    </ul>
</div>
<hr>
<div v-if="faqs.length>0" class=" flex-wrap justify-center  md:flex-nowrap  grid  p-7 gap-4 md:gap-2" style="background-color: whitesmoke;">
    <div class="w-full mb-5 text-center">
        <h1 class=" text-4xl lg:text-3xl font-semibold leading-[55px]">Frequently asked questions </h1>
    </div>
    <div class=" max-w-[1250px]">
        <div  v-for="(faq, index) in faqs" :key="index">
            <FaqItem :faq="faq" />
       </div>
    </div>
</div>
</CatApp>
    </template>
    <style scoped>
    .slider {
    width: 100%;
    height: 300px;
    overflow: hidden;
    position: relative;
    }
    .slide {
    width: 100%;
    height: 100%;
    position: absolute;
    transition: transform 0.5s ease-in-out;
    /* Smooth transition effect */
    }
   .tags li{
    display: inline-block;
   }
   .related-link {
    background-color: #efeff0;
    border-color: transparent;
    border-radius: 20px;
    color: #62646a;
    display: inline-block;
    font-size: 14px;
    line-height: 120%;
    margin: 0 7px 15px;
    padding: 10px 20px;
}
    </style>
   <script setup>
import { ref } from 'vue'
import CatApp from '@/Layouts/CatApp.vue'
import FaqItem from '@/Components/Landing/FaqItem.vue'

const  baseUrl=window.Laravel.baseUrl

   const props = defineProps({
    categories: {
        type: Array,
    },
    faqs: {
        type: Array,
    },
    tags: {
        type: Array,
    },
    catDetail:Object,

 });

   const bannerImage=props.catDetail.banner?baseUrl+props.catDetail.banner:'https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png'
   const isMenuOpen=ref(false);
const isDropdownOpen=ref([]);
const toggleMenu=()=> {
      this.isMenuOpen = !this.isMenuOpen;
    }

    const toggleDropdown=(index)=>{
      this.$set(this.isDropdownOpen, index, !this.isDropdownOpen[index]);
    }

</script>