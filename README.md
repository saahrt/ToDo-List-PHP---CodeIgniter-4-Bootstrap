# 📝 Desafio ToDo List - Gerenciamento de Tarefas

## 💼 Descrição do Desafio

Este projeto é uma aplicação web simples de gerenciamento de tarefas (ToDo List) desenvolvida com PHP usando o framework CodeIgniter 4, seguindo o padrão MVC, e estilizada com Bootstrap 5 para um layout responsivo e agradável.  

Foi meu primeiro projeto implementando o padrão MVC com CodeIgniter e utilizando Bootstrap para estilização, consolidando os conceitos básicos de frameworks PHP modernos e frontend responsivo.

---

## 🎯 Funcionalidades Implementadas

- ✅ Adicionar tarefas (com título obrigatório e descrição opcional)  
- ✅ Listar todas as tarefas com filtro (Todas, Pendentes, Concluídas)  
- ✅ Editar tarefas com formulário pré-preenchido  
- ✅ Excluir tarefas com confirmação  
- ✅ Marcar tarefas como concluídas  
- ✅ Layout responsivo usando Bootstrap 5  
- ✅ Organização do código usando padrão MVC do CodeIgniter  
- ✅ Uso de rotas amigáveis no CodeIgniter para navegação  

---

## 🧱 Tecnologias Utilizadas

- **Frontend:** HTML5, CSS3, Bootstrap 5  
- **Backend:** PHP 8.x, CodeIgniter 4  
- **Banco de Dados:** MySQL  

---

## 🗂️ Estrutura do Banco de Dados

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    is_completed TINYINT(1) DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

## 💡 Observações Pessoais

Este projeto marcou minha primeira experiência prática com o framework CodeIgniter no padrão MVC e o uso do Bootstrap para estilização. Durante o desenvolvimento, aprendi a estruturar o backend de forma organizada e a criar uma interface mais profissional e responsiva para o usuário.  

Sei que ainda há muito para aprimorar, como feedbacks visuais mais elaborados, validações no frontend e backend, e testes automatizados, mas esse projeto serviu como uma base sólida para minha evolução na área.

---

## 🚀 Como rodar o projeto

### Pré-requisitos

- Ter um servidor local com PHP 8.x e MySQL instalado (XAMPP, WAMP, Laragon etc).  

### Passos para rodar

1. Clone ou baixe o projeto para dentro da pasta pública do servidor (exemplo: `htdocs` no XAMPP).  
2. Importe o arquivo `todo_db.sql` no phpMyAdmin para criar o banco de dados e as tabelas necessárias.  
3. Inicie o Apache e o MySQL pelo painel do seu servidor local.  
4. No navegador, acesse:  http://localhost/testeTecnicoPHP/codeigniter4-framework-d021b04/public/

Pronto! O sistema estará rodando com todas as funcionalidades.

---
