<template>
  <div>
    <button class="bg-blue-500 text-white block px-5 py-2" v-bind="$attrs" v-on="$listeners">
      <slot></slot>
    </button>
  </div>
</template>

<script>
export default {
  inheritAttrs: false
};
</script>
