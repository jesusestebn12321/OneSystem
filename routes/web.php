<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/noPermission', function(){
    return view('permission.noPermission');
});

Route::group(['middleware'=>['authen','rol'],'rol'=>['1']],function(){

	Route::get('/MyAccount/Index',['as'=>'manageUser-index', 'uses'=>'UserController@index'] );

	//--------------------------------------------------- CRUD Productos -----------------------------------------------------//  

	Route::get('/Products/MyArticles/Index',['as'=>'manageArticulos', 'uses'=>'ProductoUserController@index']);
	Route::post('/Products/MyArticles/Store',['as'=>'manageProducto-store', 'uses'=>'ProductoUserController@store']);
	Route::get('/Products/MyArticles/Destroy/{id}',['as'=>'manageProducto-destroy', 'uses'=>'ProductoUserController@destroy']);
	

	Route::get('/Products/Articles/Show/{id}',['as'=>'manageProducto-show', 'uses'=>'ProductoUserController@show']);
	
	// Route::get('/Home/Producto/Show/{id}',['as'=>'manageProducto-ver', 'uses'=>'ProductoImagenController@show']);
	

	Route::get('/Products/MyArticles/Create',['as'=>'manageProducto-create', 'uses'=>'ProductoUserController@create']);

	Route::get('/Products/MyArticles/Edit/{id}',['as'=>'manageProducto-edit', 'uses'=>'ProductoController@edit']);
	Route::get('/Products/MyArticles/Update/{id}',['as'=>'manageProducto-update', 'uses'=>'ProductoController@update']);
	

	//---------------------------------------------- Fin CRUD Productos ------------------------------------------------------//

	//------------------------------------------------- Productos Status -----------------------------------------------------//
		//----------------------------------------- Productos Pausados --------------------------------------------------// 
	Route::get('/Products/MyArticles/Slow/Index',['as'=>'manageArticuloPausado', 'uses'=>'ProductoUserController@indexP']);
	
	Route::get('/Products/MyArticles/Active/{id}',['as'=>'manageArticulo-activar', 'uses'=>'StatusController@activar']);
	Route::get('/Products/MyArticles/Slow/{id}',['as'=>'manageArticulo-pausar', 'uses'=>'StatusController@pausar']);
	
		//---------------------------------- Fin de Productos Pausados -------------------------------------------//
	//------------------------------------------ Productos Compras ---------------------------------------------------//
	
	//----------------------------------------------- Mensajes ----------------------------------------------------------//
	Route::get('/Products/MyArticles/Messages/Index',['as'=>'manageMensajes', 'uses'=>'MensajesController@index']);
	Route::get('/Products/MyArticles/Messages/Status/{id}',['as'=>'manageMensajes-status', 'uses'=>'MensajesController@status']);


	//---------------------------------------------- fin Mensajes ----------------------------------------------------------//

	//----------------------------------------------- Configuraciones ----------------------------------------------------------//
	Route::get('/Perfile/Config/Index',['as'=>'manageConfig', 'uses'=>'Auth\ConfigAuthController@index']);


	//---------------------------------------------- fin Configuraciones ----------------------------------------------------------//

	Route::get('/Products/MyArticles/Carts',['as'=>'manageCarrito','uses'=>'ComprarUserController@index']);
	Route::get('/Products/MyArticles/Purchase/{id}',['as'=>'manageComprar','uses'=>'ComprarUserController@comprar']);


	
	

	Route::get('/Products/MyArticles/Sold',['as'=>'manageArticuloVendidos','uses'=>'ProductoUserController@indexV']);

	Route::get('/Products/MyArticles/Sold-Purchase',['as'=>'manageArticulo-comprado','uses'=>'StatusController@comprado']);

	//--------------------------------------- Fin de Productos Compras ----------------------------------------------//

	// ----------------------------------------- Fin Productos Status --------------------------------------------//


	Route::post('/Products/MyArticles/show/Post/{id}',['as'=>'managePost-create', 'uses'=>'PostController@update'] );


});

Route::group(['middleware'=>['authen','rol'],'rol'=>['0']],function(){

	Route::get('/Admin/Index',['as'=>'manageAdmin-index', 'uses'=>'AdminController@index'] );
	Route::get('/Admin/Perfile/Config/Index',['as'=>'manageConfig-A', 'uses'=>'Auth\ConfigAuthController@index']);
	
	Route::get('/Admin/Category/Index',['as'=>'manageCategoria-A', 'uses'=>'categoriaController@index']);
	Route::post('/Admin/Category/Store',['as'=>'manageCategoria-A-store', 'uses'=>'categoriaController@store']);
	Route::get('/Admin/Category/UpDate/{id}',['as'=>'manageCategoria-A-edit', 'uses'=>'categoriaController@edit']);
	Route::get('/Admin/Category/Destroy/{id}',['as'=>'manageCategoria-A-destroy', 'uses'=>'categoriaController@destroy']);
	
	Route::get('/Admin/UserActive/Index',['as'=>'manageUserActivo-A', 'uses'=>'UserStatuController@indexA']);

	Route::get('/Admin/UserSlow/Index',['as'=>'manageUserPausado-A', 'uses'=>'UserStatuController@indexP']);


});


