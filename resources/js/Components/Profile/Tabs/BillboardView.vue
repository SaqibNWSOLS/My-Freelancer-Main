<script setup>
import { ref } from 'vue'
import BillboardList from '@/Components/Profile/BillBoard/BillboardList.vue'
import OverviewStep from '@/Components/Profile/BillBoard/OverviewStep.vue'
import PriceStep from '@/Components/Profile/BillBoard/PriceStep.vue'
import UploadStep from '@/Components/Profile/BillBoard/UploadStep.vue'

const step = ref(0)
const list = ref(true)

const addNewBillboard = () => {
  list.value = false
}
</script>

<template>
  <div class="w-full">
    <div class="px-3 py-6" v-if="!list">
    </div>
    <BillboardList @add-new-billboard="addNewBillboard" v-if="list" />
    <div v-else>
      <div class="border-b border-gray-200">
        <div class="flex items-center">
          <div class="flex-1">
            <div :class="{'text-primary': step >= 0}" @click="step = 0" class="cursor-pointer p-4">Overview</div>
          </div>
          <div class="w-px bg-gray-200"></div>
          <div class="flex-1">
            <div :class="{'text-primary': step >= 1}" @click="step = 1" class="cursor-pointer p-4">Pricing & Description</div>
          </div>
          <div class="w-px bg-gray-200"></div>
          <div class="flex-1">
            <div :class="{'text-primary': step >= 2}" @click="step = 2" class="cursor-pointer p-4">Gallery</div>
          </div>
        </div>
      </div>
      <div>
        <div v-show="step === 0"><OverviewStep /></div>
        <div v-show="step === 1"><PriceStep /></div>
        <div v-show="step === 2"><UploadStep /></div>
      </div>
      <div class="flex justify-between mt-4">
        <button @click="step--" class="bg-gray-200 text-gray-700 px-4 py-2 rounded" v-if="step > 0">Previous</button>
        <button @click="step++" class="bg-primary text-white px-4 py-2 rounded" v-if="step < 2">Save and continue</button>
      </div>
    </div>
  </div>
</template>
