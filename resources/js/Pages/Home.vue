<template>
  <layout>
    <inertia-link
      class="block px-6 py-2 hover:bg-indigo hover:text-white"
      :href="route('home.store')"
      method="post"
    >Save</inertia-link>

    <inertia-link
      class="block px-6 py-2 hover:bg-indigo hover:text-white"
      :href="route('logout')"
      method="post"
      :preserve-state="true"
    >Logout</inertia-link>
  </layout>
</template>

<script>
import Layout from "@/layouts/Default";

export default {
  components: {
    Layout
  }
};
</script>