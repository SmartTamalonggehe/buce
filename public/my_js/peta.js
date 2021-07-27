let platform = new H.service.Platform({
    apikey: "6KIMp7_idrydSKZJ02qGssW0-W8bJ_uDcxL28Up4MaU",
});

let defaultLayers = platform.createDefaultLayers();

let map = new H.Map(
    document.getElementById("peta"),
    defaultLayers.vector.normal.map,
    {
        center: { lng: 140.6689605837627, lat: 2.5894873665909985 },
    }
);

// Deteksi Lokasi
navigator.geolocation.getCurrentPosition(berhasil, error);

function berhasil(point) {
    let lat = point.coords.latitude;
    let lng = point.coords.longitude;
    point.coords.accuracy;
    let coords = { lat: lat, lng: lng };
    map.setCenter(coords);
    map.setZoom(12);

    let marker = new H.map.Marker(coords);

    // Add the marker to the map:
    map.addObject(marker);
    marker.draggable = true;
    // when starting to drag a marker object:
    map.addEventListener(
        "dragstart",
        function (ev) {
            var target = ev.target,
                pointer = ev.currentPointer;
            if (target instanceof H.map.Marker) {
                var targetPosition = map.geoToScreen(target.getGeometry());
                target["offset"] = new H.math.Point(
                    pointer.viewportX - targetPosition.x,
                    pointer.viewportY - targetPosition.y
                );
                behavior.disable();
            }
        },
        false
    );
    // when dragging has completed
    map.addEventListener(
        "dragend",
        function (ev) {
            var target = ev.target;
            if (target instanceof H.map.Marker) {
                behavior.enable();
                $("#lat").val(target.b.lat);
                $("#lng").val(target.b.lng);
                tampilForm();
            }
        },
        false
    );

    // Listen to the drag event and move the position of the marker
    // as necessary
    map.addEventListener(
        "drag",
        function (ev) {
            var target = ev.target,
                pointer = ev.currentPointer;
            if (target instanceof H.map.Marker) {
                target.setGeometry(
                    map.screenToGeo(
                        pointer.viewportX - target["offset"].x,
                        pointer.viewportY - target["offset"].y
                    )
                );
                //   console.log(target.b);
            }
        },
        false
    );
}

function error(err) {
    alert(err);
}

// Group Marker

let ui = H.ui.UI.createDefault(map, defaultLayers);
window.addEventListener("resize", () => map.getViewPort().resize());
let behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
