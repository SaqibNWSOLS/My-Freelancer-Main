
<template>

    <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b grid grid-cols-2 bg-card-header">
        <div class="col-span-1">
            <h2 class="p-4 text-lg ">Profile Front Page</h2>
        </div>
        <div class="col-span-1 flex justify-right pr-5" style="justify-content:right; align-items:center">
            <a href="#" class="bg-[green] text-white p-2 rounded" @click="openModal">Front View</a>
        </div>
    </div>
                <div class="space-y-3 p-5">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="col-span-1">
                            <span >Header Image</span>
                        </div>
                        <div class="col-span-2 text-right">
                                                                <div class="text-sm gap-x-3 font-bold  "> Image size 300 x 1200 pixeles<label class="cursor-pointer inline-flex items-center mb-4">
                            <i class="mdi mdi-cloud-upload ml-4"></i>
                              <input type="file" @change="onHeaderChange" accept="image/*" class="hidden" />
                            </label></div>
                        </div>
                        <div class="col-span-3">
                             <div class="flex gap-x-2">
      <div v-for="(image, index) in defaultImages" :key="index" @click="selectImage(image)">
        <img :src="image" class="w-[110px] h-[96px]  object-fill cursor-pointer" :class="{'border-2 border-blue-500': croppedHeaderUrl === image}">
      </div>
    
                            <div class="flex  gap-x-2">
                            <div class="w-64 h-24 bg-gray-100" :class="{ 'hidden': croppedHeaderUrl !== null }"></div>
                            <img class="w-[256px] h-[96px] object-fill" :src="croppedHeaderUrl"
                                :class="{ 'hidden': croppedHeaderUrl === null }">
                        </div>
                        </div>
                        </div>
                        
                        <div class="col-span-1 mt-3">
                              <span class="mt-5">Header Photo</span>
                        </div>
                        <div class="col-span-1 mt-3">
                               <div class="text-sm gap-x-3 font-bold flex ">Image size 250 x 250 pixeles   <label class="cursor-pointer inline-flex items-center mb-4">
                             <i class="mdi mdi-cloud-upload"></i>
                              <input type="file" @change="onPhotoChange" accept="image/*" class="hidden" />
                            </label></div>
                        </div>
                        <div class="col-span-1 mt-3">
                              
                        <div class="flex  gap-x-2">
                            <div class="w-20 h-20 bg-gray-100" :class="{ 'hidden': croppedPhotoUrl !== null }"></div>
                            <img class="w-[80px] h-[80px] object-fill" :src="croppedPhotoUrl"
                                :class="{ 'hidden': croppedPhotoUrl === null }">
                        </div>
                        </div>

                            <ImageEditorModal
                              :show="showModalHeader"
                              @close="showModalHeader = false"
                              @image-cropped="handleCroppedHeader"
                              ref="imageEditorHeader"
                            />

                              <ImageEditorModal
                              :show="showModalPhoto"
                              @close="showModalPhoto = false"
                              @image-cropped="handleCroppedPhoto"
                              ref="imageEditorPhoto"
                            />

                        
                            






                      
                   

                    </div>

                   <div class="grid grid-cols-4 gap-2">
    <span>Full Name</span>
    <input class="py-1 px-4 border rounded-md" v-model="form.full_name" @change="submitForm" type="text"  />
    <div class="col-span-2"></div>

    <span>Screen Name</span>
    <input class="py-1 px-4 border rounded-md" v-model="form.screen_name" @change="submitForm" type="text"  />
    <div class="col-span-2"></div>

    <span>Home Town, Country</span>
    <input class="py-1 px-4 border rounded-md" type="text" v-model="form.home_town" @change="submitForm" />
     <select class="border p-2  " v-model="form.countries_id" name="COUNTRIES"
                                                    id="COUNTRIES">
                                                    <option v-for="(country, index) in countries" :value="country.id" :key="index">
                                                        {{ country.name }}
                                                    </option>
                                                </select>
    <div></div>

    <span>Available Badges</span>
    <input class="py-1 px-4 border rounded-md" type="text" value="Verified by staff" />
    <input class="py-1 px-4 border rounded-md" type="text" value="Preferred Plus" />
    <div></div>

    <span></span>
    <input class="py-1 px-4 border rounded-md" type="text" value="Preferred" />
    <input class="py-1 px-4 border rounded-md" type="text" value="Corporate Account" />
    <div></div>

    <span>Hourly Rate</span>
    <input class="py-1 px-4 border rounded-md" type="text" @change="submitForm" v-model="form.hourly_rate" />
    <div class="col-span-2"></div>

    <span>All-Time Earnings</span>
    <input class="py-1 px-4 border rounded-md" type="text" value="25,500$" />
    <div class="col-span-2"></div>

    <span>Completed Transactions</span>
    <input class="py-1 px-4 border rounded-md" type="text" @change="submitForm" v-model="form.completed_tran" />
    <div class="col-span-2"></div>

    <span>Preferred Freelancer</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox" class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full"></span>
    </label>

    <span>Identity Verified</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox" class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full"></span>
    </label>

    <span>Payment Verified</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox" class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full"></span>
    </label>

    <span>Phone Verified</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox" class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full"></span>
    </label>

    <span>Email Verified</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox" class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full"></span>
    </label>
    <div class="col-span-2"></div>

    <span>WhatsApp connected</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox"  v-model="form.whatsapp_status" value="1" @change="submitForm" :checked="form.whatsapp_status == 1"  class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full"  :class="{'bg-green-500': form.whatsapp_status}"></span>
    </label>
    <input class="py-1 px-4 border rounded-md" v-model="form.whatsapp_number" @change="submitForm"  type="text" />
    <div></div>

    <span>Facebook connected</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox"   v-model="form.facebook_status"  @change="submitForm" class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full" :class="{'bg-green-500': form.facebook_status}"></span>
    </label>
    <input class="py-1 px-4 border rounded-md" type="text"  v-model="form.facebook_id"  @change="submitForm" />
    <div></div>

    <span>Skype connected</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox"  v-model="form.skype_status"  @change="submitForm"  class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full" :class="{'bg-green-500': form.skype_status}"></span>
    </label>
    <input class="py-1 px-4 border rounded-md"  v-model="form.skype_id"  @change="submitForm"  type="text"  />
    <div></div>

    <span>Zoom connected</span>
    <label class="relative inline-block w-12 h-6">
        <input type="checkbox"  v-model="form.zoom_status"  @change="submitForm"  class="opacity-0 w-0 h-0" />
        <span class="absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 rounded-full" :class="{'bg-green-500': form.zoom_status}"></span>
    </label>
    <input class="py-1 px-4 border rounded-md"  v-model="form.zoom_id"  @change="submitForm"  type="text"  />
    <div></div>

    <span>Website</span>
    <input class="py-1 px-4 border rounded-md"  v-model="form.website"  @change="submitForm"  type="text"  />
    <div class="col-span-2"></div>
