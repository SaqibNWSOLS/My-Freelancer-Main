<template>
    <v-window-item value="id-verification">

        <div v-if="showVerificationSection === 'none'" class="w-full border">
          <div class="border-b bg-card-header ">
      <h2 class="text-xl p-4">Upload Documents</h2>
    </div>
            <div class="flex flex-wrap lg:flex-nowrap gap-4 p-4">


                <div class="border border-blue-600 pt-4 w-56 grid text-center space-y-2"

                    :class="VerificationStatus.contactInfo === 0 ? 'border-gray-600' : ''">
                  <div class="text-center justify-center d-flex" style="margin-top:-40px"> <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="10" cy="14" r="7" fill="green" fill-opacity="0.24"/>
<path d="M6 13L10 16L17 7" stroke="#222222" stroke-width="1.2"/>
</svg></div>
                      <div class="text-center justify-center d-flex  mt-6"><img class="inline" width="24" src="@/assets/new/address-card.svg" /></div>
                    <h3 class="font-bold space-x-2 text-sm">
                        
                        <span>Contact Information</span>
                    </h3>
                    <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                        <li>Phone number</li>
                        <li>Legal name</li>
                        <li>Residential Address</li>
                    </ul>
                    <button @click="showVerificationSection = 'contact-information';tab= 'id-contact-information'"
                        :class="VerificationStatus.contactInfo === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                        class="border-t self-end border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                        Start
                    </button>
                </div>
                <div class="border border-blue-600 grid pt-4 w-56 text-center space-y-2"
                    :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-600' : ''">
                    <div class="text-center justify-center d-flex" style="margin-top:-40px"> <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="10" cy="14" r="7" fill="green" fill-opacity="0.24"/>
