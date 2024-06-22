

<template>
  <div class="stepper-window-item">
    <div class="card flat border flex flex-col shadow-md">
      <div class="card-item p-4">
          <form @submit.prevent="submitForm">
        <div class="grid grid-cols-3 gap-3">
          <div class="space-y-2">
            <h3 class="font-bold">Billboard Title</h3>
            <p class="text-sm">
              As your Billboard storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.
            </p>
          </div>


          <div class="col-span-2 text-right">
            <textarea
              v-model="form.title"
              class="border rounded-sm p-2 w-full"
              rows="3"
              maxlength="80"
              placeholder="I Will do something really good"
            ></textarea>
            <p class="text-danger">{{ form.errors.title }}</p>
            <span class="text-xs">{{ form.title }} / 80 max</span>
          </div>

          <div class="space-y-2">
            <h3 class="font-bold">Category</h3>
            <p class="text-sm">
              Choose the category and sub-category most suitable for your Billboard
            </p>
          </div>
          <div class="col-span-1">
            <select class="w-full border p-2 rounded-sm" v-model="form.job_categories_id">
             <option v-for="(category, index) in categories" :value="category.id" :key="index">
                                                        {{ category.name }}
                                                    </option>
            </select>
            <p class="text-danger">{{ form.errors.job_categories_id }}</p>
          </div>
          <div class="col-span-1">
            <select class="w-full border p-2 rounded-sm" v-model="form.sub_job_categories_id">
              <option value="" disabled>Select a subcategory</option>
              <option v-for="(category, index) in categories" :value="category.id" :key="index">
                                                        {{ category.name }}
                                                    </option>
            </select>
             <p class="text-danger">{{ form.errors.sub_job_categories_id }}</p>
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
                 <multiselect 
      v-model="form.tags"
      :options="options"
      :multiple="true"
      :max="5"
      :taggable="true"
      @tag="addTag"
      @input="onInput"
      label="name"
      track-by="name"
      ref="multiselect"></multiselect>

                <div class="flex flex-wrap mt-2">
                  <!-- <span
                    v-for="(tag, index) in form.tags"
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
                  </span> -->
                </div>
                <span class="text-xs block -mt-3">5 tags maximum, Use letters and numbers only</span>

              </div>
          
            </div>
            
          </div>
          <div class="mt-4 col-span-3 text-right">
                <button type="submit"  class="bg-primary text-white px-4 py-2 rounded">Save and continue</button>
            </div>
        </div>

</form>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import axios from 'axios';
import { router } from '@inertiajs/vue3';
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.css'


const options = ref([
        {name: 'Vue.js', code: 'vu'},
        {name: 'Javascript', code: 'js'},
        {name: 'Open Source', code: 'os'}
      ]) // Initial options can be empty or predefined
const selectedOptions = ref([])

const addTag = (newTag) => {
  options.value.push({ name: newTag })
}

const onInput = (newValue, id) => {
  // Check if the last character is a comma
  if (newValue && newValue.slice(-1) === ',') {
    const tag = newValue.slice(0, -1).trim()
    if (tag) {
      addTag(tag)
      selectedOptions.value.push({ name: tag })
    }
    // Clear the input
    multiselect.value.clearSearch()
  }
}
const props = defineProps({
  step: Number,
  setBasicInfo: Function,
  nextStep: Function,
  billBoardDraft:{
    type:Object,
  }
});

const form = useForm({
    title: props.billBoardDraft?.title?props.billBoardDraft?.title:ref(null),
    sub_job_categories_id: props.billBoardDraft?.sub_job_categories_id?props.billBoardDraft?.sub_job_categories_id:ref(null),
    job_categories_id: props.billBoardDraft?.job_categories_id?props.billBoardDraft?.job_categories_id:ref(null),
    tags: props.billBoardDraft?.tags?ref(JSON.parse(props.billBoardDraft?.tags)):ref([]),
});

const categories = ref([]);
const errors = ref({});

const fetchCategories = async () => {
  try {
    const response = await axios.get(route('category-list'));
    categories.value = response.data;
  } catch (error) {
    console.error('Error fetching categories:', error);
  }
};

onMounted(fetchCategories);

    const validateForm = () => {
      errors.value = {}; // Reset errors
      let isValid = true;

      if (!form.title) {
        form.errors.title = 'Title is required';
        isValid = false;
      }
      if (!form.job_categories_id) {
        form.errors.job_categories_id = 'Category is required';
        isValid = false;
      }

      if (!form.sub_job_categories_id) {
        form.errors.sub_job_categories_id = 'Sub Category is required';
        isValid = false;
      }

      // Add more validation rules as needed

      return isValid;
    };

const submitForm = () => {
  console.log(form.tags)
    if (validateForm()) {
    form.post(route('bill-board.store'), {
        onSuccess: () => props.nextStep(),
    });
}
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
