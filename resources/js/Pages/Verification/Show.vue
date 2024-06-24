<template>
    <AdminLayout>
        <template v-slot:header-content>
            <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]">
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all"><a :href="route('admin-dashboard')">Dashboard</a></span>
                </li>
                <li>/</li>
                <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs transition-all text-primary"><a :href="route('verifications.index')">Verification</a></span>
                </li>
            </ul>
        </template>
        <div class="col-span-12 lg:col-span-12">
            <div class="card">
                <div class="card-header border-b-0">
                    <div class="grid grid-cols-2">
                        <div class=" col-span-1"><h3 class="text-lg font-medium">{{ verification?.user?.name }} Verification</h3></div>
                          <div class="col-span-1 text-right">
                        <a href="#" v-if="verification.status!='Approved'"  class="text-white btn btn-primary btn-sm mr-2" @click="showAprroveMoal">Approve</a>
                         <a href="#"  v-if="verification.status!='Approved'"   class="text-white btn btn-danger btn-sm" @click="showRejectModal">Reject</a>
                    </div>
                    </div>
                  
                </div>
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <div class="grid grid-cols-4 gap-3">
                            <div class="col-span-4">
                                <h6 class="font-medium">General Info</h6>
                            </div>
                            <div class="col-span-1">
                                Account Type: {{ verification?.accountType }}
                            </div>
                            <div class="col-span-1">
                                First Name: {{ verification?.first_name }}
                            </div>
                            <div class="col-span-1">
                                Last Name: {{ verification?.last_name }}
                            </div>
                            <div class="col-span-1">
                                Address: {{ verification?.address }}
                            </div>
                             <div class="col-span-1">
                                Country: {{ verification?.countries_id }}
                            </div>
                            <div class="col-span-1">
                                City / State / ZIP: {{ verification?.city_state_zip }}
                            </div>
                            <div class="col-span-1">
                                Street: {{ verification?.street }}
                            </div>
                            <div class="col-span-1">
                            </div>
                            <div class="col-span-1 mt-4">
                                <h6 class="font-medium">Current Photo</h6>
                                <img class="mt-4 w-[200px]" v-if="verification?.current_photo" :src="getImagePath(verification?.current_photo)" alt="Current Photo">
                            </div>
                            <div class="col-span-1 mt-4">
                                <h6 class="font-medium">Address Proof</h6>
                                 <img class="mt-4  w-[200px]" v-if="verification?.address_proof" :src="getImagePath(verification?.address_proof)" alt="Current Photo">
                            </div>
                             <div class="col-span-1 mt-4">
                                <h6 class="font-medium">Gov Id Front</h6>
                                 <img class="mt-4 w-[200px]"   v-if="verification?.gov_id_front" :src="getImagePath(verification?.gov_id_front)" alt="Current Photo">
                            </div>
                             <div class="col-span-1 mt-4">
                                <h6 class="font-medium">Gov Id Back</h6>
                                 <img class="mt-4  w-[200px]" v-if="verification?.gov_id_back" :src="getImagePath(verification?.gov_id_back)" alt="Current Photo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


          <Modal :show="approveModal" @close="approveModal = false">
      <div class="mr-3">
        <h1 class="text-xl">Verfication Approval</h1>
        <p class="mb-3 mt-4">Kindyl enter notifcation message for the user.</p>
        <div class="relative">
         <textarea v-model="appForm.app_message" class="w-full h-[100px]"></textarea>
          <p class="text-danger">{{ appForm.errors.app_message }}</p>
        </div>
        <div class="text-right">
          <button type="submit" @click="submitApproval" class="px-3 py-2 mt-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 rounded-md">
            Submit
          </button>
        </div>
      </div>
    </Modal>

     <Modal :show="rejectModal" @close="rejectModal = false">
      <div class="mr-3">
        <h1 class="text-xl">Verfication Rejection</h1>
        <p class="mb-3 mt-4">Kindly enter verification reason for the user.</p>
        <div class="relative">
         <textarea  v-model="rejForm.rej_message" class="w-full h-[100px]"></textarea>
          <p class="text-danger">{{ rejForm.errors.rej_message }}</p>
        </div>
        <div class="text-right">
          <button type="submit" @click="submitRejection" class="px-3 py-2 mt-4 text-white font-semibold bg-blue-800 hover:bg-blue-700 rounded-md">
            Submit
          </button>
        </div>
      </div>
    </Modal>

    </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Modal from '@/Components/Modal.vue';
import { ref, computed } from 'vue';
import { useForm } from '@inertiajs/vue3';

const approveModal = ref(false);

const rejectModal = ref(false);
const  baseUrl= window.Laravel.baseUrl
const props = defineProps({
    verification:{
      type:Object,
    }

 });

const appForm = useForm({
  app_message: ref(''),
  verifications_id:ref(props.verification?.id)
});

const rejForm = useForm({
  rej_message: ref(''),
  verifications_id:ref(props.verification?.id)
});


const showAprroveMoal =()=>{
    approveModal.value=ref(true)
}
const showRejectModal =()=>{
    rejectModal.value=ref(true)
}

const getImagePath=(path)=> {
            return path ? baseUrl  + path : '';
        }
const submitApproval=()=>{
     appForm.post(route('aprrove-verfic'), {
    onSuccess: (response) => {
      if (response.props?.flash?.otp_sent) {
        approveModal.value = true;
      } else {
       appForm.reset();
         approveModal.value = false;
      }
    },
  });
}

const submitRejection=()=>{
     rejForm.post(route('reject-verfic'), {
    onSuccess: (response) => {
      if (response.props?.flash?.otp_sent) {
        rejectModal.value = true;
      } else {
       rejForm.reset();
         rejectModal.value = false;
      }
    },
  });
}

</script>
