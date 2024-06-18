
<template>
  <div class="w-full">
   <h1>In Progress</h1>
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
router.post(route('bill-board.store'),{finish:true}, {
        onSuccess: () => list.value = true, 
    });
}
</script>
