<?php
$router->get('produtos', 'ProdutoController@showAllProducts');

$router->group(['prefix' => 'produto'], function () use ($router) {
    $router->post('/cadastrar', 'ProdutoController@createProduct');
    $router->get('/{id}', 'ProdutoController@showOneProduct');
    $router->put('/{id}/atualizar', 'ProdutoController@updateProduct');
    $router->delete('/{id}/deletar', 'ProdutoController@deleteProduct');
});