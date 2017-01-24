// // Global Variables
// var map;
// var oMap = document.getElementById('map');

// // Instantiate GoogleMapsApi class
// var gMap = new GoogleMapsApi();

// //Initialize Google Map
// if (gMap.init(map, oMap).loadMap()) {
// 	console.log('Google Map Load Successful.');
// } else {
// 	console.error('Error Loading Map.');
// }

// $.(function() {

// var _oLocation={
// lat: parseFloat(14.625931),
// lng: parseFloat(121.060905)
// };

// 	var _oOptions = {
// 		position: _oLocation,
// 		title: 'User\'s Location Here',
// 		icon: '',
// 	}
// 	gMap.createMarker(_oOptions);
// });

var map;
$(document).ready(function() {
	var myLatLng = new google.maps.LatLng(14.625931, 121.060905);
	

	// Create MAP
	function createMap(myLatLng) {
		map = new google.maps.Map(document.getElementById('map'), {
			center: myLatLng,
			zoom: 13
		});
	}
	
	// Create USER MARKER
	var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'User\'s Location Here'
		});

	// Create NEARBY MARKER
	function createMarker(latlng, icn, name) {
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: icn,
			title: name
		});

	};

	// NEARBY SEARCH
	function nearbySearch(){
		var request = {
		location: myLatLng,
		radius: '1000',
		types: ['police']
	};

	service = new google.maps.places.PlacesService(map);
	service.nearbySearch(request, callback);

		function callback(results, status) {
			// console.log(results)
			if (status == google.maps.places.PlacesServiceStatus.OK) {
			    for (var i = 0; i < results.length; i++) {
			      var place = results[i];
			      latlng = place.geometry.location;
			      icn = 'https://maps.gstatic.com/mapfiles/ms2/micons/parkinglot.png';
			      name = place.name;
			      // console.log([latlng, icn]);
			      createMarker(latlng, icn, name);
			    }
	  		}
		}
	}
	

});



