<template>
  <div>
    <p class="mb-8"><b>Instant Messages</b></p>
    <div class="grid grid-cols-10 gap-1 justify-evenly">
      <div class="col-span-6">
        <div class="w-2/3">
          <input
            type="text"
            placeholder="Skype"
              @change="handleAddressUpdate"
            v-model="form.skype"
            class="w-full border-bottom border-gray-300 py-2 focus:outline-none focus:border-blue-500"
          />
        </div>
      </div>
    </div>
   
  </div>
</template>

<style scoped>
.flex-content {
  display: flex;
  gap: 1rem;
  justify-content: flex-start;
  align-items: start;
}
</style>

<script setup>
import { ref, onMounted } from "vue";

import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    userDetail: {
        type: Object,
    }
});

const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});
const form = useForm({
    skype: ref(props.userDetail?.skype),
});
console.log(form.skype);


const handleAddressUpdate = () => {
    form.post(route('update-address'), {
        onFinish: () => nextStep(),
    });
};
</script>
