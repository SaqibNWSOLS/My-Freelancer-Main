<!-- resources/js/components/SweetAlert.vue -->

<template>
  <div>
    <!-- Content here is up to your needs, could be empty -->
  </div>
</template>

<script>
import { defineComponent } from 'vue';
import Swal from 'sweetalert2';

export default defineComponent({
  props: {
    type: {
      type: String,
      default: 'success' // Default type is success
    },
    title: {
      type: String,
      default: 'Success!' // Default title
    },
    text: {
      type: String,
      default: 'Operation completed successfully.' // Default text
    },
    confirmButtonText: {
      type: String,
      default: 'OK' // Default button text
    }
  },
  mounted() {
    console.log(this.type)
    Swal.fire({
      icon: this.type,
      title: this.title,
      text: this.text,
      confirmButtonText: this.confirmButtonText
    }).then(() => {
      // Optionally emit an event or perform another action after SweetAlert closes
      this.$emit('closed');
    });
  }
});
</script>
