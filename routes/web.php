<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')
->middleware();


//========================================= Rotas de usuarios =================================

Route::get('/perfil_user', 'controlerPrincipal@estilo')->name('perfil_user.estilo');
Route::get('/favorito', 'controlerPrincipal@vendidos')->name('favorito.vendidos');


//============================================= Rotas de Estilos e categoria das obras =========
Route::get('/categoria_obra','CategoriasController@create' )->name('categoria_obra.create');
Route::post('/categoria_obra/store','CategoriasController@store' );


Route::get('/estilo_obra','EstilosController@create' );
Route::post('/estilo_obra/store','EstilosController@store' );

//============================================= Rotas de Cadastro das obras ====================
Route::get('/info_obra','ObrasController@create' )->name('info_obra.create');
Route::post('/info_obra/store','ObrasController@store' );

//============================================= Rotas de Cadastro de artista ===================
Route::get('/info_artista','ArtistasController@create' )->name('info_artista.create');
Route::post('/info_artista/store','ArtistasController@store' );

Route::get('/telefone','TelefonesController@create' );
Route::post('/telefone/store','TelefonesController@store' );

//============================================= Rotas das obras ================================
Route::get('/index','controlerPrincipal@index' );
Route::get('/pinturas','controlerPrincipal@pinturas' );
Route::get('/fotografias','controlerPrincipal@fotografia' );
Route::get('/desenhos','controlerPrincipal@desenhos' );
Route::get('/prints','controlerPrincipal@prints' );
Route::get('/hq','controlerPrincipal@hq' );
Route::get('/escultura','controlerPrincipal@escultura' );
Route::get('/arquitetura','controlerPrincipal@arquitetura' );
Route::get('/politica_privacidade','controlerPrincipal@politica_privacidade' );
Route::get('/termos_servico','controlerPrincipal@termos_servico' );
Route::get('/sobre','controlerPrincipal@sobre' );
Route::get('/consultas','controlerPrincipal@Consultar_Obras' );

//============================================= Rotas para vendas ================================
Route::get('/carrinho','VendasController@create' );
Route::post('/carrinho/store','VendasController@store' );
Route::get('/dados','VendasController@dados' );
Route::get('/confirmar','VendasController@confirmar' );








