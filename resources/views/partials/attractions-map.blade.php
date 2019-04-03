<div class="container-fluid attractions-main">
  <div class="row p-0 m-0">
    <div class="col col-md-3 attractions p-3">
      <h3>Top 10 Attractions</h3>
      <ol>
        <li><a href="https://www.google.com/maps/place/Desert+Botanical+Garden/@33.4634597,-111.9469158,17z/data=!3m1!4b1!4m5!3m4!1s0x872b0953082d9e21:0x215ce99d25055d17!8m2!3d33.4634597!4d-111.9447271" target="_blank">Desert Botanical Garden</a><span class="distance" target="_blank">1mi</span></li>
        <li><a href="https://www.google.com/maps/place/Old+Town+Scottsdale,+Scottsdale,+AZ/@33.4803423,-111.9438015,14z/data=!3m1!4b1!4m5!3m4!1s0x872b0bbdd0eaf855:0x14177ccfda2d1e4e!8m2!3d33.4837146!4d-111.9187857" target="_blank">Old Town</a><span class="distance" target="_blank">1.2mi</span></li>
        <li><a href="https://www.google.com/maps/place/El+Dorado+Park/@33.4670609,-111.9168342,17z/data=!3m1!4b1!4m5!3m4!1s0x872b097cd0d0fc83:0xd8c5eeaae484cd66!8m2!3d33.4670609!4d-111.9146455" target="_blank">El Dorado Park</a><span class="distance" target="_blank">1.3mi</span></li>
        <li><a href="https://www.google.com/maps/place/Arizona+Country+Club/@33.4818082,-111.960322,17z/data=!3m1!4b1!4m5!3m4!1s0x872b0c0b164edf43:0x47a7465f29abb741!8m2!3d33.4818082!4d-111.9581333" target="_blank">Arizona Country Club</a><span class="distance" target="_blank">1.39mi</span></li>
        <li><a href="https://www.google.com/maps/place/Kitchen+56/@33.4886297,-111.9625914,17z/data=!3m1!4b1!4m5!3m4!1s0x872b0c731f2e5863:0x77853501d662f811!8m2!3d33.4886297!4d-111.9604027" target="_blank">Kitchen 56</a><span class="distance" target="_blank">1.72mi</span></li>
        <li><a href="https://www.google.com/maps/place/Phoenix+Zoo/@33.4511924,-111.9502256,17z/data=!3m1!4b1!4m5!3m4!1s0x872b0eb2c45e7b67:0x64a75aff2eea1970!8m2!3d33.4511924!4d-111.9480369" target="_blank">Phoenix Zoo</a><span class="distance" target="_blank">1.75mi</span></li>
        <li><a href="https://www.google.com/maps/place/Papago+Golf+Course/@33.461207,-111.9640462,17z/data=!3m1!4b1!4m5!3m4!1s0x872b0eaef1b69cc9:0x16fe707fbcbe07b9!8m2!3d33.461207!4d-111.9618575" target="_blank">Papago Golf Course</a><span class="distance" target="_blank">1.77mi</span></li>
        <li><a href="https://www.google.com/maps/place/Phoenix+Municipal+Stadium/@33.449186,-111.9566057,17z/data=!3m1!4b1!4m5!3m4!1s0x872b0eb491cf2e4f:0x69fbf3b9d83b3e0b!8m2!3d33.449186!4d-111.954417" target="_blank">Phoenix Municipal Stadium</a><span class="distance" target="_blank">2.13mi</span></li>
        <li><a href="https://www.google.com/maps/place/Rolling+Hills+Golf+Course/@33.4449783,-111.9503832,17z/data=!3m1!4b1!4m5!3m4!1s0x872b09359450b5fb:0xeacd0eb97667cfb6!8m2!3d33.4449783!4d-111.9481945" target="_blank">Rolling Hills Golf Course</a><span class="distance" target="_blank">2.14mi</span></li>
        <li><a href="https://www.google.com/maps/place/In-N-Out+Burger/@33.434903,-111.9276157,17z/data=!3m1!4b1!4m5!3m4!1s0x872b091923a3772d:0x6cb5d594c48a458!8m2!3d33.434903!4d-111.925427" target="_blank">In-N-Burger</a><span class="distance">2.86mi</span></li>
      </ol>
    </div>
    <div class="col col-md-9" id="attractions-map"></div>
  </div>
</div>

