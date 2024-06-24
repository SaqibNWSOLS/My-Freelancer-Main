<template>
<div value="id-verification">
    <div v-if="showVerificationSection === 'none'" class="w-full border">
        <div class="border-b bg-card-header ">
            <h2 class="text-xl p-4">Upload Documents</h2>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap gap-4 mt-6 p-4">
            <div class="border border-blue-600 pt-4 w-56 grid text-center space-y-2"
                :class="VerificationStatus.contactInfo === 0 ? 'border-gray-600' : ''">
                <div class="text-center justify-center flex" style="margin-top:-40px"> 
                    <svg v-if="props.verfication?.accountType" width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="14" r="7" fill="green" fill-opacity="0.24"/>
                    <path d="M6 13L10 16L17 7" stroke="#222222" stroke-width="1.2"/>
                </svg>

                <h2  v-if="!props.verfication?.accountType"><b style="color:red; border:2px solid red; padding:0px 2px">Pending</b></h2>
            </div>
                <div class="text-center justify-center flex  mt-6"><img class="inline" width="24" src="@/assets/new/address-card.svg" /></div>
                <h3 class="font-bold space-x-2 text-sm">
                
                <span>Contact Information</span>
                </h3>
                <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                    <li>Phone number</li>
                    <li>Legal name</li>
                    <li>Residential Address</li>
                </ul>
                <button v-if="!props.verfication?.accountType" @click="showVerificationSection = 'contact-information';tab= 'id-contact-information'"
                :class="VerificationStatus.contactInfo === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="border-t self-end border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Start
                </button>
                 <button v-if="props.verfication?.accountType" @click="showVerificationSection = 'contact-information';tab= 'id-contact-information'"
                :class="VerificationStatus.contactInfo === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="border-t self-end border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Edit
                </button>
            </div>
            <div class="border border-blue-600 grid pt-4 w-56 text-center space-y-2"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-600' : ''">
                <div class="text-center justify-center flex" style="margin-top:-40px">
                  <svg v-if="props.verfication?.current_photo" width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="14" r="7" fill="green" fill-opacity="0.24"/>
                    <path d="M6 13L10 16L17 7" stroke="#222222" stroke-width="1.2"/>
                </svg>

                <h2  v-if="!props.verfication?.current_photo"><b style="color:red; border:2px solid red; padding:0px 2px">Pending</b></h2>
            </div>
                <div class="text-center justify-center flex mt-6">  <img class="inline" width="24" src="@/assets/new/address-card.svg" /></div>
                <h3 class="font-bold space-x-2 text-sm">
                
                <span>Current Photo</span>
                </h3>
                <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                    <li>Your photo</li>
                    <li>Taken within 60 days</li>
                    <li>Show your entire face</li>
                </ul>
                <button  v-if="!props.verfication?.current_photo" @click="showVerificationSection = 'contact-information';tab= 'id-current-photo'; selectedTab='id-current-photo'"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Start
                </button>
                <button  v-if="props.verfication?.current_photo" @click="showVerificationSection = 'contact-information';tab= 'id-current-photo';selectedTab='id-current-photo'"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Edit
                </button>
            </div>
            <div class="border border-blue-600 grid pt-4 w-56 text-center space-y-2"
                :class="VerificationStatus.govId === 0 ? 'border-gray-600' : ''">
                <div class="text-center justify-center flex" style="margin-top:-38px">
                     <svg v-if="props.verfication?.gov_id_type" width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="14" r="7" fill="green" fill-opacity="0.24"/>
                    <path d="M6 13L10 16L17 7" stroke="#222222" stroke-width="1.2"/>
                </svg>

                <h2  v-if="!props.verfication?.gov_id_type"><b style="color:red; border:2px solid red; padding:0px 2px">Pending</b></h2>
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
                               <button  v-if="!props.verfication?.gov_id_type" @click="showVerificationSection = 'contact-information';tab= 'id-government-id'; selectedTab='id-government-id'"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Start
                </button>
                <button  v-if="props.verfication?.gov_id_type" @click="showVerificationSection = 'contact-information';tab= 'id-government-id';selectedTab='id-government-id'"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Edit
                </button>
            </div>
            <div class="border border-blue-600 pt-4  w-56 text-center grid space-y-2"
                :class="VerificationStatus.proofOfAddress === 0 ? 'border-gray-600' : ''">
                <div class="text-center justify-center flex" style="margin-top:-38px">
                     <svg v-if="props.verfication?.adreess_proof_type" width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="14" r="7" fill="green" fill-opacity="0.24"/>
                    <path d="M6 13L10 16L17 7" stroke="#222222" stroke-width="1.2"/>
                </svg>

                <h2  v-if="!props.verfication?.adreess_proof_type"><b style="color:red; border:2px solid red; padding:0px 2px">Pending</b></h2>
                </div>
                <h3 class="font-bold space-x-2 text-sm  mt-6">
                <img class="inline" width="24" src="@/assets/new/address-card.svg" />
                <span>Proof of address</span>
                </h3>
                <ul class="text-left list-disc list-outside px-3 pt-2 pb-5 ml-5">
                    <li>Dated within 60 days</li>
                    <li>Confirm your name & address on account</li>
                </ul>
