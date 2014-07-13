var fakeLatitude;
var fakeLongitude;
var postcode;
var geocoder;
var located;

function initialise(){	
	// check cookie
	located = $.cookie('moggy_cookie'); 
	if(typeof located == 'undefined'){
		findMe();
	}
	else {
		changeLink(located);
	}
}

function findMe(){
if (navigator.geolocation) 
	{
		navigator.geolocation.getCurrentPosition( function (position) {  
			getGoogleMapsData(position.coords.latitude,position.coords.longitude);
 		}, // next function is the error callback
 			function (error)
 			{
 				switch(error.code) 
 				{
       				case error.TIMEOUT:
 						alert ('Timeout');
 						break;
 					case error.POSITION_UNAVAILABLE:
 						alert ('Position unavailable');
 						break;
 					case error.PERMISSION_DENIED:
 						alert ('Permission denied');
 						break;
 					case error.UNKNOWN_ERROR:
 						alert ('Unknown error');
 						break;
 				}
 			}
 		);
 	} 
 	else 
 	{
	  fakeLatitude = 51.820385;
	  fakeLongitude = -2.263261;
	  getGoogleMapsData(fakeLatitude,fakeLongitude);
	}  
}

function getGoogleMapsData(latitude,longitude){
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(latitude,longitude);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      	if (status == google.maps.GeocoderStatus.OK) {
      		 if (results[1]) {
          		 var indice=0;
          		 for (var k=0;k<results.length;k++){
	          		 if(results[k].types[0]=='postal_code_prefix'){
		          		 indice = k;
		          		 break;
	          		 }
          		 }
      		 }
      		 for(var i=0;i<results[k].address_components.length; i++){
          		 if(results[k].address_components[i].types[0] == 'postal_code_prefix'){
	          		 postalcode = results[k].address_components[i];
		      		 postcode = postalcode.long_name;
		      		 $.cookie('moggy_cookie', postcode);
		      		 changeLink(postcode);
		      		 break;
		        }
		     }

      } else {
        alert('Geocoder failed due to: ' + status);
      }
    });
}		
		
function changeLink(postcode){
	$('nav ul li a').each(function( index ){
		var a_href = $(this).attr('href');
		a_href = a_href.replace('all',postcode)
		$(this).attr('href',a_href);
	});
}
		

$(document).ready(function(){
	initialise();
});

