<template>
  <CatApp :categories="categories">
    <main class="max-w-[1250px] mt-5 mx-auto w-full;">
      <div class="mt-5">
        <div class="grid grid-cols-6 gap-5 relative">
          <div class="col-span-4">
            <h1 class="text-3xl font-medium mb-5">{{ billBoardDetail.title }}</h1>
            <div class="relative">

              <Carousel
                ref="carousel"
                :items-to-show="1"
                v-model="currentSlide"
                :items-to-scroll="1"
                :loop="true"
              >
                 <template v-for="(image, imgIndex) in [billBoardDetail.video, billBoardDetail.img1, billBoardDetail.img2, billBoardDetail.img3]" :key="imgIndex" >
         <slide v-if="image" >
  <template v-if="isVideo(image)">
    <VideoPlayer :videoUrl="(baseUrl + image)" vidoeHeight="400px" class="h-[400px]" />
  </template>
  <template v-else>
    <img :src="baseUrl + image" class="h-[400px] w-full" :alt="`Gig Image ${imgIndex + 1}`">
  </template>
</slide>
</template>
                <template #addons>
                  <Navigation />
                  <Pagination />
                </template>
              </Carousel>
              <Carousel
                id="thumbnails"
                :items-to-show="2"
                :wrap-around="true"
                v-model="currentSlide"
                ref="carousel"
              >
                <Slide v-for="(image, imgIndex) in [ billBoardDetail.img1, billBoardDetail.img2, billBoardDetail.img3]" :key="imgIndex">
                    
                  <img :src="baseUrl + image" @click="slideTo(imgIndex - 1)" class="h-[100px] w-full p-3" :alt="`Gig Image ${imgIndex + 1}`">
                </Slide>
              </Carousel>
            </div>
       
          <div>
            <h1 class="text-xl font-medium mb-3 mt-5">About the Billboard</h1>
            <p v-html="billBoardDetail.pricing_description"></p>
          </div>
             </div>
          <div class="col-span-2">
             <div class=" sticky top-5 p-0">
                 <div class="bg-[#f9f9f9] relative shadow-sm rounded-sm p-6 max-w-md mx-auto">
                     <h1 class="text-xl font-medium mb-5">Order in just $600</h1>
                    
                     <div class="w-full text-center  bg-[#203964]  rounded-lg p-3 ">
                         <a href="#" class="mt-6 text-md text-white font-medium w-full">Continue</a>
                     </div>
            </div>
            <div class="bg-[#f9f9f9] mt-5 relative shadow-sm rounded-sm p-6 max-w-md mx-auto">
              <h1 class="text-xl font-medium mb-5">About Freelancer</h1>
              <hr>
              <div class="flex flex-row items-center">
                <div class="w-[50%] h-50">
                  <img class="rounded-full w-[120px]" :src="billBoardDetail?.user_detail?.image ? baseUrl + billBoardDetail?.user_detail?.image : 'https://cdn-icons-png.freepik.com/512/6322/6322558.png'" alt="Profile Image">
                </div>
               <div>
                    <h2 class="text-xl font-semibold mt-4">
                  <a :href="`/infamousteam?source=gig_page&gigs=slug%3Afixing-bugs-in-wordpress-php-django-python%2Cpckg_id%3A1`">{{ billBoardDetail?.user_detail?.name }}</a>
                </h2>
                <p class="text-gray-600">{{ billBoardDetail?.user_detail?.country }}</p>
                <p class="text-gray-600">I speak {{ billBoardDetail?.user_detail?.profile_detail?.language }}</p>
               </div>
              </div>
              <hr>
              <div class="mt-6">
                <p class="text-gray-700 text-xl font-medium">{{ billBoardDetail?.user_detail?.profile_detail?.headline }}</p>
                <p class="text-gray-700 mt-2">{{ billBoardDetail?.user_detail?.profile_detail?.overview }}</p>
              </div>
            </div>
            </div>
          </div>
        </div>
       <div class="mt-5">
        <h1 class="my-8 text-xl font-medium">People Who Viewed This Service Also Viewed </h1>
            <RelatedBillboard :related="related" />
       </div>
      </div>
    </main>
  </CatApp>
</template>
<style>
    .vjs-tech{
  height: 400px !important;
}
</style>
<style scoped>
.carousel__item {
  height: 500px;
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

.carousel__icon {
  fill: white !important;
}

.tags li {
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

.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 1.25rem; /* Adjust based on your header height */
}
</style>

<script setup>
import { ref } from 'vue'
import CatApp from '@/Layouts/CatApp.vue'
import FaqItem from '@/Components/Landing/FaqItem.vue'
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
import VideoPlayer from '@/Components/VideoPlayer.vue';
import RelatedBillboard from '@/Components/RelatedBillboard.vue';

const baseUrl = window.Laravel.baseUrl

const props = defineProps({
  categories: {
    type: Array,
  },
  billBoardDetail: Object,
  tags: Array,
  related:Array
})

const isMenuOpen = ref(false)
const isDropdownOpen = ref([])
const currentSlide = ref(0)
const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

const toggleDropdown = (index) => {
  isDropdownOpen.value[index] = !isDropdownOpen.value[index]
}
const carousel = ref(null)

// Methods to navigate the slider
const nextSlide = () => {
  carousel.value.next()
}

const prevSlide = () => {
  carousel.value.prev()
}

const slideTo = (val) => {
  currentSlide.value = val
}
const isVideo = (file) => {
  const videoExtensions = ['mp4', 'webm', 'ogg'];
  const extension = file.split('.').pop();
  return videoExtensions.includes(extension);
};

const getVideoOptions = (src) => {
  return {
     autoplay: false,
        controls: true,
    sources: [
      {
        type: 'video/mp4',
        src: src
      }
    ],
   
    loop: true
  };
};
</script>
