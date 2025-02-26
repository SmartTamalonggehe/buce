<template>
    <div class="container">
        <MapsVue
            ref="map"
            apiKey="pk.eyJ1Ijoic21hcnRzcGFydGFjdXMiLCJhIjoiY203bHNlYjFmMGRkaDJqcjB3cHdrNG5tdyJ9.KBLA7WDqjhe5YCQ2oddJ7Q"
            :lokasi="lokasi"
            :bagian="totalBagian"
            :loading="loading"
        />
    </div>
</template>

<script>
import MapsVue from "../components/Maps.vue";
import { mapState, mapGetters, mapActions } from "vuex";

export default {
    components: {
        MapsVue
    },
    mounted() {
        let map = this.$refs.map;
        // console.log(map);
    },
    computed: {
        ...mapGetters({
            lokasi: "getLokasi",
            totalBagian: "getTotalBagian"
        }),
        ...mapState(["loading", "errorMessage"])
    },
    methods: {
        ...mapActions(["setLokasi", "setTotalBagian"])
    },
    created() {
        this.setLokasi();
        this.setTotalBagian();
    }
};
</script>

<style lang="scss" scoped></style>
