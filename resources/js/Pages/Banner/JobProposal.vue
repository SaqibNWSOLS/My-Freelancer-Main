<template>
  <CatApp :categories="categories" :flash="flash">
    <main class="max-w-[1250px] mx-auto w-full;">
      <div class="mt-5">
         <form @submit.prevent="submitForm" >
        <div class="grid grid-cols-6 gap-5 relative">
          <div class="col-span-6">
            <h1 class="text-3xl font-bold mb-5">Submit a proposal</h1>
          </div>

          <div class="col-span-6  p-5 border-2 border-[#d9d9d9] rounded-lg border-solid">
         
          <div>
            <h1 class="text-xl font-bold mb-3">{{ jobDetail.title }}</h1>
            <p v-html="jobDetail.description"></p>
          </div>
             </div>
             <div class="col-span-6  p-5 border-2 border-[#d9d9d9] rounded-lg border-solid">
               <h1 class="text-md font-bold mb-3">How long will this project take? </h1>
              <select  v-model="form.time" class="rounded-sm">
                <option>More Than 6 Months</option>
                <option>3 to 6 Months</option>
                <option>1 to 3 Months</option>
                <option>Less than 1 Month</option>
              </select>
              <p class="text-danger">{{ form.errors.time }}</p>
             </div>


               <div class="col-span-6  p-5 border-2 border-[#d9d9d9] rounded-lg border-solid">
                 <h1 class="text-xl font-bold mb-3">Budget</h1>
                 <p class="mb-2">Please submit your budget proposal for the project. Include a detailed breakdown of costs, timeline, and any additional expenses. Make sure to justify each expense and provide insights into how your budget aligns with the project's goals and requirements. Clear and concise proposals will be given priority.</p>
                  <label class="flex"> <span class="text-md p-2 text-white bg-[#4f86c4] ">$</span> <input v-model="form.price"  type="number" class="min-w-[100px] h-[40px]" step="0.01" name=""></label>
                  <p class="text-danger">{{ form.errors.price }}</p>
               </div>

  <div class="col-span-6  p-5 border-2 min-h-[400px] border-[#d9d9d9] rounded-lg border-solid">
     <h1 class="text-xl font-bold mb-3">Proposal</h1>
     <p class="mb-3">Please submit your proposal for the job. Include an overview of your approach, relevant experience, and how you plan to achieve the project goals. Highlight any unique skills or insights you bring to the table. Provide a timeline for completion and any milestones. Your proposal should demonstrate a clear understanding of the project requirements and showcase your ability to deliver high-quality results. Detailed and well-structured proposals will be prioritized.</p>

      <div id="editor" class="h-[280px] w-full" ref="editor"></div>
<p class="text-danger">{{ form.errors.description }}</p>
         <button class="bg-[#4B74B4] text-lg font-bold text-white py-2 px-4 mt-4 float-right">
        Submit Propsal
      </button>
   
  </div>

         
        </div>
         </form>
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
import { ref, watch,onMounted} from 'vue'
import CatApp from '@/Layouts/CatApp.vue'
import FaqItem from '@/Components/Landing/FaqItem.vue'
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
import Quill from 'quill'
import { Head, Link, useForm } from '@inertiajs/vue3';

const baseUrl = window.Laravel.baseUrl

const editor = ref(null)

const quillInstance = ref(null)

const props = defineProps({
  categories: {
    type: Array,
  },
  jobDetail: Object,
  tags: Array,
  flash:Object
})


const form = useForm({
    job_id: ref(props.jobDetail.id),
    price:ref(null),
    description: ref(null),
    time: ref(null),
});
const errors = ref({});

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

 const validateForm = () => {
      errors.value = {}; // Reset errors
      let isValid = true;

      if (!form.price) {
        form.errors.price = 'Price is required';
        isValid = false;
      }
      if (!form.time) {
        form.errors.time = 'Estimated time is required';
        isValid = false;
      }

      if (!form.description) {
        form.errors.description = 'Proposal is required';
        isValid = false;
      }

      // Add more validation rules as needed

      return isValid;
    };

onMounted(() => {
    if (editor.value) {
        quillInstance.value = new Quill(editor.value, {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block'],
                ],
            },
            placeholder: 'Compose an epic...',
            theme: 'snow', // or 'bubble'
        });
    }
});


const submitForm = () => {
   form.description = quillInstance.value.root.innerText.length-1;
    if (validateForm()) {
        form.description = quillInstance.value.root.innerHTML;
    form.post(route('proposal.store'), {
        onSuccess: () => form.reset(),
    });
}
};

</script>
