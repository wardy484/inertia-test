<template>
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <form @submit.prevent="submit">
      {{ $page.errors }}
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
          <label
            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
            for="grid-first-name"
          >First Name</label>

          <input
            v-model="first"
            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
            id="grid-first-name"
            type="text"
            placeholder="Jane"
          />
          <p class="text-red text-xs italic">Please fill out this field.</p>
        </div>

        <div class="md:w-1/2 px-3">
          <label
            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
            for="grid-last-name"
          >Last Name</label>

          <input
            v-model="last"
            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
            id="grid-last-name"
            type="text"
            placeholder="Doe"
          />
        </div>

        <button type="submit">Save</button>
      </div>
    </form>

    <ul>
      <li v-for="person in people" :key="person.id">{{ person.first_name }} {{ person.last_name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["people", "errors"],

  data() {
    return {
      first: null,
      last: null
    };
  },
  methods: {
    async submit() {
      await this.$inertia.post("/save", {
        first: this.first,
        last: this.last
      });

      console.log(this.$page);
    }
  }
};
</script>