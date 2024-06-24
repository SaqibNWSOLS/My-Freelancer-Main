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
                    <span class="text-xs transition-all text-primary"><a :href="route('states.index')">States</a></span>
                </li>
            </ul>
            <div>
                   <a  class="text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out" :href="route('states.create')" style="float:right"><span class="mdi mdi-plus"></span> Add
</a>
            </div>
        </template>

        <div class="col-span-12 lg:col-span-12">
             
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">States</h3>
                    </div>
                </div>
                <div>
           
    
    </div>               
     <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table  ref="dataTable"  class="table equal-space head-table">
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
                                         <a :href="route('states.edit', state.id)" lass="hover:-translate-y-1 hover:transition-all hover:ease-in-out" style="margin:10px"><span class="mdi mdi-database-edit text-lg text-[green]"></span></a>
                                        <button @click="deleteCountry(state.id)" class="hover:-translate-y-1 hover:transition-all hover:ease-in-out"><span class="mdi  mdi-delete-empty-outline text-lg text-[red]"></span></button>

                                      
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
