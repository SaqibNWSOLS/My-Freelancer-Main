<!-- resources/js/Pages/Setting/Country/Create.vue -->
<template>
<AdminLayout>
            <template v-slot:header-content>
            <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
                 <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs  transition-all"><a :href="route('admin-dashboard')">Dashboard</a></span>
                </li>
                <li>/</li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all"><a :href="route('countries.index')">Countries</a></span>
                </li>
                 <li>/</li>
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all"><a :href="route('states.index')">States</a></span>
                </li>
                <li>/</li>
                 <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all text-primary"><a :href="route('cities.index')">Cities</a></span>
                </li>
            </ul>
         
        </template>
    <div class="col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center ">
            <div class="card lg:w-[50%]">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Create City</h3>
                    </div>
                </div>         
    <div class="checkout-detail">
       <form  @submit.prevent="submit" > 
  <div class="flex flex-col gap-3 form-group">
      <div class="flex flex-col gap-1"> 
          <label for="name" class="text-xs font-medium text-primary">City Name</label>
          <input  v-model="form.name" type="text" id="name" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"/>
      </div> 

      <label for="countries_id" class="text-xs font-medium text-primary">Country:</label>
      <div class="flex flex-col gap-3 form-group">
      <select v-model="form.countries_id" id="countries_id" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option v-for="country in countries" :key="country.id" :value="country.id">   {{ country.name }}</option> 
         
      </select> 
   </div>    

      <label for="states_id" class="text-xs font-medium text-primary">State:</label>
      <div class="flex flex-col gap-3 form-group">
      <select v-model="form.states_id" id="states_id" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option v-for="state in states" :key="state.id" :value="state.id">   {{ state.name }}</option> 
         
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
import { useForm } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';

export default {
     components: {
        AdminLayout,
    },
  props: {
    countries: Array,
    states: Array,
    city: Object
  },
  data() {
    return {
      form: this.city ? { ...this.city } : {
        name: '',
        countries_id: '',
        states_id: '',
        status: 'active',
      }
    };
  },
  methods: {
    submit() {
      this.$inertia.post(this.city ? `/cities/${this.city.id}` : '/cities', this.form);
    }
  }
};
</script>