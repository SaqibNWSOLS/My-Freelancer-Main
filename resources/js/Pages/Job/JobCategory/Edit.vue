<template>
  <AdminLayout>
    <template v-slot:header-content>
      <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
        <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
          <span class="text-xs  transition-all"><a :href="route('admin-dashboard')">Dashboard</a></span>
        </li>
        <li>/</li>
        <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
          <span class="text-xs transition-all text-primary"><a :href="route('jobCategory.index')">Job Categories</a></span>
        </li>
      </ul>
    </template>

    <div class="col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center">
      <div class="card lg:w-[50%]">
        <div class="card-header border-b-0">
          <div class="flex flex-col">
            <h3 class="text-lg font-medium">Edit Job Category</h3>
          </div>
        </div>

        <div class="checkout-detail">
          <form @submit.prevent="submit" enctype="multipart/form-data">
            <div class="flex flex-col gap-3 form-group">
               <div class="flex flex-row gap-1">
              <div class="md:w-[50%]" >
                    <label for="icon" class="text-xs font-medium text-primary">Banner</label>
                <label class="flex" style="display:flex">
                  <img :src="form.bannerPreview" class="h-[150px] rounded-5" />
                  <input id="icon" type="file" @change="handleBannerrChange" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content hidden" />
                </label>
              </div>
              <div>
                    <label for="icon" class="text-xs font-medium text-primary">Icon</label>
                <label class="flex" style="display:flex">
                  <img :src="form.iconPreview" class=" h-[150px] rounded-5" />
                  <input id="icon" type="file" @change="handleFileChange" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content hidden" />
                </label>
              </div>
              </div>

                <div class="flex flex-col gap-1">
                <label for="parent_id" class="text-xs font-medium text-primary">Parent Category:</label>
                <select v-model="form.parent_id" id="parent_id" class="dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs">
                  <option value="0">select below</option>
                  <optgroup  v-for="category in jobCategories" :key="category.id" :label="category.name" >
                       <option :value="category.id">{{ category.name }}</option>
                        <option  v-for="sub_cat in category.child_categories" :key="sub_cat.id" :value="sub_cat.id">{{ sub_cat.name }}</option>
                  </optgroup>
                 
                </select>
              </div>

              <div class="flex flex-col gap-1">
                <label for="name" class="text-xs font-medium text-primary">Category Name</label>
                <input id="name" v-model="form.name" type="text" class="p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content" />
              </div>

              <label for="status" class="text-xs font-medium text-primary">Status:</label>
              <select v-model="form.status" id="status" class="dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs">
                <option value="Active">Active</option>
                <option value="In-Active">Inactive</option>
              </select>

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
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { router } from '@inertiajs/vue3'

const  baseUrl=window.Laravel.baseUrl

export default {
  components: {
    AdminLayout,
  },
  props: {
    jobCategories: Array,
    jobCategory: Object,
  },
  setup(props) {
    const form = useForm({
      parent_id: props.jobCategory.parent_id,
            name: props.jobCategory.name,
            status: props.jobCategory.status,
      icon: null,
      banner: null,
      iconPreview: props.jobCategory.icon? baseUrl+props.jobCategory.icon:'https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png',
      bannerPreview: props.jobCategory.banner? baseUrl+props.jobCategory.banner:'https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png',
    });
    const fileName = ref('');

    function handleFileChange(event) {
      const file = event.target.files[0];
      if (file) {
        form.icon = file;
        form.iconPreview = URL.createObjectURL(file);
        fileName.value = file.name;
      }
    }
 function handleBannerrChange(event) {
      const file = event.target.files[0];
      if (file) {
        form.banner = file;
        form.bannerPreview = URL.createObjectURL(file);
        fileName.value = file.name;
      }
    }
    function submit() {
      const formData = new FormData();
      formData.append('parent_id', form.parent_id);
      formData.append('name', form.name);
      formData.append('status', form.status);
      if (form.icon) {
        formData.append('icon', form.icon);
      }
      if (form.banner) {
        formData.append('banner', form.banner);
      }
      console.log(formData)

     
         router.post(route('jobCategory.update', props.jobCategory.id), {
  _method: 'put',
 icon: form.icon,
  banner: form.banner,
  parent_id: form.parent_id,
   status: form.status,
    name: form.name,
});
    }

    return { form, submit, handleFileChange, fileName,handleBannerrChange };
  },
};
</script>
