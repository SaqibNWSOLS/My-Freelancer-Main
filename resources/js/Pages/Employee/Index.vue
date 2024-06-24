<template>
    <AdminLayout>
          <template v-slot:header-content>
            <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
                 <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs  transition-all"><a :href="route('admin-dashboard')">Dashboard</a></span>
                </li>
                <li>/</li>
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all text-primary"><a :href="route('employees.index')">Employer</a></span>
                </li>
            </ul>
           
        </template>
        <div class="col-span-12 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Employer</h3>
                    </div>
                </div>
                 
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table  ref="dataTable"  class="table equal-space head-table">
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
     mounted() {
    $(this.$refs.dataTable).DataTable();
  },
};
</script>