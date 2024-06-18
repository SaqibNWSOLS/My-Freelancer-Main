<template>
  <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b bg-card-header">
        <h2 class="p-4 text-lg">Screen Identity </h2>
      </div>
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
          <form @submit.prevent="submitForm">
            <span>Screen Name <input v-model="screenName" type="text" class="bg-gray-100 border px-3 py-2 w-80" placeholder="Screen Name"/><button type="submit" class="bg-blue-800 p-2 text-white block mt-4 ml-28">Save</button></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import ImageEditorModal from '@/Components/Profile/ContactInfo/ImageEditorModal.vue'
import { Inertia } from '@inertiajs/inertia';
import { Link, useForm, usePage } from '@inertiajs/vue3';
const  baseUrl=window.Laravel.baseUrl

export default {
  components: {
    ImageEditorModal
  },
   props: {
        userDetail: Object, 
    },
  data() {

   return {
      showModal: false,
      croppedUrl: this.userDetail?.image ? baseUrl+this.userDetail?.image : 'https://cdn-icons-png.freepik.com/512/6322/6322558.png',
      screenName: this.userDetail?.name, // Add a data property for screen name
    };
  },
  methods: {
    onImageChange(event) {
      const file = event.target.files[0];
      if (file) {
        this.showModal = true;
        this.$nextTick(() => {
          this.$refs.imageEditorr.open(file);
        });
      }
    },
    handleCropped(croppedUrl) {
      this.croppedUrl = croppedUrl;
      this.showModal = false;
    },
    submitForm() {
      Inertia.post('update-profile-pic', {
        screenName: this.screenName,
        image: this.croppedUrl
      });
    }
  }
};
</script>
