  <template>
  <div class="bg-white customizer-sidebar dark:bg-sidebar-dark2 dark:border-border-dark">
        <div class="flex rtl:flex items-center text-title bg-primary justify-between  p-[15px] shadow-md">
          <span class="text-base font-semibold text-white">Customizer</span>
          <button class="customizer-close">
            <i class="w-4 h-4 stroke-white" data-feather="x"></i>
          </button>
        </div>
        <div class="py-[4px] dark:bg-mode-200">
          <div class="px-[15px] py-7  h-[calc(100vh_-_139px)] overflow-auto ">
            <ul class="flex flex-col gap-7 mode-event">
              <li>
                <div>
                  <h5 class="leading-none text-dark text-sm font-semibold dark:text-white">Template Mode</h5>
                  <span class="leading-none text-content text-xs font-medium">Choose template mode dark & light</span>
                </div>
                <div class="mt-2">
                  <ul class="flex items-center gap-3 flex-wrap">
                    <li class="relative">
                      <input class="absolute invisible opacity-0 peer" checked id="light-checked" type="radio" name="mode">
                      <i class="stroke-primary z-[10] transition-all scale-0 opacity-0 absolute peer-checked:opacity-100 peer-checked:scale-100 top-2 right-2 w-4 h-4" data-feather="check-circle"></i>
                      <label class="cursor-pointer block overflow-hidden border shadow-md mode-theme-light border-light dark:border-border-dark rounded-5" for="light-checked">
                        <img class="w-[90px] object-cover" src="@/admin_assets/images/customizer/light.png" alt="light">
                      </label>
                    </li>
                    <li class="relative">
                      <input class="absolute invisible opacity-0 peer" id="dark-checked" type="radio" name="mode">
                      <i class="stroke-white z-[10] transition-all scale-0 opacity-0 absolute peer-checked:opacity-100 peer-checked:scale-100 top-2 right-2 w-4 h-4" data-feather="check-circle"></i>
                      <label class="cursor-pointer block overflow-hidden border shadow-md mode-theme-dark border-light dark:border-border-dark rounded-5" for="dark-checked">
                        <img class="w-[90px] object-cover" src="@/admin_assets/images/customizer/dark.png" alt="dark">
                      </label>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="leading-none text-dark text-sm font-semibold dark:text-white">Layout Type</h5>
                  <span class="leading-none text-content text-xs">Choose layout Ltr & Rtl</span>
                </div>
                <div class="mt-2">
                  <ul class="flex items-center gap-3">
                    <li class="relative">
                      <input class="absolute invisible opacity-0 peer" checked id="ltr-checked" type="radio" name="dir">
                      <i class="stroke-primary z-[10] transition-all scale-0 opacity-0 absolute peer-checked:opacity-100 peer-checked:scale-100 top-2 right-2 w-4 h-4" data-feather="check-circle"></i>
                      <label class="cursor-pointer block overflow-hidden border shadow-md layout-ltr border-light dark:border-border-dark rounded-5" for="ltr-checked">
                        <img class="w-[90px] object-cover" src="@/admin_assets/images/customizer/ltr.png" alt="ltr">
                      </label>
                    </li>
                    <li class="relative">
                      <input class="absolute invisible opacity-0 peer" id="rtl-checked" type="radio" name="dir">
                      <i class="stroke-white z-[10] transition-all scale-0 opacity-0 absolute peer-checked:opacity-100 peer-checked:scale-100 top-2 right-2 w-4 h-4" data-feather="check-circle"></i>
                      <label class="cursor-pointer block overflow-hidden border shadow-md layout-rtl border-light dark:border-border-dark rounded-5" for="rtl-checked">
                        <img class="w-[90px] object-cover" src="@/admin_assets/images/customizer/rtl.png" alt="rtl">
                      </label>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="flex items-center justify-between">
                  <span class="dark:text-white text-sm font-semibold text-title">Monochrome Mode </span>
                  <label class="cursor-pointer inline-flex relative items-center">
                    <input class="sr-only peer monochrome toggle toggle-primary" name="monochrome" type="checkbox" id="monochrome">
                    <span class="w-7 h-4 bg-content rounded-full peer peer-focus:outline-none peer-checked:after:translate-x-full peer-checked:after:content-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-light after:border after:rounded-full after:h-3 after:w-3 after:transition-all peer-checked:bg-primary"></span>
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="flex items-center gap-2 p-[15px] border-t border-light dark:bg-primaryLight dark:border-t dark:border-border-dark ">
          <button class="btn btn-ghost flex-1 reset-customizer dark:!bg-sidebar-dark dark:text-white">Reset </button>
          <button class="btn btn-primary text-white flex-1">Buy Now</button>
        </div>
      </div>
    </template>

    