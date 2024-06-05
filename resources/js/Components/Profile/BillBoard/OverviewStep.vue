<script setup>
import { ref } from "vue"
const text = ref("")
</script>

<template>
  <div class="stepper-window-item">
    <div class="card flat border flex flex-col shadow-md">
      <div class="card-item p-4">
        <div class="grid grid-cols-3 gap-3">
          <div class="space-y-2">
            <h3 class="font-bold">Billboard Title</h3>
            <p class="text-sm">
              As your Billboard storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.
            </p>
          </div>
          <div class="col-span-2 text-right">
            <textarea
              v-model="text"
              class="border rounded-sm p-2 w-full"
              rows="3"
              maxlength="80"
              placeholder="I Will do something really good"
            ></textarea>
            <span class="text-xs">{{ text.length }} / 80 max</span>
          </div>

          <div class="space-y-2">
            <h3 class="font-bold">Category</h3>
            <p class="text-sm">
              Choose the category and sub-category most suitable for your Billboard
            </p>
          </div>
          <div class="col-span-1">
            <select class="w-full border p-2 rounded-sm" v-model="selectedCategory">
              <option value="" disabled>Select a category</option>
              <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
              <option value="WRITING & TRANSLATION">WRITING & TRANSLATION</option>
              <option value="VIDEO & GAMING">VIDEO & GAMING</option>
              <option value="MUSIC & AUDIO">MUSIC & AUDIO</option>
              <option value="PROGRAMMING & TECH">PROGRAMMING & TECH</option>
            </select>
          </div>
          <div class="col-span-1">
            <select class="w-full border p-2 rounded-sm" v-model="selectedSubCategory">
              <option value="" disabled>Select a subcategory</option>
              <option value="BRAND STYLE GUIDES">BRAND STYLE GUIDES</option>
              <option value="GAME ART">GAME ART</option>
              <option value="GRAPHICS FOR STREAMERS">GRAPHICS FOR STREAMERS</option>
              <option value="BUSINESS CARDS & STATIONERY">BUSINESS CARDS & STATIONERY</option>
              <option value="WEBSITE DESIGN">WEBSITE DESIGN</option>
              <option value="APP DESIGN">APP DESIGN</option>
            </select>
          </div>

          <div class="space-y-2">
            <h3 class="font-bold">Search Tags</h3>
            <p class="text-sm">
              Tag your Billboard with buzz words that are relevant to the services you offer. Use all 5 tags to get found.
            </p>
          </div>
          <div class="col-span-2">
            <div class="space-y-2">
              <h3 class="font-bold">Positive Keywords</h3>
              <p class="text-sm">
                Enter search terms you feel your buyers will use when looking for your service.
              </p>
              <div>
                <input
                  type="text"
                  class="w-full border p-2 rounded-sm"
                  placeholder="Add tags"
                  v-model="tagsInput"
                  @keyup.enter="addTag"
                />
                <div class="flex flex-wrap mt-2">
                  <span
                    v-for="(tag, index) in tags"
                    :key="index"
                    class="bg-gray-200 text-sm rounded-full px-2 py-1 mr-2 mb-2"
                  >
                    {{ tag }}
                    <button
                      class="ml-1 text-red-500"
                      @click="removeTag(index)"
                    >
                      &times;
                    </button>
                  </span>
                </div>
                <span class="text-xs block -mt-3">5 tags maximum, Use letters and numbers only</span>
              </div>
              <!-- Uncomment this section if needed -->
              <!-- <div class="pt-3 space-y-2">
                <h3 class="font-bold space-x-2">Negative keywords <span class="rounded-md bg-violet-800 text-white px-2 text-xs">Plus</span></h3>
                <p class="text-sm">
                  Negative keywords enable Seller Plus members to prevent their Gigs from matching with irrelevant search items.
                </p>
              </div>
              <button class="bg-gray-300 rounded-md p-2 font-bold">Tell me more</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  setup() {
    const text = ref('');
    const selectedCategory = ref('');
    const selectedSubCategory = ref('');
    const tagsInput = ref('');
    const tags = ref([]);

    const addTag = () => {
      if (tagsInput.value && tags.value.length < 5) {
        tags.value.push(tagsInput.value);
        tagsInput.value = '';
      }
    };

    const removeTag = (index) => {
      tags.value.splice(index, 1);
    };

    return {
      text,
      selectedCategory,
      selectedSubCategory,
      tagsInput,
      tags,
      addTag,
      removeTag,
    };
  },
};
</script>

<style scoped>
.card {
  background-color: white;
  border-radius: 0.5rem;
  overflow: hidden;
}
.card-item {
  padding: 1rem;
}
</style>
