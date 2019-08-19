<template>
  <div class="px-5 py-3 bg-gray-200 flex justify-between items-center">
    <h1 class="text-2xl font-bold">YYDB</h1>
    <div v-if="$user">
      {{ $user.name }}
      <font-awesome-icon icon="chevron-down" class="ml-2" />
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.user;
  }
};
</script>