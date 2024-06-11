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
                <li class="title">Dashboard</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('admin-dashboard')">
                    <span>
                      <svg>
                         <use href="@/admin_assets/svg/sprite.svg#Home"></use>
                      </svg>
                      <span class="sidebar-name">Dashboards</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                
                </li>
                
                
             <!--    <li class="title">Jobs</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Folder"></use>
                      </svg>
                      <span class="sidebar-name">Jobs</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                 
                </li>
               
                <li class="title">Bill Boards</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Chat"></use>
                      </svg>
                      <span class="sidebar-name">Bill Board</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>

                </li> -->
               
                <li class="title">Settings</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Country</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  <ul class="sidebar-submenu">
                    <li>
                      <a :href="route('countries.index')">List</a>
                    
                    </li>
                    <li>
                      <a :href="route('countries.create')">Create</a>
                    </li>
                  </ul>
                </li>

                   <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="javascript:void(1)">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">State</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  <ul class="sidebar-submenu">
                    <li>
                      <a :href="route('states.index')">List</a>
                    
                    </li>
                    <li>
                      <a :href="route('states.create')">Create</a>
                    </li>
                  </ul>
                </li>

                 <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="javascript:void(2)">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">City</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  <ul class="sidebar-submenu">
                    <li>
                      <a :href="route('cities.index')">List</a>
                    
                    </li>
                    <li>
                      <a :href="route('cities.create')">Create</a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="javascript:void(3)">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Job Category</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  <ul class="sidebar-submenu">
                    <li>
                      <a :href="route('jobCategory.index')">List</a>
                    
                    </li>
                    <li>
                      <a :href="route('jobCategory.create')">Create</a>
                    </li>
                  </ul>
                </li>

                   <li class="title">Users</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('employees.index')">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Employer</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  
                </li>

                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('freelancers.index')">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Freelancer</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  
                </li>
                <li class="title">Verifications</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('verifications.index')">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Verification</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  
                </li>
<!-- 
                  <li class="title">Job Category</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('jobCategory.index')">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Job Category</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  
                </li>
 -->
               


              </ul>
            </nav>
          </aside>
        </div>
    </template>

