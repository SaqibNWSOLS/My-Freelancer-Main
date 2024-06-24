<template>
  <div v-if="show" class="fixed mt-[0px] inset-0 flex items-center justify-center z-50">
    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    <div class="bg-white p-5 rounded shadow-lg z-50 relative">
      <div style="border-bottom:2px solid #888b936b" class="py-2">
         <div class="card-header">
          <h1 class="text-2xl font-medium">{{ title }}</h1>
        </div>
      <button @click="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      </div>
      <div class="scrollable-content mt-5 max-h-[80vh] overflow-y-auto">
       
      <slot></slot>
    </div>
<!--       <button @click="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
 -->    </div>
  </div>
</template>

<script>
export default {
  props: {
    show: {
      type: Boolean,
      default: false,
       
    },
     title:String,
  },
  methods: {
    closeModal() {
      this.$emit('close');
    },
  },
};
</script>

<style scoped>
.scrollable-content {
  /* For WebKit browsers */
  ::-webkit-scrollbar {
    width: 1px;
  }

  ::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 6px;
  }

  ::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 6px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  /* For other browsers */
  scrollbar-width: thin;
  scrollbar-color: #888 #f1f1f1;
}
</style>
