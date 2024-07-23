<template>
  <div>
    <div v-html="displayContent"></div>
   <span> <a :href="route('job-detail',job.slug)" v-if="!showFullContent">Read More</a></span>
    <button v-if="showFullContent" @click="toggleContent">Show Less</button>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

// Define the props
const props = defineProps({
  content: {
    type: String,
    required: true
  },
  job:Object
});

// Define reactive variables
const showFullContent = ref(false);

// Computed property to display either full or truncated content
const displayContent = computed(() => {
  return showFullContent.value ? props.content : truncateContent(props.content, 50);
});

// Method to toggle content visibility
const toggleContent = () => {
  showFullContent.value = !showFullContent.value;
};

// Helper method to truncate content to a specified word limit
const truncateContent = (htmlContent, wordLimit) => {
  const div = document.createElement('div');
  div.innerHTML = htmlContent;
  const textContent = div.textContent || div.innerText || '';
  const words = textContent.split(' ');

  if (words.length <= wordLimit) {
    return htmlContent;
  }

  return words.slice(0, wordLimit).join(' ') + '...';
};
</script>

<style scoped>
/* Ensure no CSS is restricting the content display */
div {
  width: 100%;
  height: auto;
}
button {
  margin-top: 10px;
}
</style>
