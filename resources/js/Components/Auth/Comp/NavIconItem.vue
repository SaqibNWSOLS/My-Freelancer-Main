<template>
  <div class="text-center relative">
    <div @mouseover="openMenu" @mouseleave="closeMenu">
      <button class="px-2 h-7 text-xs btn-text" @click="toggleMenu">
        <span>{{ text }}</span>
        <i v-if="isMenuOpen" class="mdi mdi-menu-up ml-1"></i>
        <i v-else class="mdi mdi-menu-down ml-1"></i>
      </button>
    </div>

    <div v-if="isMenuOpen" class="absolute z-10 top-8 right-0 bg-white shadow-md rounded-md mt-1">
      <ul>
        <li v-for="(item, index) in items" :key="index" class="py-2 px-4 cursor-pointer hover:bg-gray-100">
          {{ item.title }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const isMenuOpen = ref(false);

const items = [
  { title: 'Click Me' },
  { title: 'Click Me' },
  { title: 'Click Me' },
  { title: 'Click Me 2' },
];

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

const openMenu = () => {
  isMenuOpen.value = true;
};

const closeMenu = () => {
  isMenuOpen.value = false;
};
</script>

<style scoped>
.btn-text {
  background-color: transparent;
  border: none;
}
</style>
