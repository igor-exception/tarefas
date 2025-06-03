# ✅ Sistema de Tarefas - CodeIgniter 4

Um sistema simples e funcional de controle de tarefas, desenvolvido com **PHP + CodeIgniter 4**, com foco em boas práticas, autenticação segura e CRUD completo.

📌 **Acesse o sistema online:**  
👉 [https://iosystems.com.br/tarefas](https://iosystems.com.br/tarefas)

---

## ✨ Funcionalidades

- Cadastro e login de usuários com senha criptografada (bcrypt)
- Cada usuário visualiza apenas suas próprias tarefas
- CRUD completo de tarefas (criar, editar, excluir, listar)
- Interface simples e responsiva com HTML + Bootstrap
- Validações com mensagens amigáveis
- Proteção CSRF ativada
- Sistema 100% funcional e publicado com domínio próprio + HTTPS

---

## 🔧 Tecnologias Utilizadas

- **PHP 8.1**
- **CodeIgniter 4.6**
- **MySQL**
- **Bootstrap 5**
- **Apache 2 + Let's Encrypt (SSL gratuito)**
- **Linux Ubuntu VPS**

---

## 📂 Estrutura do Projeto

```
/app
    /Controllers
    /Models
    /Views
/public
    index.php
    favicon.ico
/writable
.env
```

---

## 🚀 Como rodar localmente

1. Clone o repositório:

```bash
git clone https://github.com/igor-exception/tarefas.git
```

2. Instale as dependências com Composer:

```bash
composer install
```

3. Copie o arquivo `.env.example`:

```bash
cp env .env
```

4. Configure o banco de dados no `.env`:

```
database.default.hostname = localhost
database.default.database = tarefas
database.default.username = root
database.default.password = yourpassword
```

5. Rode as migrations:

```bash
php spark migrate
```

6. Inicie o servidor local:

```bash
php spark serve
```

Acesse: `http://localhost:8080`

---

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

---

## 👤 Autor

**Igor Oliveira**  
🔗 [https://iosystems.com.br](https://iosystems.com.br)

---

## 📝 Licença

Projeto livre para fins de aprendizado. Sinta-se à vontade para usar como base para seus estudos ou portfólio.
