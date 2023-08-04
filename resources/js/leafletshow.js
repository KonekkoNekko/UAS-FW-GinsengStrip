import L from "leaflet";
import "leaflet-draw";
import "leaflet-control-geocoder/dist/Control.Geocoder.css";
import "leaflet-control-geocoder";

const [latitude, longitude] = coord.split(',');
const lat = parseFloat(latitude);
const lng = parseFloat(longitude);
// Code for creating a new map instance and setting its view
// var map = L.map('map').setView([-7.310357109957478, 112.72860655216512], 15);
var GoogleSat = L.tileLayer(
    "http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}",
    {
        maxZoom: 22,
        attribution: "Google Satellite",
    }
);

var osm = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
        '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
});

var map = L.map("map", {
    center: [lat, lng], //data transaction->coordinate goes here
    zoom: 12,
    layers: [osm],
    // drawControl: true
});

// var drawControl = new L.Control.Draw({
//     draw: {
//         marker: true,
//         polyline: false,
//         rectangle: false,
//         polygon: false,
//         circle: false,
//         circlemarker: false,
//     },
// });
// map.addControl(drawControl);

// var marker = L.marker([0, 0], { draggable: true }); // Declare marker with draggable option

// function onMapClick(e) {
//     var coords = document.querySelector("[name=coordinate]");
//     var latitude = document.querySelector("[name=latitude]");
//     var longitude = document.querySelector("[name=longitude]");
//     var lat = e.latlng.lat;
//     var lng = e.latlng.lng;

//     if (!map.hasLayer(marker)) {
//         marker.addTo(map);
//         marker.setLatLng(e.latlng);
//     } else {
//         marker.setLatLng(e.latlng);
//     }

//     coords.value = lat + "," + lng;
//     latitude.value = lat;
//     longitude.value = lng;
// }

// map.on("click", onMapClick);

// marker.on("dragend", function (e) {
//     var coords = document.querySelector("[name=coordinate]");
//     var latitude = document.querySelector("[name=latitude]");
//     var longitude = document.querySelector("[name=longitude]");
//     var lat = e.target.getLatLng().lat;
//     var lng = e.target.getLatLng().lng;

//     coords.value = lat + "," + lng;
//     latitude.value = lat;
//     longitude.value = lng;
// });

// // Use the draw:created event to add the marker
// map.on("draw:created", function (e) {
//     if (e.layerType === "marker") {
//         var lat = e.layer.getLatLng().lat;
//         var lng = e.layer.getLatLng().lng;
//         var coords = document.querySelector("[name=coordinate]");
//         var latitude = document.querySelector("[name=latitude]");
//         var longitude = document.querySelector("[name=longitude]");

//         if (!map.hasLayer(marker)) {
//             marker.addTo(map);
//             marker.setLatLng(e.layer.getLatLng());
//         } else {
//             marker.setLatLng(e.layer.getLatLng());
//         }

//         coords.value = lat + "," + lng;
//         latitude.value = lat;
//         longitude.value = lng;
//     }
// });

// // Use the draw:created event to add the marker
// map.on("draw:created", function (e) {
//     if (e.layerType === "marker") {
//         var lat = e.layer.getLatLng().lat;
//         var lng = e.layer.getLatLng().lng;
//         var coords = document.querySelector("[name=coordinate]");
//         var latitude = document.querySelector("[name=latitude]");
//         var longitude = document.querySelector("[name=longitude]");

//         if (!marker) {
//             marker = e.layer.addTo(map);
//             marker.on("dragend", onMarkerDragEnd); // Add dragend event listener to the marker
//         } else {
//             marker.setLatLng(e.layer.getLatLng());
//             marker.update();
//         }

//         coords.value = lat + "," + lng;
//         latitude.value = lat;
//         longitude.value = lng;
//     }
// });

var marker = L.marker([lat, lng], { //data transaction->coordinate goes here
}).addTo(map);

var baseMaps = {
    Peta: osm,
    Satelit: GoogleSat,
};

L.control.layers(baseMaps).addTo(map);
// var geocoder = L.Control.geocoder({
//     defaultMarkGeocode: false,
// }).addTo(map);

// // Attach the markgeocode event listener to the geocoder control
// geocoder.on("markgeocode", function (e) {
//     // Remove previous popup, if any
//     map.closePopup();

//     // Get the geocoded location information
//     var location = e.geocode;

//     // Center the map on the geocoded location
//     map.setView(location.center, 18);

//     // Create a popup with the location's name or label
//     var popup = L.popup()
//         .setLatLng(location.center)
//         .setContent(location.html || location.name) // You can customize the content of the popup here
//         .openOn(map);
// });
