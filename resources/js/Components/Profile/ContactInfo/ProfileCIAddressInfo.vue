<template>
  <div>
    <p class="mb-8"><b>Address Information</b></p>
    <div>
      <form novalidate @submit.prevent="handleAddressUpdate" class="flex-wrap">
        <div class="grid grid-cols-10 gap-1 justify-evenly">
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
              <p>Country</p>
              <select
                v-model="form.country"
                :disabled="isSubmitting"
                @change="handleAddressUpdate"
                class="w-full border-bottom   py-2 focus:outline-none focus:border-bottom"
              >
                <option v-for="item in COUNTRIES" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{ form.errors.country }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
                <p>Street</p>
              <input
                type="text"
                placeholder="Street"
                v-model="form.street"
                :disabled="isSubmitting"
                @change="handleAddressUpdate"
                class="w-full border-bottom  py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.street }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
               <p>State</p>
              <select
                v-model="form.state"
                :disabled="isSubmitting"
                @change="handleAddressUpdate"
                class="w-full  border-bottom   py-2 focus:outline-none focus:border-blue-500"
              >
                <option v-for="item in ['Punjab', 'Sindh', 'Balochistan', 'KPK']" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{ form.errors.state }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
               <p>City</p>
              <input
                type="text"
                placeholder="City"
                v-model="form.city"
                :disabled="isSubmitting"
                @change="handleAddressUpdate"
                class="w-full  border-bottom   py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.city}}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
              <p>Zip Code</p>
              <input
                type="text"
                :placeholder="selectedCountry.postal_code_label ? selectedCountry.postal_code_label : 'Zip'"
                v-model="form.zip"
                :disabled="isSubmitting"
                @change="handleAddressUpdate"
                class="w-full border-bottom  py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{  form.errors.zip }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
              <p>Time Zone</p>
              <select
                v-model="form.time_zone"
                :disabled="isSubmitting"
                @change="handleAddressUpdate"
                class="w-full border-bottom  py-2 focus:outline-none focus:border-blue-500"
              >
                <option v-for="item in TIMEZONES" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{  form.errors.time_zone }}</p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<style scoped>
.flex-content {
  display: flex;
  gap: 1rem;
  justify-content: flex-start;
  align-items: center;
}
</style>


<script setup>
import { onMounted, ref } from "vue";
import { COUNTRIES, TIMEZONES, COUNTRIESWITHSTATE } from "@/@data";
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    userDetail: {
        type: Object,
    }
});

const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({
 
});
const form = useForm({
    state: ref(props.userDetail?.state),
     address : ref(props.userDetail.country),
  country : ref(props.userDetail.country),
  street : ref(props.userDetail?.street),
  city : ref(props.userDetail?.city),
  zip : ref(props.userDetail?.zip),
  time_zone :ref(props.userDetail?.time_zone),
});
console.log(form.country);

const selectedCountry = ref(COUNTRIESWITHSTATE[0])


const handleAddressUpdate = () => {
    form.post(route('update-address'), {
        onFinish: () => nextStep(),
    });
};
const checkCountry = () => {
  if (country?.value?.value) {
    selectedCountry.value = COUNTRIESWITHSTATE.find((count) => count.country == country);
  }
}

</script>
