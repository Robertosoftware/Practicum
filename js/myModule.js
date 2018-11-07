var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Activa", {
				templateUrl:"partials/Activa.php",
				controller:"activaCtrl"
		})
		.when("/Actualiza", {
				templateUrl:"partials/Actualiza.php",
				controller:"actualizaCtrl"
		})
		.otherwise({
				templateUrl:"partials/main.php",
				controller:"mainCtrl"
		});
});

