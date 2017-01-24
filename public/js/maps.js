var map;
var myLatLng;

$(document).ready(function(){
	geoLocationInit();
});


	function geoLocationInit(){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(success, fail);
		} else {
			alert("Browser not supported.");
		}
	}

	function success(position){
		
		var latval=position.coords.latitude;
		var lngval=position.coords.longitude;
		console.log([latval, lngval]);

		myLatLng = new google.maps.LatLng(latval, lngval);
		createMap(myLatLng);
		locateUser(latval, lngval);
		// nearbySearch(myLatLng, "police");
	}

	function fail(){
		alert("Getting Location Failed.");
	}


	// Create Map
	function createMap(myLatLng){
		map = new google.maps.Map(document.getElementById('map'), {
				center: myLatLng,
				zoom: 12
		});
		// User Marker
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'User\'s Location Here'
		});

	}

	// Nearby Marker
	function createMarker(latlng, icn, name) {
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: icn,
			title: name
		});
	}

	function locateUser(lat, lng){
		$.post('http://localhost/api/locateUser',{lat:lat, lng:lng}, function(match){
			console.log(match);
			$.each(match, function(i, val){
				var usrLatVal=val.lat;
				var usrLngVal=val.lng;
				var usrLatLng = new google.maps.LatLng(usrLatVal, usrLngVal);
				var usrIcn = 'https://s29.postimg.org/oqn59ev9j/taxi.png';
				createMarker(usrLatLng, usrIcn);
			});
		});
	}

	

	// Request
	// function nearbySearch(myLatLng, type){
	// 	var request = {
	// 	location: myLatLng,
	// 	radius: '3000',
	// 	types: [type]
	// };

	// service = new google.maps.places.PlacesService(map);
	// service.nearbySearch(request, callback);

	// function callback(results, status) {
	// 		// console.log(results)
	// 		if (status == google.maps.places.PlacesServiceStatus.OK) {
	// 		    for (var i = 0; i < results.length; i++) {
	// 		      var place = results[i];
	// 		      latlng = place.geometry.location;
	// 		      icn = 'https://maps.gstatic.com/mapfiles/ms2/micons/parkinglot.png';
	// 		      name = place.name;
	// 		      // console.log([latlng, icn]);
	// 		      createMarker(latlng, icn, name);	
	// 		    }
	//   		}
	// 	}
	// }
		
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});