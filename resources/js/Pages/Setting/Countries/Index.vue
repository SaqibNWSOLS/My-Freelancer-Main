<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Countries</h3>
                    </div>
                </div>
                <div>
              <a  class="text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out" :href="route('countries.create')" style="float:right">Create Country</a>
    
    </div>               
     <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th>Country Name</th>
                                    <th>Code</th>
                                    <th>Status</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(country, index) in countries" :key="country.id">
                                    <td class="min-w-[1.25rem]">{{ index + 1 }}</td>
                                    <td class="min-w-[8.125rem]">{{ country.name }}</td>
                                    <td class="min-w-[11.125rem]">{{ country.code }}</td>
                                    <td class="min-w-[11.125rem]">{{ country.status }}</td>
                                    <td>

                                        <a :href="route('countries.edit', country.id)" class="text-white btn btn-warning hover:-translate-y-1 hover:transition-all hover:ease-in-out" style="margin:10px">Edit</a>
                                        <button @click="deleteCountry(country.id)" class="text-white btn btn-danger hover:-translate-y-1 hover:transition-all hover:ease-in-out">Delete</button>
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
        countries: Array, 
    },
    components: {
        AdminLayout,
    },
    methods: {
        editCountry(id) {
            Inertia.get(route('countries.edit', id));
        },
        async deleteCountry(id) {
        if (confirm('Are you sure you want to delete this Country?')) {
            try {
                const response = await this.$inertia.delete(route('countries.destroy', id));
                if (response && response.statusCode === 200) {
                    location.reload();
                } else {
                   
                    console.error('Failed to delete Country:', response);
                   
                }
            } catch (error) {
                console.error('An error occurred while deleting Country:', error);
            
            }
        }
    },
    },
}
</script>