<path d="M6 13L10 16L17 7" stroke="#222222" stroke-width="1.2"/>
</svg></div>
<div class="text-center justify-center d-flex mt-6">  <img class="inline" width="24" src="@/assets/new/address-card.svg" /></div>
                    <h3 class="font-bold space-x-2 text-sm">
                      
                        <span>Current Photo</span>
                    </h3>
                    <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                        <li>Your photo</li>
                        <li>Taken within 60 days</li>
                        <li>Show your entire face</li>
                    </ul>
                    <button @click="showVerificationSection = 'contact-information';tab= 'id-current-photo'"
                        :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                        class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                        Start
                    </button>
                </div>
                <div class="border border-blue-600 grid pt-4 w-56 text-center space-y-2"
                    :class="VerificationStatus.govId === 0 ? 'border-gray-600' : ''">
                    <div class="text-center justify-center d-flex" style="margin-top:-38px"> 
                         <h2 ><b style="color:red; border:2px solid red; padding:0px 2px">Pending</b></h2>
                    </div>
                    <h3 class="font-bold space-x-2 text-sm  mt-6">
                        <img class="inline" width="24" src="@/assets/new/address-card.svg" />
                        <span>Government issued ID</span>
                    </h3>
                    <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                        <li>Your photo ID</li>
                        <li>Show all four edges</li>
                        <li>Front & Back</li>
                    </ul>
                    <button
                        :class="VerificationStatus.govId === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                        class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                        Start
                    </button>
                </div>
                <div class="border border-blue-600 pt-4 mt-4 w-56 text-center grid space-y-2"
                    :class="VerificationStatus.proofOfAddress === 0 ? 'border-gray-600' : ''">
                      <div class="text-center justify-center d-flex" style="margin-top:-38px"> 
                         <h2 ><b style="color:red; border:2px solid red; padding:0px 2px">Pending</b></h2>
                    </div>
                    <h3 class="font-bold space-x-2 text-sm  mt-6">
                        <img class="inline" width="24" src="@/assets/new/address-card.svg" />
                        <span>Proof of address</span>
                    </h3>
                    <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                        <li>Dated within 60 days</li>
                        <li>Confirm your name & address on account</li>
                    </ul>
                    <button
                        :class="VerificationStatus.proofOfAddress === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                        class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                        Start
                    </button>
                </div>
            </div>
        </div>



        <div v-if="showVerificationSection === 'contact-information'" class="w-full border">

            <v-tabs align-tabs="start" v-model="tab">
                <v-tab slim slider-color="#4B83C3" value="id-contact-information"><span class="pr-5">Contact
                        Information</span></v-tab>
                <v-tab slim slider-color="#4B83C3" value="id-current-photo"><span class="pr-5">Currrent
                        photo</span></v-tab>
                <v-tab slim slider-color="#4B83C3" value="id-government-id"><span class="pr-5">Government Issued
                        ID</span></v-tab>
                        <v-tab slim slider-color="#4B83C3" value="id-address-proof"><span class="pr-5">Proof of Address
                        </span></v-tab>
            </v-tabs>

            <v-card-text>
                <v-window v-model="tab">
                    <v-window-item value="id-contact-information">
                        <div class="space-y-4">
                            <div class="space-y-1">
                                <h2 class="font-semibold text-lg">Personal Details</h2>
                                <p>Confirm the name and address for your account</p>
                            </div>
                            <div class="space-y-1">
                                <h2 class="font-semibold text-lg">Select your account type</h2>
                                <div class="flex gap-x-3">
                                    <label class="flex items-center gap-x-1" for="account-type-individual">
                                        <input v-model="accountType" type="radio" id="account-type-individual"
                                            name="account-type" value="individual" />
                                        <sapn>Individual</sapn>
                                    </label>
                                    <label class="flex items-center gap-x-1" for="account-type-Company">
                                        <input v-model="accountType" type="radio" id="account-type-Company"
                                            name="account-type" value="company" />
                                        <sapn>Company</sapn>
                                    </label>
                                </div>
                            </div>
                            <div :class="accountType === 'company' ? 'block' : 'hidden'">
                                <h4 class="font-semibold">Account Owner Details <span class="text-red-600">(Needed For
                                        Verification Only)</span></h4>
                            </div>
                            <div class="space-y-2">
                                <h2 class="font-semibold text-lg">Account Info</h2>
                                <div class="flex gap-x-3">
                                    <label class="flex items-center gap-x-1" for="account-info-new">
                                        <input type="radio" id="account-info-new" name="account-info" />
                                        <sapn>Enter new account info</sapn>
                                    </label>
                                    <label class="flex items-center gap-x-1" for="account-info-existing">
                                        <input type="radio" id="account-info-existing" name="account-info" />
                                        <sapn>Use existing account info</sapn>
                                    </label>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="space-y-1">
                                        <label class="block">First Name</label>
                                        <input type="text" placeholder="First name" class="border p-2 rounded-sm" />
                                    </div>

                                    <div class="space-y-1">
                                        <label class="block">Last Name</label>
                                        <input type="text" placeholder="Last name" class="border p-2 rounded-sm" />
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <h2 class="font-semibold text-lg">Address</h2>
                                <div class="space-y-1">
                                    <label class="block ">Search Address</label>
                                    <input type="text" placeholder="Enter a location"
                                        class="w-[420px] focus:outline-none border-b border-solid p-2 rounded-sm focus:border-solid focus:border-b focus:border-black" />
                                </div>
                                <div class="space-y-2">
                                    <label class="block">Country</label>
                                    <select class="border p-2 w-[420px] appearance-auto" name="COUNTRIES"
                                        id="COUNTRIES">
                                        <option v-for="(country, index) in COUNTRIES" :value="country" :key="index">
                                            {{ country }}
                                        </option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="block">Street</label>
                                    <input type="text" placeholder="Street address"
                                        class="w-[420px] border p-2 rounded-sm" />
                                </div>
                                <div class="space-y-1">
                                    <label class="block">City / State / ZIP</label>
                                    <input type="text" placeholder="" class="w-[420px] border p-2 rounded-sm" />
                                </div>
                                <div class="space-x-2">
                                    <select class="inline-block border p-2 w-[270px] appearance-auto" name="STATES">
                                        <option>Florida</option>
                                    </select>
                                    <input type="text" class="inline-block w-24 border p-2 rounded-sm" />
                                </div>
                                <div>
                                    <p>
                                        <input type="checkbox" />
                                        I acknowledge that the above Information is the same as in the governmentissued
                                        ID and address proof
                                    </p>
                                </div>
                                <p class="text-red-500">
                                    Note: information shared above will be used to update your current account info
                                </p>
                                <button class="bg-blue-700 text-white px-3 py-2 hover:bg-blue-600">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </v-window-item>

                    <v-window-item value="id-current-photo">
                        <div class="flex">
                            <div class="space-y-4">
                                <div>
                                    <h3 class="font-semibold">Help us identify you better.</h3>
                                    <p>Upload your photo that meets the requirements and get closer to a verified
                                        profile
                                    </p>
                                </div>
                                <div class="flex gap-6 justify-between">
                                    <div class="flex">
                                        <div class="h-fit relative" :class="{ 'hidden': !showCamera }">
                                            <video class="w-[460px]" ref="video">Video stream not available.</video>

                                            <button @click="takepicture"
                                                class="bg-white border-blue-600 border absolute bottom-3 left-1/2 -translate-x-1/2 px-3 py-1 mt-4">
                                                <span>Take A selfie</span>
                                            </button>


                                        </div>
                                        <div v-if="!showCamera && !photoTaken"
                                            class="flex items-center justify-center w-[460px] h-[400px] bg-gray-200 relative">
                                            <div>

                                                <div class="grid gap-2">
                                                    <img class="ml-auto mr-auto" width="40"
                                                        src="@/assets/new/camera-solid.svg" />
                                                    <button @click="openCamera"
                                                        class="px-3 py-1 bg-white text-blue-600 border border-blue-600 hover:bg-blue-50 cursor-pointer">
                                                        Capture a selfie
                                                    </button>
                                                </div>
                                            </div>
                                            <div v-if="!photoTaken && !showCamera" class="absolute bottom-3 text-smxs">
                                                <p>Tip: Make a V-sign or Thums-up for quicker indetification</p>
                                            </div>
                                        </div>
                                        <canvas class="hidden" ref="canvas"> </canvas>
                                        <div :class="{ 'hidden': !photoTaken }" class="h-fit relative">
                                            <img ref="photo" />
                                            <button @click="openCamera"
                                                class="bg-white border-blue-600 border absolute bottom-3 left-1/2 -translate-x-1/2 px-3 py-1 mt-4">
                                                <span>Retake A selfie</span>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="space-y-3">
                                        <div class="flex gap-2">
                                            <div class="w-24 h-28 bg-yellow-200"></div>
                                            <div class="space-y-2">
                                                <h5>Guidlines</h5>
                                                <ul>
                                                    <li class="flex gap-x-1"><img width="12"
                                                            src="@/assets/new/check-solid.svg" />Photo must be of you
                                                    </li>
                                                    <li class="flex gap-x-1"><img width="12"
                                                            src="@/assets/new/check-solid.svg" />Photo must be of you
                                                    </li>
                                                    <li class="flex gap-x-1"><img width="12"
                                                            src="@/assets/new/check-solid.svg" />Photo must be of you
                                                    </li>
                                                    <li class="flex gap-x-1"><img width="12"
                                                            src="@/assets/new/check-solid.svg" />Photo must be of you
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <h5 class="font-semibold">These photos will not be approved</h5>
                                        <div class="flex gap-2">
                                            <div class="w-24 h-24 bg-gray-500"></div>
                                            <span class="mt-auto mb-auto">Scanned Photos</span>
                                        </div>
                                        <div class="flex gap-2">
                                            <div class="w-24 h-24 bg-gray-500"></div>
                                            <span class="mt-auto mb-auto">Group Shots</span>
                                        </div>
                                        <div class="flex gap-2">
                                            <div class="w-24 h-24 bg-gray-500"></div>
                                            <span class="mt-auto mb-auto">With Sunglasses</span>
                                        </div>
                                        <div class="flex gap-2">
                                            <div class="w-24 h-24 bg-gray-500"></div>
                                            <span class="mt-auto mb-auto">Added Filters</span>
                                        </div>
                                        <div class="flex gap-2">
                                            <div class="w-24 h-24 bg-gray-500"></div>
                                            <span class="mt-auto mb-auto">Blurry Photos</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </v-window-item>

                    <v-window-item value="id-government-id">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <h2 class="font-semibold">Government-Issued ID</h2>
                                <p>Place your valid ID on a flat surface and take picture of it, Make sure that all 4
                                    edges of the ID ca be seen and put it on thing in the frame, and taht the photo is
                                    weel lit.</p>
                            </div>
                            <div class="space-y-3">
                                <div class="bg-gray-100 border border-gray-300 w-full ">
                                    <img class="ml-auto mr-auto h-[240px] object-fill" :src="govIdFront" :class="{'hidden': govIdFront === null}">
                                    <div
                                        :class="{'hidden': govIdFront !== null}"
                                        class="flex p-3 flex-col gap-2 items-center justify-center text-center h-[240px]">
                                        <h4 class="block font-semibold">Front of ID</h4>
                                        <p>Up to 5 MB<br />PDF,PNG, JPEG, JPG, GIF, BMP</p>
                                        <img width="38" src="@/assets/new/file-solid.svg" />
                                    </div>
                                    <div 
                                        class="border-t p-3 border-solid border-gray-500">
                                        <label for="file-front" class="cursor-pointer flex w-fit ml-auto gap-1 mr-auto bg-transparent border border-gray-500 hover:bg-stone-200 p-2">
                                            <input
                                            v-on:change="onFileChange"
                                            id="file-front"
                                            type="file" class="hidden"
                                            />
                                            <img width="22" src="@/assets/new/file-blue-solid.svg" />
                                            <span>Upload file</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="bg-gray-100 border border-gray-300 w-full ">
                                    <img class="ml-auto mr-auto h-[240px] object-fill" :src="govIdBack" :class="{'hidden': govIdBack === null}">
                                    <div
                                        :class="{'hidden': govIdBack !== null}"
                                        class="flex p-3 flex-col gap-2 items-center justify-center text-center h-[240px]">
                                        <h4 class="block font-semibold">Back of ID</h4>
                                        <p>Up to 5 MB<br />PDF,PNG, JPEG, JPG, GIF, BMP</p>
                                        <img width="38" src="@/assets/new/file-solid.svg" />
                                    </div>
                                    <div class="border-t p-3 border-solid border-gray-500">
                                        <label for="file-back" class="cursor-pointer flex w-fit ml-auto gap-1 mr-auto bg-transparent border border-gray-500 hover:bg-stone-200 p-2">
                                            <input
                                            v-on:change="onFileChangeBack"
                                            id="file-back"
                                            type="file" class="hidden"
                                            />
                                            <img width="22" src="@/assets/new/file-blue-solid.svg" />
                                            <span>Upload file</span>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p>What type of Government Issued ID?</p>
                                <select class="border p-2 w-[200px] appearance-auto" name="gov-id">
                                    <option>Driver's License</option>
                                    <option>Card ID</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                        </div>
                    </v-window-item>
                    <v-window-item value="id-address-proof">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <h2 class="font-semibold">Proof of Address</h2>
                                <p>You're almost done! Share a document confirming the address on your account. This document needs to show address, name, and date (withing the last 60 days).<br/>Here are some examples: Utility Bill, lease Agreement, Insurance Card, or your Voter Registration card.</p>
                                
                            </div>
                            <div class="bg-gray-100 border border-gray-400 w-full ">
                                <div class="bg-gray-100 border border-gray-300 w-full ">
                                    <img class="ml-auto mr-auto h-[240px] object-fill" :src="addressProof" :class="{'hidden': addressProof === null}">
                                    <div
                                    :class="{'hidden': addressProof !== null}"
                                        class="flex p-3 flex-col gap-2 items-center justify-center text-center h-[240px]">
                                        <h4 class="block font-semibold">Proof of Address</h4>
                                        <p>Up to 5 MB<br />PDF,PNG, JPEG, JPG, GIF, BMP</p>
                                        <img width="38" src="@/assets/new/file-solid.svg" />
                                    </div>
                                    <div class="border-t p-3 border-solid border-gray-500">
                                        <label for="address-proof" class="cursor-pointer flex w-fit ml-auto gap-1 mr-auto bg-transparent border border-gray-500 hover:bg-stone-200 p-2">
                                            <input
                                            v-on:change="onFileChangeProof"
                                            id="address-proof"
                                            type="file" class="hidden"
                                            />
                                            <img width="22" src="@/assets/new/file-blue-solid.svg" />
                                            <span>Upload file</span>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p>What type of Proof of Address?</p>
                                <select class="border p-2 w-[200px] appearance-auto" name="gov-id">
                                    <option>Utility Bill</option>
                                    <option>lease Agreement</option>
                                    <option>Insurance Card</option>
                                </select>
                            </div>
                        </div>
                    </v-window-item>
                </v-window>
            </v-card-text>
        </div>




    </v-window-item>
