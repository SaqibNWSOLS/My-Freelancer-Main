<template>
  <!-- <v-text-field
    append-inner-icon="mdi-magnify"
    density="compact"
    label="Search Freelancers"
    variant="solo"
    single-line
    hide-details
    hide-spin-buttons
    class="h-8 text-[9px] py-0"
    clear-icon="mdi-close"
    clearable
    flat
  ></v-text-field> -->
  <div class="relative">
    <input type="text" class="py-2 bg-white px-3 text-sm w-full border text-white" placeholder="Search Freelancers"/>
    <v-icon class="absolute right-1 top-1/2 -translate-y-1/2" icon="mdi-magnify"></v-icon>
  </div>
</template>