</div>



                </div>

               </div>
                </div>
                  <ScrollModal title="Profile Page View" :show="showModal"  @close="showModal = false">
<FrontPopup />
            </ScrollModal>
</template>

<style scoped>
    
    input:checked + span {
    background-color: #4ade80; /* Green background for checked state */
}

input:checked + span:before {
    transform: translateX(240%); /* Move the knob to the right when checked */
    background-color: white; /* White knob */
}
.transformed span:before {
    transform: translateX(240%); /* Move the knob to the right when checked */
    background-color: white; /* White knob */
}
.cursor-pointer {
  cursor: pointer;
}
.border-2 {
  border-width: 2px;
}
.border-blue-500 {
  border-color: #3b82f6;
}


/* Adjust the position of the knob */
input + span:before {
    content: "";
    position: absolute;
    left: 2px;
    top: 2px;
    width: 1rem;
    height: 1rem;
    background-color: white;
    border-radius: 9999px;
    transition: transform 0.3s ease;
}
</style>

<script setup>
import { ref, nextTick } from 'vue'
import FrontPopup from '@/Components/Profile/Tabs/FrontPopup.vue';
import ImageEditorModal from '@/Components/Profile/ContactInfo/ImageEditorModal.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import ScrollModal from '@/Components/ScrollModal.vue';

