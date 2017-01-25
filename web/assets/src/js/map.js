var mymap = L.map('map').setView([47, 7], 5);

var Hydda_Base = L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/base/{z}/{x}/{y}.png', {
    attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

Hydda_Base.addTo(mymap);


$(function(){
	mymap.on('click', function(e) {
		console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);
	});



var latlngs = [
    [45.51, -122.68],
    [37.77, -122.43],
    [34.04, -118.2]
];
var polyline = L.polyline(latlngs, { className: 'my_polyline' }).addTo(mymap);

mymap.fitBounds(polyline.getBounds());


});

