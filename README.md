# 🔐 Krypta - Segurança de Credenciais e Identidade Digital

![Status](https://img.shields.io/badge/Status-Conclu%C3%ADdo-brightgreen)
![Laravel](https://img.shields.io/badge/Laravel-11.x-red)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-blue)

Este projeto é o Trabalho de Conclusão de Curso (TCC) para o curso Técnico de Desenvolvimento de Sistemas. O **Krypta** é uma plataforma web (Frontend e Backend) focada na divulgação e gerenciamento de um sistema de segurança digital e cofre físico de senhas. O design foi totalmente baseado no protótipo fornecido, utilizando uma interface escura (Dark Mode) com detalhes em roxo neon, proporcionando uma experiência moderna e imersiva.

## 🚀 Tecnologias Utilizadas
* **Framework:** Laravel 11
* **Autenticação:** Laravel Breeze (Blade + Alpine.js)
* **Estilização:** Tailwind CSS
* **Banco de Dados:** MySQL (via XAMPP)
* **Gerenciadores de Pacotes:** Composer e Node.js (NPM)

## ⚙️ Pré-requisitos
Antes de começar, você vai precisar ter instalado em sua máquina:
* [XAMPP](https://www.apachefriends.org/pt_br/index.html) (com Apache e MySQL rodando)
* [Composer](https://getcomposer.org/)
* [Node.js](https://nodejs.org/en)
* [Git](https://git-scm.com/)

## 🛠️ Como Executar o Projeto

1. **Clone o repositório e acesse a pasta:**
   ```bash
   git clone https://github.com/seu-usuario/krypta-app.git
   cd krypta-app
   composer install
   npm install
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=krypta_db
   DB_USERNAME=root
   DB_PASSWORD=   
   php artisan key:generate
   php artisan migrate:fresh --seed  
   npm run dev
   php artisan serve
   Acesse no navegador: http://127.0.0.1:8000

Site Funcionando em Localhost (Home Pública)
https://imagem1.png/
Legenda: Landing page pública com o design Krypta, exibindo as sessões do TCC.

2. Banco de Dados (Migrations e Seeders)
https://imagem2.png/
Legenda: Tabela plans populada com os 10 registros inseridos via Seeder.

3. Front-End (Operações CRUD)
https://imagem3.png/
Legenda: Tela de listagem de planos no Dashboard, acessível apenas para usuários logados.

4. Back-End (Operações CRUD)
https://imagem4.png/
Legenda: Código do PlanController.php mostrando os métodos index, store, update e destroy.

Requisitos Atendidos
Laravel Breeze: Rotas e views de autenticação (Login/Registro) em routes/auth.php e resources/views/auth/.

Rota Fallback: Implementada em routes/web.php para tratamento de erros 404.

Migrações: Tabelas criadas via database/migrations/.

Tailwind CSS: Utilizado em todas as views do projeto.

Middlewares: Rotas do Dashboard e CRUDs protegidas pelo middleware ['auth', 'verified'] em routes/web.php.

Seeders: Arquivos PlanSeeder.php (10 registros) e TestimonialSeeder.php em database/seeders/.

Página Inicial e Dashboard: Apresentam os dados do TCC em resources/views/welcome.blade.php e dashboard.blade.php.

CRUDs: CRUD de Planos (PlanController.php) e CRUD de Depoimentos (TestimonialController.php