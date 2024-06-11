<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Job Category</h3>
                    </div>
                </div>
                <div>
              <a  class="text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out" :href="route('jobCategory.create')" style="float:right">Create Job Category</a>
    
    </div>               
     <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th>Parent Id</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(jobCategory, index) in jobCategories" :key="jobCategory.id">
                                    <td class="min-w-[1.25rem]">{{ index + 1 }}</td>
                                    <td class="min-w-[8.125rem]">{{ jobCategory.parent_id }}</td>
                                    <td class="min-w-[11.125rem]">{{ jobCategory.name }}</td>
                                    <td class="min-w-[11.125rem]">{{ jobCategory.status }}</td>
                                    <td>

                                        <a :href="route('jobCategory.edit', jobCategory.id)" class="text-white btn btn-warning hover:-translate-y-1 hover:transition-all hover:ease-in-out" style="margin:10px">Edit</a>
                                        <button @click="deletejobCategory(jobCategory.id)" class="text-white btn btn-danger hover:-translate-y-1 hover:transition-all hover:ease-in-out">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<script>

import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    props: {
        jobCategories: Array, 
    },
    components: {
        AdminLayout,
    },
    methods: {
        editjobCategory(id) {
            Inertia.get(route('jobCategory.edit', id));
        },
       async deletejobCategory(id) {
        if (confirm('Are you sure you want to delete this Job Category?')) {
            try {
                const response = await this.$inertia.delete(route('jobCategory.destroy', id));
                if (response && response.statusCode === 200) {
                    location.reload();
                } else {
                   
                    console.error('Failed to delete JobCategory:', response);
                   
                }
            } catch (error) {
                console.error('An error occurred while deleting JobCategory:', error);
            
            }
        }
    },
    },
}
</script>
