<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Freelancer</h3>
                    </div>
                </div>
                 
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th> Name</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(freelancer, index) in freelancers" :key="freelancer.id">
                                    <td >{{ index + 1 }}</td>
                                    <td > {{ freelancer.name }}</td>
                                   
                                   
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
};
</script>