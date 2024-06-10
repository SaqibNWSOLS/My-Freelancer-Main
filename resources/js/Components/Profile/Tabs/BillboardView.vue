
<template>
  <div class="w-full">
    <div class="px-3 py-6" v-if="!list">
    </div>
    <BillboardList @add-new-billboard="addNewBillboard" :billBoards="billBoards" v-if="list" />
    <div v-else>
      <div class="border-b  p-5 bg-card-header border-gray-200">
        <div class="flex items-center">
          <div class="flex-1">
            <div :class="{'text-primary': step >= 0}"  class="cursor-pointer p-4">Overview</div>
          </div>
          <div class="w-px bg-gray-200"></div>
          <div class="flex-1">
            <div :class="{'text-primary': step >= 1}"  class="cursor-pointer p-4">Pricing & Description</div>
          </div>
          <div class="w-px bg-gray-200"></div>
          <div class="flex-1">
            <div :class="{'text-primary': step >= 2}"  class="cursor-pointer p-4">Gallery</div>
          </div>
        </div>
      </div>
      <div>
        <div v-show="step === 0"><OverviewStep  :previousStep="previousStep" :nextStep="nextStep" :billBoardDraft="billBoardDraft" /></div>
        <div v-show="step === 1"><PriceStep  :previousStep="previousStep" :nextStep="nextStep" :billBoardDraft="billBoardDraft" /></div>
        <div v-show="step === 2"><UploadStep  :previousStep="previousStep" :nextStep="nextStep" :billBoardDraft="billBoardDraft" /></div>
      </div>
      <div class="col-span-1 row-reverse text-right gap-3 mt-4">
        <button @click="listView"  class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Back to List</button>
        <button @click="step--" class="ml-2 bg-gray-200 text-gray-700 px-4 py-2 rounded" v-if="step > 0">Previous</button>
         <button @click="finish" class="ml-2 bg-blue-800 text-white px-4 py-2 rounded" v-if="step > 1">Finish</button>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref } from 'vue'
import BillboardList from '@/Components/Profile/BillBoard/BillboardList.vue'
import OverviewStep from '@/Components/Profile/BillBoard/OverviewStep.vue'
import PriceStep from '@/Components/Profile/BillBoard/PriceStep.vue'
import UploadStep from '@/Components/Profile/BillBoard/UploadStep.vue'
import { router } from '@inertiajs/vue3'

const props = defineProps({
    billBoards: {
        type: Array,
    },
    billBoardDraft:{
      type:Object,
    }

 });
const step = ref(0)
const list = ref(true)

const nextStep = () => ++step.value;
const previousStep = () => --step.value;
const listView = () => {
  list.value = true
}
const addNewBillboard = () => {
  list.value = false
}

const finish=()=>{
router.post(route('bill-board'),{finish:true}, {
        onSuccess: () => list.value = true, 
    });
}
</script>
