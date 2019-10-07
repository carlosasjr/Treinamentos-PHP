<?php
//Route::get('/', 'Site\SiteController@index');

Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'SiteController@index');
    Route::get('/contato', 'SiteController@contato');

    Route::group(['prefix' => 'categoria'], function () {
        Route::get('/{id}', 'SiteController@categoria');
    });

    Route::get('/categoria2/{id?}', 'SiteController@categoriaOP');

});


Route::group(['namespace' => 'Painel'], function() {
    Route::get('/painel', 'PainelController@index');
});










/*
Route::get('/nome/nome2/nome3',function (){
    return 'Rota Grande';
})->name('rota.nomeada');


Route::post('/post', function (){
    return 'Route post';
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/contato', function () {
    return 'contato';
});

Route::get('/', function () {
    return redirect()->route('rota.nomeada');
});

Route::match(['get', 'post'],'/match', function (){
    return 'Route com dois tipos';
});

Route::any('/any', function (){
    return 'Qualquer tipo';
});

Route::get('/categoria/{id}', function ($id) {
    return "Posta da Categoria " . $id ;
});

//Rota com parâmetro opcional
Route::get('/categoria2/{id?}', function ($id = 1) {
    return "Posta da Categoria " . $id ;
});

//Cria um prefixo para a rota,
//facilita para não precisar passar a rota inteira no get('/painel/financeiro') por exemplo

//com middleware eu posso previnir que somente pessoas logadas podem acessar a rota
//se não tiver permissão ele chama a rota de login que precisa estar nomeada
//'middleware' => 'auth'
//Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function (){

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', function (){
       return 'Pagina principal do admin';
    });

    Route::get('/users', function (){
        return 'Pagina de usuários';
    });
});

Route::get('/login', function () {
    return 'Tela de login';
})->name('login');

*/

