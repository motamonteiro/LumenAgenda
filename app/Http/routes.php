<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', [
    'as' => 'agenda.index',
    'uses' => 'AgendaController@index'
]);

$app->get('/{letra}', [
    'as' => 'agenda.letra',
    'uses' => 'AgendaController@index'
]);

$app->post('/busca', [
    'as' => 'agenda.busca',
    'uses' => 'AgendaController@busca'
]);

/*
 * Pessoas
 */
$app->get('/contato/novo', [
    'as' => 'pessoa.create',
    'uses' => 'PessoaController@create'
]);

$app->post('/contato', [
    'as' => 'pessoa.store',
    'uses' => 'PessoaController@store'
]);

$app->get('/contato/{id}/editar', [
    'as' => 'pessoa.edit',
    'uses' => 'PessoaController@edit'
]);

$app->put('/contato/{id}', [
    'as' => 'pessoa.update',
    'uses' => 'PessoaController@update'
]);

$app->get('/contato/{id}/apagar', [
    'as' => 'pessoa.delete',
    'uses' => 'PessoaController@delete'
]);

$app->delete('/contato/{id}', [
    'as' => 'pessoa.destroy',
    'uses' => 'PessoaController@destroy'
]);

/*
 * Telefones
 */
$app->get('/contato/{idPessoa}/telefone/novo', [
    'as' => 'telefone.create',
    'uses' => 'TelefoneController@create'
]);

$app->post('/contato/{idPessoa}/telefone', [
    'as' => 'telefone.store',
    'uses' => 'TelefoneController@store'
]);
$app->get('/telefone/{id}/apagar', [
    'as' => 'telefone.delete',
    'uses' => 'TelefoneController@delete'
]);

$app->delete('/telefone/{id}', [
    'as' => 'telefone.destroy',
    'uses' => 'TelefoneController@destroy'
]);

//$app->get('/key', function() {
//    return str_random(32);
//});