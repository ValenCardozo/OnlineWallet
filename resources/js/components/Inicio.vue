<template>
  <div class="flex w-full h-screen flex-wrap">
    <Header />
    <LeftBar />
    <Main />
  </div>
</template>

<script>
import Main from "./Main";
import LeftBar from "./LeftBar";
import Header from "./Header";
export default {
  components: {
    Main,
    LeftBar,
    Header
  }
};
</script>
