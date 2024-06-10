<!-- resources/js/Pages/Setting/Country/Create.vue -->
<template>
<AdminLayout>
     <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">States</h3>
                    </div>
                </div>         
    <div class="checkout-detail">
       <form  @submit.prevent="submit" novalidate> 
            <h1>Edit State</h1>
  <div class="flex flex-col gap-3 form-group">
      <div class="flex flex-col gap-1"> 
          <label for="name" class="text-xs font-medium text-primary">State Name</label>
          <input  v-model="form.name" type="text" id="name" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"/>
      </div> 

      <label for="countries_id" class="text-xs font-medium text-primary">Country:</label>
      <div class="flex flex-col gap-3 form-group">
      <select v-model="form.countries_id" id="countries_id" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option v-for="country in countries" :key="country.id" :value="country.id">   {{ country.name }}</option> 
         
      </select> 
   </div>    

      <label for="status" class="text-xs font-medium text-primary">Status:</label>
      <div class="flex flex-col gap-3 form-group">
      <select v-model="form.status" id="status" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option value="active">Active</option> 
          <option value="inactive">Inactive</option>
      </select> 
   </div>    
      <div class="flex flex-wrap gap-1"> 
          <button type="submit" class="text-white btn btn-primary" style="text-align:right">Submit</button>
      </div> 
  </div> 

 
</form> 

        </div>
     </div> 
 </div>
    </AdminLayout>
</template>

<script>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia'; 
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';

export default {
     components: {
        AdminLayout,
    },
  props: {
    countries: Array,
    state: Object
  },
  data() {
    return {
      form: this.state ? { ...this.state } : {
        name: '',
        countries_id: '',
        status: 'active',
      }
    };
  },
  methods: {
    submit() {
   this.$inertia.put(this.state ? `/states/${this.state.id}` : '/states', this.form);
    }
  }
};
</script>