var routerApp = angular.module('routerApp', ['ui.router', 'ui.bootstrap', 'datatables']);

routerApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/home');
    
    $stateProvider
        
        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: '../../application/views/templates/partial-home.html'
        })
        
        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('about', {
            // we'll get to this in a bit       
        })
        
        .state('records', {
        	// Get items from DB
        	url: '/records',
        	templateUrl: '../../application/views/templates/records_list.html',
        	controller: 'RecordsController'
        });
        
});

routerApp.factory('getService', function($http) {
	
	  return {
	    async: function() {
	      return $http.get('../api/records/index');
	    },
	    getone: function() {
	      return $http.get('../api/records/index/', artist);
	    },
	    put: function(album) {
	      return $http.put('../api/records/index/', album);
	    },
	    post: function(album) {
		  return $http.post('../api/records/index/', album);
		},
		delete: function(artist) {
		  //return $http.delete('../api/records/index/'+ id);
		  return $http.delete('../api/records/index/'+ artist);
		}
	  };
});

routerApp.directive('stringToNumber', function() {
	  return {
		    require: 'ngModel',
		    link: function(scope, element, attrs, ngModel) {
		      ngModel.$parsers.push(function(value) {
		        return '' + value;
		      });
		      ngModel.$formatters.push(function(value) {
		        return parseFloat(value);
		      });
		    }
		  };
		});



