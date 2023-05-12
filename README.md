# <img width="150px" height="150px" align="right" src="https://github.com/LuanaFeliciano/API_products/assets/98564118/37386e46-cca1-4996-ba17-cbefbdfd0b92">  <h1 align="center"> API com Lumen </h1>

API CRUD de produtos desenvolvida com o micro framework Lumen


## 👩🏽‍💻 Tecnologias
- PostgreSQL
 * [Lumen](https://lumen.laravel.com/docs): Micro-framework voltado para o desenvolvimento de microserviços e API's Restful


## 💻 Endpoints
- GET /produtos retornará todos os produtos.
- GET /produto/{id} retornará um registro de produto fazendo referência a seu id.
- POST /produto/cadastrar = criará um novo registro de produto.
- PUT /produto/{id}/atualizar = atualizará um registro existente de produto.
- DELETE /produto/{id}/deletar = excluirá um registro de produto fazendo referência a seu id.

## Bibliotecas ou Pacotes utilizados:
- https://github.com/flipboxstudio/lumen-generator - Para usar comandos geradores como no Laravel
- https://github.com/fzaninotto/Faker - Para gerar dados falsos. Foi usado para popular o banco de dados.

## Descomentar:
Descomente no bootstrap/app.php
- $app->withFacades();  permite o uso de recursos do Laravel de maneira mais fácil
- $app->withEloquent(); - permite definir e manipular modelos de banco de dados, criar consultas e relacionamentos
