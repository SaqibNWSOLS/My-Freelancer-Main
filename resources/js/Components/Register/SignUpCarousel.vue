<template>
  <div class="carousel relative w-full" style="height:auto; min-height:auto">
    <!-- Carousel Inner -->
    <div class="carousel-inner relative w-full ">
      <div
        v-for="(slide, i) in slides"
        :key="i"
        :class="['carousel-item absolute w-full h-full', { 'active': i === activeIndex }]"
      >
        <div class="h-full flex flex-col justify-center items-center  text-white">
          <div class="text-center">
            <h3 class="text-2xl mb-5">{{ slide }}</h3>
            <div v-if="i === 0" class="flex flex-col items-center gap-4">
              <!-- top headings -->
              <div class="flex justify-center w-full">
                <div class="w-1/4"></div>
                <div class="w-2/4">Customers Freelancers</div>
                <div class="w-1/4"></div>
              </div>
              <!-- up-work details -->
              <div class="flex justify-center w-full">
                <div class="w-2/4">upwork</div>
                <div class="w-1/4">20%</div>
                <div class="w-1/4">0%</div>
              </div>
              <!-- fiverr details -->
              <div class="flex justify-center w-full">
                <div class="w-2/4">fiverr</div>
                <div class="w-1/4">20%</div>
                <div class="w-1/4">5%</div>
              </div>
              <!-- my-freelancer details -->
              <div class="flex justify-center w-full">
                <div class="w-2/4">myFreelancer</div>
                <div class="w-1/4">0%</div>
                <div class="w-1/4">5%</div>
              </div>
            </div>
            <div v-else-if="i === 1" class="flex justify-center text-center">
              <p class="text-base w-2/3">
                We process your payment the day the contract is completed.
              </p>
            </div>
            <div v-else-if="i === 2" class="flex flex-col items-center justify-center text-center gap-5">
              <p class="text-base w-2/3">
                Communicate the best way that is best for your business.
              </p>
              <div class="flex gap-5">
                <i class="mdi mdi-whatsapp text-4xl cursor-pointer"></i>
                <i class="mdi mdi-skype text-4xl cursor-pointer"></i>
                <i class="mdi mdi-camera text-4xl cursor-pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button
      class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full cursor-pointer"
      @click="prevSlide"
    >
      <i class="mdi mdi-chevron-left text-2xl"></i>
    </button>
    <button
      class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full cursor-pointer"
      @click="nextSlide"
    >
      <i class="mdi mdi-chevron-right text-2xl"></i>
    </button>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const slides = ["Upto 80% Less Fees", "Get Paid Faster", "Open Communication"];
const activeIndex = ref(0);

const nextSlide = () => {
  activeIndex.value = (activeIndex.value + 1) % slides.length;
};

const prevSlide = () => {
  activeIndex.value = (activeIndex.value - 1 + slides.length) % slides.length;
};

onMounted(() => {
  setInterval(nextSlide, 30000); // Automatically move to the next slide every 3 seconds
});
</script>

<style scoped>
.carousel {
  position: relative;
  height: 100vh; /* Adjust this height as needed */
}

.carousel-inner {
  position: relative;
  width: 100%;
  height: 100%;
}

.carousel-item {
  transition: opacity 0.6s ease-in-out;
  opacity: 0;
}

.carousel-item.active {
  opacity: 1;
}

.bg-primary {
  background-color: rgb(79, 134, 196) !important;
}

@media only screen and (min-width: 996px) {
  .carousel {
    min-height: 100%;
  }
}
</style>
