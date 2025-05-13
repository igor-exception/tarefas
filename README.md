
  

# 🗂️ Sistema de Tarefas com Login - CodeIgniter 4

  

Este projeto é um sistema simples de gerenciamento de tarefas com autenticação de usuários, desenvolvido em **PHP com CodeIgniter 4**.

Ideal para portfólio de desenvolvedor Júnior ou estudo prático de CRUD, login e sessões.

  

---

  

## 🚀 Funcionalidades

  

- Cadastro de usuários com senha criptografada

- Login e logout com sessão

- Cada usuário só vê suas próprias tarefas

- CRUD completo de tarefas

- Proteção de rotas para usuários logados

  

---

  

## 🛠️ Tecnologias Usadas

  

- PHP 8+

- CodeIgniter 4

- MySQL

- Bootstrap (opcional)

- WSL (Linux no Windows)

  

---

  

## 🧭 Como Rodar o Projeto Localmente (Passo a Passo)

  

### ✅ 1. Clone o repositório

  

```bash

git  clone  https://github.com/igor-exception/tarefas.git

cd  tarefas

```

  

---

  

### ✅ 2. Instale as dependências

  

```bash

composer  install

```

  

---

  

### ✅ 3. Configure o ambiente

  

```bash

cp  env  .env

nano  .env

```

  

Edite os dados de conexão com o banco:

  

```dotenv

database.default.hostname = localhost

database.default.database = tarefas_ci4

database.default.username = ci4user

database.default.password = senha123

```

  

---

  

### ✅ 4. Crie o banco de dados MySQL

  

Acesse o MySQL e execute os comandos abaixo:

  

```sql

CREATE  DATABASE  tarefas_ci4  CHARACTER  SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE  USER 'ci4user'@'localhost' IDENTIFIED BY  'senha123';

GRANT ALL PRIVILEGES ON tarefas_ci4.* TO  'ci4user'@'localhost';

FLUSH PRIVILEGES;

```

  

---

  

### ✅ 5. Rode as migrations

  

```bash

php  spark  migrate

```

  

---

  

### ✅ 6. Inicie o servidor local

  

```bash

php  spark  serve

```

  

Abra no navegador:

  

```

http://localhost:8080

```

  

---

  

### ✅ 7. Acesso rápido às páginas

  

- Registro: `/register`

- Login: `/login`

- Dashboard: `/dashboard`

  

---

  

## 👨‍💻 Autor

  

**Igor Oliveira**


