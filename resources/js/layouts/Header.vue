<template>
    <header id="header" class="header-main">
        <!--main header menu start-->
        <div
            id="logoAndNav"
            class="main-header-menu-wrap bg-transparent fixed-top"
        >
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">
                    <!--responsive toggle button start-->
                    <button
                        type="button"
                        class="navbar-toggler btn"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar"
                    >
                        <span id="hamburgerTrigger">
                            <span class="ti-menu"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <MenuVue />
                </nav>
            </div>
        </div>
        <!--main header menu end-->
    </header>
</template>

<script>
import MenuVue from "./Menu.vue";

export default {
    components: {
        MenuVue
    }
};
</script>

<style lang="scss" scoped></style>
