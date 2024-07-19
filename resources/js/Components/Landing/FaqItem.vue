<template>
  <article class="faq-item text-gray-800 p-2">
    <div class="flex justify-between items-center"  @click="toggleContent">
      <div class="faq-item-title font-medium">{{ faq.question }}</div>
      <div class="cursor-pointer">
        <span class="faq-chevron w-3.5 h-3.5" aria-hidden="true">
          <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg" :class="{'rotate-90': isOpen}">
            <path d="M0.772126 1.19065L0.153407 1.80934C0.00696973 1.95578 0.00696973 2.19322 0.153407 2.33969L5.80025 8L0.153407 13.6603C0.00696973 13.8067 0.00696973 14.0442 0.153407 14.1907L0.772126 14.8094C0.918563 14.9558 1.156 14.9558 1.30247 14.8094L7.84666 8.26519C7.99309 8.11875 7.99309 7.88131 7.84666 7.73484L1.30247 1.19065C1.156 1.04419 0.918563 1.04419 0.772126 1.19065Z"></path>
          </svg>
        </span>
      </div>
    </div>
    <div class="faq-item-content overflow-hidden transition-all mt-4 duration-300" :style="{ height: isOpen ? contentHeight + 'px' : '0px' }" ref="content">
      <p>
        {{ faq.answer }}
      </p>
    </div>
  </article>
</template>

<script setup>
import { ref, nextTick } from 'vue';

const isOpen = ref(false);
const contentHeight = ref(0);
const content = ref(null);

 const props = defineProps({
    faq: {
        type: Object,
    },

 });
const toggleContent = () => {
  isOpen.value = !isOpen.value;
  nextTick(() => {
    contentHeight.value = content.value.scrollHeight;
  });
};
</script>

<style scoped>
.faq-item-title {
  @apply text-lg;
}
.faq-chevron {
  @apply transform transition-transform;
}
</style>
