<template>
    <AdminLayout>
         <template v-slot:header-content>
            <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
                 <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs  transition-all"><a :href="route('admin-dashboard')">Dashboard</a></span>
                </li>
                <li>/</li>
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all text-primary"><a :href="route('freelancers.index')">Freelancer</a></span>
                </li>
            </ul>
           
        </template>
        <div class="col-span-12 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Freelancer</h3>
                    </div>
                </div>
                 
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table  ref="dataTable" class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th> Name</th>
                                  <th> Email</th>
                                  <th> Phone</th>
                                  <th> Country</th>
                                  <th> State</th>
                                  <th> City</th>
                                     <th> Status</th>
                                   <th> Action</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(freelancer, index) in freelancers" :key="freelancer.id">
                                    <td >{{ index + 1 }}</td>
                                    <td > {{ freelancer.name }}</td>
                                   <td > {{ freelancer.email }}</td>
                                   <td > {{ freelancer.phone }}</td>
                                   <td > {{ freelancer.country }}</td>
                                   <td > {{ freelancer.state }}</td>
                                   <td > {{ freelancer.city }}</td>
                                   <td></td>
                                   <td class="flex">
                                    <a :href="route('freelancers.show',freelancer.id)"><span class="mdi mdi-view-agenda-outline text-md text-[green]"></span></a>
                                          <a :href="route('freelancers.edit', freelancer.id)" lass="hover:-translate-y-1 hover:transition-all hover:ease-in-out"><span class="mdi mdi-database-edit text-md text-[green]"></span></a>
                                        <button @click="deleteEmployer(freelancer.id)" class="hover:-translate-y-1 hover:transition-all hover:ease-in-out"><span class="mdi  mdi-delete-empty-outline text-md text-[red]"></span></button>
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
    freelancers: Array,
  },
  components: {
        AdminLayout,
    },
      mounted() {
    $(this.$refs.dataTable).DataTable();
  },
   methods: {
  async deleteEmployer(id) {
        if (confirm('Are you sure you want to delete this?')) {
            try {
                const response = await this.$inertia.delete(route('freelancers.destroy', id));
                if (response && response.statusCode === 200) {
                    location.reload();
                } else {
                   
                    console.error('Failed to delete Country:', response);
                   
                }
            } catch (error) {
                console.error('An error occurred while deleting Country:', error);
            
            }
        }
    }
    },
};
</script>