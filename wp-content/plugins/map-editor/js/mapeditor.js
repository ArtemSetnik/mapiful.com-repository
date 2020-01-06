var map = L.map('MapContent').setView([39.756189, -104.994031], 13);
// var map = L.map('mapid').setView([36.215681, -232.153629], 13)

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZ2xvd2V2ZSIsImEiOiJjazJ2eXhlNG4wMm9wM2xvNHBkcThrdnA5In0.iz_cFwJsa_UhG6f9z8DkMw'
}).addTo(map);

function MapEditor_SetTitle() {
    alert("OK");
}