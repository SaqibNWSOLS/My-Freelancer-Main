<template>
  <div>
    <p class="mb-8"><b>Address Information</b></p>
    <div>
      <form novalidate @submit.prevent="handleAddressUpdate" class="flex-wrap">
        
        <div class="grid grid-cols-10 gap-1 justify-evenly">
           <div class="col-span-5 mb-1">
            <div class="w-2/3">
              <p >Address</p>
              <input
                type="text"
                placeholder="Street"
                ref="autocomplete"
                v-model="form.street"
                :disabled="isSubmitting"
                class="w-full border-bottom py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.street }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-1">
            <div class="w-2/3">
              <p>Country</p>
           
             <input
                type="text"
                placeholder="Street"
                v-model="form.country"
                 @change="handleAddressUpdate"
                :disabled="isSubmitting"
                class="w-full border-bottom py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.country }}</p>
            </div>
          </div>
         
          <div class="col-span-5 mb-1">
            <div class="w-2/3">
              <p>City</p>
              <input
                type="text"
                placeholder="City"
                v-model="form.city"
                 @change="handleAddressUpdate"
                :disabled="isSubmitting"
                class="w-full border-bottom py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.city }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-1">
            <div class="w-2/3">
              <p v-if="form.country !== '6'">State</p>
              <p v-else>Province</p>
            
             <input
                type="text"
                placeholder="State"
                v-model="form.state"
                 @change="handleAddressUpdate"
                :disabled="isSubmitting"
                class="w-full border-bottom py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.state }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-1">
            <div class="w-2/3">
              <p v-if="form.country !== '6'">Zip Code</p>
              <p v-else>Postal Code</p>
              <input
                type="text"
                :placeholder="selectedCountry.postal_code_label ? selectedCountry.postal_code_label : 'Zip'"
                v-model="form.zip"
                 @change="handleAddressUpdate"
                :disabled="isSubmitting"
                class="w-full border-bottom py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ form.errors.zip }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-1">
            <div class="w-2/3">
              <p>Time Zone</p>
              <select
                v-model="form.time_zone"
                 @change="handleAddressUpdate"
                :disabled="isSubmitting"
                class="w-full border-bottom py-2 focus:outline-none focus:border-blue-500"
              >
                <option v-for="item in TIMEZONES" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{ form.errors.time_zone }}</p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import { COUNTRIES, TIMEZONES, COUNTRIESWITHSTATE } from "@/@data";
import { Head, Link, useForm } from '@inertiajs/vue3';
import axios from 'axios';

const props = defineProps({
    userDetail: {
        type: Object,
    },
    countries: {
        type: Array,
    }
});

const { handleSubmit, isFieldValid, setErrors, setFieldValue } = useForm({});
const form = useForm({
    state: ref(props.userDetail?.state),
    address: ref(props.userDetail.country),
    country: ref(props.userDetail.country),
    street: ref(props.userDetail?.street),
    city: ref(props.userDetail?.city),
    zip: ref(props.userDetail?.zip),
    time_zone: ref(props.userDetail?.time_zone),
});

const selectedCountry = ref(COUNTRIESWITHSTATE[0]);
const states = ref([]);
const autocomplete = ref(null);

const handleAddressUpdate = () => {
    form.post(route('update-address'), {
        onFinish: () => fetchStates(),
    });
};

const fetchStates = async () => {
    try {
        const response = await axios.get(route('state-list', form.country));
        states.value = response.data;
    } catch (error) {
        console.error('Error fetching states:', error);
    }
};

const initAutocomplete = () => {
    const autocompleteInstance = new google.maps.places.Autocomplete(autocomplete.value, {
        types: ['address'],
        componentRestrictions: { street: form.street },
    });

   autocompleteInstance.addListener('place_changed', () => {
    const place = autocompleteInstance.getPlace();
    form.street = place.address_components[0]?.long_name || '';
    form.city = place.address_components.find(comp => comp.types.includes('locality'))?.long_name || '';
    form.state = place.address_components.find(comp => comp.types.includes('administrative_area_level_1'))?.short_name || '';
    form.zip = place.address_components.find(comp => comp.types.includes('postal_code'))?.long_name || '';
    form.country = place.address_components.find(comp => comp.types.includes('country'))?.long_name || '';
    handleAddressUpdate()
});
};

onMounted(() => {
    fetchStates();
    initAutocomplete();
});
</script>
