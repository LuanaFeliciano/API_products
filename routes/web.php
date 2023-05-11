<?php
$router->get('produto', 'ProdutoController@showAllProducts');
$router->get('produto/{id}', 'ProdutoController@showOneProduct');
$router->post('produto', 'ProdutoController@createProduct');