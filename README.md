# Encurtador de URL

Projeto desenvolvido usando docker.  
Na raiz do projeto tem o arquivo `docker-compose.yml` com tudo que é necessário para rodar o projeto.

* Nginx
* PHP 8.1
* Laravel 9
* MySQL 8.0

**Executar o comando abaixo para subir todos os serviços.**
```
docker-compose up -d --build
```

## Requisitos

**Executar um dos comandos abaixo para garantir que os assets CSS e JS sejam gerados corretamente.**
```
npm run dev
```
ou
```
npm run prod
```

**Executar as migrations e seeds**
```
php artisan migrate --seed
```

## Dados para acessar o admin
No admin é possível ver a lista de urls encurtadas e também encurtar urls.

```
Login: admin@admin.com
Senha: 12345678
```

## Rota para encurtar URL

POST - http://localhost/api/shorten

**Parâmetros**
```
original_url : obrigatório
code_url     : opcional
expiration   : opcional
```

**Body**
```
{
    "original_url": "http://www.google.com",
    "code_url": "teste",
    "expiration": "17/05/2022"
}
```

**Response**
```
{
	"shortened_url": "http://localhost/teste"
}
```
