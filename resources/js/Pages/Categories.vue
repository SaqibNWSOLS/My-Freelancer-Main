<template>
  <header class='p-4 border-b border-black'>
        <div class='theme-container flex flex-wrap gap-5 justify-between px-2 max-w-[1250px] mx-auto w-full; '>
            <div class='flex flex-col md:flex-row justify-center items-center w-full md:w-max gap-4 '>
                <figure class=''>
                    <image src='./images/main_logo.png' class='h-[40px] w-[200px]' alt='profile' height={50}
                        width={150} />
                </figure>
                <div class='flex w-full'>
                    <input class='border w-full border-black rounded-l-md outline-0  px-5 md:w-[350px]'
                        placeholder=' What services are you looking for today? ' type='text' parentClass='mb-4' />
                    <span class='bg-black text-white p-3 font-bold'>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
            <div class='flex'>
                <ul class=' flex gap-4 py-2 px-6'>
                    <li class="text-xl"> <i class="fa-regular fa-heart"></i></li>
                    <li class='text-xl'><i class="fa-regular fa-envelope"></i></li>
                    <div class='relative text-xl'><i class="fa-regular fa-bell"></i>
                        <span class='bg-red-900 rounded-full h-[8px] -top-1 right-1 w-[8px] absolute'></span>
                    </div>
                </ul>
                <div class='flex gap-3 items-center h-full'>
                    <h2 class='font-bold'> Orders</h2>
                    <figure class='shrink-0'>
                        <image src='./images/image119.png' class='rounded-full h-[40px] w-[40px]' alt='profile'
                            height={40} width={40} />
                    </figure>
                    <span class='font-bold text-green-700'>$158.25</span>
                </div>
            </div>
        </div>
    </header>
    <ul class='flex gap-4 md:gap-6 p-4 flex-wrap border-b border-black'>
        <li class='font-bold border-b border-black'>Graphics & Design </li>
        <li>Digital Marketing </li>
        <li>Writing & Translation </li>
        <li>Video & Animation </li>
        <li>Music & Audio </li>
        <li>Programming & Tech </li>
        <li>Business</li>
        <li>Lifestyle AI Services</li>
    </ul>
    <main class=" ">
        <div class="slider-container">
            <div class="slider">
                <div class="slide slide1 graphics-design h-[350px] w-full flex flex-col justify-center gap-10 items-center"
                    style="background-image: url(./images/image158.png);">
                    <h1 class="  text-5xl md:text-6xl  font-bold ">Graphics & Design</h1>
                    <div class="flex items-center px-2 font-bold border border-black">
                        <figure>
                            <image src='./images/image052.png' class="h-[40px] w-[40px]" height={40} width={40} alt='' />
                        </figure>
                        <h2 class="">How MyFreelancer Works</h2>
                    </div>
                </div>
                <div class="slide slide2 graphics-design h-[350px] w-full flex flex-col justify-center gap-10 items-center"
                    style="background-image: url(./images/pexels-ann-h-45017-1762851.jpg);">
                    <h1 class="  text-5xl md:text-6xl  font-bold ">Graphics & Design</h1>
                    <div class="flex items-center px-2 font-bold border border-black">
                        <figure>
                            <image src='./images/image052.png' class="h-[40px] w-[40px]" height={40} width={40} alt='' />
                        </figure>
                        <h2 class="">How MyFreelancer Works</h2>
                    </div>
                </div>
                <div class="slide slide3 graphics-design h-[350px] w-full flex flex-col justify-center gap-10 items-center"
                    style="background-image: url(./images/pexels-enginakyurt-10838922.jpg);">
                    <h1 class="  text-5xl md:text-6xl  font-bold ">Graphics & Design</h1>
                    <div class="flex items-center px-2 font-bold border border-black">
                        <figure>
                            <image src='./images/image052.png' class="h-[40px] w-[40px]" height={40} width={40} alt='' />
                        </figure>
                        <h2 class="">How MyFreelancer Works</h2>
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
        <div class="flex justify-between py-4 px-8">
            <h2 class="text-2xl font-bold">Most popular in Graphics & Design</h2>
            <div class="flex gap-2">
                <button class="prev-btn">
                    <image src='./images/image020.png' class="" height={40} width={40} alt='' />
                </button>
                <button class="next-btn">
                    <image src='./images/image019.png' class="" height={40} width={40} alt='' />
                </button>
            </div>
        </div>
        <div class="flex gap-10  p-7 md:p-4  flex-wrap md:flex-nowrap ">
            <div class="flex items-center gap-2 border-2 rounded-md border-gray-300 px-5 py-1 ">
                <figure>
                    <image src='./images/image017.png' class=" h-[50px] w-[60px]" height={40} width={40} alt='' />
                </figure>
                <h2 class="font-bold">Minimalist Logo Design</h2>
                <span><i class="fa-solid fa-arrow-right"></i></span>
            </div>

            <div class="flex items-center gap-2 border-2 rounded-md border-gray-300 px-5 py-1">
                <figure>
                    <image src='./images/image017.png' class=" h-[50px] w-[60px]" height={40} width={40} alt='' />
                </figure>
                <h2 class="font-bold">Minimalist Logo Design</h2>
                <span><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="flex items-center gap-2 border-2 rounded-md border-gray-300 px-5 py-1">
                <figure>
                    <image src='./images/image017.png' class=" h-[50px] w-[60px]" height={40} width={40} alt='' />
                </figure>
                <h2 class="font-bold">Minimalist Logo Design</h2>
                <span><i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </div>
        <div class="flex items-center gap-2 p-5">
            <h2 class="text-2xl font-bold ">Explore Graphics & Design </h2>
            <span>(10,000)</span>
        </div>
        <div class=" p-7  md:px-2 md:py-4 max-w-[1250px] mx-auto w-full; ">
            <div class="grid  grid-cols-1 md:grid-cols-4  gap-3">
                <div class=" ">
                    <figure>
                        <image src='./images/image053.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Logo & Brand Identity</p>
                        <p class="mb-1">Logo Design</p>
                        <p class="mb-1"> classNameBrand Style Guides</p>
                        <p class="mb-1"> GFont & Typography</p>
                        <p class="mb-1"> Business Cards & Stationery</p>
                    </ul>
                </div>

                <div class=" ">
                    <figure>
                        <image src='./images/image054.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Web & App Design </p>
                        <p class="mb-1">Website DEsign </p>
                        <p class="mb-1"> App Design</p>
                        <p class="mb-1"> UX Design</p>
                        <p class="mb-1"> Landing Page Design </p>
                        <p>Icon Design </p>
                    </ul>
                </div>
                <div class=" ">
                    <figure>
                        <image src='./images/image055.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Art & Illustration</p>
                        <p class="mb-1">Illustration</p>
                        <p class="mb-1"> AI Artists</p>
                        <p class="mb-1"> NFT Art</p>
                        <p class="mb-1"> Pattern Design</p>
                        <p class="mb-1">Portraits & Caricature </p>
                        <p class="mb-1">More</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure>
                        <image src='./images/image056.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Marketing Design </p>
                        <p class="mb-1">Social Media Design</p>
                        <p class="mb-1"> Email Design</p>
                        <p class="mb-1"> Web Banners </p>
                        <p class="mb-1"> Pattern Design</p>
                        <p>Signage Design</p>
                        <p class="mb-1">More</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure class="bg-sky-300">
                        <image src='./images/image145.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Gaming</p>
                        <p class="mb-1">Game Art</p>
                        <p class="mb-1"> Graphics for Streamers</p>
                        <p class="mb-1"> Twitch Store</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure>
                        <image src="./images/image143.png" class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Visual Design</p>
                        <p class="mb-1">image Editing</p>
                        <p class="mb-1">Presentation Design </p>
                        <p class="mb-1"> Infographic Design </p>
                        <p>Vector Tracing </p>
                        <p class="mb-1">Resume Design</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure>
                        <image src='./images/image142.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Print Design</p>
                        <p class="mb-1">Flyer Design</p>
                        <p class="mb-1">Brochure Design</p>
                        <p class="mb-1"> Poster Design</p>
                        <p class="mb-1">Menu Design</p>
                        <p class="mb-1 "> Inventions Design</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure>
                        <image src='./images/image141.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Packaging & Covers</p>
                        <p class="mb-1">Packaging & Label Design </p>
                        <p class="mb-1">Book Design </p>
                        <p class="mb-1"> Album Cover Design </p>
                        <p class="mb-1">Podcast Cover Art</p>
                        <p class="mb-1 ">Car Wraps</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure class="bg-sky-300">
                        <image src='./images/image138.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Architecture & Building Design</p>
                        <p class="mb-1">Architecture & Building Design</p>
                        <p class="mb-1">Landscape Design</p>
                        <p class="mb-1"> Building Engineering</p>
                        <p class="mb-1">Building Information Modeling</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure class="border-2 border-gray-400 rounded-lg bg-sky-300">
                        <image src='./images/image139.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Product & Characters Design</p>
                        <p class="mb-1">image Editing</p>
                        <p class="mb-1">Presentation Design</p>
                        <p class="mb-1"> Infographic Design</p>
                        <p class="mb-1">Vector Tracing</p>
                        <p>Resume Design</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure class="border-2  border-gray-400 rounded-md bg-slate-100">
                        <image src='./images/image136.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Fashion & Merchandise</p>
                        <p class="mb-1">Flyer Design</p>
                        <p class="mb-1">Brochure Design</p>
                        <p class="mb-1"> Poster Design</p>
                        <p class="mb-1">Catalog Design</p>
                        <p>Menu Design</p>
                        <p>Inventions Design</p>
                    </ul>
                </div>
                <div class=" ">
                    <figure>
                        <image src='./images/image140.png' class="h-full w-full" height={40} width={40} alt='' />
                    </figure>
                    <ul class="">
                        <p class="font-bold">Miscellaneous </p>
                        <p class="mb-1">Packaging & Label Design</p>
                        <p class="mb-1">Book Design</p>
                        <p class="mb-1"> Album Cover Design</p>
                        <p class="mb-1">Catalog Design</p>
                        <p>Podcast Cover Art</p>
                        <p>Car Wraps </p>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <div class=" flex-wrap  md:flex-nowrap  flex  p-7 gap-4 md:gap-2" style="background-color: whitesmoke;">
        <div class="">
            <h1 class=" text-4xl lg:text-5xl font-semibold leading-[55px]">Frequently asked questions </h1>
        </div>
        <div class="">
            <div class="mb-3">
                <h2 class="font-bold text-xl mb-2">What is the first step to hiring development and IT talent and
                    determining the project cost? </h2>
                <p class="mb-2 leading-[30px]"> One of the first steps in hiring any talent is to determine which skills
                    you need for your project. Upwork matches you with proven remote talent who can help you with all
                    your development and IT needs,
                </p>
                <span class="text-lg mb-2">Read More <i class="fa-solid fa-caret-down text-xl"></i></span>
            </div>
            <div class="">
                <h2 class="font-bold text-xl mb-2">What is the first step to hiring development and IT talent and
                    determining the project cost?</h2>
                <p class="mb-2 leading-[30px]">One of the first steps in hiring any talent is to determine which skills
                    you need for your project. Upwork matches you with proven remote talent who can help you with all
                    your development and IT needs,
                </p>
                <span class="text-lg mb-2">
                    Read More <i class="fa-solid fa-caret-down text-xl "></i></span>
            </div>
        </div>
    </div>
    <Footer />
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
    .slide1 {
        
        background-image: url(./images/image158.png);
    }

    .slide2 {
        /* background-color: #2ca02c; */
        background-image: url(./images/pexels-ann-h-45017-176251.jpg);
    }

    .slide3 {
        background-color: #1f77b4;
    }
</style>

  <script setup>
import Footer from '@/Components/Landing/Footer.vue'
import App from '@/Layouts/App.vue'
import ProceedTest from '@/Components/Landing/ProceedTest.vue'
import { ref, onMounted } from 'vue'

const animate = ref(0)
const updateAnimtedCard = () => {
  animate.value = animate.value === 3 ? 0 : animate.value + (1 % 4)
}

const screenWidth = ref(0)

onMounted(() => {
  screenWidth.value = window.innerWidth
})
</script>