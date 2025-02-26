const apiToken =
    "pk.eyJ1Ijoic21hcnRzcGFydGFjdXMiLCJhIjoiY203bHNlYjFmMGRkaDJqcjB3cHdrNG5tdyJ9.KBLA7WDqjhe5YCQ2oddJ7Q";

mapboxgl.accessToken = apiToken;
const map = new mapboxgl.Map({
    container: "peta", // container ID
    style: "mapbox://styles/mapbox/satellite-v9", // style URL
    center: [0, 0],
    zoom: 0.6
});

function myMaps(koordinat) {
    map.setCenter(koordinat);
    map.setZoom(13);

    const marker = new mapboxgl.Marker({
        draggable: true
    })
        .setLngLat(koordinat)
        .addTo(map);

    function onDragEnd() {
        const poss = marker.getLngLat();
        $("#lat").val(poss.lat);
        $("#lng").val(poss.lng);
        tampilForm();
    }

    marker.on("dragend", onDragEnd);
}
map.addControl(new mapboxgl.FullscreenControl());
map.addControl(new mapboxgl.NavigationControl());

// Ambil titik koordinat
const options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
};

navigator.geolocation.getCurrentPosition(success, error, options);

function success(titik) {
    const koordinat = [titik.coords.longitude, titik.coords.latitude];
    myMaps(koordinat);
}

function error() {
    alert(`Mohon Untuk Mengijinkan Mengakses Lokasi Anda`);
}

const myData = () => {
    return fetch("/api/lokasi").then(response =>
        response.json().then(response => response)
    );
};

const myMarker = async () => {
    const data = await myData();
    data.forEach(el => {
        let koordinat = [el.lng, el.lat];
        // create the popup
        const popup = new mapboxgl.Popup({
            offset: 25
        }).setHTML(
            `<table class="black">
                <tbody>
                    <tr>
                        <td colspan="3"><h6 class="black text-center">${el.tumbuhan.nm_tumbuhan}</h6></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">${el.alamat}</td>
                    </tr>
                </tbody>
            </table>`
        );

        // create DOM element for the marker
        const mk = document.createElement("div");
        mk.className = "marker";
        mk.style.backgroundImage = `url(/storage/${el.tumbuhan.bagian.icon})`;

        // create the marker
        new mapboxgl.Marker(mk)
            .setLngLat(koordinat)
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);
    });
};

myMarker();

$("#fresh").on("click", function() {
    console.log("click");
    map.on("load", () => {
        console.log("A load event occurred.");
    });
});
