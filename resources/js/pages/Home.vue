<template>
  <div class="container">
    <MapsVue
      ref="map"
      apiKey="jj818Cy3SQHomd-JH-7QDZjgn_MDWZt63FYuY8Ih8Uw"
      :lokasi="lokasi"
      :bagian="totalBagian"
    />
  </div>
</template>

<script>
import MapsVue from "../components/Maps.vue";
import { mapGetters, mapActions } from "vuex";

export default {
  components: {
    MapsVue,
  },
  mounted() {
    let map = this.$refs.map;
    console.log(map);
  },
  computed: {
    ...mapGetters({
      lokasi: "getLokasi",
      totalBagian: "getTotalBagian",
    }),
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
