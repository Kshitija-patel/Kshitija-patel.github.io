var map;

function initializeMap(){
    var myLatLng = {lat: 50, lng: 50};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 2,
        center: myLatLng
    });
}
var marker;

window.onload = function() {
    document.getElementById('myForm').addEventListener('submit', function(event){
        event.preventDefault();
        var regexExp = /^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/;
        var ipAddress = document.getElementById('ipAddress').value;
        if(!regexExp.test(ipAddress)) {
            alert('Invalid Ip Address');
        } else {
            var oReq = new XMLHttpRequest();
            oReq.addEventListener("load", function(response) {
                var responseData = JSON.parse(response.target.response);
                if(responseData.status == "success") {
                    if(marker)
                        marker.setMap(null);
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(responseData.lat, responseData.lon),
                        title: ipAddress,
                        map:map
                    }); 
                    var contentString = '<div id="content">'+
                        '<h3>IP: ' + responseData.query + '</h3>' +
                        '<h4>' + responseData.isp + '</h4>' +
                        '<p>Organization: <strong>' + responseData.org + '</strong></p>' +
                        '<p>Location: <strong>' + responseData.city + ', ' + responseData.regionName + ', ' + responseData.country + ', ' + responseData.zip + '</strong></p>' +
                        '<p>Timezone: <strong>' + responseData.timezone + '</strong></p>' +
                        '</div>';
        
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                      });
                    map.setCenter(marker.getPosition());  
                    
                    document.getElementById("ipaddress").innerHTML= responseData.query;
                    document.getElementById("country").innerHTML= responseData.country;
                    document.getElementById("state").innerHTML= responseData.regionName;
                    document.getElementById("city").innerHTML= responseData.city;
                    document.getElementById("zip").innerHTML= responseData.zip;
                    document.getElementById("timezone").innerHTML= responseData.timezone;
                    document.getElementById("long").innerHTML= responseData.lon;
                    document.getElementById("lati").innerHTML= responseData.lat;
                } else {
                    alert("Something went wrong! Please check your IP Address!");
                } 
            });
            oReq.open("GET", "http://ip-api.com/json/"+ipAddress);
            oReq.send();
        }
        return false;
    });
};
