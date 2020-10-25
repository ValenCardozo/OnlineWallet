<template>
  <div class="flex-wrap bg-gray-200 h-screen width-of-main flex">
    <div class="flex flex-wrap container-info-cartera h-64 mx-5 my-8">
      <MoneyLimits />
      <InfoInput />
    </div>
    <div class="flex w-screen">
      <area-chart :data="{'2017-01-01 00:00:00 -0800': 8, '2017-01-01 00:01:00 -0800': 5}" />
    </div>
  </div>
</template>

<script>
import MoneyLimits from "./MoneyLimits";
import InfoInput from "./InfoInput";

export default {
  components: {
    InfoInput,
    MoneyLimits
  }
};
</script>

<style scoped>
.width-of-main {
    width: calc(100vw - 4.07rem);
}

.container-info-cartera {
  width: 32rem
}


</style>
