<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Employee</h3>
                    </div>
                </div>
                 
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                  <th> Name</th>
                                  <th> Email</th>
                                  <th> Phone</th>
                                  <th> Country</th>
                                  <th> State</th>
                                  <th> City</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(employee, index) in employees" :key="employee.id">
                                    <td >{{ index + 1 }}</td>
                                    <td > {{ employee.name }}</td>
                                   <td > {{ employee.email }}</td>
                                   <td > {{ employee.phone }}</td>
                                   <td > {{ employee.country }}</td>
                                   <td > {{ employee.state }}</td>
                                   <td > {{ employee.city }}</td>
                                   
                                   
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
    employees: Array,
  },
  components: {
        AdminLayout,
    },
};
</script>