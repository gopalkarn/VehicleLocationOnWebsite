function loadmap() {
	    var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 28.2096, lng: 83.9856},
                zoom: 10
        });
        var marker = new google.maps.Marker({position: {lat: 28.2096, lng: 83.9856}, map: map});
}