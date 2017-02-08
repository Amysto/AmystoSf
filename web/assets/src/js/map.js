var mymap = L.map('map').setView([47, 7], 5);

var Hydda_Base = L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/base/{z}/{x}/{y}.png', {
    attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

Hydda_Base.addTo(mymap);


$(function(){
	//test border


    function getFrontiere()
    {
        var request = $.ajax({
            type: 'POST',
            url:  Routing.generate('map_page') ,
            data: {action : 'getFrontiere'},
        });
        request.done(function( data) {
        polylineBorder = L.polyline(data, { className: 'my_polyline' }).addTo(mymap);   

        });
    }


    setTimeout(function(){ getFrontiere() ;}, 1000);

	var border = [];
	var polylineBorder;
	var canAddBorder = false;
    $('#addBorder').click(function(){
    	canAddBorder = true;
    });
    $('#finishBorder').click(function(){
    	canAddBorder = false;
    	polylineBorder = L.polyline(border, { className: 'my_polyline' }).addTo(mymap);
    });
    $('#saveBorder').click(function(){
		var request = $.ajax({
			type: 'POST',
			url:  Routing.generate('map_page') ,
			data: {action : 'saveBorder', border: border},
		});
		request.done(function( data) {
			console.log('success');
		});
    });


	mymap.on('click', function(e) {
		var latitude = e.latlng.lat;
    	var longitude = e.latlng.lng;
    	
    	if(canAddBorder){
    		var latLngTempTab = [];
    		latLngTempTab.push(latitude);
    		latLngTempTab.push(longitude);
    		border.push(latLngTempTab);
    		if(border.length>1){
		    	polylineBorder = L.polyline(border, { className: 'my_polyline' }).addTo(mymap);
    		}
    	}
	});



// var latlngs = [
//     [45.51, -122.68],
//     [37.77, -122.43],
//     [34.04, -118.2]
// ];
// var polyline = L.polyline(latlngs, { className: 'my_polyline' }).addTo(mymap);

//mymap.fitBounds(polyline.getBounds());


});

