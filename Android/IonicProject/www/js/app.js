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
  });
})


/*
$http.post("server/insert.php",{'fstname': $scope.newFriend.fname, 'lstname': $scope.newFriend.lname})
        .success(function(data, status, headers, config){
            console.log("inserted Successfully");
        });
*/
exampleApp.controller("ExampleController", function($scope, $cordovaBarcodeScanner, $http) {
 
    $scope.scanBarcode = function() {
        $cordovaBarcodeScanner.scan().then(function(imageData) {
            $scope.data=imageData.text;
            
            // $scope.url='10.151.43.17/test/index.php';  
            // alert(imageData.text);
            // $http.post('10.151.43.17/test/index.php', data);

                $http({
                    method: 'POST',
                    url: 'http://192.168.0.102/test/index.php',
                    data: {'message': imageData.text}
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
            alert(imageData.text);
            // console.log("Barcode Format -> " + imageData.format);
            // console.log("Cancelled -> " + imageData.cancelled);
        }, function(error) {
            console.log("An error happened -> " + error);
        });
    };
 
});



/*
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