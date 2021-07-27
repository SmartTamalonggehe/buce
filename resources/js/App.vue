<template>
    <div>
        <HeaderVue />
        <div class="main">
            <section class="myPadding gradient-bg"></section>

            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import HeaderVue from "./layouts/Header.vue";

export default {
    components: {
        HeaderVue
    }
};
</script>

<style lang="scss" scoped></style>
