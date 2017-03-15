$(document).foundation();

(function(){
	//console.log("working");
	
	//show more
	
	var showBut = document.querySelectorAll(".show");
	//console.log(showBut);
	var closeBut = document.querySelectorAll(".close");
	//console.log(closeBut);
	
	
	
	function displayInfo(e){
	
		//console.log("display");
		e.preventDefault();
		var whichBut = e.currentTarget.id;
		//console.log(whichBut);
		var butNum = whichBut.slice(4,5);
		//console.log(butNum);
		var displayThis = document.querySelector("#more"+butNum); 
		//console.log(displayThis);
		
		
		
		displayThis.style.display = "block";
		
		
		
		
		
	}
	
	function closeInfo(e){
		e.preventDefault();
		
		var closeBut = e.currentTarget.id;
		//console.log(closeBut);
		var butNum = closeBut.slice(5,6);
		//console.log(butNum);
		var closeThis = document.querySelector("#more"+butNum); 
		//console.log(displayThis);
		
		
		
		
		closeThis.style.display = "none";
		for(var b = 0; b<showBut.length; b++){
		showBut[b].style.display = "block";
		
		
		}
		
	}
	
	for(var a=0; a<showBut.length; a++){
		showBut[a].addEventListener("click", displayInfo,false);
		
	for (var c = 0; c<closeBut.length; c++){
		closeBut[c].addEventListener("click", closeInfo,false);
	}
	}
	
	//gallery
	
	$('#thumbNav li').on('click', function(){
		
		$.getJSON('admin/phpscripts/getBigImg.php', { images:this.id }, function(data){
			//console.log(data);

			$('.mainImage').attr('src','img/'+data.gal_img);
			
			
			$('.imageHolder p').text(data.gal_desc);
	
			$('.hidden').removeClass('hidden');
			
			
		});
		
		$('.closeGal').on('click', function(){
			$('.imageHolder').addClass('hidden');
		});
	});
	
	//map
	
	
	var map = new google.maps.Map(document.querySelector('.mapWrapper')),
		preload = document.querySelector(".preloadWrapper"),
		

		
		geocoder = new google.maps.Geocoder(),
		codeBut = document.querySelector('.codeBut'),

		
		directionsService = new google.maps.DirectionsService(),
		directionsDis,
		locations = [],

		marker = [],
		
		infoWind = new google.maps.InfoWindow({content:"To Chantry Island"}),
		
		mainInfoWind = [];
		
		
		
		
	function initMap() {
		
		var iconBase = 'http://maps.google.com/mapfiles/kml/pal2/',
			iconBase2 = 'http://maps.google.com/mapfiles/kml/pal3/';
		
				
			
   			
		
		
		locations[0] = { lat: 44.500146, lng: -81.373504 };

		directionsDis = new google.maps.DirectionsRenderer();
		directionsDis.setMap(map);

		map.setCenter({ lat: 44.4901, lng: -81.4039 });
		map.setZoom(12);

		marker[0] = new google.maps.Marker({
			position: { lat:44.4901, lng: -81.4039 },
			icon: iconBase2 + 'icon29.png',
			map: map,
			title: "Chantry Island"
		});
		
		
		
		marker[1] = new google.maps.Marker({
			position: { lat:44.500146, lng: -81.373504 },
			icon: iconBase + 'icon10.png',
			map: map,
			title: "Chantry Island Tour Base"
			
		});
		
		preload.classList.add('hidePreload');
		
		mainInfoWind[0] = new google.maps.InfoWindow({content:"Chantry Island Bird Sanctuary"});
		mainInfoWind[0].open(map,marker[0]);
		mainInfoWind[0].setPosition({lat:44.4901, lng: -81.4039});
		
		mainInfoWind[1] = new google.maps.InfoWindow({content:"Chantry Island Tours"});
		mainInfoWind[1].open(map,marker[1]);
		mainInfoWind[1].setPosition({lat:44.500146, lng: -81.373504});
		
		marker[0].addListener('click', function() {
          mainInfoWind[0].open(map,marker[0]);
        });
		
		marker[1].addListener('click', function() {
          mainInfoWind[1].open(map,marker[1]);
        });
		
	
		
		var polygonCoords = [
			{lat: 44.500288, lng: -81.422577},
			{lat: 44.503712, lng: -81.413471},
			{lat: 44.502531, lng: -81.397575},
			{lat: 44.498044, lng: -81.387972},
			{lat: 44.492020, lng: -81.393767},
			{lat: 44.485406, lng: -81.389462},
			{lat: 44.479735, lng: -81.400225},
			{lat: 44.482571, lng: -81.414464},
			{lat: 44.491194, lng: -81.427379},
			{lat: 44.500288, lng: -81.422577},
		];
		
		var ranShape = new google.maps.Polygon({
			paths: polygonCoords,
			strokeColor: '#344583',
			strokeOpacity: 1,
			strokeWeight: 2,
			fillColor: '#83c1bc',
			fillOpacity: 0.4
		});
		ranShape.setMap(map);
		

		
	}

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log('Please be patient, problem will be solved');
	}

	function handleError() {
		console.log('experiencing some problems');
	}

	function codeAddress() {
		var address = document.querySelector('.address').value;
		
		

		geocoder.geocode({ 'address' : address }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				// push location into array
				locations[1] = { lat: results[0].geometry.location.lat(),
									lng: results[0].geometry.location.lng()
								};

				map.setCenter(results[0].geometry.location);

				if (marker[1]) {
					marker[1].setMap(null);
					

					marker[1] = new google.maps.Marker({
						map: map,
						position: locations[0]
						
						
					});
					
		

					calcRoute(locations[0]);
				} 			

				else {
					console.log('Geocode was not successful for the following reason: ', status);
				}
			}

		});
		
	
	infoWind.setPosition(locations[0]);
	infoWind.open(map);
	
	for(var u = 0; u<mainInfoWind.length; u++){
		mainInfoWind[u].close(map);
	}
		
		

	}

	function calcRoute(codedLoc) {
		var request = {
			origin: locations[1],
			destination: locations[0],
			travelMode: google.maps.TravelMode.DRIVING
		};

		directionsService.route(request, function(response, status) {
			if (status === 'OK') {
				directionsDis.setDirections(response);
				computeDis(response, infoWind);
			}
			
			
		});
		
		
		function computeDis(result, infoWind) {
  var totalDist = 0,
      totalTime = 0,
  	  myroute = result.routes[0];
	  
  for (var i = 0; i < myroute.legs.length; i++) {
    totalDist += myroute.legs[i].distance.value;
    totalTime += myroute.legs[i].duration.value;
  }
  totalDist = totalDist / 1000.
  infoWind.setContent(infoWind.getContent() + "<br>distance=" + totalDist.toFixed(1) + " km"+ "<br>estimated time=" + (totalTime/60).toFixed(0) + " minutes<br>");
}

		
		
	}

	codeBut.addEventListener('click', codeAddress, false);





})();

