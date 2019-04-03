<div class="container-fluid property-location p-0">
  <div class="map-address text-left">
    <h2>Property Location</h2>
    <p>
      6738 E Oak St<br/>
      Scottsdale, AZ 85257<br/>
      p: <a href="tel:515-338-7890">515-338-7890</a>
      e: <a href="mailto:matts@email.com">matts@email.com</a>
    </p>
  </div>
  <div id="map">
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
      var icon = '<?php echo get_bloginfo("stylesheet_directory"); ?>/assets/images/icons/home-map-icon.png';
      var center = {lat: 33.473566, lng: -111.935395};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: center,
        styles: mapStyle
      });
      var locations = [
        { locName: 'Iowa House', position: new google.maps.LatLng(33.473566,-111.935395)}
      ];
      var marker;
      var infoWindows = new Array();
      var infowindow = new google.maps.InfoWindow();
       // Create markers.
      locations.forEach(function(location,index) {
        marker = new google.maps.Marker({
          position: location.position,
          icon: icon,
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
        console.log('Less than 992');
        moveToLocation(map, 33.487566,-111.935395);
      }
      else {
        console.log('More than 992');
        moveToLocation(map, 33.496566,-112.077711);
      }

      jQuery(window).resize(function() {
        // (the 'map' here is the result of the created 'var map = ...' above)
        //google.maps.event.trigger(map, "resize");
      });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAml-SZoTGxLG7Bz79rfrppjR0rSaLq1TI&callback=initMap"></script>
