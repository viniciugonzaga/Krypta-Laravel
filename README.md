<div align="center">

  <!-- Substitua o caminho abaixo caso tenha uma logo oficial do Krypta no seu projeto -->
  <img src="public/favicon.ico" width="150" alt="Logo Krypta">

  <h1>🔐 Krypta</h1>

  <p><strong>Plataforma web completa de segurança digital, gerenciamento de credenciais e divulgação de cofres físicos.</strong></p>

  <p>
    <img src="https://img.shields.io/badge/Status-Conclu%C3%ADdo-brightgreen?style=for-the-badge" alt="Status">
    <img src="https://img.shields.io/badge/Laravel-11.x-red?style=for-the-badge&logo=laravel" alt="Laravel">
    <img src="https://img.shields.io/badge/TailwindCSS-3.x-blue?style=for-the-badge&logo=tailwind-css" alt="Tailwind">
    <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql" alt="MySQL">
  </p>

  <h3>👨‍💻 Integrantes do Grupo</h3>
  <p>
    Kevin Lima &bull; Lukas Bariani &bull; Sofia Moura &bull; Vinícius Gonzaga
  </p>
  
  <p><em>Trabalho de Conclusão de Curso (TCC) - Técnico em Desenvolvimento de Sistemas</em></p>

</div>

---

## 📑 Índice

- [Visão Geral](#-visão-geral)
- [Destaques do Projeto](#-destaques-do-projeto)
- [Stack Tecnológica](#-stack-tecnológica)
- [Arquitetura](#-arquitetura)
- [Funcionalidades](#-funcionalidades)
- [Rotas](#-rotas)
- [Modelo de Dados](#-modelo-de-dados)
- [Segurança e Autorização](#-segurança-e-autorização)
- [Requisitos do TCC Atendidos](#-requisitos-do-tcc-atendidos)
- [Prints do Projeto](#-prints-do-projeto)
- [Como Executar o Projeto](#-como-executar-o-projeto)

---

## 🔍 Visão Geral

O **Krypta** é uma aplicação web (Frontend e Backend) desenvolvida em **Laravel 11**. O projeto foi concebido para ser a vitrine e o sistema de gestão de uma solução inovadora de segurança: um cofre físico e digital para credenciais (senhas e identidade digital).

Toda a identidade visual foi construída para transmitir **segurança, tecnologia e modernidade**, utilizando o tema *Dark Mode* (modo escuro) com detalhes em roxo neon, gradientes e elementos de criptografia, baseando-se fielmente no protótipo visual fornecido (PDF 67_krypta).

---

## ✨ Destaques do Projeto

O Krypta possui diferenciais técnicos e funcionais que o destacam como uma aplicação completa:

- **Interface Imersiva:** Landing page rica em informações, dividida em seções (Trindade Criptográfica, Por que o Krypta existe, Nossos Planos, Depoimentos).
- **CRUD Duplo Completo:** Sistema de gerenciamento de Planos (Produtos) e Depoimentos (Feedbacks de clientes), provando a escalabilidade do back-end.
- **Autenticação Customizada:** Telas de Login e Registro totalmente reformuladas para manter a identidade visual escura/roxa, utilizando Laravel Breeze.
- **Formulário de Contato Integrado:** Página de contato que envia dados diretamente para o banco de dados (tabela `contacts`).
- **Design Responsivo:** Layout adaptável para celulares, tablets e desktops utilizando as classes utilitárias do Tailwind CSS.

---

## 🛠️ Stack Tecnológica

### Backend
| Tecnologia | Versão | Uso |
| :--- | :--- | :--- |
| PHP | ^8.2 | Linguagem base |
| Laravel Framework | ^11.0 | Framework principal |
| Laravel Breeze | ^2.0 | Scaffold de autenticação (Blade) |
| Eloquent ORM | — | Mapeamento objeto-relacional |
| MySQL | 8.0+ | Banco de dados relacional |

### Frontend
| Tecnologia | Versão | Uso |
| :--- | :--- | :--- |
| Blade | — | Sistema de templates do Laravel |
| Tailwind CSS | ^3.4 | Framework CSS utility-first |
| Vite | ^5.0 | Build tool e dev server |
| Node.js | 18+ | Gerenciador de pacotes front-end (NPM) |

---

## 🏗️ Arquitetura

O projeto segue rigorosamente o padrão **MVC** (Model-View-Controller) do Laravel:

```text
krypta-app/
├── app/
│   ├── Http/Controllers/       # Controladores (PlanController, PageController, etc.)
│   └── Models/                 # Entidades (User, Plan, Testimonial, Contact)
├── database/
│   ├── migrations/             # Criação das tabelas no banco
│   └── seeders/                # População inicial do banco (10 planos)
├── resources/
│   ├── css/                    # Estilos do Tailwind
│   ├── js/                     # Scripts (Alpine.js)
│   └── views/                  # Telas Blade (welcome, dashboard, plans, auth)
├── routes/
│   ├── web.php                 # Rotas principais e Middlewares
│   └── auth.php                # Rotas de login/registro (geradas pelo Breeze)
└── ...
