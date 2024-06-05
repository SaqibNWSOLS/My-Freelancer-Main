<template>
<AuthenticatedLayout>
  <div class="tb-subwrapper">
    <div class="container-fluid">
      <main class="tb-main tb-mainbg">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="rcl-container">
              <div class="css-1gykza8 rcl-antd-app">
                <div id="rcl-1" class="aiot-tree aiot-theme-wordpress" style="min-width: 250px; max-width: 800px;">
                  <div class="aiot-pad wrap">
                    <span class="aiot-split">
                      <div class="aiot-split-resizer"></div>
                      <div class="aiot-split-collapse"></div>
                    </span>
                    <div class="sticky-outer-wrapper">
                      <div class="sticky-inner-wrapper" style="position: relative;">
                        <div>
                          <div class="card p-2 text-center d-block">
                            <a href="#" @click.prevent="openCreateModal" data-bs-toggle="tooltip" title="Create" data-title="Create New Category">
                              <i class="icon-plus"></i>
                            </a>
                            <a href="#" @click.prevent="openEditModal" style="margin-left: 10px" class="ml-2" data-bs-toggle="tooltip" title="Edit" data-title="Edit Category">
                              <i class="icon-edit-3"></i>
                            </a>
                          </div>
                          <div class="aiot-nodes">
                            <div class="form-group tb-inputicon tb-inputheight">
                              <i class="icon-search"></i>
                              <input
                              type="text"
                              id="catSearch"
                              v-model="search"
                              style="height: 40px"
                              class="form-control"
                              autocomplete="off"
                              placeholder="Search"
                              />
                            </div>
                            <hr />
                            <div class="ant-spin-nested-loading">
                              <div class="ant-spin-container mt-5">
                                <draggable group="levels" v-model="filteredCategories">
                                <template #item="{ element, index }">
                                <div class="main-item">
                                  <i class="fa icon-plus" @click.prevent="showChild()"></i>  {{ element.name }} <!-- Ensure 'header' exists in each item -->
                                  <draggable v-model="element.child_categories" class="childCat" v-if="element.child_categories && element.child_categories.length" :list="element.child_categories" group="levels">
                                  <template #item="{ element: child, index: childIndex }">
                                  <div class="main-item">
                                    {{ child.name }} <!-- Ensure 'header' exists in each item -->
                                  </div>
                                  </template>
                                  </draggable>
                                </div>
                                
                                </template>
                                </draggable>
                                <div id="searchList"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-9 tb-md-80">
            <div class="tb-dhb-mainheading">
              <h4>Pages</h4>
              <div class="tb-sortby">
                <form class="tb-themeform tb-displistform">
                  <fieldset>
                    <div class="tb-themeform__wrap">
                      <a href="#" class="tb-btn add-new" @click.prevent="addPage">Add Page<i class="icon-plus"></i></a>
                      <div class="form-group tb-inputicon tb-inputheight">
                        <i class="icon-search"></i>
                        <input type="text" name="search" class="form-control" v-model="search" autocomplete="off" placeholder="Search">
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="" id="dataList">
              <table class="table tb-table tb-dbholder">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(page, index) in pages" :key="index">
                    <td data-labels=""><span>{{ index + 1 }}</span></td>
                    <td data-labels="Name"><span>{{ page.name }}</span></td>
                    <td data-labels="Category Name"><span>{{ page.category }}</span></td>
                    <td data-labels="Status">
                      <select class="pageStatus" v-model="page.status" @change="updateStatus(page)">
                        <option value="draft">Draft</option>
                        <option value="review">Review</option>
                        <option value="pending_review">Pending Review</option>
                        <option value="publish">Publish</option>
                      </select>
                    </td>
                    <td data-labels="Actions">
                      <ul class="tb-action-icon ui-sortable">
                        <li><a :href="editUrl(page.id)"><i class="icon-edit-3"></i></a></li>
                        <li><a :href="viewUrl(page.slug)" target="_blank"><i class="icon-eye"></i></a></li>
                        <li>
                          <form @submit.prevent="deletePage(page.id)">
                            <a href="#" class="tb-delete"><i class="icon-trash-2"></i></a>
                          </form>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  
</AuthenticatedLayout>
</template>
<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import draggable from 'vuedraggable';
export default {
components: {
AuthenticatedLayout,
draggable,
},
props: {
pages: Array,
mainCategories:Array,
categories:Array,
},
data() {
return {
search: '',

};
},
methods: {
addPage() {
// Add your logic to add a new page
},
showChild(){
   $(this).parent().find('.childCat').each(function(){
    alert(1);
   });
},
updateStatus(page) {
// Add your logic to update the status of the page
},
editUrl(id) {
// Return the edit URL based on page ID
return `https://support.myfreelancer.com/admin/site-pages/${id}/edit`;
},
viewUrl(slug) {
// Return the view URL based on page slug
return `https://support.myfreelancer.com/${slug}`;
},
deletePage(id) {
// Add your logic to delete the page
},
catTotalPage(id) {
// Implement your logic to get the total number of pages for a category
return 0;
},
openCreateModal() {
// Implement the logic to open the create category modal
},
openEditModal() {
// Implement the logic to open the edit category modal
},
},
computed: {
filteredCategories() {
if (this.search) {
return this.mainCategories.filter((category) =>
category.name.toLowerCase().includes(this.search.toLowerCase())
);
}
return this.mainCategories;
},
},
};


$('.icon-plus').click(function(){
    $(this).parent().toggleClass('active');
    $(this).parent().find('.aiot-expander').first().toggleClass('active');
})
</script>