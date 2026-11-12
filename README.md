<div align="center">

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
- [Arquitetura](#️-arquitetura)
- [Funcionalidades](#️-funcionalidades)
- [Requisitos do TCC Atendidos](#-requisitos-do-tcc-atendidos)
- [Prints do Projeto](#-prints-do-projeto)
- [Como Executar o Projeto](#-como-executar-o-projeto)

---

## 🔍 Visão Geral

O **Krypta** é uma aplicação web (Frontend e Backend) desenvolvida em **Laravel 11**. O projeto foi concebido para ser a vitrine e o sistema de gestão de uma solução inovadora de segurança: um cofre físico e digital para credenciais (senhas e identidade digital).

Toda a identidade visual foi construída para transmitir **segurança, tecnologia e modernidade**, utilizando o tema *Dark Mode* (modo escuro) com detalhes em roxo neon, gradientes e elementos de criptografia, baseando-se fielmente no protótipo visual fornecido.

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

⚙️ Funcionalidades
1. Sistema de Autenticação e Área Restrita
Cadastro de usuários (salvando no banco de dados com criptografia de senha).

Login e Logout seguros.

Redirecionamento para o Dashboard (Painel de Controle) após o login.

Proteção de rotas via Middleware auth.

2. Landing Page (Home Pública)
Exibição dinâmica de todos os planos cadastrados no banco.

Seção de depoimentos que puxa os dados da tabela testimonials.

Textos institucionais focados na divulgação da marca Krypta e da "Trindade Criptográfica".

3. CRUD de Planos (Core do TCC)
Create: Cadastrar novos planos com nome, preço, descrição e features.

Read: Listar todos os planos no Dashboard e na Home.

Update: Editar as informações de planos existentes.

Delete: Excluir planos do sistema.

4. CRUD de Depoimentos (Bônus)
Gerenciamento (criar, ler, editar, apagar) dos depoimentos exibidos na página inicial.

Acesso restrito à área administrativa.

5. Páginas Institucionais
Serviços (/servicos): Detalhamento do hardware e do software Krypta.

Contato (/contatos): Formulário que valida os dados e insere na tabela contacts do banco.

🛡️ Requisitos do TCC Atendidos
Abaixo está o mapeamento exato de onde cada requisito obrigatório da disciplina foi implementado no código:

Requisito Exigido	Onde está no Código / Como Verificar
Laravel Breeze (Login/Registro)	Rotas em routes/auth.php. Telas decoradas em resources/views/auth/.
Rota Fallback	Declarada no final do arquivo routes/web.php. Retorna a view resources/views/errors/404.blade.php.
Migrações	Pasta database/migrations/. Criam as tabelas users, plans, testimonials e contacts.
Tailwind CSS	Aplicado em todas as views (ex: welcome.blade.php, layouts/app.blade.php).
Middlewares	No routes/web.php, o bloco Route::middleware(['auth', 'verified']) protege o Dashboard e os CRUDs.
Seeder (10 registros)	Arquivo database/seeders/PlanSeeder.php. Insere exatamente 10 planos no banco.
Home e Dashboard com dados	Home em resources/views/welcome.blade.php. Dashboard em resources/views/dashboard.blade.php. Ambos consomem do banco.
CRUD Completo	Controladores PlanController.php e TestimonialController.php, com views nas pastas resources/views/plans/ e testimonials/.
📸 Prints do Projeto
(Certifique-se de que as imagens abaixo estão na raiz do repositório com exatamente estes nomes)

1. Site Funcionando em Localhost (Home Pública)
https://imagem1.png/
Legenda: Landing page com o design dark/roxo do Krypta e listagem de planos.

2. Banco de Dados (Migrations e Seeders)
https://imagem2.png/
Legenda: phpMyAdmin exibindo a tabela plans populada com os 10 registros via Seeder.

3. Front-End (Operações CRUD)
https://imagem3.png/
Legenda: Tela de listagem de planos no Dashboard, com botões de Editar e Excluir.

4. Back-End (Operações CRUD)
https://imagem4.png/
Legenda: Código do PlanController.php mostrando os métodos index, store, update e destroy.

🚀 Como Executar o Projeto
Siga os passos abaixo para rodar o projeto localmente na sua máquina.

1. Pré-requisitos
Ter o XAMPP instalado (Apache e MySQL rodando).

Ter o Composer instalado.

Ter o Node.js instalado.

2. Clonar e Instalar Dependências
bash
git clone https://github.com/seu-usuario/krypta-app.git
cd krypta-app
composer install
npm install
3. Configurar o Banco de Dados
Abra o phpMyAdmin e crie um banco chamado krypta_db.
Duplique o arquivo .env.example e renomeie para .env. Configure as credenciais:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=krypta_db
DB_USERNAME=root
DB_PASSWORD=
4. Gerar Chaves, Criar Tabelas e Popular o Banco (Seed)
bash
php artisan key:generate
php artisan migrate:fresh --seed
5. Iniciar os Servidores
Você precisará de dois terminais abertos.
No terminal 1 (para compilar o Tailwind):

bash
npm run dev
No terminal 2 (para rodar o Laravel):

bash
php artisan serve
O projeto estará disponível no navegador em: http://127.0.0.1:8000

👨‍💻 Autores
Desenvolvido com dedicação por:

Kevin Lima

Lukas Bariani

Sofia Moura

Vinícius Gonzaga
