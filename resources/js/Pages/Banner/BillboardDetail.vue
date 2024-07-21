<template>
  <CatApp :categories="categories">
    <main class="max-w-[1250px] mx-auto w-full;">
      <div class="mt-5">
        <div class="grid grid-cols-5 gap-5 relative">
          <div class="col-span-3">
            <h1 class="text-3xl font-bold mb-5">{{ billBoardDetail.title }}</h1>
            <div class="relative">
              <Carousel
                ref="carousel"
                :items-to-show="1"
                v-model="currentSlide"
                :items-to-scroll="1"
                :loop="true"
              >
                <Slide v-for="(image, imgIndex) in [billBoardDetail.img1, billBoardDetail.img2, billBoardDetail.img3]" :key="imgIndex">
                  <img :src="baseUrl + image" class="h-[400px] w-full" :alt="`Gig Image ${imgIndex + 1}`">
                </Slide>
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
                <Slide v-for="(image, imgIndex) in [billBoardDetail.img1, billBoardDetail.img2, billBoardDetail.img3]" :key="imgIndex">
                  <img :src="baseUrl + image" @click="slideTo(imgIndex - 1)" class="h-[100px] w-full p-3" :alt="`Gig Image ${imgIndex + 1}`">
                </Slide>
              </Carousel>
            </div>
       
          <div>
            <h1 class="text-xl font-bold mb-3">About the Billboard</h1>
            <p v-html="billBoardDetail.pricing_description"></p>
          </div>
             </div>
          <div class="col-span-2">
            <div class=" sticky top-5 p-0">
            <div class="bg-white relative shadow-sm rounded-lg p-6 max-w-md mx-auto">
              <h1 class="text-3xl font-bold mb-5">About Freelancer</h1>
              <div class="flex flex-col items-center">
                <div class="w-100 h-100">
                  <img class="rounded-full" :src="billBoardDetail?.user_detail?.image ? baseUrl + billBoardDetail?.user_detail?.image : 'https://cdn-icons-png.freepik.com/512/6322/6322558.png'" alt="Profile Image">
                </div>
                <h2 class="text-xl font-semibold mt-4">
                  <a :href="`/infamousteam?source=gig_page&gigs=slug%3Afixing-bugs-in-wordpress-php-django-python%2Cpckg_id%3A1`">{{ billBoardDetail?.user_detail?.name }}</a>
                </h2>
                <p class="text-gray-600">{{ billBoardDetail?.user_detail?.country }}</p>
                <p class="text-gray-600">I speak {{ billBoardDetail?.user_detail?.profile_detail?.language }}</p>
              </div>
              <div class="mt-6">
                <p class="text-gray-700 font-bold">{{ billBoardDetail?.user_detail?.profile_detail?.headline }}</p>
                <p class="text-gray-700 mt-2">{{ billBoardDetail?.user_detail?.profile_detail?.overview }}</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </CatApp>
</template>

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

const baseUrl = window.Laravel.baseUrl

const props = defineProps({
  categories: {
    type: Array,
  },
  billBoardDetail: Object,
  tags: Array,
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
</script>
