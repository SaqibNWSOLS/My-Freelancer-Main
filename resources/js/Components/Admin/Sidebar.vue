<template>
	   <div class="page-sidebar sidebar-dark unique-sidebar">
          <aside class="sidebar">
            <div class="logo-wrapper">
              <a :href="route('admin-dashboard')">
                <img class="w-full full-sidebar" src="@/assets/logo2.png" alt="logo">
              </a>
              <button class="sidebar-btn">
                <svg class="w-6 h-6">
                  <use href="@/admin_assets/svg/sprite.svg#Category"></use>
                </svg>
              </button>
            </div>
        
            <nav class="sidebar-main">
              <ul class="sidebar-links custom-scroll">
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('admin-dashboard')">
                    <span>
                     <i class="mdi mdi-view-dashboard"></i>
                      <span class="sidebar-name">Dashboards </span>
                    </span>
                   
                  </a>
                
                </li>
           

                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('employees.index')">
                    <span>
                    <span class="mdi mdi-account-group-outline"></span>

                      <span class="sidebar-name">Employer</span>
                    </span>
                  
                  </a>
                  
                </li>

                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('freelancers.index')">
                    <span>
                   <span class="mdi mdi-account-multiple-outline"></span>

                      <span class="sidebar-name">Freelancer</span>
                    </span>
                   
                  </a>
                  
                </li>
                <li class="sidebar-list" :class="{ active:  route().current('verifications.*') }">
                  <a class="sidebar-link sidebar-title" :href="route('verifications.index')">
                    <span>
                     <span class="mdi mdi-check-decagram-outline"></span>

                      <span class="sidebar-name">Verification</span>
                    </span>
                   
                  </a>
                  
                </li>

                <li class="sidebar-list"  :class="{ active:  route().current('general-setting.*') ||  route().current('countries.*') || route().current('states.*') ||  route().current('cities.*') ||  route().current('jobCategory.*') }">
                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <span>
                   <span class="mdi mdi-cog-transfer"></span>


                      <span class="sidebar-name">Settings</span>
                    </span>
                    <span class="mdi mdi-arrow-down-right"></span>

                  </a>
                  <ul class="sidebar-submenu">
                    <li>
                      <a :href="route('general-setting.index')">Gerneral Setting</a>
                    
                    </li>
                     <li>
                      <a :href="route('countries.index')">Countries</a>
                    
                    </li>
                      <li>
                      <a :href="route('states.index')">States</a>
                    
                    </li>
                      <li>
                      <a :href="route('cities.index')">Cities</a>
                    
                    </li>
                      <li>
                      <a :href="route('jobCategory.index')">Job Category</a>
                    
                    </li>
                   
                  </ul>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('logout')">
                    <span>
                     <span class="mdi mdi-logout"></span>

                      <span class="sidebar-name">Logout</span>
                    </span>
                   
                  </a>
                  
                </li>

               


              </ul>
            </nav>
          </aside>
        </div>
    </template>

