var map;

function initMap() {

	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 9.917091880291503, lng: 78.1424909802915},
		zoom: 15,
		styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
	});

	var marker = new google.maps.Marker({

	    position: {lat: 9.9157429, lng: 78.141142},

		map: map,

	    title: 'Sabareesh and Sharmili are Here!',

	    icon: 'images/loc2.png'
	});

	var contentString = '<div id="content">'+
	      '<div id="siteNotice">'+
	      '</div>'+
	      '<h2 id="firstHeading" class="firstHeading">Welcome!</h2>'+
	      '<div id="bodyContent">'+
	      '<p>S V S V Subramaniam Pushpavalli Kalyana Mahal,' +
	      'DD Road, Pankajam Colony, Kamarajar Salai,' +
		  'Madurai, Tamil Nadu 625009, India</p>'+
	      '<p><a href="#rsvp"> RSVP </a>'+
	      '</p>'+
	      '</div>'+
	      '</div>';

	var infowindow = new google.maps.InfoWindow({
	   content: contentString,
	   maxWidth: 400
	});

	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});

}