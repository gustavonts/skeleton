# Siga os passos abaixo para configurar e rodar o projeto localmente.

1. Criar o Projeto
``
composer create-project symfony/skeleton nome_do_projeto
cd nome_do_projeto
``
2. Instalar Dependências (ORM, Maker e Serializer)
``
composer require orm maker serializer
``
3. Criar Entidade e Controller
``
php bin/console make:entity Pessoa
``

- Gera o controller com a rota padrão
``
php bin/console make:controller PessoaController
``

4. Configurar Banco de Dados
No arquivo .env, ajuste a conexão (exemplo para SQLite):

Snippet de código
``
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
``

Em seguida, crie o banco:

``
php bin/console doctrine:database:create
``

5. Rodar a Aplicação
``
php -S localhost:8000 -t public
``
Acesse em: http://localhost:8000

Adicionar campos:

* nome
* cpf
* telefone
* rua
* numero
* complemento
* bairro
* cep
* cidade
* estado

---

## 5. Criar banco

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

---

## 6. Criar controller (API)

```bash
php bin/console make:controller PessoaController
```

Implementar rotas:

* GET /api/pessoas
* GET /api/pessoas/{id}
* POST /api/pessoas
* PUT /api/pessoas/{id}
* DELETE /api/pessoas/{id}

---

## 7. Rodar aplicação

```bash
php -S localhost:8000 -t public
```

---

## 8. Testar com Postman

### POST - CRIAR

```
http://localhost:8000/api/pessoas
```

### GET - LISTAR

```
http://localhost:8000/api/pessoas
```

---

### GET - BUSCA POR ID

```
http://localhost:8000/api/pessoas/{id}
```

---

### PUT - ATUALIZAR

```
http://localhost:8000/api/pessoas/{id}
```

---

### DELETE - DELETAR

```
http://localhost:8000/api/pessoas/{id}
```

---

### POST - CRIAR

```
http://localhost:8000/api/pessoas/
```

---