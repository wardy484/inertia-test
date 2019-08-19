<template>
  <layout>
    <div class="flex flex-col justify-center flex-auto items-center">
      <h1 class="text-3xl text-center mb-2">Login</h1>
      <form class="bg-gray-200 w-2/6 p-5 flex flex-col" @submit.prevent="submit">
        <base-input type="email" name="email" label="Email:" v-model="form.email" />

        <base-input type="password" name="password" label="Password:" v-model="form.password" />

        <base-button type="submit" class="mt-2 self-end">Login</base-button>
      </form>
      {{ $page.user }}
    </div>
  </layout>
</template>

<script>
import Layout from "@/layouts/Default";
import BaseInput from "@/components/BaseInput";
import BaseButton from "@/components/BaseButton";

export default {
  components: {
    BaseInput,
    BaseButton,
    Layout
  },

  props: ["people", "errors"],

  data() {
    return {
      form: {
        email: null,
        password: null,
        remember: true
      }
    };
  },
  methods: {
    submit() {
      this.$inertia.post("/login", this.form);
    }
  }
};
</script>