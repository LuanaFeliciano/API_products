<?php
$router->get('produto', 'ProdutoController@showAllProducts');
$router->get('produto/{id}', 'ProdutoController@showOneProduct');
$router->post('produto', 'ProdutoController@createProduct');
$router->put('produto/{id}', 'ProdutoController@updateProduct');
$router->delete('produto/{id}', 'ProdutoController@deleteProduct');