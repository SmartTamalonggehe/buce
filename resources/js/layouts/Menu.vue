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

            <!--about start-->
            <li
                class="nav-item hs-has-mega-menu custom-nav-item position-relative"
                data-position="center"
            >
                <a
                    id="aboutMegaMenu"
                    class="nav-link custom-nav-link main-link-toggle"
                    href="JavaScript:Void(0);"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Company</a
                >

                <!--about submenu start-->
                <div
                    class="hs-mega-menu main-sub-menu"
                    style="width: 320px"
                    aria-labelledby="aboutMegaMenu"
                >
                    <!--menu title with subtitle and icon item start-->
                    <div class="title-with-icon-item">
                        <a class="title-with-icon-link" href="contact-us.html">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="u-header__promo-title"
                                        >Contact Us</span
                                    >
                                    <small class="u-header__promo-text"
                                        >Face any problem contact with us
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--menu title with subtitle and icon item end-->

                    <!--menu title with subtitle and icon item start-->
                    <div class="title-with-icon-item">
                        <a class="title-with-icon-link" href="about-us.html">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="u-header__promo-title"
                                        >About Us</span
                                    >
                                    <small class="u-header__promo-text"
                                        >We are leading hosting company
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--menu title with subtitle and icon item end-->

                    <!--menu title with subtitle and icon item start-->
                    <div class="title-with-icon-item">
                        <a class="title-with-icon-link" href="partners.html">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="u-header__promo-title"
                                        >Our Partner</span
                                    >
                                    <small class="u-header__promo-text"
                                        >We have trusted partners globally
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--menu title with subtitle and icon item end-->

                    <!--menu title with subtitle and icon item start-->
                    <div class="title-with-icon-item">
                        <a class="title-with-icon-link" href="network.html">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="u-header__promo-title"
                                        >Network</span
                                    >
                                    <small class="u-header__promo-text"
                                        >Keep your data save and secure
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--menu title with subtitle and icon item end-->

                    <!--menu title with subtitle and icon item start-->
                    <div class="title-with-icon-item">
                        <a class="title-with-icon-link" href="blog-grid.html">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="u-header__promo-title"
                                        >Company Blog</span
                                    >
                                    <small class="u-header__promo-text"
                                        >Industry latest technology news & tips
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--menu title with subtitle and icon item end-->
                </div>
                <!--about submenu end-->
            </li>
            <!--about end-->

            <!--button start-->
            <li class="nav-item header-nav-last-item d-flex align-items-center">
                <a
                    class="btn btn-brand-03 animated-btn"
                    href="https://themetags.net/whmcs/?systpl=kohost-professional"
                    target="_blank"
                >
                    <span class="fa fa-user pr-2"></span> Client Area
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
