<template>
  <AuthenticatedLayout>
  <div class="tb-subwrapper">
    <div class="container-fluid">
  <main class="tb-main">
    <div class="row">
      <div class="col-lg-12 col-md-12 tb-md-100">
        <div class="tb-dbholder tb-packege-setting">
          <div class="tb-dbbox tb-dbboxtitle">
            <h5>{{ addPageLabel }}</h5>
          </div>
          <div class="tb-dbbox">
            <form @submit.prevent="submitForm" class="tb-themeform">
              <fieldset>
                <div class="tb-themeform__wrap">
                  <div class="form-group tb-md-50">
                    <label class="tb-label">{{ pageNameLabel }}</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="form.name"
                      required
                      :placeholder="pageNameLabel"
                    />
                    <div v-if="errors.name" class="tk-errormsg">
                      <span>{{ errors.name }}</span>
                    </div>
                  </div>
                  <div class="form-group tb-md-50">
                    <label class="tb-label">{{ pageTitleLabel }}</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="form.title"
                      required
                      :placeholder="pageTitleLabel"
                    />
                    <div v-if="errors.title" class="tk-errormsg">
                      <span>{{ errors.title }}</span>
                    </div>
                  </div>
                  <div class="form-group" v-cloak>
                    <p class="tb-label">{{ pageDescriptionLabel }}</p>
                    
                  </div>
                  <div class="form-group tb-md-50">
                    <label class="tb-label">{{ seoKeywordLabel }}</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="form.seo_keyword"
                      required
                      :placeholder="seoKeywordLabel"
                    />
                    <div v-if="errors.seo_keyword" class="tk-errormsg">
                      <span>{{ errors.seo_keyword }}</span>
                    </div>
                  </div>
                  <div class="form-group tb-md-50">
                    <label class="tb-label">{{ seoDescriptionLabel }}</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="form.seo_description"
                      required
                      :placeholder="seoDescriptionLabel"
                    />
                    <div v-if="errors.seo_description" class="tk-errormsg">
                      <span>{{ errors.seo_description }}</span>
                    </div>
                  </div>
                  <div class="form-group tb-md-50">
                    <label class="tb-label">{{ categoryLabel }}</label>
                    <select class="form-control" v-model="form.page_categories_id">
                      <option value="">{{ selectBelowLabel }}</option>
                      <option v-for="category in pageCategories" :key="category.id" :value="category.id">
                        {{ category.name }}
                      </option>
                    </select>
                    <div v-if="errors.page_categories_id" class="tk-errormsg">
                      <span>{{ errors.page_categories_id }}</span>
                    </div>
                  </div>
                  <div class="form-group tb-md-50">
                    <label class="tb-label">{{ statusLabel }}</label>
                    <select class="form-control" v-model="form.status">
                      <option value="draft">Draft</option>
                      <option value="review">Review</option>
                      <option v-if="isAdmin" value="pending_review">Pending Review</option>
                      <option v-if="isAdmin" value="publish">Publish</option>
                    </select>
                  </div>
                </div>
                <div class="form-group tb-dbtnarea">
                  <button type="submit" class="tb-btn">{{ addPageLabel }}</button>
                </div>
              </fieldset>
            </form>
          </div>
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

import axios from 'axios';

export default {
  components: {
AuthenticatedLayout,

},
  data() {
    return {
      addPageLabel: 'Add Page',
      pageNameLabel: 'Page Name',
      pageTitleLabel: 'Page Title',
      pageDescriptionLabel: 'Page Description',
      seoKeywordLabel: 'SEO Keyword',
      seoDescriptionLabel: 'SEO Description',
      categoryLabel: 'Category',
      statusLabel: 'Status',
      selectBelowLabel: 'Select Below',
      form: {
        name: '',
        title: '',
        description: '',
        seo_keyword: '',
        seo_description: '',
        page_categories_id: '',
        status: 'draft',
      },
      errors: {},
      pageCategories: [], // Fetch this from your API or props
      isAdmin: false, // Set this based on the user's role
    };
  },
  methods: {
    submitForm() {
      axios.post('/admin/site-pages', this.form)
        .then(response => {
          // Handle success
          alert('Page added successfully!');
        })
        .catch(error => {
          // Handle error
          if (error.response && error.response.data.errors) {
            this.errors = error.response.data.errors;
          }
        });
    },
  },
  mounted() {
    // Fetch page categories from the API
    axios.get('/api/page-categories').then(response => {
      this.pageCategories = response.data;
    });

    // Check if the user is an admin
    axios.get('/api/user-role').then(response => {
      this.isAdmin = response.data.isAdmin;
    });
  },
};
</script>

<style scoped>
/* Add your styles here */
</style>
