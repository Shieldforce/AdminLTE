<?php

//======================================================================================================================
Route::group(['namespace' => 'Home'], function () {
    //Rota de Home Externo
    Route::get('/', 'HomeController@index')->name('Home.Principal.index');
});


//======================================================================================================================
//Rotas de autentificação geradas automáticamente
Auth::routes();


//======================================================================================================================
Route::group(['namespace' => 'Painel'], function (){
    //Painel de Controle
    Route::get('/Painel', 'PainelController@index')->name('Painel.Principal.index');
    //Usuários Rota Show------------------------------------------------------------------------------------------------
    Route::get('/Painel/Usuarios', 'UsuariosController@index')->name('Painel.Usuarios.index');
    //Criação
    Route::get('/Painel/Create-Usuarios', 'UsuariosController@Create')->name('Painel.Usuarios.Create');
    Route::post('/Painel/Store-Usuarios', 'UsuariosController@Store')->name('Painel.Usuarios.Store');
    //Edição
    Route::get('/Painel/Edit-Usuarios', 'UsuariosController@Edit')->name('Painel.Usuarios.Edit');
    Route::post('/Painel/Update-Usuarios', 'UsuariosController@Update')->name('Painel.Usuarios.Update');
    //Exclusão
    Route::get('/Painel/Destroy-Usuarios', 'UsuariosController@Destroy')->name('Painel.Usuarios.Destroy');
});