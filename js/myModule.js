var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Registro de clase", {
				templateUrl:"partials/Activa.php",
				controller:"activaCtrl"
		})
		.when("/Actualizar datos", {
				templateUrl:"partials/Actualiza.php",
				controller:"actualizaCtrl"
		})
		.otherwise({
				templateUrl:"partials/main.php",
				controller:"mainCtrl"
		});
});

