routerApp.controller('ModalInstanceCtrl', function($scope, $uibModalInstance, album, albums, getService){
  

	  /*$scope.items = items;
	  $scope.selected = {
	    item: $scope.items[0]
	  };*/
	
	  //$scope.album;
	  console.log(album);
      $scope.album = album;
      $scope.albums = albums;
	  $scope.save = function () {
		// save the DB, send http request to POST
		  //$scope.artist
		  // if its empty on album we get it from the UI
		  console.log($scope.album)
		  // need to make choice and see if we do a put or post.
		  // if there is an ID we should, do PUT of none then POST
		  if($scope.album != undefined) {
			  if($scope.album.id) {
		  
			  getService.put($scope.album).then(function(d) { //2. so you can use .then()
				console.log(d.config.data); // object
				$scope.status = 'Updated!';
				  //$scope.albums = d.data;
				  //console.log($scope.albums);
			  	}, function (error) {
	              $scope.status = 'Unable to update: ' + error.message;
			  });
	  	  } else {
	  		  //console.log("boo");
	  		  // Here we need to say POST
	  		getService.post($scope.album).then(function(d) { //2. so you can use .then()
				console.log(d);
				// add response to $scope.albums perhaps so it refreshes UI
				$scope.albums.push(d.config.data);
				$scope.status = 'Added!';
				  //$scope.albums = d.data;
				  //console.log($scope.albums);
			  	}, function (error) {
	              $scope.status = 'Unable to update: ' + error.message;
			  });
	  	  }
	      } else {
	    	  // No data added on model then we must warn user.
	    	  //alert("Please enter some data");
	    	  // taken care of by form validation ng-form
	    	  return false;
	      }
	    $uibModalInstance.close($scope.id);
	  };

	  $scope.cancel = function () {
	    $uibModalInstance.dismiss('cancel');
	  };

});