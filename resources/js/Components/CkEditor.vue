<template>
  <div>
    <ckeditor :editor="editor" v-model="editorData" :config="editorConfig" @blur="onBlur" @focus="onFocus"></ckeditor>
  </div>
</template>

<script>
import CKEditor from '@ckeditor/ckeditor5-vue';
    import { ClassicEditor } from '@ckeditor/ckeditor5-editor-classic';
import MyUploadAdapter from './MyUploadAdapter';
 import { Essentials } from '@ckeditor/ckeditor5-essentials';
    import { Bold, Italic } from '@ckeditor/ckeditor5-basic-styles';
    import { Link } from '@ckeditor/ckeditor5-link';
    import { Paragraph } from '@ckeditor/ckeditor5-paragraph';
export default {
  name: 'CkeditorComponent',
  components: {
    ckeditor: CKEditor.component
  },
  data() {
    return {
      editor: ClassicEditor,
      editorData: '',
      editorConfig: {
        extraPlugins: [MyUploadAdapter],
       plugins: [
                        Essentials,
                        Bold,
                        Italic,
                        Link,
                        Paragraph
                    ]
      }
    };
  },
};
</script>

<style scoped>
/* Add custom styles here */
</style>