<script>
    var mapStyle = [
      {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
              "saturation": 36
            },
          {
            "color": "#333333"
          },
          {
            "lightness": 40
          }
        ]
      },
      {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "visibility": "on"
          },
          {
            "color": "#ffffff"
          },
          {
            "lightness": 16
          }
        ]
      },
      {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#fefefe"
          },
          {
            "lightness": 20
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#fefefe"
          },
          {
            "lightness": 17
          },
          {
            "weight": 1.2
          }
        ]
      },
      {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          },
          {
            "lightness": 20
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          },
          {
            "lightness": 21
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dedede"
          },
          {
            "lightness": 21
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#a5e7be"
          },
          {
            "saturation": "9"
          },
          {
            "lightness": "-17"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#ffffff"
          },
          {
            "lightness": 17
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#ffffff"
          },
          {
            "lightness": 29
          },
          {
            "weight": 0.2
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          },
          {
            "lightness": 18
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          },
          {
            "lightness": 16
          }
        ]
      },
      {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f2f2f2"
          },
          {
            "lightness": 19
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e9e9e9"
          },
          {
            "lightness": 17
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#11ceea"
          }
        ]
      }
    ];

    function initMap() {

      /* Custom icons */
      var icon = [
        '<?php echo get_bloginfo("stylesheet_directory"); ?>/assets/images/icons/home-map-icon.png'
      ];
      var i;
      for(i = 1; i < 11; i++) {
        icon[i] = '<?php echo get_bloginfo("stylesheet_directory"); ?>/assets/images/icons/marker-' + i + '.png';
      }

      /* Center init */
      var center = {lat: 33.4634597, lng: -111.935395};
      var map = new google.maps.Map(document.getElementById('attractions-map'), {
        zoom: 13,
        center: center,
        styles: mapStyle
      });
      var locations = [
        { locName: 'Iowa House', position: new google.maps.LatLng(33.473566,-111.935395)},
        { locName: 'Desert Botanical Garden', position: new google.maps.LatLng(33.4634597,-111.9469158)},
        { locName: 'Old Town', position: new google.maps.LatLng(33.4803423,-111.9438015)},
        { locName: 'El Dorado Park', position: new google.maps.LatLng(33.4670609,-111.9168342)},
        { locName: 'Arizona Country Club', position: new google.maps.LatLng(33.4818082,-111.960322)},
        { locName: 'Kitchen 56', position: new google.maps.LatLng(33.4886297,-111.9625914)},
        { locName: 'Phoenix Zoo', position: new google.maps.LatLng(33.4511924,-111.9502256)},
        { locName: 'Papago Golf Course', position: new google.maps.LatLng(33.461207,-111.9640462)},
        { locName: 'Phoenix Municipal Stadium', position: new google.maps.LatLng(33.449186,-111.9566057)},
        { locName: 'Rolling Hills Golf Course', position: new google.maps.LatLng(33.4449783,-111.9503832)},
        { locName: 'In-N-Burger', position: new google.maps.LatLng(33.434903,-111.9276157)}
      ];
      var marker;
      var infoWindows = new Array();
      var infowindow = new google.maps.InfoWindow();
       // Create markers.
      locations.forEach(function(location,index) {
        marker = new google.maps.Marker({
          position: location.position,
          icon: icon[index],
          animation: google.maps.Animation.DROP,
          map: map,
          title: location.locName
        });
        infoWindows.push(marker);
        google.maps.event.addListener(marker, 'click', function(){
          infowindow.close(); // Close previously opened infowindow
          infowindow.setContent( "<div class='infowindow'><h4 style='color:#004b8d;padding:10px;font-size:15px;'>"+ location.locName +"</h4></div>");
          infowindow.open(map, infoWindows[index]);
        });
      });

      function placeMarker( loc )
      {
        var latLng = new google.maps.LatLng( loc[1], loc[2]);
        var marker = new google.maps.Marker({
          position : latLng,
          map      : map
        });
        google.maps.event.addListener(marker, 'click', function(){
          infowindow.close(); // Close previously opened infowindow
          infowindow.setContent( "<div id='infowindow'>"+ loc[0] +"</div>");
          infowindow.open(map, marker);
        });
      }

      function moveToLocation(mapV, latV, lngV){
        var center = { lat: latV, lng: lngV };
        mapV.setCenter(center);
      }

      if (jQuery(window).width() < 993) {
        // console.log('Less than 992');
        // moveToLocation(map, 33.487566,-111.935395);
      }
      else {
        // console.log('More than 992');
        // moveToLocation(map, 33.496566,-112.077711);
      }

      jQuery(window).resize(function() {
        // (the 'map' here is the result of the created 'var map = ...' above)
        //google.maps.event.trigger(map, "resize");
      });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAml-SZoTGxLG7Bz79rfrppjR0rSaLq1TI&callback=initMap"></script>
