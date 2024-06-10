<template>

        
  <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b bg-card-header">
        <h2 class="p-4 text-lg ">Edit Contact Information</h2>
      </div>
      <div class="p-4">
        <div class="flex flex-col gap-4">
          <ProfileCIPersonalInfo :userDetail="props.userDetail" :selectTab="selectTab" />
          <hr class="border-t" />
          <ProfileCIAddressInfo :userDetail="props.userDetail" :countries="countries"  />
          <hr class="border-t" />
          <ProfileCIInstantMessages  :userDetail="props.userDetail" />
        </div>
      </div>
    </div>
  </div>

</template>

<style scoped>
</style>
<script setup>
import { ref } from 'vue'

import ProfileCIPersonalInfo from '@/Components/Profile/ContactInfo/ProfileCIPersonalInfo.vue'
import ProfileCIAddressInfo from '@/Components/Profile/ContactInfo/ProfileCIAddressInfo.vue'
import ProfileCIInstantMessages from '@/Components/Profile/ContactInfo/ProfileCIInstantMessages.vue'


const props = defineProps({
    userDetail: {
        type: Object,
    },
    countries: {
        type: Array,
    },
    selectTab:Function
});
console.log(props.userDetail)

</script>