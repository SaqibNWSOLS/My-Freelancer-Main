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
                v-model="country"
                :disabled="isSubmitting"
                @blur="handleAddressUpdate"
                @change="checkCountry"
                class="w-full border-bottom   py-2 focus:outline-none focus:border-bottom"
              >
                <option v-for="item in COUNTRIES" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{ country.errorMessage }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
                <p>Street</p>
              <input
                type="text"
                placeholder="Street"
                v-model="street"
                :disabled="isSubmitting"
                @blur="handleAddressUpdate"
                class="w-full border-bottom  py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ street.errorMessage }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
               <p>State</p>
              <select
                v-model="state"
                :disabled="isSubmitting"
                @blur="handleAddressUpdate"
                class="w-full  border-bottom   py-2 focus:outline-none focus:border-blue-500"
              >
                <option v-for="item in ['Punjab', 'Sindh', 'Balochistan', 'KPK']" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{ state.errorMessage }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
               <p>City</p>
              <input
                type="text"
                placeholder="City"
                v-model="city"
                :disabled="isSubmitting"
                @blur="handleAddressUpdate"
                class="w-full  border-bottom   py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ city.errorMessage }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
              <p>Zip Code</p>
              <input
                type="text"
                :placeholder="selectedCountry.postal_code_label ? selectedCountry.postal_code_label : 'Zip'"
                v-model="zip"
                :disabled="isSubmitting"
                @blur="handleAddressUpdate"
                class="w-full border-bottom  py-2 focus:outline-none focus:border-blue-500"
              />
              <p class="text-red-500 text-sm">{{ zip.errorMessage }}</p>
            </div>
          </div>
          <div class="col-span-5 mb-3">
            <div class="w-2/3">
              <p>Time Zone</p>
              <select
                v-model="time_zone"
                :disabled="isSubmitting"
                @blur="handleAddressUpdate"
                class="w-full border-bottom  py-2 focus:outline-none focus:border-blue-500"
              >
                <option v-for="item in TIMEZONES" :key="item" :value="item">{{ item }}</option>
              </select>
              <p class="text-red-500 text-sm">{{ time_zone.errorMessage }}</p>
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
import { useForm } from "vee-validate";



const { handleSubmit, isSubmitting, isFieldValid } = useForm({  // validationSchema: profileAddressSchema,
});

const selectedCountry = ref(COUNTRIESWITHSTATE[0])

const address = ref("address");
const country = ref("country");
const street = ref("street");
const city = ref("city");
const state = ref("state");
const zip = ref("zip");
const time_zone = ref("time_zone");




const checkCountry = () => {
  if (country?.value?.value) {
    selectedCountry.value = COUNTRIESWITHSTATE.find((count) => count.country == country);
  }
}

</script>
