<template>
  <div class="block mb-2 w-full">
    <label :for="$attrs.name" class="block mb-2">{{ label }}</label>
    <input v-bind="$attrs" v-on="listeners" class="border-2 px-3 py-2 rounded w-full" />
  </div>
</template>

<script>
export default {
  inheritAttrs: false,

  props: {
    label: {
      type: String,
      required: false,
      default: ""
    },

    errors: {
      type: Object,
      required: false
    }
  },

  data() {
    return {
      value: ""
    };
  },

  computed: {
    listeners() {
      return {
        ...this.$listeners,
        input: event => this.$emit("input", event.target.value)
      };
    },

    attributes() {
      return {
        ...this.$attrs,
        value: this.value
      };
    }
  }
};
</script>
