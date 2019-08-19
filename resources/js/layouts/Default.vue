<template>
  <div class="h-screen flex flex-col">
    <navbar />
    <slot />
  </div>
</template>

<script>
import Navbar from "@/components/Navbar";

export default {
  components: {
    Navbar
  }
};
</script>
