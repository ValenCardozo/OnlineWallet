<template>
    <ViewContainer>
        <div v-for="(coin,i) in coins"
        :key="i">
            {{ coin.id }}
        </div>
    </ViewContainer>
</template>

<script>
import ViewContainer from "./ViewContainer"

export default {
    components: {
        ViewContainer
    },
    
}
</script>

<style scoped>

</style>