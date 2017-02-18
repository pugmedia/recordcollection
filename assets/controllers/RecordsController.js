

routerApp.controller('RecordsController', function($scope,getService, $uibModal, $log){
	$scope.albums = [];
	
	$scope.id;
	
	$scope.integerval = /^\d*$/;
	
	getService.async().then(function(d) { //2. so you can use .then()
		//console.log(d);
	    $scope.albums = d.data;
	    //console.log($scope.albums);
	  });  
	  
	  $scope.deleteRow = function(album, table_id) {

		  getService.delete(table_id).then(function(d) { 
				console.log(d);
			  });
		  console.log(album);
		  console.log($scope.albums.indexOf(album));

		  $scope.albums.splice($scope.albums.indexOf(album),1);
		  console.log($scope.albums);
		  console.log(table_id);
		  // we need ID of item deleted not index of table.
		 
	  };
	  

	  $scope.open = function (album) {
		// got album that was clicked on object then sent it to resolve so it can be on 
		  // other controller ModalInstaceCtrl
		 
		$scope.album = album;
		console.log($scope.album);
		// get album and populate it on the ng-modals on modal
	    var modalInstance2 = $uibModal.open({
	      templateUrl: 'myModalContent.html',
	      controller: 'ModalInstanceCtrl',
	      size: 'sm',
	      resolve: {
	        album: function () {
	          return $scope.album;
	          //console.log(album);
	        },
	        albums: function () {
	        	return $scope.albums
	        }
	      }
	    });

	    modalInstance2.result.then(function () {
	    }, function () {
	      $log.info('Modal dismissed at: ' + new Date());
	    });
	  };

	  
	  
});




