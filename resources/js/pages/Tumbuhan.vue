<template>
    <div>
        <CardVue title="Daftar Tumbuhan Obat" :tumbuhan="tumbuhan" />
    </div>
</template>

<script>
import CardVue from "../components/Card.vue";

import { mapGetters, mapActions } from "vuex";

export default {
    components: {
        CardVue
    },

    methods: {
        ...mapActions(["setTumbuhan"])
    },

    mounted() {
        this.setTumbuhan();
    },

    computed: {
        ...mapGetters({
            tumbuhan: "getTumbuhan"
        })
    }
};
</script>

<style lang="scss" scoped></style>
