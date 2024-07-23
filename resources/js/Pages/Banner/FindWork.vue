<template>
    <CatApp :categories="categories">

<main class="max-w-[1250px] mx-auto w-full;">

  <div class="grid grid-cols-10 mt-5  s gap-10">
      <div class="col-span-3  shadow-sm">
       <div class=" sticky top-5 p-0">
            <div class="bg-white relative shadow-sm rounded-lg p-6 max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-4">Filters</h2>

            <!-- Categories Filter -->
         <form @submit.prevent="applyFilters">
    <div class="mb-4">
      <h3 class="text-lg font-semibold mb-2">Categories</h3>
      <ul class="space-y-2">
        <li v-for="(category, index) in categories" :key="index">
          <label class="inline-flex items-center">
            <input
             @change="applyFilters"
              type="checkbox"
              name="categories_id[]"
              :value="category.id"
              class="form-checkbox text-indigo-600"
              v-model="filters.categories_id"
            />
            <span class="ml-2">{{ category.name }}</span>
          </label>
        </li>
      </ul>
    </div>

    <!-- Price Range Filter -->
    <div class="mb-4">
      <h3 class="text-lg font-semibold mb-2">Price Range</h3>
      <div class="flex items-center space-x-2">
        <input
          @change="applyFilters"
          type="number"
          class="w-full p-2 border border-gray-300 rounded"
          placeholder="Min"
          v-model="filters.price_min"
        />
        <span>-</span>
        <input
          @change="applyFilters"
          type="number"
          class="w-full p-2 border border-gray-300 rounded"
          placeholder="Max"
          v-model="filters.price_max"
        />
      </div>
    </div>

    <!-- Ratings Filter -->
    <div class="mb-4">
      <h3 class="text-lg font-semibold mb-2">Ratings</h3>
      <ul class="space-y-2">
        <li v-for="rating in ratings" :key="rating.value">
          <label class="inline-flex items-center">
            <input
              @change="applyFilters"
              type="radio"
              name="rating"
              class="form-radio text-indigo-600"
              :value="rating.value"
              v-model="filters.rating"
            />
            <span class="ml-2">{{ rating.label }}</span>
          </label>
        </li>
      </ul>
    </div>

    <!-- Apply Filters Button -->
  
  </form>
  </div>
  </div>
      </div>
      <div class="col-span-7">
        <div v-for="(job, index) in jobs?.data"
        :key="index" class="job-tile cursor-pointer px-6 py-4 w-full bg-white shadow-sm rounded-md mb-4">
    <div class="flex flex-col md:flex-row md:items-start">
        <div class="flex-1 mb-4 md:mb-0">
<!--             <small class="text-gray-500 mb-1 block">Posted 5 minutes ago</small>
 -->            <h2 class="text-lg font-semibold mb-2">
                <a :href="route('job-detail',job.slug)" class="text-blue-600 hover:underline">{{ job.title }}</a>
            </h2>
        </div>
        <div class="flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
           <a :href="route('job-detail',job.slug)"  class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded inline-flex items-center">
               
                Apply Now
            </a>
        </div>
    </div>
    <div class="mt-4">
        <ul class="flex flex-wrap text-gray-700 text-sm mb-2">
           <!--  <li class="mr-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-1 text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.027 15h3.225v2.46c.083.95.513 1.837 1.207 2.49A3.87 3.87 0 0012.015 21v-3.61l2.905-3.08A3 3 0 0016.01 12V4a1 1 0 00-.999-1H6.265a.997.997 0 00-.998.75l-2.206 8.76a2.003 2.003 0 001.08 2.298c.277.131.58.197.886.193z" />
                        <path fill="currentColor" d="M18.504 13H21V3h-2.496v10z" />
                    </svg>
                    Payment verified
                </div>
            </li>
            <li class="mr-4">
                <div class="flex items-center">
                    <div class="flex items-center mr-1">
                        <div class="flex text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.1 3.386a1 1 0 00.95.691h3.516c.97 0 1.371 1.24.588 1.81l-2.853 2.072a1 1 0 00-.364 1.118l1.1 3.386c.3.921-.755 1.688-1.54 1.118l-2.853-2.072a1 1 0 00-1.175 0l-2.853 2.072c-.784.57-1.838-.197-1.539-1.118l1.1-3.386a1 1 0 00-.364-1.118L2.345 8.814c-.783-.57-.383-1.81.588-1.81h3.516a1 1 0 00.95-.691l1.1-3.386z" />
                            </svg>
                        </div>
                        <span class="ml-1">4.99</span>
                    </div>
                    <span>5 feedbacks</span>
                </div>
            </li>
            <li class="mr-4">
                <strong>$4K+</strong> spent
            </li> -->
            <li class="mr-4" v-if="job?.user_detail?.country">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-1">
                        <path d="M12 11.9a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                        <path d="M18.4 9.4C18.4 5.9 15.6 3 12 3 8.4 3 5.6 5.9 5.6 9.4c0 1.5.6 2.9 1.5 4.1 1.3 1.8 5 7.5 5 7.5s3.6-5.7 5-7.5c.7-1.2 1.3-2.5 1.3-4.1z" />
                    </svg>
                    {{ job?.user_detail?.country }}
                </div>
            </li>
        </ul>
        <ul class="flex flex-wrap text-gray-700 text-sm mb-2">
            <li class="mr-4">
                <strong v-if="job.min_price && job.max_price">Budget: <span v-if="job.min_price!=0">${{ job.min_price }} - </span> <span v-else>Over </span> ${{ job.max_price }}</strong>
                <strong v-else>Budget: {{ job.price }}</strong>
            </li>
           <!--  <li class="mr-4">
                <strong>Intermediate</strong>
            </li>
            <li class="mr-4">
                <strong class="mr-1">Est. time:</strong> <strong>More than 6 months, 30+ hrs/week</strong>
            </li> -->
        </ul>
       <ReadMore :content="job.description" :job="job" />
      <!--   <div class="mt-4">
            <span class="bg-gray-200 text-gray-800 text-sm font-semibold px-2 py-1 rounded">Strapi</span>
        </div> -->
      <!--   <ul class="flex flex-wrap text-gray-700 text-sm mt-3">
            <li class="mr-6">
                <span class="font-light mr-1">Proposals:</span> <strong>5 to 10</strong>
            </li>
        </ul> -->
    </div>
