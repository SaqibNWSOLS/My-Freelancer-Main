<template>
  <select ref="select" :value="value" @change="onChange">
    <slot></slot>
  </select>
</template>

<script>
import $ from 'jquery';
import 'select2/dist/js/select2.full.min';
import 'select2/dist/css/select2.min.css';

export default {
  props: {
    value: [String, Number, Array]
  },
  mounted() {
    this.initializeSelect2();
  },
  methods: {
    initializeSelect2() {
      $(this.$refs.select).select2().on('change', this.onChange);
    },
    onChange(event) {
      const selectedValue = $(event.target).val();
      this.$emit('input', selectedValue);
    }
  },
  watch: {
    value(value) {
      $(this.$refs.select).val(value).trigger('change');
    }
  },
  beforeDestroy() {
    $(this.$refs.select).select2('destroy');
  }
};
</script>

<style>
@import 'select2/dist/css/select2.css';
</style>
