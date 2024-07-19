<template>
    <CatApp :categories="categories">

<main class="max-w-[1250px] mx-auto w-full;">
    <div class=" mt-5 ">
        <div class="">
            <div class=" graphics-design h-[250px] w-full rounded-md flex flex-col justify-center gap-10 items-center"
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

    <div class="flex justify-between py-4 px-0">
        <h2 class="text-2xl font-bold">Most popular in {{ catDetail.name }}</h2>
       
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
    <div class="flex items-center gap-2 ">
        <h2 class="text-2xl font-bold ">Explore {{ catDetail.name }} </h2>
        <span>({{  new Set(billBoards).size }})</span>
    </div>
   <div class=" md:px-2 md:py-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
      <div 
        class="bg-white rounded-lg shadow-md overflow-hidden mb-6"
        v-for="(billBoard, index) in billBoards"
        :key="index"
      >
        <!-- Gig Images Slider -->
        <div class="relative">
          <Carousel
            ref="carousel"
            :items-to-show="1"
            :items-to-scroll="1"
            :loop="true"
            :navigation-enabled="false"
          >
          <slide v-for="(image, imgIndex) in [billBoard.img1, billBoard.img2, billBoard.img3]" :key="imgIndex" >
            <img :src="baseUrl + image" class="h-[150px] w-full" :alt="`Gig Image ${imgIndex + 1}`">
        </slide>
          <template #addons>
      <Navigation />
      <Pagination />
    </template>
          </Carousel>
          <!-- Navigation Buttons -->
       
        </div>
        <!-- Gig Details -->
        <div class="p-4">
          <h2 class="text-md font-medium mb-2">{{ billBoard.title }}</h2>
          <p class="text-gray-700 mb-4">{{ billBoard.description }}</p>
          <div class="flex items-center justify-between">
            <span class="text-lg font-semibold text-green-600" v-if="billBoard.price">From ${{billBoard.price }}</span>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Order Now
            </button>
          </div>
        </div>
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
        <h1 class=" text-4xl lg:text-5xl font-semibold leading-[55px]">Frequently asked questions </h1>
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
   .carousel__item {
   height: 200px;
  width: 100%;
  background-color: var(--vc-clr-primary);
  color: var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 0px;
}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
}
.carousel__icon{
    fill: white !important;
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
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'

const  baseUrl=window.Laravel.baseUrl

   const props = defineProps({
    categories: {
        type: Array,
    },
    billBoards:Array,
    tags:Array,
    faqs:Array,
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
const carousel = ref(null)

// Methods to navigate the slider
const nextSlide = () => {
  carousel.value.next()
}

const prevSlide = () => {
  carousel.value.prev()
}
</script>