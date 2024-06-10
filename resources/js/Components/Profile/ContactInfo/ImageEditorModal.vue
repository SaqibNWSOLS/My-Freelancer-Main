<template>
  <div v-if="show" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg relative max-w-full w-11/12 md:w-3/4 lg:w-1/2 max-h-full overflow-auto">
     <!--  <button class="absolute top-4 m-10 right-4 text-white-500 hover:text-gray-700" @click="close">&times;</button> -->
      <div v-if="imageUrl">
        <img ref="image" :src="imageUrl" alt="Image" class="cropper mt-4" />
        <div class="mt-4 flex justify-end space-x-2">
          <button @click="cropImage" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crop Image</button>
          <button @click="resetImage" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Reset Image</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Cropper from 'cropperjs';
import 'cropperjs/dist/cropper.css';

export default {
  props: {
    show: {
      type: Boolean,
      required: true
    }
  },
  data() {
    return {
      imageUrl: null,
      cropper: null
    };
  },
  methods: {
    open(file) {
      if (file && file.type.startsWith('image/')) {
        this.imageUrl = URL.createObjectURL(file);
        this.$nextTick(() => {
          this.initializeCropper();
        });
      }
    },
    initializeCropper() {
      const imageElement = this.$refs.image;
      if (this.cropper) {
        this.cropper.destroy();
      }
      this.cropper = new Cropper(imageElement, {
        aspectRatio: 1,
        viewMode: 1,
        autoCropArea: 1,
      });
    },
    cropImage() {
      if (this.cropper) {
        const canvas = this.cropper.getCroppedCanvas();
        if (canvas) {
          const croppedImageUrl = canvas.toDataURL();
          this.$emit('image-cropped', croppedImageUrl);
        }
      }
    },
    resetImage() {
      if (this.cropper) {
        this.cropper.reset();
      }
    },
    close() {
      if (this.cropper) {
        this.cropper.destroy();
        this.cropper = null;
      }
      this.imageUrl = null;
      this.$emit('close');
    }
  },
  beforeDestroy() {
    if (this.cropper) {
      this.cropper.destroy();
    }
  }
};
</script>

<style scoped>
.cropper {
  max-width: 100%;
  max-height: 400px;
}
</style>
