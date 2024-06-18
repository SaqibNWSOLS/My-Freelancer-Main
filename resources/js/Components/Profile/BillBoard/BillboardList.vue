

<template>
  <div>
    <div class="w-full mb-6 text-right">
       <button @click="$emit('addNewBillboard')" class="text-white bg-blue-800 px-4 py-2 rounded-md flex items-center">
        <i class="mdi mdi-plus mr-2"></i>
        Add New Billboard
      </button> 
    </div>

    <table class="w-full text-sm border-collapse border">
      <thead>
        <tr>
          <th class="border border-white p-3 text-white bg-blue-800">Date Created</th>
          <th class="border border-white p-3 text-white bg-blue-800">Name</th>
          <th class="border border-white p-3 text-white bg-blue-800">Keywords</th>
          <th class="border border-white p-3 text-white bg-blue-800">Expiration Date</th>
          <th class="border border-white p-3 text-white bg-blue-800">Days Left</th>
          <th class="border border-white p-3 text-white bg-blue-800">Status</th>
          <th class="border border-white p-3 text-white bg-blue-800">Store</th>
          <th class="border border-white p-3 text-white bg-blue-800">Edit</th>
          <th class="border border-white p-3 text-white bg-blue-800">Preview</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center" v-for="(billBoard, index) in billBoards" :key="billBoard.id">
          <td class="border p-3">{{ format(billBoard.created_at,'d MMMM Y') }}</td>
          <td class="border p-3">{{ billBoard.title }}</td>
          <td class="border p-3">{{ billBoard.tage }}</td>
          <td class="border p-3">{{ format(addDays(billBoard.created_at , 60),'d MMMM Y') }}</td>
          <td class="border p-3">{{ differenceInCalendarDays(addDays(billBoard.created_at , 60),new Date()) }}</td>
          <td class="border p-3">Active</td>
          <td class="border p-3"></td>
          <td class="border p-3">
            <a :href="route('bill-board.edit', billBoard.id)"><i class="mdi mdi-pencil text-xl"></i></a>
          </td>
          <td class="border p-3">
            <span class="bg-green-500 block w-14 h-7"></span>
          </td>
        </tr>

       
      </tbody>
    </table>
  </div>
</template>

<style scoped>
  .text-right {
    text-align: right;
  }
</style>
<script setup>
import { defineEmits } from 'vue';
import { format, subDays,addDays,differenceInCalendarDays } from 'date-fns';

const emit = defineEmits(['addNewBillboard']);

const props = defineProps({
    billBoards: {
        type: Array,
    },

 });
</script>