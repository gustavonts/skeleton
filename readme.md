# 🚀 API CRUD com Symfony

Guia passo a passo para configurar e rodar o projeto utilizando o framework Symfony.

---

## 📦 1. Criar o Projeto

```bash
composer create-project symfony/skeleton nome_do_projeto
cd nome_do_projeto
```

---

## 📚 2. Instalar Dependências

Instale os pacotes necessários para trabalhar com banco de dados e API:

```bash
composer require orm maker serializer
```

---

## 🧩 3. Criar Entidade

```bash
php bin/console make:entity Pessoa
```

### 📌 Campos da entidade:

- nome  
- cpf  
- telefone  
- rua  
- numero  
- complemento  
- bairro  
- cep  
- cidade  
- estado  

---

## 🎮 4. Criar Controller

```bash
php bin/console make:controller PessoaController
```

---

## 🗄️ 5. Configurar Banco de Dados

Edite o arquivo `.env`:

```env
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
```

### Criar o banco:

```bash
php bin/console doctrine:database:create
```

---

## 🔄 6. Criar Migrações

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

---

## ▶️ 7. Rodar a Aplicação

```bash
php -S localhost:8000 -t public
```

Acesse no navegador:  
👉 http://localhost:8000

---

## 🔗 8. Rotas da API (CRUD)

### 📌 Criar (POST)
```http
POST http://localhost:8000/api/pessoas
```

---

### 📌 Listar (GET)
```http
GET http://localhost:8000/api/pessoas
```

---

### 📌 Buscar por ID (GET)
```http
GET http://localhost:8000/api/pessoas/{id}
```

---

### 📌 Atualizar (PUT)
```http
PUT http://localhost:8000/api/pessoas/{id}
```

---

### 📌 Deletar (DELETE)
```http
DELETE http://localhost:8000/api/pessoas/{id}
```

---

## 🧪 9. Testar com Postman

Utilize o Postman para testar todos os endpoints da API.