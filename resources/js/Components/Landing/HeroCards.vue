<template>
  <div class="absolute mt-28">
    
  
<div
  class="grid grid-cols-1 lg:grid-cols-2 justify-items-center w-full gap-y-6 lg:flex-row justify-between   top-0 mx-4 lg:px-14 flex-col"
  :class="[animate === 0 ? 'animateEnter' : 'animateLeave']"
  >
  <div class="flex-1 flex-grow pt-6 space-y-3 z-10 text-white">
    <h1 class="text-3xl lg:text-4xl font-bold">FREELANCING FINALLY DONE RIGHT!</h1>
    <p class="text-lg lg:text-2xl">
      Join the MyFreelancer Revolution!<br />
      <br />
      Better freelancer without all the fees.
    </p>
  </div>
  <div class="flex-1 flex-grow sm:w-full max-w-[550px] z-10">
    <img
    class="h-full md:block hidden"
    src="@/assets/wpt_home_featureimg-cc.jpg"
    alt="screenshot of wpt results page"
    />
  </div>
</div>
<div
  class="grid grid-cols-1 lg:grid-cols-2 justify-items-center w-full gap-y-6 lg:flex-row justify-between absolute top-0 mx-4 lg:mx-10 flex-col "
  :class="[animate === 1 ? 'animateEnter' : 'animateLeave']"
  >
  <div class="pt-6 space-y-4 z-10 text-white">
    <h1 class="text-2xl lg:text-4xl font-bold">Up to 80% Less Fees</h1>
    <table class="text-xl">
      <tr>
        <th class="w-44"></th>
        <th class="w-36">Freelancers</th>
        <th class="w-36">Customers</th>
      </tr>
      <tr>
        <td>upwork</td>
        <td class="text-center">20%</td>
        <td class="text-center">0%</td>
      </tr>
      <tr>
        <td>fiverr</td>
        <td class="text-center">20%</td>
        <td class="text-center">5%</td>
      </tr>
      <tr>
        <td>myFreelancer</td>
        <td class="text-center">0%</td>
        <td class="text-center">5%</td>
      </tr>
    </table>
  </div>
  <div class="sm:w-full max-w-[550px] shadow-lg shadow-slate-500 z-10">
    <img class=" md:block hidden" src="@/assets/wpt_home_featureimg.jpg" alt="screenshot of wpt results page" />
  </div>
</div>

<div
  class="grid grid-cols-1 lg:grid-cols-2 justify-items-center w-full gap-y-6 lg:flex-row justify-between absolute top-0 mx-4 lg:px-14 flex-col "
  :class="[animate === 2 ? 'animateEnter' : 'animateLeave']"
  >
  <div class="flex-1 flex-grow pt-6 space-y-3 z-10 text-white">
    <h1 class="text-3xl lg:text-5xl font-bold">Get Paid Faster</h1>
    <p class="text-lg lg:text-2xl">We process your payment the day the contract is completed.</p>
    <div class="text-lg border-t border-solid border-white py-4 leading-loose font-semibold">
      <span class="rounded-xl bg-white text-[#433A25] px-3 py-1 mr-2">Online Course</span>Learn to analyze site performance, fix issues, monitor for regressions, and deliver fast, responsive designs from the start.
    </div>
  </div>
  <div class="flex-1 flex-grow sm:w-full md:block hidden max-w-[550px] z-10 d-flex justify-content-center text-center" style="align-items:center">
   <div class=" text-white flex gap-8 justify-end">
      <div class="w-24 h-24 border border-white rounded-full bg-slate-500">
        <img src="https://static-00.iconduck.com/assets.00/user-icon-1024x1024-dtzturco.png">
      </div>
      <div class="space-y-2">
        <span class="text-lg"> led by Scott Jehl, WebPageTest <br/> <strong>An online lecture course</strong></span>
        <br/>
        <button class="font-bold px-6 py-2 text-black rounded-2xl bg-yellow-500 cursor-pointer hover:bg-yellow-400">Free! Start Now</button>
      </div>
      
    </div>
  </div>
</div>


<div
  class="grid grid-cols-1 lg:grid-cols-2 justify-items-center w-full gap-y-6 lg:flex-row justify-between absolute top-0 mx-4 lg:mx-10 flex-col "
  :class="[animate === 3 ? 'animateEnter' : 'animateLeave']"
  >
  <div class="pt-6 space-y-5 z-10 text-white max-w-3xl">
    <h1 class="text-3xl lg:text-5xl font-bold">Open Cummunication</h1>
    <p class="text-lg lg:text-2xl">Communicate the way that is best for your business.</p>
    <div class="flex px-1 space-x-5">
      <img width="40" src="@/assets/live-chat.png" />
      <img width="40" src="@/assets/new/whatsup-img.png" />
      <img width="40" src="@/assets/new/skype-img.png" />
      <img width="40" src="@/assets/new/video-img.png" />
    </div>
  </div>
  <div
    class="sm:w-full max-w-[550px] shadow-lg shadow-slate-500 z-10 object-contain h-auto overflow-hidden"
    >
    <img
    class="h-full  md:block hidden"
    src="@/assets/wpt_home_lfwp_featureimg.jpg"
    alt="screenshot of wpt results page"
    />
  </div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center w-full gap-y-6 lg:flex-row justify-between   top-0 mx-4 lg:px-14 flex-col">

  <ProceedTest />
</div>
</div>  </template>
  <style>
  .animateEnter {
  opacity: 0;
  transform-origin: 50% 50%;
  animation: animate-enter 1s ease-in forwards;
  }
  .animateLeave {
  transform-origin: 50% 50%;
  animation: animate-leave 1s ease-out forwards;
  }
  @keyframes animate-enter {
  from {
  transform: scale(0.8);
  }
  to {
  opacity: 1;
  }
  }
  @keyframes animate-leave {
  to {
  transform: scale(0.8);
  opacity: 0;
  }
  }
  </style>
  <script setup lang="ts">
  import ProceedTest from '@/Components/Landing/ProceedTest.vue'
  const emit = defineEmits(['updateAnimtedCard'])
  defineProps<{
  animate: number
  }>()
  setInterval(() => {
  emit('updateAnimtedCard')
  }, 7000)
  </script>