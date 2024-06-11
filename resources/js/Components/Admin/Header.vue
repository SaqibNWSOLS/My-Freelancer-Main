<template>
  <header class="fixed top-0 z-[6] xl:w-full 4xl:w-[calc(100%_-_14.375rem)] w-[calc(100%_-_15.8125rem)] ml-auto">
          <div class="page-header transition-all bg-white shadow-header dark:bg-sidebar-dark">
            <div class="py-[11px] flex items-center xl:relative justify-between px-body-space gap-4">
              <div class="left-header flex items-center gap-2">
                <button class="sidebar-toggle hide">
                  <svg class="w-6 4xl:w-5 h-6 4xl:h-5 stroke-title">
                    <use href="@/admin_assets/svg/sprite.svg#Category"></use>
                  </svg>
                </button>
                <h1 class="flex items-center gap-1 text-xl font-extrabold leading-none sm:hidden dark:text-white 4xl:text-lg">My Freelancer</h1>
              </div>
              <div class="right-header flex items-center flex-1 sm:gap-[calc(7px_+_(14_-_7)_*_((100vw_-_320px)_/_(1920_-_320)))] gap-[calc(16px_+_(20_-_16)_*_((100vw_-_320px)_/_(1920_-_320)))]  justify-end">
                <div class="search-box-wrapper transition-all duration-300 max-w-[40%] lg:scale-0 lg:opacity-0 lg:invisible lg:px-body-space lg:max-w-full w-full lg:z-[5] flex-1 lg:absolute lg:left-0">
                 
                </div>
               
                <ul class="profile-box flex items-center">
                  <li class="cursor-pointer pr-[11px] rtl:pr-unset rtl:!pl-[11px] rtl:last:pl-0 rtl:last:pr-unset last:pr-0 sm:pr-0 sm:border-none last:border-none rtl:border-l rtl:border-r-0 border-r border-border-2 dark:border-border-dark  dark:border-r flex items-center">
                  
                  </li>
                  <li class="cursor-pointer flex- pl-[11px] language-border rtl:first:pr-0 first:pl-0 flex items-center">
                    <!-- Profile Start -->
                    <div class="dropdown">
                      <div class="flex items-center gap-[10px] cursor-pointer">
                        <div>
                          <img class="w-[calc(35px_+_(40_-_35)_*_((100vw_-_320px)_/_(1920_-_320)))] h-[calc(35px_+_(40_-_35)_*_((100vw_-_320px)_/_(1920_-_320)))] rounded-full" src="@/admin_assets/images/avatar/1.jpg" alt="avatar">
                        </div>
                        <div class="md:hidden">
                          <h4 class="text-xs font-bold dark:text-white"> Helen Walter</h4>
                          <span class="flex items-center gap-1 font-semibold text-3xs text-content">Admin <svg class="w-[6px] h-[4px]  dark:stroke-white">
                              <use href="@/admin_assets/svg/sprite.svg#Fill-Arrow"></use>
                            </svg>
                          </span>
                        </div>
                      </div>
                      <div class="dropdown-menu !min-w-[170px]">
                        <ul class="flex flex-col gap-3">
                          <li>
                            <a class="flex items-center gap-2 text-title" href="user-profile.html">
                              <svg class="w-[18px] h-[18px] stroke-title dark:stroke-white">
                                <use href="@/admin_assets/svg/sprite.svg#2-User"></use>
                              </svg>Profile Setting </a>
                          </li>
                          <li>
                            <a class="flex items-center gap-2 text-title" href="chat-app.html">
                              <svg class="w-[18px] h-[18px] stroke-title dark:stroke-white">
                                <use href="@/admin_assets/svg/sprite.svg#More-Square"></use>
                              </svg>Message </a>
                          </li>
                          <li>
                            <a class="flex items-center gap-2 text-title" href="todo.html">
                              <svg class="w-[18px] h-[18px] stroke-title dark:stroke-white">
                                <use href="@/admin_assets/svg/sprite.svg#Edit-Square"></use>
                              </svg>Taskboard </a>
                          </li>
                          <li>
                            <a class="flex items-center gap-2 text-title" href="knowledgebase.html">
                              <svg class="w-[18px] h-[18px] stroke-title dark:stroke-white">
                                <use href="@/admin_assets/svg/sprite.svg#Shield-Done"></use>
                              </svg>Help </a>
                          </li>
                          <li>
                            <a class="flex items-center gap-2 text-title" href="javascript:void(0)">
                              <svg class="w-[18px] h-[18px] stroke-title dark:stroke-white">
                                <use href="@/admin_assets/svg/sprite.svg#Login"></use>
                              </svg>Logout </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Profile End -->
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sub Header Start -->
            <div class="py-[14px] border-t border-border-light px-body-space dark:border-border-dark md:hidden">
              <div class="relative flex items-center justify-between lg:justify-start">
                <ul class="flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((100vw_-_320px)_/_(1920_-_320)))]">
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]">
                    <span class="text-xs font-bold transition-all text-primary">General</span>
                    <div class="dropdown-menu !min-w-[320px] !left-0 !right-unset !p-0  rtl:!left-unset rtl:!right-0">
                      <!-- General menu-->
                      <div class="grid grid-cols-12 gap-2">
                        <div class="col-span-12">
                          <ul class="gap-[10px] p-[15px]">
                            <li class="p-2 transition-all duration-300 rounded-5 hover:bg-gray-light dark:hover:bg-sidebar-dark2">
                              <a class="flex items-center gap-2" href="index.html">
                                <div class="p-2 rounded-5  border border-primary">
                                  <svg class="w-5 h-5 stroke-primary">
                                    <g id="Iconly/Two-tone/Home__Home" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                      <g id="Home__Home" transform="translate(2.500000, 2.000000)" stroke-width="1.5">
                                        <path d="M6.65721519,18.7714023 L6.65721519,15.70467 C6.65719744,14.9246392 7.29311743,14.2908272 8.08101266,14.2855921 L10.9670886,14.2855921 C11.7587434,14.2855921 12.4005063,14.9209349 12.4005063,15.70467 L12.4005063,15.70467 L12.4005063,18.7809263 C12.4003226,19.4432001 12.9342557,19.984478 13.603038,20 L15.5270886,20 C17.4451246,20 19,18.4606794 19,16.5618312 L19,16.5618312 L19,7.8378351 C18.9897577,7.09082692 18.6354747,6.38934919 18.0379747,5.93303245 L11.4577215,0.685301154 C10.3049347,-0.228433718 8.66620456,-0.228433718 7.51341772,0.685301154 L0.962025316,5.94255646 C0.362258604,6.39702249 0.00738668938,7.09966612 0,7.84735911 L0,16.5618312 C0,18.4606794 1.55487539,20 3.47291139,20 L5.39696203,20 C6.08235439,20 6.63797468,19.4499381 6.63797468,18.7714023 L6.63797468,18.7714023"></path>
                                      </g>
                                    </g>
                                  </svg>
                                </div>
                                <div>
                                  <h4 class="text-xs font-semibold capitalize text-title line-clamp-1">Unique Dashboard</h4>
                                  <span class="text-xs font-medium text-content line-clamp-1">Over view of all</span>
                                </div>
                              </a>
                            </li>
                            <li class="p-2 transition-all duration-300 rounded-5 hover:bg-gray-light dark:hover:bg-sidebar-dark2">
                              <a class="flex items-center gap-2" href="ecommerce.html">
                                <div class="p-2 rounded-5  border border-primary">
                                  <svg class="w-5 h-5 stroke-primary">
                                    <use href="@/admin_assets/svg/sprite.svg#Bag"></use>
                                  </svg>
                                </div>
                                <div>
                                  <h4 class="text-xs font-semibold capitalize text-title line-clamp-1">Ecommerce Dashboard</h4>
                                  <span class="text-xs font-medium text-content line-clamp-1">Over view of all</span>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all duration-300 relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 hover:before:w-full before:h-[2px] before:w-0 ">
                    <span class="text-xs font-bold transition-all duration-300 text-content group-hover:text-primary">Components </span>
                    <div class="dropdown-menu !min-w-[220px] !left-0 !right-unset rtl:!left-unset rtl:!right-[4.625rem] ">
                      <!-- Componant menu-->
                      <ul class="flex flex-col gap-4 ">
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center justify-between gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Folder"></use>
                              </svg>
                              <small class="text-xs leading-7">Ui Kits</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu rtl:!left-unset rtl:!right-[24.938rem]">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="alert.html">Alert</a>
                              </li>
                              <li>
                                <a href="avatars.html">Avatars</a>
                              </li>
                              <li>
                                <a href="badge.html">Badge</a>
                              </li>
                              <li>
                                <a href="button.html">Button</a>
                              </li>
                              <li>
                                <a href="collapse.html">Collapse</a>
                              </li>
                              <li>
                                <a href="divider.html">Divider</a>
                              </li>
                              <li>
                                <a href="dropdown.html">Dropdown</a>
                              </li>
                              <li>
                                <a href="modal.html">Modal</a>
                              </li>
                              <li>
                                <a href="progress.html">Progress</a>
                              </li>
                              <li>
                                <a href="tooltip.html">Tooltip</a>
                              </li>
                              <li>
                                <a href="typography.html">Typography</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center justify-between gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Ticket-Star"></use>
                              </svg>
                              <small class="text-xs leading-7">Bonus Ui</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu rtl:!left-unset rtl:!right-[24.938rem]">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="breadcrumb.html">Breadcrumb</a>
                              </li>
                              <li>
                                <a href="carousel.html">Carousel</a>
                              </li>
                              <li>
                                <a href="countdown.html">Countdown</a>
                              </li>
                              <li>
                                <a href="indicator.html">Indicator</a>
                              </li>
                              <li>
                                <a href="mask.html">Mask</a>
                              </li>
                              <li>
                                <a href="pagination.html">Pagination</a>
                              </li>
                              <li>
                                <a href="radial-progress.html">Radial Progress</a>
                              </li>
                              <li>
                                <a href="rating.html">Rating</a>
                              </li>
                              <li>
                                <a href="stack.html">Stack</a>
                              </li>
                              <li>
                                <a href="steps.html">Steps</a>
                              </li>
                              <li>
                                <a href="swap.html">Swap</a>
                              </li>
                              <li>
                                <a href="swiper-slider.html">Swiper Slider</a>
                              </li>
                              <li>
                                <a href="tabs.html">Tabs</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center justify-between gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Danger-Circle"></use>
                              </svg>
                              <small class="text-xs leading-7">Icons</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu rtl:!left-unset rtl:!right-[24.938rem]">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="feather.html">Feather</a>
                              </li>
                              <li>
                                <a href="fontawesome.html">Font Awesome</a>
                              </li>
                              <li>
                                <a href="iconly.html">Iconly</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center justify-between gap-2" href="apex-chart.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Chart"></use>
                              </svg>
                              <small class="text-xs leading-7">Apex Chart</small>
                            </span>
                          </a>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center justify-between gap-2" href="wow-animation.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Scan"></use>
                              </svg>
                              <small class="text-xs leading-7">Wow Animation</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all duration-300 relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 hover:before:w-full before:h-[2px] before:w-0 ">
                    <span class="text-xs font-bold transition-all duration-300 text-content group-hover:text-primary">Applications</span>
                    <div class="dropdown-menu !min-w-[190px] !left-0 !right-unset rtl:!left-unset rtl:!right-0">
                      <!-- App Menu -->
                      <ul class="flex flex-col gap-3">
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Chat"></use>
                              </svg>
                              <small class="text-xs leading-7">Chat</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="chat-app.html">Chat App</a>
                              </li>
                              <li>
                                <a href="video-app.html">Video App</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="calendar.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Calendar"></use>
                              </svg>
                              <small class="text-xs leading-7">Calendar</small>
                            </span>
                          </a>
                        </li>
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Bag"></use>
                              </svg>
                              <small class="text-xs leading-7">Ecommerce</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="add-product.html">Add Product</a>
                              </li>
                              <li>
                                <a href="cart.html">Cart</a>
                              </li>
                              <li>
                                <a href="checkout.html">Checkout</a>
                              </li>
                              <li>
                                <a href="invoice.html">Invoice</a>
                              </li>
                              <li>
                                <a href="invoice-preview.html">Invoice Preview</a>
                              </li>
                              <li>
                                <a href="invoice-create.html">Invoice Create</a>
                              </li>
                              <li>
                                <a href="product.html">Product</a>
                              </li>
                              <li>
                                <a href="shop.html">Shop</a>
                              </li>
                              <li>
                                <a href="wishlist.html">Wishlist</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="email.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Message"></use>
                              </svg>
                              <small class="text-xs leading-7">Email</small>
                            </span>
                          </a>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="kanban-board.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                              </svg>
                              <small class="text-xs leading-7">Kanban Board</small>
                            </span>
                          </a>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="todo.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Time-Circle"></use>
                              </svg>
                              <small class="text-xs leading-7">Todo</small>
                            </span>
                          </a>
                        </li>
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#2-User"></use>
                              </svg>
                              <small class="text-xs leading-7">User</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="user-card.html">User Cards</a>
                              </li>
                              <li>
                                <a href="user-profile.html">User Profile</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all duration-300 relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 hover:before:w-full before:h-[2px] before:w-0 ">
                    <span class="text-xs font-bold transition-all duration-300 text-content group-hover:text-primary">Forms & Table</span>
                    <div class="dropdown-menu !min-w-[190px] !left-0 !right-unset rtl:!left-unset rtl:!right-0">
                      <!-- App Menu -->
                      <ul class="flex flex-col gap-3">
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                              </svg>
                              <small class="text-xs leading-7">Forms</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="checkbox-radio.html">Checkbox &amp; Radio</a>
                              </li>
                              <li>
                                <a href="form-validation.html">Form Validation</a>
                              </li>
                              <li>
                                <a href="input-textarea.html">Input &amp; Textarea</a>
                              </li>
                              <li>
                                <a href="select.html">Select</a>
                              </li>
                              <li>
                                <a href="switch.html">Switch</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="table.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Graph"></use>
                              </svg>
                              <small class="text-xs leading-7">Tables</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all duration-300 relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 hover:before:w-full before:h-[2px] before:w-0 ">
                    <span class="text-xs font-bold transition-all duration-300 text-content group-hover:text-primary">Pages </span>
                    <div class="dropdown-menu !min-w-[190px] !left-0 !right-unset rtl:!left-unset rtl:!right-0">
                      <!-- Page Menu -->
                      <ul class="flex flex-col gap-3">
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Folder"></use>
                              </svg>
                              <small class="text-xs leading-7">Other Pages</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="coming-soon.html">Coming Soon</a>
                              </li>
                              <li>
                                <a href="error.html">Error</a>
                              </li>
                              <li>
                                <a href="forgot-password.html">Forgot Password</a>
                              </li>
                              <li>
                                <a href="login.html">Login</a>
                              </li>
                              <li>
                                <a href="otp.html">Otp</a>
                              </li>
                              <li>
                                <a href="register.html">Register</a>
                              </li>
                              <li>
                                <a href="reset-password.html">Reset Password</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="sample-page.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Paper"></use>
                              </svg>
                              <small class="text-xs leading-7">Sample Page</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown on-hover-show cursor-pointer pb-[6px] transition-all duration-300 relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 hover:before:w-full before:h-[2px] before:w-0 ">
                    <span class="text-xs font-bold transition-all duration-300 text-content group-hover:text-primary">Miscellaneous</span>
                    <div class="dropdown-menu !min-w-[190px] !left-0 !right-unset rtl:!left-unset rtl:!right-0">
                      <!-- Miscellaneous Menu -->
                      <ul class="flex flex-col gap-3">
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Folder"></use>
                              </svg>
                              <small class="leading-7 text-xs">Blog</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="blog-grid.html">Blog Grid</a>
                              </li>
                              <li>
                                <a href="blog-detail.html">Blog Detail</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="w-full ">
                          <a class="flex items-center gap-2" href="knowledgebase.html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Scan"></use>
                              </svg>
                              <small class="leading-7 text-xs">Knowledgebase</small>
                            </span>
                          </a>
                        </li>
                        <li class="w-full dropdown on-hover-show group">
                          <a class="flex items-center gap-2" href="javascript_void(0).html">
                            <span class="flex items-center gap-2">
                              <svg class="w-5 h-5 stroke-title">
                                <use href="@/admin_assets/svg/sprite.svg#Location"></use>
                              </svg>
                              <small class="leading-7 text-xs">Map</small>
                            </span>
                            <svg class="w-4 h-4 stroke-title ml-auto">
                              <use href="@/admin_assets/svg/sprite.svg#Arrow-Right-2"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-sub-menu">
                            <ul class="flex flex-col gap-2">
                              <li>
                                <a href="maps-js.html">Maps Js</a>
                              </li>
                              <li>
                                <a href="data-map.html">Data Map</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <div class="flex items-center gap-[14px] ">
                  <!-- Breadcrumbs Start -->
                  <div class="breadcrumb undefined">
                    <nav>
                      <ol class="breadcrumb-list">
                        <li class="breadcrumb-items">
                          <a href="index.html">
                            <svg class="w-5 h-5">
                              <g id="Iconly/Two-tone/Home__Home" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="Home__Home" transform="translate(2.500000, 2.000000)" stroke-width="1.5">
                                  <path d="M6.65721519,18.7714023 L6.65721519,15.70467 C6.65719744,14.9246392 7.29311743,14.2908272 8.08101266,14.2855921 L10.9670886,14.2855921 C11.7587434,14.2855921 12.4005063,14.9209349 12.4005063,15.70467 L12.4005063,15.70467 L12.4005063,18.7809263 C12.4003226,19.4432001 12.9342557,19.984478 13.603038,20 L15.5270886,20 C17.4451246,20 19,18.4606794 19,16.5618312 L19,16.5618312 L19,7.8378351 C18.9897577,7.09082692 18.6354747,6.38934919 18.0379747,5.93303245 L11.4577215,0.685301154 C10.3049347,-0.228433718 8.66620456,-0.228433718 7.51341772,0.685301154 L0.962025316,5.94255646 C0.362258604,6.39702249 0.00738668938,7.09966612 0,7.84735911 L0,16.5618312 C0,18.4606794 1.55487539,20 3.47291139,20 L5.39696203,20 C6.08235439,20 6.63797468,19.4499381 6.63797468,18.7714023 L6.63797468,18.7714023"></path>
                                </g>
                              </g>
                            </svg>
                          </a>
                        </li>
                        <li class="px-2">
                          <span>/</span>
                        </li>
                        <li class="breadcrumb-items capitalize">dashboard</li>
                        <li class="px-2">
                          <span>/</span>
                        </li>
                        <li class="breadcrumb-items capitalize active">unique</li>
                      </ol>
                    </nav>
                  </div>
                  <!-- Breadcrumbs End -->
                  <div class="custom-select select-style-1 2xl:hidden dark:text-title">
                    <select class="dark:text-title">
                      <option selected value="">Last 7 Days </option>
                      <option value="">Last 2 Weeks </option>
                      <option value="">Last 1 Month </option>
                      <option value="">Last 3 Month </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- Sub Header End -->
          </div>
        </header>
      </template>