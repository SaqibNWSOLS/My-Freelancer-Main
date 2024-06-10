<script setup>
import Github from '@/assets/github.svg'
import Twitter from '@/assets/twitter.svg'
import Youtube from '@/assets/youtube.svg'
import LinkedIn from '@/assets/linkedin.svg'
</script>
<template>
  <!-- <div
    class="flex flex-wrap gap-y-3 lg:flex-nowrap items-center text-lg gap-x-10 bg-[#1b2a4a] pt-10 pb-16 lg:pt-12 lg:pb-20 text-white px-5 lg:px-10"
  >
    <div><p class="font-bold italic">My Freelancer</p></div>
    <div class="flex justify-end lg:basis-auto items-center gap-x-4 p-1 ml-auto">
      <p>Find us on:</p>
      <a href="#" class="rounded-full bg-white p-1">
        <img :src="Github" />
      </a>
      <a href="#" class="rounded-full bg-white p-1">
        <img :src="Twitter" />
      </a>
      <a href="#" class="rounded-full bg-white p-1">
        <img :src="Youtube" />
      </a>
      <a href="#" class="rounded-full bg-white p-1">
        <img :src="LinkedIn" />
      </a>
    </div>
    <div class="flex text-right flex-col gap-x-10 ml-auto *:underline xl:flex-row">
      <a href="#">Contact Sales</a>
      <a href="#">Term of Services</a>
      <a href="#">Private Policy</a>
      <a href="#">@ All right reserved</a>
    </div>
  </div> -->
  <div class="grid gap-6 grid-cols- md:grid-cols-2 lg:grid-cols-5 bg-white px-12 py-12 justify-center">
    <div>
      <h4 class="font-bold pb-2">Category</h4>
      <ul class="text-gray-700">
        <li class="py-1"><a class="cursor-pointer hover:underline">Graphics & Design</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Digital Marketing</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Writing & Translation</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Video & Animation</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Music & Audio</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Myfreelancer Logo Marker</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Programming & Tech</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Data</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Business</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Lifestyle</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Photography</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">End-to-End Projects</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Sitemap</a></li>
      </ul>
    </div>

    <div>
      <h4 class="font-bold pb-2">About</h4>
      <ul class="text-gray-700">
        <li class="py-1"><a class="cursor-pointer hover:underline">Careers</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Press & News</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Partnerships</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Privacy Policy</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Terms of services</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Intellectual Property</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Investor Relations</a></li>
      </ul>
    </div>


    <div>
      <h4 class="font-bold pb-2">Support and Education</h4>
      <ul class="text-gray-700">
        <li class="py-1"><a class="cursor-pointer hover:underline">Help & Support</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Trust & Safety</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Writing & Translation</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Selling on My Freelancer</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Buying on My Freelancer</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">My Freelancer Guides </a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Learn <br /><span
              class="text-gray-700 text-sm">Online Courses</span> </a></li>
      </ul>
    </div>


    <div>
      <h4 class="font-bold pb-2">Community</h4>
      <ul class="text-gray-700">
        <li class="py-1"><a class="cursor-pointer hover:underline">Customer Success Stories</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Community Hub</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Forum</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Events</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Blog</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Creators</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Affiliates</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Podcast</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Invite a Friend</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Become a Seller</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Community Standards</a></li>
      </ul>
    </div>


    <div>
      <h4 class="font-bold pb-2">Business Solutions</h4>
      <ul class="text-gray-700">
        <li class="py-1"><a class="cursor-pointer hover:underline">About Business Solutions</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">My Freelancer Pro</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">My Freelancer Certified</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Become an Agency</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">My Freelancer Enterprise</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">ClearVoice <br /><span
              class="text-gray-700 text-sm">Content Marketing</span></a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Working Not Working</a></li>
        <li class="py-1"><a class="cursor-pointer hover:underline">Contact Sales</a></li>
      </ul>
    </div>

    <div class="col-span-1 md:col-span-2 lg:col-span-5 flex flex-wrap lg:flex-nowrap">
      <p class="font-bold italic justify-self-start my-6 flex items-center"><img width="120" src="@/assets/logo.png" /> <span
          class="font-normal italic pl-9">MyFreelancer 2024</span></p>

      <div class="flex lg:basis-auto items-center gap-x-4 p-1 ml-auto">
        <a href="#" class="rounded-full bg-white p-1">
          <img :src="Github" />
        </a>
        <a href="#" class="rounded-full bg-white p-1">
          <img :src="Twitter" />
        </a>
        <a href="#" class="rounded-full bg-white p-1">
          <img :src="Youtube" />
        </a>
        <a href="#" class="rounded-full bg-white p-1">
          <img :src="LinkedIn" />
        </a>
      </div>
    </div>


  </div>



</template>
