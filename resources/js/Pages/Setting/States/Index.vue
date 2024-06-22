<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">States</h3>
                    </div>
                </div>
                <div>
              <a  class="text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out" :href="route('states.create')" style="float:right">Create State</a>
    
    </div>               
     <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th>State Name</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(state, index) in states" :key="state.id">
                                    <td class="min-w-[1.25rem]">{{ index + 1 }}</td>
                                    <td class="min-w-[8.125rem]">{{ state.name }}</td>
                                  <td> {{ state.country ? state.country.name : 'N/A' }}</td>
                                 
                                    <td class="min-w-[11.125rem]">{{ state.status }}</td>
                                    <td>
                                         <a :href="route('states.edit', state.id)" lass="hover:-translate-y-1 hover:transition-all hover:ease-in-out" style="margin:10px"><i class="mdi mdi-pencil"></i></a>
                                        <button @click="deleteCountry(state.id)" class="hover:-translate-y-1 hover:transition-all hover:ease-in-out"><i class="mdi mdi-delete" style="color:red"></i></button>

                                      
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
        states: Array, 
    },
    components: {
        AdminLayout,
    },
      mounted() {
    $(this.$refs.dataTable).DataTable();
  },
    methods: {
        editState(id) {
            Inertia.get(route('states.edit', id));
        },
        async deleteCountry(id) {
        if (confirm('Are you sure you want to delete this editState?')) {
            try {
                const response = await this.$inertia.delete(route('states.destroy', id));
                if (response && response.statusCode === 200) {
                    location.reload();
                } else {
                   
                    console.error('Failed to delete State:', response);
                   
                }
            } catch (error) {
                console.error('An error occurred while deleting State:', error);
            
            }
        }
    },
    },
}
</script>
