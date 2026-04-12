# 📌 Framework Symfony – Apresentação

## 🧩 O que é o Symfony?

O Symfony é um framework PHP utilizado para desenvolvimento de aplicações web, APIs e sistemas complexos. Ele segue o padrão MVC (Model-View-Controller) e é amplamente utilizado no mercado por sua robustez e organização.

---

## ✅ Vantagens

* Alta organização de código (arquitetura bem definida)
* Escalável (ideal para projetos grandes)
* Reutilização de componentes
* Forte comunidade
* Integração fácil com banco de dados (Doctrine ORM)
* Segurança avançada

---

## ❌ Desvantagens

* Curva de aprendizado mais alta
* Configuração inicial pode ser complexa
* Mais verboso que frameworks mais simples
* Menos produtivo no início comparado ao Laravel

---

## ⚙️ Principais Características

* Arquitetura MVC
* Uso de componentes reutilizáveis
* Sistema de rotas avançado
* Suporte a APIs REST
* Integração com banco via ORM (Doctrine)
* Suporte a Middlewares e eventos
* Sistema de cache

---

## 🌐 Servidores Web disponíveis

Aplicações Symfony podem rodar em:

* Apache
* Nginx
* Servidor embutido do PHP (`php -S`)
* Symfony CLI (servidor próprio)

---

## 🧰 Configurações necessárias

Para rodar um projeto Symfony:

* PHP 8.1+
* Composer
* Banco de dados (ex: PostgreSQL, MySQL, SQLite)
* Extensões PHP:

  * pdo
  * mbstring
  * openssl
  * pdo_pgsql (para PostgreSQL)

---

## 📜 Licença

O Symfony utiliza licença MIT:

* Código aberto
* Uso livre para projetos comerciais e pessoais

---

## 👨‍💻 Responsáveis pelo desenvolvimento

* Criado por: Fabien Potencier
* Mantido por: comunidade + empresa SensioLabs

---

## 🧠 Conclusão

O Symfony é um framework robusto e profissional, ideal para aplicações complexas e escaláveis.

### Pontos positivos:

* Excelente para projetos grandes
* Muito bem estruturado
* Forte padrão de desenvolvimento

### Pontos negativos:

* Mais difícil para iniciantes
* Configuração inicial exige mais conhecimento

👉 No geral, é uma ótima escolha para quem quer trabalhar com projetos profissionais e aprender boas práticas.

---

# 🚀 Tutorial – Configuração e CRUD API

## 1. Criar projeto

```bash
composer create-project symfony/skeleton crud_api
cd crud_api
```

---

## 2. Instalar dependências

```bash
composer require orm maker serializer
```

---

## 3. Configurar banco (PostgreSQL)

No arquivo `.env`:

```env
DATABASE_URL="postgresql://postgres:senha@127.0.0.1:5432/crud_api"
```

---

## 4. Criar entidade

```bash
php bin/console make:entity Pessoa
```

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

## 🎯 Resultado

* API REST funcional
* CRUD completo
* Integração com banco PostgreSQL

---

## 🗣️ Dica para apresentação (15–30 min)

Ordem ideal:

1. Explicar o que é o Symfony
2. Mostrar vantagens/desvantagens
3. Mostrar estrutura do projeto
4. Rodar API ao vivo
5. Testar no Postman
6. Conclusão final

---