</div>

          <nav>
      <ul class="flex justify-center mt-4 space-x-2">
        <li v-if="jobs.prev_page_url">
          <a 
            :href="jobs.prev_page_url" 
            class="px-3 py-1 border rounded-lg hover:bg-gray-200"
          >
            Previous
          </a>
        </li>

        <li v-for="page in pages" v-if="jobs.data.length" :key="page" :class="{ 'font-bold': page === jobs.current_page }">
          <a 
            v-if="page !== '...'" 
            :href="pageUrl(page)" 
            class="px-3 py-1 border rounded-lg hover:bg-gray-200"
          >
            {{ page }}
          </a>
          <span v-else class="px-3 py-1">...</span>
        </li>

        <li v-if="jobs.next_page_url">
          <a 
            :href="jobs.next_page_url" 
            class="px-3 py-1 border rounded-lg hover:bg-gray-200"
          >
            Next
          </a>
        </li>
      </ul>
    </nav>
      </div>
  </div>
</main>
 
<!-- <div   v-if="tags.length>0" class=" flex-wrap justify-center  md:flex-nowrap  grid  p-7 gap-4 md:gap-2" style="background-color: whitesmoke;">
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
</div> -->
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
import { useRoute } from 'vue-router';
import { Inertia } from '@inertiajs/inertia';

import CatApp from '@/Layouts/CatApp.vue'
import FaqItem from '@/Components/Landing/FaqItem.vue'
import ReadMore from '@/Components/ReadMore.vue'

import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
import { computed } from 'vue';

const  baseUrl=window.Laravel.baseUrl

   const props = defineProps({
    categories: {
        type: Array,
    },
     filters: {
        type: Object,
    },
    jobs:Array,
    tags:Array,


 });


const filters = ref({
  categories_id: props.filters?.categories_id || [],
  price_min: props.filters?.price_min || null,
  price_max: props.filters?.price_max || null,
  rating: props.filters?.rating || null,
});

   const ratings = ref([
  { value: 1, label: '1 Star & Up' },
  { value: 2, label: '2 Stars & Up' },
  { value: 3, label: '3 Stars & Up' },
  { value: 4, label: '4 Stars & Up' },
  { value: 5, label: '5 Stars' },
]);

// Methods

const applyFilters = () => {
  Inertia.get(route('find-work'), filters.value);
};

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

const pages = computed(() => {
  const result = [];
  const { current_page, last_page } = props.jobs;
  for (let i = 1; i <= last_page; i++) {
    if (i === 1 || i === last_page || (i >= current_page - 2 && i <= current_page + 2)) {
      result.push(i);
    } else if (result[result.length - 1] !== '...') {
      result.push('...');
    }
  }
  return result;
});

// Generate the URL for a specific page
const pageUrl = (page) => {
  return `${props.jobs.path}?page=${page}`;
};
</script>