# 📝 Sistema de Tarefas com Login

Um sistema simples de gerenciamento de tarefas com autenticação de usuários, desenvolvido com CodeIgniter 4, PHP e MySQL.

## 🚀 Funcionalidades

- Cadastro e login de usuários com senha criptografada
- CRUD completo de tarefas
- Cada usuário visualiza apenas suas próprias tarefas
- Validações de formulário com mensagens personalizadas
- Proteção CSRF integrada
- Interface responsiva com Bootstrap 5

## 🛠️ Tecnologias Utilizadas

- [CodeIgniter 4](https://codeigniter.com/)
- PHP 8.x
- MySQL
- HTML5, CSS3 e Bootstrap 5

## 📦 Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/igor-exception/tarefas.git
   cd tarefas
   ```

2. Instale as dependências com Composer:

   ```bash
   composer install
   ```

3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, especialmente as de conexão com o banco de dados.

4. Configure o banco de dados MySQL:

   - Crie um banco de dados chamado `tarefas`.
   - Importe o arquivo `tarefas.sql` localizado na raiz do projeto.

5. Inicie o servidor de desenvolvimento do CodeIgniter:

   ```bash
   php spark serve
   ```

6. Acesse o sistema em `http://localhost:8080`.

## 🔐 Segurança

- Proteção contra CSRF ativada
- Senhas armazenadas com `password_hash()`
- Validações de entrada robustas
- Controle de acesso baseado em sessão

## 📸 Screenshots

### Tela de Login
![Tela de Login](img_portfolio/ps_1.jpg)

### Confirmação de Logout
![Confirmação de Logout](img_portfolio/ps_2.jpg)

### Cadastro de Usuário
![Cadastro de Usuário](img_portfolio/ps_3.jpg)

### Dashboard
![Dashboard](img_portfolio/ps_4.jpg)

### Nova Tarefa
![Nova Tarefa](img_portfolio/ps_5.jpg)

### Minhas Tarefas
![Minhas Tarefas](img_portfolio/ps_6.jpg)

### Edição de Tarefa
![Edição de Tarefa](img_portfolio/ps_7.jpg)

  

## 👨‍💻 Autor

  

**Igor Oliveira**


