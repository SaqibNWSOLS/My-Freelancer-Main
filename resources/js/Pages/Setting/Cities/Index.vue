<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Cities</h3>
                    </div>
                </div>
                <div>
                    <a class="text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out" :href="route('cities.create')" style="float:right">Create City</a>
                </div>               
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th>City Name</th>
                                    <th>Country Name</th>
                                    <th>State Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(city, index) in cities" :key="city.id">
                                    <td class="min-w-[1.25rem]">{{ index + 1 }}</td>
                                    <td class="min-w-[8.125rem]">{{ city.name }}</td>
                                    <td class="min-w-[8.125rem]"> {{ city.country ? city.country.name : 'N/A' }}</td>
                                    <td class="min-w-[8.125rem]">{{ city.state ? city.state.name : 'N/A' }}</td>
                                    <td class="min-w-[11.125rem]">{{ city.status }}</td>
                                    <td>
                                           <a :href="route('cities.edit', city.id)" lass="hover:-translate-y-1 hover:transition-all hover:ease-in-out" style="margin:10px"><i class="mdi mdi-pencil"></i></a>
                                        <button @click="deleteCity(city.id)" class="hover:-translate-y-1 hover:transition-all hover:ease-in-out"><i class="mdi mdi-delete" style="color:red"></i></button>

                                       
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
        cities: Array,
    },
    components: {
        AdminLayout,
    },
      mounted() {
    $(this.$refs.dataTable).DataTable();
  },
    methods: {
        editCity(id) {
            Inertia.get(route('cities.edit', id));
        },
          async deleteCity(id) {
        if (confirm('Are you sure you want to delete this City?')) {
           
                const response = await this.$inertia.delete(route('cities.destroy', id));
                if (response && response.statusCode === 200) {
                    location.reload();
                } else {
                   
                    console.error('Failed to delete City:', response);
                   
                }
            
        }
    },
    },
}
</script>
