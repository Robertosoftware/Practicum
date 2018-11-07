var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Registro de clase", {
				templateUrl:"partials/clase.php",
				controller:"gameCtrl"
		})
    .when("/Usuarios", {
				templateUrl:"partials/admin/usuarioscrud.php",
				controller:"ofertaCtrl"
		})
		.when("/Oferta", {
				templateUrl:"partials/admin/oferta.php",
				controller:"ofertaCtrl"
		})
		.otherwise({
				templateUrl:"partials/admin/main-admin.php",
				controller:"mainCtrl"
		});
});

