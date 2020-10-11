<template>
  <div class="flex w-full h-screen flex-wrap">
    <Header />
    <LeftBar />
    <slot />
  </div>
</template>

<script>
import LeftBar from "../js/components/LeftBar";
import Header from "../js/components/Header";

export default {
  components: {
    LeftBar,
    Header
  }
};
</script>