</template>


<style scoped>
.p-tabview-nav {
    padding: 13px;
}
</style>


<script setup>
import { ref,onMounted  } from 'vue'
import { COUNTRIES } from "@/@data";
const tab = ref(null)
const accountType = ref('individual')
const govIdFront = ref(null)
const govIdBack = ref(null)
const addressProof = ref(null)

function onFileChange(e) {
  var files = e.target.files || e.dataTransfer.files;
  if (!files.length)
    return;
  createImage(files[0]);
}

function createImage(file) {
      var image = new Image();
      var reader = new FileReader();

      reader.onload = (e) => {
        image = e.target.result;
        govIdFront.value = image
      };
      reader.readAsDataURL(file);
}

function onFileChangeProof(e) {
  var files = e.target.files || e.dataTransfer.files;
  if (!files.length)
    return;
    createImageProof(files[0]);
}

function createImageProof(file) {
      var image = new Image();
      var reader = new FileReader();

      reader.onload = (e) => {
        image = e.target.result;
        addressProof.value = image
      };
      reader.readAsDataURL(file);
}

function onFileChangeBack(e) {
  var files = e.target.files || e.dataTransfer.files;
  if (!files.length)
    return;
    createImageBack(files[0]);
}

function createImageBack(file) {
      var image = new Image();
      var reader = new FileReader();

      reader.onload = (e) => {
        image = e.target.result;
        govIdBack.value = image
      };
      reader.readAsDataURL(file);
}

