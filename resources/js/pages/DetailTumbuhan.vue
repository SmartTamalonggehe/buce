<template>
    <div class="container">
        <div class="row" v-if="loading">
            <div class="col-12">
                <article class="post">
                    <div class="post-wrapper">
                        <div class="post-header">
                            <h1 class="post-title">{{ detail.nm_tumbuhan }}</h1>
                        </div>
                        <div class="post-preview">
                            <img
                                :src="'/storage/' + detail.gambar"
                                alt="article"
                                class="img-fluid"
                            />
                        </div>
                        <div class="post-content">
                            <blockquote class="blockquote">
                                <p>
                                    {{ detail.khasiat }}
                                </p>
                            </blockquote>
                            <ul class="contact-info-list mt-3">
                                <li class="d-flex">
                                    <div class="contact-text">
                                        <small class="mb-1 font-weight-normal">
                                            Nama Ilmiah dan Family
                                        </small>
                                        <h6>
                                            {{ detail.nm_ilmiah }} dan
                                            {{ detail.famili.nm_famili }}
                                        </h6>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="contact-text">
                                        <small class="mb-1 font-weight-normal">
                                            Bagian yang Digunakan
                                        </small>
                                        <h6>
                                            {{ detail.bagian.nm_bagian }}
                                        </h6>
                                    </div>
                                </li>
                            </ul>
                            <!-- Alamat -->
                            <ul class="contact-info-list mt-5">
                                <h6>
                                    {{ detail.nm_tumbuhan }} dapat ditemui di
                                </h6>
                                <li
                                    class="d-flex"
                                    v-for="(item, index) in detail.lokasi"
                                    :key="index"
                                >
                                    <div class="contact-text">
                                        <small class="mb-1 font-weight-normal">
                                            Alamat {{ index + 1 }}
                                        </small>
                                        <h6>
                                            {{ item.alamat }}
                                        </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions, mapState } from "vuex";

export default {
    methods: {
        ...mapActions(["setDetailTumbuhan"])
    },
    computed: {
        ...mapGetters({
            detail: "getDetailTumbuhan"
        }),
        ...mapState(["loading"])
    },

    mounted() {
        this.setDetailTumbuhan(this.$route.params.id);
    }
};
</script>

<style lang="scss" scoped></style>
