# Prova PHP 

## Requisitos 

- Mysql 
- PHP 8.2 no cli
- Node <= v18.20.4 

## Instruções para rodar o projeto: 

1. Clone o projeto em seu ambiente de desenvolvimento e acesse via cli a pasta que você clonou o projeto.

2. Na pasta database importe o script dump_users.sql no seu SGBD para criar o banco de dados e as tabelas.

3. Instale as Dependências do projeto utilizando o comando a seguir:

```bash
npm install
```

4. Execute na pasta o seguinte comando PHP para inicializar o servidor php

```bash
php -S localhost:8000 -t public
```

5. Execute o compilador de JS e SCSS
```bash
npm run dev
```

6. Acesse No seu navegador a url: 

[http://localhost:3000/](http://localhost:3000/)