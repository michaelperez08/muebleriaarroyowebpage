 var destinoSeleccionado;
 var myLatLngSarchi = {lat: 10.078084, lng: -84.353661};

 function initMap() {
 	var directionsService = new google.maps.DirectionsService;
 	var directionsDisplay = new google.maps.DirectionsRenderer;

 	var map = new google.maps.Map(document.getElementById('map'), {
 		center: new google.maps.LatLng(10.083628, -84.340894),
 		zoom: 12,
 		mapTypeId: google.maps.MapTypeId.ROADMAP
 	});
 	directionsDisplay.setMap(map);

 	var marker = new google.maps.Marker({
 		position: myLatLngSarchi,
 		map: map,
 		title: 'Local Sarchi!'
 	});

 	$("#btnCalcRuta").click(function(){
 		calculateAndDisplayRoute(directionsService, directionsDisplay);
 	});

 }

 function getLocation() {
 	if (navigator.geolocation) {
 		navigator.geolocation.getCurrentPosition(setPosition);
 	} else {
 		x.innerHTML = "Geolocation is not supported by this browser.";
 	}
 }

 function setPosition(position) {
 	latitudeActual = position.coords.latitude;
 	longitudeActual = position.coords.longitude;
 	posicionActual = {lat: latitudeActual, lng: longitudeActual};
 }

 function calculateAndDisplayRoute(directionsService, directionsDisplay) {
 	if(posicionActual != undefined){
 		directionsService.route({
 			origin: posicionActual,
 			destination: myLatLngSarchi,
 			travelMode: google.maps.TravelMode.DRIVING
 		}, function(response, status) {
 			if (status === google.maps.DirectionsStatus.OK) {
 				directionsDisplay.setDirections(response);
 			} else {
 				window.alert('Directions request failed due to ' + status);
 			}
 		});
 	}else{
 		Materialize.toast("Imposible acceder a la ubicacion actual", 4000);
 	}
 }
 window.onload = getLocation();
