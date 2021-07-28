<template>
    <div>
        <CardVue title="Daftar Tumbuhan Obat" :tumbuhan="tumbuhan" />
    </div>
</template>

<script>
import CardVue from "../components/Card.vue";

export default {
    components: {
        CardVue
    },
    methods: {
        getData() {
            return this.$store.dispatch("setTumbuhan");
        }
    },
    mounted() {
        this.getData();
    },
    computed: {
        tumbuhan() {
            return this.$store.getters.getTumbuhan;
        }
    }
};
</script>

<style lang="scss" scoped></style>