const  baseUrl=window.Laravel.baseUrl

const defaultImages = [
  'https://static.vecteezy.com/system/resources/thumbnails/005/715/816/small/banner-abstract-background-board-for-text-and-message-design-modern-free-vector.jpg',
  'https://i.pinimg.com/736x/48/bb/02/48bb02993d5753f90c64ee1822ac2aab.jpg',
  'https://zeevector.com/wp-content/uploads/Blue-Banner-Background-HD.png',
  'https://i3.wp.com/wallpapers.com/images/hd/aesthetic-youtube-banner-background-2560-x-1440-vy78ltvvnm467oic.jpg'
];


const props = defineProps({
    countries: {
        type: Array,
    },
     verfication: {
        type: Object,
    },
     profileFront: {
        type: Object,
    },
    userDetail:{
        type:Object
    }
});


const showModalHeader = ref(false);
const showModalPhoto = ref(false);
const croppedHeaderUrl =props.profileFront?.header_image? ref(baseUrl+props.profileFront?.header_image):ref(null);
const croppedPhotoUrl = props.profileFront?.header_photo? baseUrl+props.profileFront?.header_photo:ref(null);
let showModal = ref(false);

const openModal=()=>{
    showModal.value=ref(true)
}



const selectImage = (image) => {
  croppedHeaderUrl.value = image;
  router.post('profile-images', {
        headerImage:  image,
      },{ preserveState: true, preserveScroll: true })
};
const onHeaderChange = (event) => {
  const files = event.target.files[0];
  console.log(files);
  if (files) {
    showModalHeader.value = true;
    nextTick(() => {
      if (imageEditorHeader) {
        imageEditorHeader.value.open(files);
      }
    });
  }
};

const handleCroppedHeader = (url) => {
  croppedHeaderUrl.value = url;
  showModalHeader.value = false;
  console.log(url);
  router.post('profile-images', {
        headerImage:  url,
      },{ preserveState: true, preserveScroll: true })
};

const onPhotoChange = (event) => {
  const file = event.target.files[0];
  console.log(file);
  if (file) {
    showModalPhoto.value = true;
    nextTick(() => {
      if (imageEditorPhoto) {
        imageEditorPhoto.value.open(file);
      }
    });
  }
};

const handleCroppedPhoto = (url) => {
  croppedPhotoUrl.value = url;
  showModalPhoto.value = false;

  router.post('profile-images', {
        headerPhoto:  url,
      },{ preserveState: true, preserveScroll: true })
};




const form = useForm({
    full_name: props.profileFront?.full_name?ref(props.profileFront?.full_name):ref(props.userDetail?.name),
    screen_name: props.profileFront?.screen_name?ref(props.profileFront?.screen_name):ref(props.userDetail?.name),
    home_town:ref(props.profileFront?.home_town),
    countries_id:ref(props.profileFront?.countries_id),
    hourly_rate:ref(props.profileFront?.hourly_rate),
    completed_tran:ref(props.profileFront?.completed_tran),
    whatsapp_number:ref(props.profileFront?.whatsapp_number),
    whatsapp_status:ref(props.profileFront?.whatsapp_status),
    facebook_id:ref(props.profileFront?.facebook_id),
    facebook_status:ref(props.profileFront?.facebook_status),
    skype_id: props.profileFront?.skype_id?ref(props.profileFront?.skype_id):ref(props.userDetail?.skype_id),
    skype_status:ref(props.profileFront?.skype_status),
    zoom_id:ref(props.profileFront?.zoom_id),
    zoom_status:ref(props.profileFront?.zoom_status),
    website:ref(props.profileFront?.website),
});

const submitForm = () => {
   
    form.post(route('profile.update'), {
        onSuccess: () => props.nextStep(),
    });
};

const imageEditorHeader = ref(null);
const imageEditorPhoto = ref(null);
</script>
