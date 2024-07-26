<template>

	 <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
      <div 
        class="bg-white rounded-lg shadow-sm overflow-hidden mb-6"
        v-for="(billBoard, index) in related"
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
           <template v-for="(image, imgIndex) in [billBoard.video, billBoard.img1, billBoard.img2, billBoard.img3]" :key="imgIndex" >
         <slide v-if="image" >
  <template v-if="isVideo(image)">
    <VideoPlayer :videoUrl="(baseUrl + image)" vidoeHeight="200px" class="h-[200px]" />
  </template>
  <template v-else>
    <img :src="baseUrl + image" class="h-[200px] w-full" :alt="`Gig Image ${imgIndex + 1}`">
  </template>
</slide>
</template>
          <template #addons>
      <Navigation />
      <Pagination />
    </template>
          </Carousel>
          <!-- Navigation Buttons -->
       
        </div>
        <!-- Gig Details -->
        <div class="p-4">
          <h2 class="text-md font-medium mb-2 min-h-[70px]">{{ billBoard.title }}</h2>
          <p class="text-gray-700 mb-4">{{ billBoard.description }}</p>
          <div class="flex items-center justify-between">
            <span class="text-lg font-semibold text-green-600" v-if="billBoard.price">From ${{billBoard.price }}</span>
            <a :href="route('bill-board',billBoard.id)" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Order Now
            </a>
          </div>
        </div>
      </div>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue';
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
import VideoPlayer from '@/Components/VideoPlayer.vue';
// Define the props
const props = defineProps({
   related:Array
});
const baseUrl = window.Laravel.baseUrl


const isVideo = (file) => {
    if(file){
  const videoExtensions = ['mp4', 'webm', 'ogg'];
  const extension = file.split('.').pop();
  return videoExtensions.includes(extension);
  }
};
</script>