<template>
  <div
    class="flex flex-wrap bg-red-700 w-12 h-auto py-5"
    stlye="height: calc(100vh - 2rem)"
  >
    <div class="flex-wrap justify-around items-center px-1 py-56 h-full w-full items-center-x">
      <button
        class="w-10 h-10 bg-gray-400 transition duration-150 rounded-md mx-auto shadow-xl my-5"
      >
        <VueHicons
          name="home"
          stroke-color="#000"
          :width-icon="10"
        />
      </button>
      <button
        class=" w-10 h-10 bg-gray-400 transition duration-150 rounded-md mx-auto shadow-xl my-5"
      >
        <VueHicons
          name="adjustments"
          stroke-color="#000"
          :width-icon="10"
        />
      </button>
      <button
        class="w-10 h-10 bg-gray-400 transition duration-150 rounded-md mx-auto shadow-xl my-5"
      >
        <VueHicons
          name="database"
          stroke-color="#000"
          :width-icon="10"
        />
      </button>
      <button
        class=" w-10 h-10 bg-gray-400 transition duration-150 rounded-md mx-auto shadow-xl my-5 "
      >
        <VueHicons
          name="cog"
          stroke-color="#000"
          :width-icon="10"
        />
      </button>
    </div>
  </div>
</template>

<script>
import VueHicons from "vue-hicons";

export default {
  components: {
    VueHicons
  }
};
</script>

<style>

</style>
