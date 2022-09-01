<template>
    <component v-bind:is="themeLoader"></component>
</template>

<script>
    export default {
        name: "Main",
        computed: {
            themeLoader() {
                return () => import(`../themes/${this.$store.getters["theme/getName"]}/Master.vue`);
            }
        }
    }
</script>

<style>

</style>

<style scoped>

</style>
