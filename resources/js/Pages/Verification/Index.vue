<template>
    <AdminLayout>
        <div class="col-span-6 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-medium">Verification</h3>
                    </div>
                </div>
                 
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table ref="dataTable" class="table equal-space head-table">
                            <thead>
                                <tr class="dark:bg-sidebar-dark2">
                                    <th>No</th>
                                    <th> User Id</th>
                                    <th>Account Type</th>
                                    <th> Account Info</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th> Address</th>
                                    <th>Countries</th>
                                    <th>Street</th>
                                    <th> City/State Zip</th>
                                    <th>Current photo</th>
                                    <th>Govt Id Front</th>
                                    <th>Govt Id Back</th>
                                    <th>Govt Id Type</th>
                                    <th> Address Proof</th>
                                    <th> Address Proof Type</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(verification, index) in verifications" :key="verification.id">
                                    <td >{{ index + 1 }}</td>
                                      <td > {{ verification.users_id }}</td>
                                     <td> {{ verification.accountType }}</td>
                                     <td> {{ verification.accountInfo }}</td>
                                   <td> {{ verification.first_name }}</td>
                                    <td>{{ verification.last_name }}</td>
                                    <td> {{ verification.address }}</td>
                                    <td>{{ verification.countries_id }}</td>
                                     <td> {{ verification.street }}</td>
                                    <td>{{ verification.city_state_zip }}</td>

                                    <td>
                                        <span v-if="verification.current_photo">
                                            {{ getImagePath(verification.current_photo) }}
                                        </span>
                                        <span v-else>
                                            No Photo
                                        </span>
                                    </td>
                                    <td >  
                                        <span v-if="verification.gov_id_front">{{ getImagePath(verification.gov_id_front ) }}  </span>
                                        <span v-else>
                                            No Photo
                                        </span>
                                    </td >
                                    <td > 
                                        <span v-if="verification.gov_id_back">{{ getImagePath(verification.gov_id_back) }}  
                                        </span>
                                        <span v-else>
                                            No Photo
                                        </span>
                                    </td >
                                    <td > {{ verification.gov_id_type }}</td >
                                    <td >  <span v-if="verification.address_proof">{{ getImagePath(verification.address_proof ) }}  
                                        </span>
                                        <span v-else>
                                            No Photo
                                        </span>
                                    </td >
                                    <td > {{ verification.adreess_proof_type }}</td >
                                   
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
    verifications: Array,
  },
  components: {
        AdminLayout,

    },
    methods: {
        getImagePath(path) {
            return path ? '/' + path : '';
        }
    },
     mounted() {
    $(this.$refs.dataTable).DataTable();
  },


};
</script>