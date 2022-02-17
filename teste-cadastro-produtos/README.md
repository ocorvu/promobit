## Sumário

- [Requisitos](#requisitos)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Funcionalidades](#funcionalidades)
- [Setup e Utilização](#setup-e-utiliza%C3%A7%C3%A3o)
- [SQL de extração](#sql-de-extra%C3%A7%C3%A3o)

## Requisitos

- PHP 7.4+
- MYSQL 5.7+
- Composer

## Tecnologias Utilizadas

- PHP 7.4.22
- MYSQL 8
- Composer
- Laravel 8
- Bootstrap 5
- JavaScript

## Funcionalidades

- Vizualição geral de `tags` e `produtos`;
- Criação, edição e remoção de `tags` e `produtos`; 
- Vizualização individual de `tags` e `produtos` com 
todas as informações e botões que deixam a navegação
do usuário mais intuitiva;


## Setup e Utilização

Tendo um ambiente com PHP e MYSQL é preciso apenas:
- Clonar esse repositório;
- Executar o comando `composer install`;
- Fazer a configuração do banco de dados no arquivo `.env`;
- Executar o comando `php artisan migrate` para criar as 
tabelas do banco de dados;
- Executar o comando `php artisan serve`;
- O comando acima irá subir um servidor local 
(por padrão `http://127.0.0.1:8000`);
- Para acessar os **produtos** use `\products`;
- Para acessar as **tags** use `\tags`;


## SQL de Extração
SQL de extração de relatório de relevância de produtos.

```SQL
SELECT `tags`.`name` AS `tag_name`, 
	COUNT(*) AS `total_products` 
FROM `tags` 
INNER JOIN `product_tag` ON `tags`.`id` = `product_tag`.`tag_id` 
GROUP BY `tags`.`name`;
```