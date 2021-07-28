<template>
    <div>
        <HeaderVue />
        <div class="main">
            <section class="myPadding gradient-bg"></section>
            <div class="module mt-4">
                <router-view></router-view>
            </div>
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
