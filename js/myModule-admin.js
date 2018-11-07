var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Categoria-editar", {
				templateUrl:"partials/admin/CRUD/categoria-crud/categoria-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Usuarios", {
				templateUrl:"partials/admin/usuarioscrud.php",
				controller:"ofertaCtrl"
		})
    .when("/Categoria", {
				templateUrl:"partials/admin/CRUD/categoria-crud/categoria.php",
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

