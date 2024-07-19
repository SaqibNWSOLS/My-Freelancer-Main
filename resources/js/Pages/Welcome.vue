<template>
    <App :categories="categories">
  <main>
    <div>
      <div
        class="lg:px-10  2xl:px-28 grid py-8 lg:py-64 relative h-[600px] lg:h-[750px] bg-image-bg-f"
        :class="
          animate === 0
            ? 'bg-blue-grad'
            : animate === 1
              ? 'bg-purple-grad'
              : animate === 2
                ? 'bg-yellow-white-grad'
                : 'bg-orange-grad'
        ">
        <HeroCards :animate="animate" @update-animted-card="updateAnimtedCard" />
      </div>

      <div class="lg:px-10 px-8 gap-6 grid justify-items-center lg:justify-center grid-cols-1 md:grid-cols-2  pb-10"
        :class="animate === 2 ? 'bg-white' : 'text-white bg-[#1B2A4A]' ">
        <div class="space-y-5">
          <h4 class="font-bold text-xl lg:text-3xl ">My Freelancer</h4>
          <div class="w-[450px] h-96 bg-gray-400 rounded-md">
            <img src="https://img.freepik.com/free-vector/freelancer-flexible-remote-work-locations-isometric-flowchart-with-shared-office-writing-home-outdoor-with-laptop-vector-illustration_1284-30324.jpg" class="h-96 w-[450px] ">
          </div>
        </div>
        <div class="space-y-5 px-8 text-base lg:text-xl">
          <h4 class="font-bold text-xl lg:text-3xl">Welcome To My Freelancer</h4>
          <p class="">Where Possibilities and Talent Unite <br>
            Join us and be part of a platform dedicated to excellence, affordability, and innovation in the freelance industry.
          </p>
          <ul class="space-y-5">
            <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon> You’ll learn how to effectively think about and prioritize web performance today.
            </li>
            <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon>
              <p class="ml-1"> You’ll learn about common performance metrics, which ones matter most, and how to
                identify performance bottlenecks that impact the user experience.</p>
            </li>
            <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon>
              <p class="ml-1">You’ll learn how to fix performance issues, employ processes to prevent regressions, and
                build in ways that prevent problems from occurring in the first place.</p>
            </li>
          </ul>
        </div>

      </div>
      <div class="justify-content-center flex mt-[100px]" style=" align-items:center;justify-content:center">
        <div style="max-width:1310px;">
        <h1 class="text-lg lg:text-3xl">Join My Freelancer Today </h1>
        <p class="mt-3">Join a vibrant community where opportunity and talent collide by clicking Sign Up Now My Freelancer is your ticket to success, whether you are trying to hire or get employed.</p>

        <h1 class="text-lg lg:text-3xl mt-5">Revolutionizing the Freelance Industry</h1>
        <p class="mt-3">Experience the future of freelancing with My Freelancer, where we are transforming the industry by offering premium services with significantly lower fees. Our goal is to disrupt the conventional model, providing the same high-quality services at a fraction of the cost.</p>
          <h1 class="text-lg lg:text-3xl mt-5">Why Choose Us?</h1>
          <ul class="mt-3">
            <li><b>Lower Fees:</b> Enjoy exceptional services with 75% less in fees compared to other platforms.</li>
            <li><b>Open Communication:</b> Transparent communication ensures your requirements are understood, leading to accurate and timely project completion.</li>
            <li><b>Exemplary Standards:</b> Our platform requires developers to uphold exemplary standards of care and professionalism.</li>
            <li><b>Diverse Opportunities:</b> Explore a wide range of freelance projects across various industries and skill levels.</li>
          </ul>

          <h1 class="lg:text-3xl mt-5">Contact Us</h1>
          <p class="mt-3">Do you require help or have any questions? Our help desk is 24/7 available to assist you! </p>
          <h1 class="lg:text-3xl mt-5">Follow Us</h1>
          <p class="mt-3">Keep up with the most recent developments and possibilities. (Facebook, Instagram, twitter links to be added here)</p>
      </div>

    </div>
      <div class="justify-content-center flex" style=" align-items:center;justify-content:center">
        <div style="max-width:1310px;">
          
       
        
     

       <div class="lg:px-10  mb-5  px-8 gap-[-10px] grid grid-cols-1 justify-items-center lg:justify-center  md:grid-cols-6  pb-10"
       style="margin-top:100px">
        <div class="space-y-2 col-span-3"   style="background-image: url('https://res.cloudinary.com/upwork-cloud-acquisition-prod/image/upload//q_auto,dpr_2.0,f_auto/brontes/for-talents/find-great-work@2x.jpg')">
          <div class=" bg-gray-400 rounded-md">
           <img src="https://res.cloudinary.com/upwork-cloud-acquisition-prod/image/upload//q_auto,dpr_2.0,f_auto/brontes/for-talents/find-great-work@2x.jpg" class=" ">  
          </div>
        </div>
        <div class="space-y-8 relative px-8 text-base col-span-3 text-white p-5 lg:text-xl" style="background:#34415e">
          <h4 class="font-bold text-xl lg:text-3xl">For talent</h4>
         <h2 class="font-bold text-xl lg:text-4xl">Find great work</h2>
          <ul class="space-y-5">
            <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon> You’ll learn how to effectively think about and prioritize web performance today.
            </li>
            <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon>
              <p class="ml-1"> You’ll learn about common performance metrics, which ones matter most, and how to
                identify performance bottlenecks that impact the user experience.</p>
            </li>
            <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon>
              <p class="ml-1">You’ll learn how to fix performance issues, employ processes to prevent regressions, and
                build in ways that prevent problems from occurring in the first place.</p>
            </li>
             <li class="flex gap-1"><v-icon color="green-darken-2" icon="mdi-checkbox-marked-circle"
                size="large"></v-icon>
              <p class="ml-1">You’ll learn how to fix performance issues, employ processes to prevent regressions, and
                build in ways that prevent problems from occurring in the first place.build in ways that prevent problems from occurring in the first place.</p>
            </li>
             
             
            
          </ul>
        </div>
         </div>
        
 </div>
      </div>
    <!--   <ProceedTest /> -->
    </div>
  </main>
