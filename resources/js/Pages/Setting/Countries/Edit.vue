<template>
    <AdminLayout>
     <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Countries</h3>
                    </div>
                </div>         
    <div class="checkout-detail">
           <form  @submit.prevent="submit" > 
            <h1>Edit Country</h1>
  <div class="flex flex-col gap-3 form-group">
      <div class="flex flex-col gap-1"> 
          <label for="name" class="text-xs font-medium text-primary">Country Name</label>
          <input v-model="form.name" id="name" type="text" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"/>
      </div> 
      <div class="flex flex-col gap-1"> 
          <label for="code" class="text-xs font-medium text-primary">Code</label>
          <input v-model="form.code" id="code" type="text" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"/>
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

export default {
     components: {
        AdminLayout,
    },
    props: {
        country: Object,
    },
    setup(props) {
        const form = useForm({
            name: props.country.name,
            code: props.country.code,
            status: props.country.status,
        });

        function submit() {
            form.put(route('countries.update', props.country.id));
        }

        return { form, submit };
    },
}
</script>
