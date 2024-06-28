<template>
	<AdminLayout>
       <template v-slot:header-content>
            <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs  transition-all ">Dashboard</span>
                </li>
                <li>/</li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs  transition-all text-primary">General Setting</span>
                </li>
            </ul>
        </template>

      <div class="col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center ">
            <div class="card lg:w-[100%]">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">General Setting</h3>
                    </div>
                </div>         
    <div class="checkout-detail">
       <form  @submit.prevent="submit" novalidate> 
  <div class="grid grid-cols-4 gap-3 form-group">
      <div class="col-span-1 gap-1"> 
          <label for="name" class="text-xs font-medium text-primary">Email Verification</label>
    
            <select v-model="form[0].value" id="status" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option value="Active">Active</option> 
          <option value="In-Active">Inactive</option>
      </select> 
      </div> 
      <div class="col-span-1 gap-1"> 
          <label for="name" class="text-xs font-medium text-primary">Phone Verification</label>
    
            <select v-model="form[1].value" id="status" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option value="Active">Active</option> 
          <option value="In-Active">Inactive</option>
      </select> 
      </div> 
        <div class="col-span-1 gap-1"> 
          <label for="name" class="text-xs font-medium text-primary">Screen Verfication</label>
    
            <select  v-model="form[2].value" id="status" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option value="Active">Active</option> 
          <option value="In-Active">Inactive</option>
      </select> 
      </div> 

      <div class="col-span-4 text-right gap-1"> 
          <button type="submit" class="text-white btn btn-primary" style="text-align:right">Submit</button>
      </div> 
  </div> 

 
</form> 

        </div>
     </div> 
 </div>
      </AdminLayout>
      </template>

      <script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';


const props=defineProps({
    settings: {
        type: Object,
    }
});

const form = useForm(props.settings);

const submit=()=>{
    form.post(route('general-setting.store'),{
          onSuccess: () => {
            console.log(1);
        }
    });
}

</script>