<script>
import { ref } from 'vue'
import ImageEditorModal from '@/Components/Profile/ContactInfo/ImageEditorModal.vue';

export default {
  components: {
    ImageEditorModal
  },
  data() {
    return {
      showModalHeader: false,
      showModalPhoto:false,
      croppedHeaderUrl: null,
      croppedPhotoUrl:null,
    };
  },
  methods: {
    onHeaderChange(event) {
      const filess = event.target.files[0];
      console.log(filess)
      if (filess) {
        this.showModalHeader = true;
        this.$nextTick(() => {
          this.$refs.imageEditorr.open(filess);
        });
      }
    },
    handleCroppedHeader(croppedHeaderUrl) {
      this.croppedHeaderUrl = croppedHeaderUrl;
      this.showModalHeader = false;
    },
     onPhotoChange(event) {
      const file = event.target.files[0];
      console.log(file)
      if (file) {
        this.showModalPhoto = true;
        this.$nextTick(() => {
          this.$refs.imageEditor.open(file);
        });
      }
    },
    handleCroppedPhoto(croppedPhotoUrl) {
      this.croppedPhotoUrl = croppedPhotoUrl;
      this.showModalPhoto = false;
    }
  }
};
const frontCover = ref(null)
const profilPic = ref(null)
const switchStatus = ref(null)




const switchStatus1 = ref(null)
const switchStatus2 = ref(null)
const switchStatus3 = ref(null)
const switchStatus4 = ref(null)
const switchStatus5 = ref(null)
const switchStatus6 = ref(null)
const switchStatus7 = ref(null)
const switchStatus8 = ref(null)


</script>
<template>

    <div class="w-full">
    <div class="border flex flex-col gap-5 shadow-sm">
      <div class="border-b bg-card-header">
        <h2 class="p-4 text-lg ">Profile Front Page</h2></div>
                <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-2">
                        <span >Header Image</span>

                            <ImageEditorModal
                              :show="showModalHeader"
                              @close="showModalHeader = false"
                              @image-cropped="handleCroppedHeader"
                              ref="imageEditorr"
                            />

                              <ImageEditorModal
                              :show="showModalPhoto"
                              @close="showModalPhoto = false"
                              @image-cropped="handleCroppedPhoto"
                              ref="imageEditor"
                            />
                                    <div class="text-sm gap-x-3 font-bold flex "> Image size 300 x 1200 pixeles 
                                                      <label class="cursor-pointer inline-flex items-center mb-4">
                             <v-icon size="x-large" color="primary" icon="mdi-cloud-upload"></v-icon>
                              <input type="file" @change="onHeaderChange" accept="image/*" class="hidden" />
                            </label></div>


                        <div class="flex  gap-x-2">
                            <div class="w-64 h-24 bg-gray-100" :class="{ 'hidden': croppedHeaderUrl !== null }"></div>
                            <img class="w-[256px] h-[96px] object-fill" :src="croppedHeaderUrl"
                                :class="{ 'hidden': croppedHeaderUrl === null }">
                        </div>


                        <span>Header Photo</span>
                        <div class="text-sm gap-x-3 font-bold flex ">Image size 250 x 250 pixeles   <label class="cursor-pointer inline-flex items-center mb-4">
                             <v-icon size="x-large" color="primary" icon="mdi-cloud-upload"></v-icon>
                              <input type="file" @change="onPhotoChange" accept="image/*" class="hidden" />
                            </label></div>
                        <div class="flex  gap-x-2">
                            <div class="w-20 h-20 bg-gray-100" :class="{ 'hidden': croppedPhotoUrl !== null }"></div>
                            <img class="w-[80px] h-[80px] object-fill" :src="croppedPhotoUrl"
                                :class="{ 'hidden': croppedPhotoUrl === null }">
                        </div>

                    </div>

                    <div class="grid grid-cols-4 gap-2">
                        <span>Full Name</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="Mark Webb" />
                        <div class="col-span-2"></div>

                        <span>Screen Name</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="@MarkWebb3" />
                        <div class="col-span-2"></div>

                        <span>Home Town, Country</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="Orlando,FL" />
                        <input class="py-1 px-4 border rounded-md " type="text" value="United state" />
                        <div></div>

                        <span>Availble Badges</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="Verified by staff" />
                        <input class="py-1 px-4 border rounded-md " type="text" value="Preferred Plus" />
                        <div></div>

                        <span></span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="Preffred" />
                        <input class="py-1 px-4 border rounded-md " type="text" value="Corporate Account" />
                        <div></div>

                        <span>Hourly Rate</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="20$" />
                        <div class="col-span-2"></div>

                        <span>All-Time Earnings</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="25,500$" />
                        <div class="col-span-2"></div>

                        <span>Completed Transactions</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="Orlando. FL" />
                        <div class="col-span-2"></div>

                        <span>Preferred Freelancer</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus" color="primary" value="John" hide-details></v-switch>
                        </div>

                        <span>Identity Verified</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus1" color="primary" value="John" hide-details></v-switch>
                        </div>

                        <span>Payment Verified</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus2" color="primary" value="John" hide-details></v-switch>
                        </div>


                        <span>Phone Verified</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus3" color="primary" value="John" hide-details></v-switch>
                        </div>

                        <span>Email Verified</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus4" color="primary" value="John" hide-details></v-switch>
                        </div>
                        <div class="col-span-2"></div>

                        <span>Whatsup connected</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus5" color="primary" value="John" hide-details></v-switch>
                        </div>
                        <input class="py-1 px-4 border rounded-md " type="text" value="407 446 6647" />
                        <div></div>

                        <span>Facebook connected</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus6" color="primary" value="John" hide-details></v-switch>
                        </div>
                        <input class="py-1 px-4 border rounded-md " type="text" value="Markweep" />
                        <div></div>

                        <span>Skype connected</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus7" color="primary" value="John" hide-details></v-switch>
                        </div>
                        <input class="py-1 px-4 border rounded-md " type="text" value="markwebb3" />
                        <div></div>

                        <span>Zoom connected</span>
                        <div class="border h-9 rounded-md  relative">
                            <v-switch inline flat class="absolute left-1/2 -translate-x-1/2  -top-2"
                                v-model="switchStatus8" color="primary" value="John" hide-details></v-switch>
                        </div>
                        <input class="py-1 px-4 border rounded-md " type="text" value="" />
                        <div></div>

                        <span>Website</span>
                        <input class="py-1 px-4 border rounded-md " type="text" value="www.website.com" />
                        <div class="col-span-2"></div>
                    </div>


                </div>

               </div>
                </div>

           
</template>

<style scoped></style>