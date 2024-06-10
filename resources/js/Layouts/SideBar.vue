<template>
  <div class="tb-sidebarwrapperholder">
    <aside id="tb-sidebarwrapper" class="tb-sidebarwrapper">
      <div id="tb-btnmenutoggle" class="tb-btnmenutoggle">
        <a href="javascript:void(0);" @click="toggleSidebar"><i class="ti-pin2"></i></a>
      </div>
      <nav id="tb-navdashboard" class="tb-navdashboard mCustomScrollbar">
        <ul class="tb-siderbar-nav">
          <li :class="{ active: isActive('/admin/profile') }">
            <a class="tb-menuitm" href="/admin/profile" data-tippy-content="My profile">
              <i class="icon-user"></i><span class="tb-navdashboard__title">My profile</span>
            </a>
          </li>

          <li :class="{ 'menu-has-children': true, 'active': activeMenu === 'siteManagement' }">
            <a href="javascript:void(0);" class="tb-menuitm" data-tippy-content="Site management" @click="toggleSubMenu('siteManagement')">
              <i class="icon-layout"></i><span class="tb-navdashboard__title">Site management</span>
            </a>
            <ul v-show="activeMenu === 'siteManagement'" class="sidebar-sub-menu">
              <li><a href="site-pages"><i class="icon-corner-down-right"></i><span class="tb-navdashboard__title">Support Page</span></a></li>
              <li><a href="admin/blogs"><i class="icon-corner-down-right"></i><span class="tb-navdashboard__title">Blog Page</span></a></li>
              <li><a href="https://support.myfreelancer.com/admin/pages-category"><i class="icon-corner-down-right"></i><span class="tb-navdashboard__title">Categories</span></a></li>
            </ul>
          </li>

          <li :class="{ active: isActive('/admin/users') }">
            <a href="https://support.myfreelancer.com/admin/users" class="tb-menuitm" data-tippy-content="Manage users">
              <i class="icon-users"></i><span class="tb-navdashboard__title">Manage users</span>
            </a>
          </li>

          <li>
            <form method="POST" action="https://support.myfreelancer.com/logout" @submit.prevent="logout">
              <input type="hidden" name="_token" value="ndmY6pVxUc3RuJWKs2BG5dTrArxmjyBmZ9NsAKGW">
              <a href="https://support.myfreelancer.com/logout" class="tb-menuitm" data-tippy-content="Logout" @click="logout">
                <i class="ti-power-off"></i><span class="tb-navdashboard__title"> Logout</span>
              </a>
            </form>
          </li>
        </ul>
      </nav>
    </aside>
  </div>
</template>

<script>

const dashboard = route('dashboard');
export default {
  data() {
    return {
      activeMenu: '',
    };
  },
  methods: {
    toggleSidebar() {
      // Add your toggle sidebar logic here
    },
    toggleSubMenu(menu) {
      this.activeMenu = this.activeMenu === menu ? '' : menu;
    },
    isActive(path) {
      return window.location.pathname.includes(path);
    },
    logout() {
      document.querySelector('form').submit();
    },
  },
};
</script>


