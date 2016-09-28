    function initialize() {
     var latlng = new google.maps.LatLng(50.454441, 30.3514082);
     var settings = {
         zoom: 14,
         center: latlng,
         mapTypeControl: true,
         mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
         navigationControl: true,
         scrollwheel: false,
         navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
         mapTypeId: google.maps.MapTypeId.ROADMAP
     };
     var map = new google.maps.Map(document.getElementById("map__canvas"), settings);
     var companyPos = new google.maps.LatLng(50.454441, 30.3514082);     
     var companyLogo = new google.maps.MarkerImage('../img/section0-img-239x483.png',
         new google.maps.Size(50,50),
         new google.maps.Point(0,0),
         new google.maps.Point(50,50)
     );
     var companyShadow = new google.maps.MarkerImage('img/logo_shadow.png',
         new google.maps.Size(50,50),
         new google.maps.Point(0,0),
         new google.maps.Point(65, 50)
     );
     var companyPos = new google.maps.LatLng(50.454441, 30.3514082);
     var companyMarker = new google.maps.Marker({
         position: companyPos,
         map: map,
         icon: companyLogo,
         shadow: companyShadow,
         title:"Rigid Clouds",
     });
     var companyMarker = new google.maps.Marker({
         position: companyPos,
         map: map,
         //icon: companyImage,
         //icon: companyLogo,
         shadow: companyShadow,
         title:"Rigid Clouds",
         zIndex: 4
     });
    }