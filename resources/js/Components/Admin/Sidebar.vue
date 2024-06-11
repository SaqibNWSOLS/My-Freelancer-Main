<template>
	   <div class="page-sidebar sidebar-dark unique-sidebar">
          <aside class="sidebar">
            <div class="logo-wrapper">
              <a href="admin-dashboard">
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
                  <a class="sidebar-link sidebar-title" href="admin-dashboard">
                    <span>
                      <svg>
                        <g id="Iconly/Two-tone/Home__Home" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                          <g id="Home__Home" transform="translate(2.500000, 2.000000)" stroke-width="1.5">
                            <path d="M6.65721519,18.7714023 L6.65721519,15.70467 C6.65719744,14.9246392 7.29311743,14.2908272 8.08101266,14.2855921 L10.9670886,14.2855921 C11.7587434,14.2855921 12.4005063,14.9209349 12.4005063,15.70467 L12.4005063,15.70467 L12.4005063,18.7809263 C12.4003226,19.4432001 12.9342557,19.984478 13.603038,20 L15.5270886,20 C17.4451246,20 19,18.4606794 19,16.5618312 L19,16.5618312 L19,7.8378351 C18.9897577,7.09082692 18.6354747,6.38934919 18.0379747,5.93303245 L11.4577215,0.685301154 C10.3049347,-0.228433718 8.66620456,-0.228433718 7.51341772,0.685301154 L0.962025316,5.94255646 C0.362258604,6.39702249 0.00738668938,7.09966612 0,7.84735911 L0,16.5618312 C0,18.4606794 1.55487539,20 3.47291139,20 L5.39696203,20 C6.08235439,20 6.63797468,19.4499381 6.63797468,18.7714023 L6.63797468,18.7714023"></path>
                          </g>
                        </g>
                      </svg>
                      <span class="sidebar-name">Dashboards</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                
                </li>
                
                
                <li class="title">Jobs</li>
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

                </li>
               
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

                   <li class="title">Employees</li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" :href="route('employees.index')">
                    <span>
                      <svg>
                        <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                      </svg>
                      <span class="sidebar-name">Employee</span>
                    </span>
                    <svg>
                      <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                    </svg>
                  </a>
                  
                </li>

                   <li class="title">Freelancers</li>
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

