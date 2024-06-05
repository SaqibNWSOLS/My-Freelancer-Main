<script setup>
import { defineEmits } from 'vue';
const emit = defineEmits(['addNewBillboard']);
</script>

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
        <tr class="text-center">
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">SEO1</td>
          <td class="border p-3">SEO, Marketing</td>
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">42</td>
          <td class="border p-3">Active</td>
          <td class="border p-3"></td>
          <td class="border p-3">
            <i class="mdi mdi-note-edit-outline text-xl"></i>
          </td>
          <td class="border p-3">
            <span class="bg-green-500 block w-14 h-7"></span>
          </td>
        </tr>

        <tr class="text-center">
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">SEO1</td>
          <td class="border p-3">SEO, Marketing</td>
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">42</td>
          <td class="border p-3">Active</td>
          <td class="border p-3"></td>
          <td class="border p-3">
            <i class="mdi mdi-note-edit-outline text-xl"></i>
          </td>
          <td class="border p-3">
            <span class="bg-yellow-500 block w-14 h-7"></span>
          </td>
        </tr>

        <tr class="text-center">
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">SEO1</td>
          <td class="border p-3">SEO, Marketing</td>
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">42</td>
          <td class="border p-3 bg-gray-300">Inactive</td>
          <td class="border p-3">
            <i class="mdi mdi-currency-usd text-xl"></i>
          </td>
          <td class="border p-3">
            <i class="mdi mdi-note-edit-outline text-xl"></i>
          </td>
          <td class="border p-3">
            <span class="bg-red-500 block w-14 h-7"></span>
          </td>
        </tr>

        <tr class="text-center">
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">SEO1</td>
          <td class="border p-3">SEO, Marketing</td>
          <td class="border p-3">5/18/2024</td>
          <td class="border p-3">42</td>
          <td class="border p-3 bg-gray-300">Inactive</td>
          <td class="border p-3">
            <i class="mdi mdi-currency-usd text-xl"></i>
          </td>
          <td class="border p-3">
            <i class="mdi mdi-note-edit-outline text-xl"></i>
          </td>
          <td class="border p-3">
            <span class="bg-teal-900 block w-14 h-7"></span>
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
