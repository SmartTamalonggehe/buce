<template>
  <div class="row">
    <div class="col-lg-9 col-md-9">
      <!-- Post-->
      <article class="post">
        <div class="post-wrapper">
          <div class="post-header">
            <h1 class="post-title">Peta Sebaran Tumbuhan Obat</h1>
          </div>
          <div class="post-content">
            <div style="height: 600px; width: 100%" ref="mapBox"></div>
          </div>
        </div>
      </article>
      <!-- Post end-->
    </div>
    <div class="col-lg-3 col-md-3">
      <div class="sidebar-right pl-4">
        <!-- Search widget-->
        <!-- <aside class="widget widget-search">
                    <form>
                        <input
                            class="form-control"
                            type="search"
                            placeholder="Type Search Words"
                        />
                        <button class="search-button" type="submit">
                            <span class="ti-search"></span>
                        </button>
                    </form>
                </aside> -->

        <!-- Categories widget-->
        <aside class="widget widget-categories">
          <div class="widget-title">
            <h5 class="text-center">Legenda</h5>
            <hr />
            <h6 class="text-center">Bagian yang Digunakan</h6>
          </div>
          <ul>
            <li v-for="(item, index) in bagian" :key="index">
              <span>
                <img :src="'/storage/' + item.icon" width="20px" />
                {{ item.nm_bagian }}</span
              >
              <span class="float-right">{{ item.jmlh }}</span>
            </li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MapBox",
  props: {
    apiKey: String,
    lokasi: Array,
    bagian: Array,
    loading: Boolean,
    // center object { lat: 40.730610, lng: -73.935242 }
  },
  data() {
    return {
      map: {},
    };
  },

  mounted() {
    // Initalize the platform object:
    this.initializeMapBox();
    this.myData();
    this.myPosition();
  },

  methods: {
    initializeMapBox() {
      mapboxgl.accessToken = this.apiKey;
      this.map = new mapboxgl.Map({
        container: this.$refs.mapBox, // container ID
        style: "mapbox://styles/mapbox/satellite-v9", // style URL
        center: [140.67056190504053, -2.598998763705467],
        zoom: 13,
      });
      this.map.addControl(new mapboxgl.FullscreenControl());
      this.map.addControl(new mapboxgl.NavigationControl());
    },

    async myData() {
      const data = await this.lokasi;
      data.forEach((element) => {
        let koordinat = [element.lng, element.lat];
        console.log(element);
        // create the popup
        const popup = new mapboxgl.Popup({
          offset: 25,
        }).setHTML(
          `<div style="width:150px">
                <a class="single-blog-article rounded bg-white border d-block mb-4"
                    href="#" >
                    <div class="blog-img mb-2">
                        <img
                            src="/storage/${element.tumbuhan.gambar}"
                            class="rounded-top"
                            alt="Gagal Load"
                            height="100px"
                            width="100%"
                        />
                    </div>
                    <div class="blog-content-wrap">
                        <div class="article-heading">
                            <h5 class="h5 mb-0">${element.tumbuhan.nm_tumbuhan}</h5>
                        </div>
                        <span class="border-shape my-3"></span>
                        <p>${element.tumbuhan.khasiat}</p>
                    </div>
                </a>
            </div>`
        );

        // create DOM element for the marker
        const mk = document.createElement("div");
        mk.className = "marker";
        mk.style.backgroundImage = `url(/storage/${element.tumbuhan.bagian.icon})`;

        // create the marker
        new mapboxgl.Marker(mk)
          .setLngLat(koordinat)
          .setPopup(popup) // sets a popup on this marker
          .addTo(this.map);
      });
    },

    myPosition() {
      console.log(`My Position Is Empty`);
    },
  },
  watch: {
    loading() {
      this.myData();
    },
  },
};
</script>

<style>
.marker {
  background-size: cover;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  cursor: pointer;
}
</style>
