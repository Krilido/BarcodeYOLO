// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
var exampleApp = angular.module('starter', ['ionic','ngCordova'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if(window.cordova && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
    if(window.Connection) {
        if(navigator.connection.type == Connection.NONE) {
            $ionicPopup.confirm({
                title: "Internet Disconnected",
                content: "The internet is disconnected on your device."
            })
        .then(function(result) {
            if(!result) {
                ionic.Platform.exitApp();
            }
        });
        }
    }
  });
})


exampleApp.controller("ExampleController", function($scope, $cordovaBarcodeScanner, $http) {
    var map = L.map('map');
            
/*    
    $scope.lokasi = function(){
        map.locate({setView: true, timeout: 10000, maxZoom: 16, enableHighAccuracy: true});
            function onLocationError(e){
              alert(e.message);
            }
            function onLocationFound(e) {
                var radius = e.accuracy / 2;
                // alert(e.latlng);
                $scope.pos=e.latlng;
                alert(e.latlng);
      }
      map.on('locationfound', onLocationFound);
      map.on('locationerror', onLocationError);
    }
  });
*/
    $scope.scanBarcode = function() {
        $cordovaBarcodeScanner.scan().then(function(imageData) {
            $scope.data=imageData.text;
            // $scope.url='10.151.43.17/test/index.php';  
            // alert(imageData.text);
            // $http.post('10.151.43.17/test/index.php', data);


            map.locate({setView: true, timeout: 10000, maxZoom: 16, enableHighAccuracy: true});
            function onLocationError(e){
              alert(e.message);
            }
            function onLocationFound(e) {
                var radius = e.accuracy / 2;
                // alert(e.latlng);
                $scope.pos=e.latlng;
                console.log(e.latlng)
              $http({
                  method: 'POST',
                  url: 'http://192.168.0.107/test/index.php',
                  data: {'lng': e.latlng.lng,'lat': e.latlng.lat,'message': imageData.text}
              })
          // $http.post('http://10.151.43.101/test/index.php', {data})
              .success(function(data, status, headers, config){
                  

                  alert("inserted Successfully");
              }).
              error(function(data, status, headers, config) {
                  alert("inserted unSuccessfully");
              // called asynchronously if an error occurs
              // or server returns response with an error status.
              });
            }
            map.on('locationfound', onLocationFound);
            map.on('locationerror', onLocationError);
            alert(imageData.text);
            // console.log("Barcode Format -> " + imageData.format);
            // console.log("Cancelled -> " + imageData.cancelled);
        }, function(error) {
            console.log("An error happened -> " + error);
        });
    };
 
});

/*

var R = 6371; // km
var dLat = (lat2-lat1).toRad();
var dLon = (lon2-lon1).toRad();
var lat1 = lat1.toRad();
var lat2 = lat2.toRad();

var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c;


navigator.geolocation.getCurrentPosition(locationHandler);

 function locationHandler(position)
 {
   var lat = position.coords.latitude;
   var lng = position.coords.longitude;
 }




module.controller('GeoCtrl', function($cordovaGeolocation) {

  var posOptions = {timeout: 10000, enableHighAccuracy: false};
  $cordovaGeolocation
    .getCurrentPosition(posOptions)
    .then(function (position) {
      var lat  = position.coords.latitude
      var long = position.coords.longitude
    }, function(err) {
      // error
    });


  var watchOptions = {
    frequency : 1000,
    timeout : 3000,
    enableHighAccuracy: false // may cause errors if true
  };

  var watch = $cordovaGeolocation.watchPosition(watchOptions);
  watch.then(
    null,
    function(err) {
      // error
    },
    function(position) {
      var lat  = position.coords.latitude
      var long = position.coords.longitude
  });


  watch.clearWatch();
  // OR
  $cordovaGeolocation.clearWatch(watch)
    .then(function(result) {
      // success
      }, function (error) {
      // error
    });
});





exampleApp.controller("ExampleController",['$scope', '$http',  function(scope, $cordovaBarcodeScanner) {
    $scope.scanBarcode = function() {
      $cordovaBarcodeScanner.scan().then(function(imageData) {
        $scope.data=imageData.text;
        $scope.url='10.151.43.17/test/index.php';  
        $http.post(url, data);
        // error(function(data, status) {
          // $scope.data = data || "Request failed";
          // $scope.status = status;
          // });          
        },
      function(error) {
        console.log("An error happened -> " + error);
      });
    };
 
}]);
*/