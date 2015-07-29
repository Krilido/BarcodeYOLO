angular.module('starter.controllers', [])

.controller('DashCtrl', function($scope) {})

.controller('ChatsCtrl', function($scope, Chats) {
  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //
  //$scope.$on('$ionicView.enter', function(e) {
  //});

  $scope.chats = Chats.all();
  $scope.remove = function(chat) {
    Chats.remove(chat);
  };
})

.controller('ChatDetailCtrl', function($scope, $stateParams, Chats) {
  $scope.chat = Chats.get($stateParams.chatId);
})

.controller('AccountCtrl', function($scope) {
  $scope.settings = {
    enableFriends: true
  };
})




.controller('LoginCtrl', function($scope, $state, $ionicPopup, $http) {
  $scope.data = {};
  $scope.login = function(data) {
    var string = cordova.plugins.uid.IMEI;
    $http({
                  method: 'POST',
                  url: 'http://192.168.0.117/test/index.php',
                  data: {'nik': data.nik,'password': data.password, 'option': 'login', 'imei': string}
              })
    .success(function(data, status, headers, config){
            // alert("inserted Successfully");
            alert(data);
            if(data['status'] == "0000" ){
                alert("anda berhasil login!");
                $state.go('tab.dash', {}, {reload: true});

            }
            if(data['status'] == "212"){
                alert("Password dan Username yang Anda masukkan salah!");
                $state.go('tab.login', {}, {reload: true});
            }            
    }).
    error(function(data, status, headers, config) {
                  
                  if(data == null){
                      alert("data yang anda isikan kosong atau periksa sambungan Internet dan GPS anda.!");
                      $state.go('tab.login', {}, {reload: true});
                  }
                  
              // called asynchronously if an error occurs
              // or server returns response with an error status.
              });
  
  };

  $scope.regis = function(){
    $state.go('tab.register', {}, {reload: true});
  };
})



.controller('RegisCtrl', function($scope, $state, $ionicPopup, $http) {
  $scope.data = {};

  $scope.register = function(data) {
    var string = cordova.plugins.uid.IMEI;
    $http({
                  method: 'POST',
                  url: 'http://192.168.0.117/test/index.php',
                  data: {'imei':string, 'option': 'daftar', 'NIK': data.nik, 'nama': data.nama, 'password': data.password, 'jabatan': data.jabatan, 'alamat': data.alamat}
              })
    .success(function(data, status, headers, config){
        if(data['status'] == "0000"){    
            alert("Anda telah berhasil registrasi");            
            $state.go('tab.dash', {}, {reload: true});
        }
        if(data['status'] == "313"){    
            alert("HP anda telah terdaftar");            
            $state.go('tab.login', {}, {reload: true});
        }
        else{
            alert(data);
            $state.go('tab.register', {}, {reload: true});
        }
      }).
    error(function(data, status, headers, config) {
                  if(data == null){
                    alert("data yang anda isikan kosong");
                  }
                  else{
                  alert("registrasi gagal periksa sambungan Internet dan GPS anda.");
              }
              // called asynchronously if an error occurs
              // or server returns response with an error status.
              });
  };
})
/*
.controller("DashCtrl", function($scope, $cordovaBarcodeScanner, $http){
  $scope.regis = function(){
    $state.go('tab.register', {}, {reload: true});
  };
})
*/

.controller("DashCtrl", function($scope, $cordovaBarcodeScanner, $http) {
    $scope.data = {};
    var map = L.map('map');
            

    $scope.scanBarcode = function() {
        $cordovaBarcodeScanner.scan().then(function(imageData) {
            $scope.data=imageData.text;
            // $scope.url='10.151.43.17/test/index.php';  
            // alert(imageData.text);
            // $http.post('10.151.43.17/test/index.php', data);


            map.locate({setView: true, timeout: 10000, maxZoom: 16, enableHighAccuracy: true});
            function onLocationError(e){
              alert(e.message);
              alert('tolong hidupkan fungsi Location HP anda');
              map.off('locationfound', onLocationFound);
            }
            function onLocationFound(e) {
                var radius = e.accuracy / 2;
                // alert(e.latlng);
                $scope.pos=e.latlng;
                console.log(e.latlng)
                var string = cordova.plugins.uid.IMEI;
              $http({
                  method: 'POST',
                  url: 'http://192.168.0.117/test/index.php',
                  data: {'option':'barcode','lng': e.latlng.lng,'lat': e.latlng.lat,'message': imageData.text,'imei': string}
              })
          // $http.post('http://10.151.43.101/test/index.php', {data})
              .success(function(data, status, headers, config){
                  alert("inserted Successfully");
                  map.off('locationfound', onLocationFound);
              }).
              error(function(data, status, headers, config) {
                  alert("inserted unSuccessfully");
                  map.off('locationfound', onLocationFound);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
              });
            }
            map.on('locationfound', onLocationFound);
            map.on('locationerror', onLocationError);
          },
            // alert(imageData.text);
            // console.log("Barcode Format -> " + imageData.format);
            // console.log("Cancelled -> " + imageData.cancelled);
        function(error) {
            alert("An error happened -> " + error);
        });
    };
 
});

