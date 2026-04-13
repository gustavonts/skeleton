🚀 API CRUD com Symfony

Guia passo a passo para configurar e rodar o projeto usando o Symfony.

📦 1. Criar o Projeto
composer create-project symfony/skeleton nome_do_projeto
cd nome_do_projeto
📚 2. Instalar Dependências

Instale os pacotes necessários:

composer require orm maker serializer
🧩 3. Criar Entidade
php bin/console make:entity Pessoa
Campos da entidade:
nome
cpf
telefone
rua
numero
complemento
bairro
cep
cidade
estado
🎮 4. Criar Controller
php bin/console make:controller PessoaController
🗄️ 5. Configurar Banco de Dados

Edite o arquivo .env:

DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"

Criar o banco:

php bin/console doctrine:database:create
🔄 6. Criar Migrações
php bin/console make:migration
php bin/console doctrine:migrations:migrate
▶️ 7. Rodar a Aplicação
php -S localhost:8000 -t public

Acesse no navegador:
👉 http://localhost:8000

🔗 8. Rotas da API (CRUD)
📌 Criar (POST)
POST http://localhost:8000/api/pessoas
📌 Listar (GET)
GET http://localhost:8000/api/pessoas
📌 Buscar por ID (GET)
GET http://localhost:8000/api/pessoas/{id}
📌 Atualizar (PUT)
PUT http://localhost:8000/api/pessoas/{id}
📌 Deletar (DELETE)
DELETE http://localhost:8000/api/pessoas/{id}
🧪 9. Testar com Postman

Use o Postman para testar os endpoints.