</App>
</template>

<style scoped>
.bg-purple-grad {
  background-image: url(@/assets/wpt_home_swoop.svg),
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%237D0688'/%3E%3Cstop offset='1' stop-color='%23150033'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23D617C5' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23D617C5' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.49'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
  background-position:
    bottom -12px left 50%,
    bottom 0 left 50%;
  background-repeat: no-repeat, no-repeat;
  background-size: 100%, cover;
  background-color: #6b25cf;
}

.bg-blue-grad {
  background-repeat: no-repeat, no-repeat;
  background-size: 100%, cover;
  background-position:
    bottom -12px left 50%,
    bottom 0 left 50%;
  background-color: #0a234f;
  background-image: url(@/assets/wpt_home_swoop.svg),
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23123D80'/%3E%3Cstop offset='1' stop-color='%23050D26'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23307CD1' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23307CD1' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
}

.bg-yellow-grad {
  background-repeat: no-repeat, no-repeat;
  background-size: 100%, cover;
  background-position:
    bottom -12px left 50%,
    bottom 0 left 50%;
  background-color: #352a20;
  background-image: url(@/assets/wpt_home_swoop.svg),
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23776340'/%3E%3Cstop offset='1' stop-color='%2317150C'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23CCB77F' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23CCB77F' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
}

.bg-yellow-white-grad {
  background-repeat: no-repeat, no-repeat;
  background-size: 100%, cover;
  background-position:
    bottom -12px left 50%,
    bottom 0 left 50%;
  background-color: #352a20;
  background-image: url(@/assets/wpt_home_swoop-white.svg),
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23776340'/%3E%3Cstop offset='1' stop-color='%2317150C'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23CCB77F' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23CCB77F' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
}

.bg-orange-grad {
  background-repeat: no-repeat, no-repeat;
  background-size: 100%, cover;
  background-position:
    bottom -12px left 50%,
    bottom 0 left 50%;
  background-color: #be5e57;
  background-image: url(@/assets/wpt_home_swoop.svg),
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23AA4941'/%3E%3Cstop offset='1' stop-color='%235A170C'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23CCB77F' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23CCB77F' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
}
</style>

  <script setup>
import HeroCards from '@/Components/Landing/HeroCards.vue'
import App from '@/Layouts/App.vue'
import ProceedTest from '@/Components/Landing/ProceedTest.vue'
import { ref, onMounted } from 'vue'

const animate = ref(0)
const updateAnimtedCard = () => {
  animate.value = animate.value === 3 ? 0 : animate.value + (1 % 4)
}
 const props = defineProps({
    categories: {
        type: Array,
    },

 });
const screenWidth = ref(0)

onMounted(() => {
  screenWidth.value = window.innerWidth
})
</script>