const VerificationStatus = ref({
    contactInfo: 1,
    currentPhoto: 1,
    govId: 0,
    proofOfAddress: 0,
})

const showVerificationSection = ref('none')

onMounted(() => {
  console.log(govIdFront.value)
})

const width = 450 // We will scale the photo width to this
let height = 0    // This will be computed based on the input stream

const streaming = ref(false)

const video = ref(null)
const photo = ref(null)
const canvas = ref(null)
const showCamera = ref(false)
const photoTaken = ref(false)


function openCamera() {
    showCamera.value = true
    photo.value.removeAttribute('src')
    photo.value.removeAttribute('width')
    photo.value.removeAttribute('height')
    photoTaken.value = false
    navigator.mediaDevices
        .getUserMedia({ video: true, audio: false })
        .then((stream) => {
            video.value.srcObject = stream;
            video.value.play();
        })
        .catch((err) => {
            console.error(`An error occurred: ${err}`);
        });
        video.value.addEventListener(
        "canplay",
        (ev) => {
            if (!streaming.value) {
                height = video.value.videoHeight / (video.value.videoWidth / width);

                // Firefox currently has a bug where the height can't be read from
                // the video, so we will make assumptions if this happens.

                if (isNaN(height)) {
                    height = width / (4 / 3);
                }

                video.value.setAttribute("width", width);
                video.value.setAttribute("height", height);
                canvas.value.setAttribute("width", width);
                canvas.value.setAttribute("height", height);
                streaming.value = true;
                
            }
        },
        false,
    );
   
}

function stopCameraStream() {
    let tracks = video.value.srcObject.getTracks();

    tracks.forEach(track => {
        track.stop();
    });
}

function takepicture() {
    console.log(canvas.value)
    const context = canvas.value.getContext("2d");
    if (width && height) {
        canvas.value.width = width;
        canvas.value.height = height;
      context.drawImage(video.value, 0, 0, width, height);

      const data = canvas.value.toDataURL("image/png");
      photo.value.setAttribute("src", data);
      photo.value.setAttribute("width", width);
      photo.value.setAttribute("height", height);
      showCamera.value = false
      photoTaken.value = true
      stopCameraStream()
  }
}

</script>