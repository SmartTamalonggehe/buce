<template>
    <!--main menu start-->
    <div id="navBar" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto main-navbar-nav">
            <li class="nav-item custom-nav-item">
                <router-link to="/" class="nav-link custom-nav-link"
                    >Home</router-link
                >
            </li>
            <li class="nav-item custom-nav-item">
                <router-link to="/tumbuhan" class="nav-link custom-nav-link"
                    >Tumbuhan</router-link
                >
            </li>

            <!--button start-->
            <li class="nav-item header-nav-last-item d-flex align-items-center">
                <a
                    class="btn btn-brand-03 animated-btn"
                    href="/auth/"
                    target="_blank"
                >
                    <span class="fa fa-user pr-2"></span> Login
                </a>
            </li>
            <!--button end-->
        </ul>
    </div>
    <!--main menu end-->
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
