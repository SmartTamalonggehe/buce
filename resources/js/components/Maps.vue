<template>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <!-- Post-->
            <article class="post">
                <div class="post-wrapper">
                    <div class="post-header">
                        <h1 class="post-title">
                            Peta Sebaran Tumbuhan Obat
                        </h1>
                    </div>
                    <div class="post-content">
                        <div
                            style="height:600px;width:100%"
                            ref="hereMap"
                        ></div>
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
                        <h5 class=" text-center">Legenda</h5>
                        <hr />
                        <h6 class=" text-center">Bagian yang Digunakan</h6>
                    </div>
                    <ul>
                        <li v-for="(item, index) in bagian" :key="index">
                            <span>
                                <img
                                    :src="'/storage/' + item.icon"
                                    width="20px"
                                />
                                {{ item.nm_bagian }}</span
                            >
                            <span class=" float-right">{{ item.jmlh }}</span>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "HereMap",
    props: {
        apiKey: String,
        lokasi: Array,
        bagian: Array
        // center object { lat: 40.730610, lng: -73.935242 }
    },
    data() {
        return {
            platform: {},
            map: {},
            ui: {},
            H: window.H
        };
    },
    created() {
        this.platform = new window.H.service.Platform({
            apikey: this.apiKey
        });
    },
    mounted() {
        // Initalize the platform object:
        this.initializeHereMap();
        this.myPosition();
    },
    //   const H = window.H;

    methods: {
        initializeHereMap() {
            // rendering map
            const mapContainer = this.$refs.hereMap;
            let maptypes = this.platform.createDefaultLayers();
            this.map = new this.H.Map(
                mapContainer,
                maptypes.vector.normal.map,
                {
                    center: { lat: 52.5, lng: 13.4 }
                }
            );
            new this.H.mapevents.Behavior(
                new this.H.mapevents.MapEvents(this.map)
            );
            this.ui = this.H.ui.UI.createDefault(this.map, maptypes);
        },

        myPosition() {
            navigator.geolocation.getCurrentPosition(
                success => {
                    this.map.setCenter(
                        {
                            lat: success.coords.latitude,
                            lng: success.coords.longitude
                        },
                        this.map.setZoom(12)
                    );
                    this.addInfoBubble(this.map, this.ui);
                },
                error => {
                    console.log(error);
                }
            );
        },

        addMarkerToGroup(group, coordinate, icon, html) {
            let marker = new this.H.map.Marker(coordinate, { icon: icon });
            marker.setData(html);
            group.addObject(marker);
        },

        async addInfoBubble(map, ui) {
            let group = new window.H.map.Group();

            map.addObject(group);

            // add 'tap' event listener, that opens info bubble, to the group
            group.addEventListener(
                "tap",
                function(evt) {
                    // event target is the marker itself, group is a parent event target
                    // for all objects that it contains
                    let bubble = new window.H.ui.InfoBubble(
                        evt.target.getGeometry(),
                        {
                            // read custom data
                            content: evt.target.getData()
                        }
                    );
                    // show info bubble
                    ui.addBubble(bubble);
                },
                false
            );

            const data = await this.lokasi;
            let size = { size: { h: 30, w: 30 } };

            data.forEach(element => {
                this.addMarkerToGroup(
                    group,
                    { lat: element.lat, lng: element.lng },
                    new window.H.map.Icon(
                        `/storage/${element.tumbuhan.bagian.icon}`,
                        size
                    ),
                    `<div style="width:150px">
                    <a class="single-blog-article rounded bg-white border d-block mb-4"
                        href="${element.id}" >
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
            });
        }
    }
};
</script>

<style lang="scss" scoped></style>
