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
                    <span class="text-xs transition-all text-primary"><a :href="route('tag.index')">Tags</a></span>
                </li>
            </ul>
        </template>
     <div class="col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center ">
            <div class="card lg:w-[50%]">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Create Tag</h3>
                    </div>
                </div>         
    <div class="checkout-detail">
       <form  @submit.prevent="submit" > 
  <div class="flex flex-col gap-3 form-group">
      <div class="flex flex-col gap-1">
                    <label for="icon" class="text-xs font-medium text-primary">Icon</label>
                <label class="flex" style="display:flex">
                  <img :src="form.iconPreview" class=" h-[150px] rounded-5" />
                  <input id="icon" type="file" @change="handleFileChange" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content hidden" />
                </label>
              </div>
      <div class="flex flex-col gap-1"> 

      <label for="countries_id" class="text-xs font-medium text-primary">Category:</label>
      <div class="flex flex-col gap-3 form-group">
      <select v-model="form.job_categories_id" id="countries_id" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
          <template v-for="category in categories" :key="category.id">
            <option :value="category.id" >{{ category.name }}</option>
        <template v-for="child in category.child_categories" :key="child.id">
          <option :value="child.id" disabled class="font-bold">&nbsp;&nbsp;{{ child.name }}</option>
          <template v-for="subChild in child.sub_child_categories" :key="subChild.id">
            <option :value="subChild.id">&nbsp;&nbsp;&nbsp;{{ subChild.name }}</option>
          </template>
        </template>
    </template>

         
      </select> 
   </div>    
          <label for="name" class="text-xs font-medium text-primary">Name</label>
          <input  v-model="form.name" type="text" id="name" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"/>

        
      </div> 


      <label for="status" class="text-xs font-medium text-primary">Status:</label>
      <div class="flex flex-col gap-3 form-group">
      <select v-model="form.status" id="status" class="dark:bg-sidebar-dark2 dark:border-border-dark  p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"> 
           <option value="Active">Active</option> 
          <option value="In-Active">Inactive</option>
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
const  baseUrl=window.Laravel.baseUrl

export default {
     components: {
        AdminLayout,
    },
  props: {
    categories: Array,
    tag: Object
  },
  data() {
    return {
      form:{
         _method: 'put',
        name: this.tag.name,
        job_categories_id: this.tag.job_categories_id,
        iconPreview: this.tag.icon? baseUrl+this.tag.icon :'https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png',
        status: this.tag.status,
        icon:'',
      }
    };
  },
  methods: {
    submit() {
      this.$inertia.post(this.tag ? `/tag/${this.tag.id}` : '/tag', this.form);
    },
     handleFileChange(event) {
      const file = event.target.files[0];
      if (file) {
        this.form.icon = file;
        this.form.iconPreview = URL.createObjectURL(file);
      }
    }
  }
};
</script>