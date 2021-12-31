<template>
  <div class="container">
    <MapsVue
      ref="map"
      apiKey="pk.eyJ1Ijoic21hcnRzcGFydGFjdXMiLCJhIjoiY2t4czY1OGg4MDlsbjJ2bzV5YWFkamRnciJ9.sTJtoJNj2uWpIDCv85pEyQ"
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
    MapsVue,
  },
  mounted() {
    let map = this.$refs.map;
    // console.log(map);
  },
  computed: {
    ...mapGetters({
      lokasi: "getLokasi",
      totalBagian: "getTotalBagian",
    }),
    ...mapState(["loading", "errorMessage"]),
  },
  methods: {
    ...mapActions(["setLokasi", "setTotalBagian"]),
  },
  created() {
    this.setLokasi();
    this.setTotalBagian();
  },
};
</script>

<style lang="scss" scoped></style>
