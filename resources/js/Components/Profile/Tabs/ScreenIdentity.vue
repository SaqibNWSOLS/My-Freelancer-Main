<template>

   
   <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b bg-card-header">
        <h2 class="p-4 text-lg ">Screen Identity</h2></div>
      <div class="space-y-3 p-3">
        <div class="flex flex-col gap-3 items-center justify-center">
          <img :src="croppedUrl" :class="{ 'hidden': croppedUrl === null }" width="160px" height="120px" class="rounded-xl p-2 border" />
          <label class="border w-[160px] flex justify-center px-2 py-1 bg-blue-700 text-white cursor-pointer">
            Change Photo
            <input type="file" @change="onImageChange" accept="image/*" class="hidden" />
          </label>
        </div>

        <ImageEditorModal :show="showModal" @close="showModal = false" @image-cropped="handleCropped" ref="imageEditorr" />

        <div class="mt-6">
          <span>Screen Name <input type="text" class="bg-gray-100 border px-3 py-2 w-80" placeholder="Screen Name"/><button class="bg-blue-800 p-2 text-white block mt-4 ml-28">Save</button></span>
          
        </div>
      </div>
    </div>
  </div>
  
</template>


<script>
import { ref, onMounted } from 'vue';
import ImageEditorModal from '@/Components/Profile/ContactInfo/ImageEditorModal.vue'
const image = ref("https://img.freepik.com/premium-vector/anonymous-user-flat-icon-vector-illustration-with-long-shadow_520826-1932.jpg");

const showModal = ref(false);
const croppedUrl = ref('https://img.freepik.com/premium-vector/anonymous-user-flat-icon-vector-illustration-with-long-shadow_520826-1932.jpg');

export default {
  components: {
    ImageEditorModal
  },
  data() {
    return {
      showModal: false,
      croppedUrl: 'https://img.freepik.com/premium-vector/anonymous-user-flat-icon-vector-illustration-with-long-shadow_520826-1932.jpg',
    };
  },
  methods: {
    onImageChange(event) {
      const filess = event.target.files[0];
      console.log(filess)
      if (filess) {
        this.showModal = true;
        this.$nextTick(() => {
          this.$refs.imageEditorr.open(filess);
        });
      }
    },
    handleCropped(croppedUrl) {
      this.croppedUrl = croppedUrl;
      this.showModal = false;
    }
  }
};

const handleCropped = (croppedUrl) => {
  croppedUrl.value = croppedUrl;
  showModal.value = false;
};



</script>