<button  v-if="!props.verfication?.adreess_proof_type" @click="showVerificationSection = 'contact-information';tab= 'id-address-proof'; selectedTab='id-address-proof'"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Start
                </button>
                <button  v-if="props.verfication?.adreess_proof_type" @click="showVerificationSection = 'contact-information';tab= 'id-address-proof';selectedTab='id-address-proof'"
                :class="VerificationStatus.currentPhoto === 0 ? 'border-gray-400 text-gray-400 pointer-events-none' : ''"
                class="self-end border-t border-solid border-blue-600 w-full py-2 font-semibold text-blue-600 hover:bg-blue-50">
                Edit
                </button>
            </div>
        </div>
    </div>
    <div v-if="showVerificationSection === 'contact-information'" class="w-full  border">
        <ul   class=" border-b  p-5 bg-card-header -mb-px text-sm font-medium flex" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <li class="side-item"
                :key="tab.value"
                @click="selectTab('id-contact-information')"
                :class="['tab-item cursor-pointer py-2 px-4', { 'active-tab text-blue-500 border-b-2 border-blue-500': selectedTab ==='id-contact-information' }]"
                ><span class="pr-5">Contact
                Information</span></li>
                <li class="side-item"
                    :key="tab.value"
                    @click="selectTab('id-current-photo')"
                    :class="['tab-item cursor-pointer py-2 px-4', { 'active-tab text-blue-500 border-b-2 border-blue-500': selectedTab ==='id-current-photo' }]"
                    ><span class="pr-5">Currrent
                    photo</span></li>
                    <li class="side-item"
                        :key="tab.value"
                        @click="selectTab('id-government-id')"
                        :class="['tab-item cursor-pointer py-2 px-4', { 'active-tab text-blue-500 border-b-2 border-blue-500': selectedTab ==='id-government-id' }]"
                        ><span class="pr-5">Government Issued
                        ID</span></li>
                        <li class="side-item"
                            :key="tab.value"
                            @click="selectTab('id-address-proof')"
                            :class="['tab-item cursor-pointer py-2 px-4', { 'active-tab text-blue-500 border-b-2 border-blue-500': selectedTab ==='id-address-proof' }]"
                            ><span class="pr-5">Proof of Address
                            </span></li>
                        </ul>
                        <div>
                            <div class="tabs-content mt-4 p-5">
                                <div key="id-contact-information" v-show="selectedTab === 'id-contact-information'">
                                    <div class="space-y-4">
                                        <div class="space-y-1">
                                            <h2 class="font-semibold text-lg">Personal Details</h2>
                                            <p>Confirm the name and address for your account</p>
                                        </div>
                                        <form novalidate @submit.prevent="idVerfication" class="flex-wrap">
                                        <div class="space-y-1">
                                            <h2 class="font-semibold text-lg">Select your account type</h2>
                                            <div class="flex gap-x-3">
                                                <label class="flex items-center gap-x-1" for="account-type-individual">
                                                    <input v-model="form.accountType" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" type="radio" id="account-type-individual"
                                                    name="account-type" value="individual" />
                                                    <sapn>Individual</sapn>
                                                </label>
                                                <label class="flex items-center gap-x-1" for="account-type-Company">
                                                    <input v-model="form.accountType" type="radio" id="account-type-Company"
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
                                                    <input type="radio" v-model="form.accountInfo"value="new" id="account-info-new" name="account-info" />
                                                    <sapn>Enter new account info</sapn>
                                                </label>
                                                <label class="flex items-center gap-x-1" for="account-info-existing">
                                                    <input type="radio"  v-model="form.accountInfo" value="existing" id="account-info-existing" name="account-info" />
                                                    <sapn>Use existing account info</sapn>
                                                </label>
                                                 <br><p class="text-danger">{{ form.errors.accountInfo }}</p>
                                            </div>
                                            <div class="flex space-x-2">
                                                <div class="space-y-1">
                                                    <label class="block">First Name</label>
                                                    <input type="text" v-model="form.first_name" placeholder="First name" class="border p-2 rounded-sm" />
                                                    <p class="text-danger">{{ form.errors.first_name }}</p>
                                                </div>
                                                <div class="space-y-1">
                                                    <label class="block">Last Name</label>
                                                    <input type="text" v-model="form.last_name" placeholder="Last name" class="border p-2 rounded-sm" />
                                                     <p class="text-danger">{{ form.errors.last_name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <h2 class="font-semibold text-lg">Address</h2>
                                            <div class="space-y-1">
                                                <label class="block ">Search Address</label>
                                                <input type="text" v-model="form.address" placeholder="Enter a location"
                                                class="w-[420px] focus:outline-none border-b border-solid p-2 rounded-sm focus:border-solid focus:border-b focus:border-black" />
                                                <p class="text-danger">{{ form.errors.address }}</p>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="block">Country</label>
                                                <select class="border p-2 w-[420px] " @change="fetchStates" v-model="form.countries_id" name="COUNTRIES"
                                                    id="COUNTRIES">
                                                    <option v-for="(country, index) in countries" :value="country.id" :key="index">
                                                        {{ country.name }}
                                                    </option>
                                                </select>
                                                <p class="text-danger">{{ form.errors.countries_id }}</p>
                                            </div>
                                            <div class="space-y-1">
                                                <label class="block">Street</label>
                                                <input type="text"  v-model="form.street" placeholder="Street address"
                                                class="w-[420px] border p-2 rounded-sm" />
                                                 <p class="text-danger">{{ form.errors.street }}</p>
                                            </div>
                                            <div class="space-y-1">
                                                <label class="block">City / State / ZIP</label>
                                                <input type="text"  v-model="form.city_state_zip" placeholder="" class="w-[420px] border p-2 rounded-sm" />
                                                 <p class="text-danger">{{ form.errors.city_state_zip }}</p>
                                            </div>
                                            <div class="space-x-2">
                                                <select class="inline-block border p-2 w-[270px] " name="STATES">
                                                   <option v-for="(state, index) in states" :value="state.id" :key="index">
                                                        {{ state.name }}
                                                    </option>
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
                                        </form>
                                    </div>
                                </div>
                                <div key="id-current-photo" v-show="selectedTab === 'id-current-photo'">
                                    <div class="flex">
                                        <div class="space-y-4">
                                            <div>
                                                <h3 class="font-semibold">Help us identify you better.</h3>
                                                <p>Upload your photo that meets the requirements and get closer to a verified
                                                    profile
                                                </p>
                                            </div>
                                            <div class="flex gap-6 justify-between" :class="{ 'hidden': !currentPhoto }">
                                  <img :src="currentPhoto">
                                            </div>
                                            <div class="flex gap-6 justify-between" :class="{ 'hidden': currentPhoto }">
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
                                </div>
                                
                                
                                <div key="id-government-id" v-show="selectedTab === 'id-government-id'">
                                    <div class="space-y-4">
                                        <div class="space-y-2">
                                            <h2 class="font-semibold">Government-Issued ID</h2>
                                            <p>Place your valid ID on a flat surface and take picture of it, Make sure that all 4
                                                edges of the ID ca be seen and put it on thing in the frame, and taht the photo is
                                            weel lit.</p>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="bg-gray-100 border border-gray-300 w-full ">
                                                <img class="ml-auto mr-auto h-[140px] object-fill" :src="form.govIdFront" :class="{'hidden': govIdFront === null}">
                                                <div
                                                    :class="{'hidden': form.govIdFront !== null}"
                                                    class="flex p-3 flex-col gap-2 items-center justify-center text-center h-[240px]">
                                                    <h4 class="block font-semibold">Front of ID</h4>
                                                    <p>Up to 5 MB<br />PDF,PNG, JPEG, JPG, GIF, BMP</p>
                                                    <img width="38" src="@/assets/new/file-solid.svg" />
                                                </div>
                                                <div
                                                    class="border-t p-3 border-solid border-gray-500">
                                                    <label for="file-front" class="cursor-pointer flex w-fit ml-auto gap-1 mr-auto bg-transparent border border-gray-500 hover:bg-stone-200 p-2">
                                                        <input
                                                        accept=".png, .jpg, .jpeg" 
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
                                                <img class="ml-auto mr-auto h-[140px] object-fill" :src="form.govIdBack" :class="{'hidden': form.govIdBack === null}">
                                                <div
                                                    :class="{'hidden': form.govIdBack !== null}"
                                                    class="flex p-3 flex-col gap-2 items-center justify-center text-center h-[240px]">
                                                    <h4 class="block font-semibold">Back of ID</h4>
                                                    <p>Up to 5 MB<br />PDF,PNG, JPEG, JPG, GIF, BMP</p>
                                                    <img width="38" src="@/assets/new/file-solid.svg" />
                                                </div>
                                                <div class="border-t p-3 border-solid border-gray-500">
                                                    <label for="file-back" class="cursor-pointer flex w-fit ml-auto gap-1 mr-auto bg-transparent border border-gray-500 hover:bg-stone-200 p-2">
                                                        <input
                                                        accept=".png, .jpg, .jpeg" 
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
                                            <select class="border p-2 w-[200px] " v-model="form.govIdType" name="gov-id">
                                                <option>Driver's License</option>
                                                <option>Card ID</option>
                                                <option>Passport</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div key="id-address-proof" v-show="selectedTab === 'id-address-proof'">
                                    <div class="space-y-4">
                                        <div class="space-y-2">
                                            <h2 class="font-semibold">Proof of Address</h2>
                                            <p>You're almost done! Share a document confirming the address on your account. This document needs to show address, name, and date (withing the last 60 days).<br/>Here are some examples: Utility Bill, lease Agreement, Insurance Card, or your Voter Registration card.</p>
                                            
                                        </div>
                                        <div class="bg-gray-100 border border-gray-400 w-full ">
                                            <div class="bg-gray-100 border border-gray-300 w-full ">
                                                <img class="ml-auto mr-auto h-[140px] object-fill" :src="form.addressProof" :class="{'hidden': form.addressProof === null}">
                                                <div
                                                    :class="{'hidden': form.addressProof !== null}"
                                                    class="flex p-3 flex-col gap-2 items-center justify-center text-center h-[240px]">
                                                    <h4 class="block font-semibold">Proof of Address</h4>
                                                    <p>Up to 5 MB<br />PDF,PNG, JPEG, JPG, GIF, BMP</p>
                                                    <img width="38" src="@/assets/new/file-solid.svg" />
                                                </div>
                                                <div class="border-t p-3 border-solid border-gray-500">
                                                    <label for="address-proof" class="cursor-pointer flex w-fit ml-auto gap-1 mr-auto bg-transparent border border-gray-500 hover:bg-stone-200 p-2">
                                                        <input
                                                         accept=".png, .jpg, .jpeg" 
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
                                            <select class="border p-2 w-[200px] " v-model="form.addressProofType" name="gov-id">
                                                <option>Utility Bill</option>
                                                <option>lease Agreement</option>
                                                <option>Insurance Card</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <style scoped>
            .p-tabview-nav {
            padding: 13px;
            }
            </style>
            <script setup>
            import {
    ref,
    onMounted
} from 'vue'
import {
    COUNTRIES
} from "@/@data";
import {
    Head,
    Link,
    useForm
} from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import { router } from '@inertiajs/vue3'

const  baseUrl=window.Laravel.baseUrl

const {
    handleSubmit,
    isFieldValid,
    setErrors,
    setFieldValue
} = useForm({

});

const props = defineProps({
    countries: {
        type: Array,
    },
     verfication: {
        type: Object,
    }
});
const form = useForm({
    tab: ref(null),
    accountType: ref(props.verfication?.accountType),
    accountInfo: ref(props.verfication?.accountInfo),
    first_name: ref(props.verfication?.first_name),
    last_name: ref(props.verfication?.last_name),
    address: ref(props.verfication?.address),
    countries_id: ref(props.verfication?.countries_id),
    street: ref(props.verfication?.street),
    city_state_zip: ref(props.verfication?.city_state_zip),
    govIdFront: props.verfication?.gov_id_front?ref(baseUrl+props.verfication?.gov_id_front):ref(null),
    govIdBack:props.verfication?.gov_id_back?ref(baseUrl+props.verfication?.gov_id_back):ref(null),
     govIdType: ref('Card ID'),
    addressProof:props.verfication?.address_proof?ref(baseUrl+props.verfication?.address_proof):ref(null),
    addressProofType: ref('Utility Bill'),
    time_zone: ref(null),
});

const states = ref([]);

const fetchStates = async () => {
  try {
    const response = await axios.get(route('state-list',form.countries_id));
    states.value = response.data;
  } catch (error) {
    console.error('Error fetching categories:', error);
  }
};

onMounted(fetchStates);


 const errors = ref({});

    const validateForm = () => {
      errors.value = {}; // Reset errors
      let isValid = true;

      if (!form.first_name) {
        form.errors.first_name = 'First name is required';
        isValid = false;
      }
      if (!form.accountInfo) {
        form.errors.accountInfo = 'Account info is required';
        isValid = false;
      }

      if (!form.last_name) {
        form.errors.last_name = 'Last name is required';
        isValid = false;
      }
      if (!form.address) {
        form.errors.address = 'Address is required';
        isValid = false;
      }
      if (!form.countries_id) {
        form.errors.countries_id = 'Country name is required';
        isValid = false;
      }
      if (!form.street) {
        form.errors.street = 'Street name is required';
        isValid = false;
      }
       if (!form.city_state_zip) {
        form.errors.city_state_zip = 'City / State / ZIP is required';
        isValid = false;
      }

      // Add more validation rules as needed

      return isValid;
    };

const idVerfication = () => {
    if (validateForm()) {
    form.post(route('verfication'), {
        onFinish: () => selectTab('id-current-photo'),
    });
}
};

function onFileChange(e) {
    var files = e.target.files || e.dataTransfer.files;
    if (!files.length)
        return;
    createImage(files[0]);
}
const selectedTab = ref('id-contact-information'); // Make selectedTab reactive
const selectTab = (index) => {
    selectedTab.value = index;
};

function createImage(file) {
    var image = new Image();
    var reader = new FileReader();
    reader.onload = (e) => {
        image = e.target.result;
        form.govIdFront = image
    };
    reader.readAsDataURL(file);
     router.post('govt-id', {
        govIdFront:  file,
        govIdType: form.govIdType,
      },{ preserveState: true, preserveScroll: true })
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
        form.addressProof = image
    };
    reader.readAsDataURL(file);
     router.post('govt-id', {
        addressProof:  file,
        addressProofType: form.addressProofType,
      },{ preserveState: true, preserveScroll: true })
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
        form.govIdBack = image
    };
    reader.readAsDataURL(file);

     router.post('govt-id', {
        govIdBack:  file,
        govIdType: form.govIdType
      },{ preserveState: true, preserveScroll: true })
}
const VerificationStatus = ref({
    contactInfo: 1,
    govId: 0,
    proofOfAddress: 0,
})
const showVerificationSection = ref('none')
onMounted(() => {
    console.log(form.govIdFront)
})

const width = 450 // We will scale the photo width to this
let height = 0 // This will be computed based on the input stream
const streaming = ref(false)
const video = ref(null)
const currentPhoto=props.verfication?.current_photo?ref(baseUrl+props.verfication?.current_photo):ref(null)
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
        .getUserMedia({
            video: true,
            audio: false
        })
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

         router.post('current-photo', {
        image: data,
      });
    }
}
            </script>