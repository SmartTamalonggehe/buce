<template>
    <div class="container mb-4">
        <div class="post-header">
            <h1 class="post-title">{{ title }}</h1>
            <hr />
        </div>
        <div class="row justify-content-center">
            <div
                class="col-md-6 col-lg-3"
                v-for="(item, index) in tumbuhan"
                :key="index"
            >
                <router-link
                    class="single-blog-article rounded bg-white border d-block mb-4"
                    :to="'/detailTumbuhan/' + item.id"
                >
                    <div class="blog-img mb-2">
                        <img
                            :src="'/storage/' + item.gambar"
                            class="rounded-top"
                            alt="Gagal Load"
                            height="150px"
                            width="100%"
                        />
                    </div>
                    <div class="blog-content-wrap p-4">
                        <div class="article-heading">
                            <h3 class="h5 mb-0">
                                {{ item.nm_tumbuhan }}
                            </h3>
                            <span>{{ item.nm_ilmiah }}</span>
                        </div>
                        <span class="border-shape my-3"></span>
                        <p>
                            {{ item.khasiat }}
                        </p>
                    </div>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: "Title"
        },
        tumbuhan: {
            type: Array,
            default: []
        }
    }
};
</script>

<style lang="scss" scoped></style>
