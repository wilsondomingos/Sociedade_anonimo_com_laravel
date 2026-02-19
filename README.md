# 🎨 Sociedade Anônimo - Marketplace de Arte

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

O **Sociedade Anônimo** é uma plataforma web desenvolvida em **Laravel** que conecta artistas e apreciadores de arte. O sistema permite que usuários se registrem, criem seus portfólios e vendam suas obras de arte (pinturas, esculturas, digitais, etc.) de forma segura e simplificada.

---

## 🚀 Funcionalidades

### 👤 Para Usuários (Colecionadores)
- **Registro e Login:** Autenticação segura com validação de e-mail.
- **Catálogo de Arte:** Navegação por categorias, preços e artistas.
- **Busca Avançada:** Filtros por estilo, preço e técnica.
- **Carrinho de Compras:** Gestão de itens antes do checkout.
- **Histórico de Pedidos:** Acompanhamento de compras realizadas.

### 🖌️ Para Artistas
- **Dashboard do Artista:** Visão geral de vendas e visualizações.
- **Upload de Obras:** Envio de imagens de alta qualidade com detalhes (título, dimensões, técnica).
- **Gestão de Estoque:** Marcar obras como vendidas ou disponíveis.
- **Relatórios Financeiros:** Acompanhamento de ganhos e saques.

### 🛡️ Gerais
- **Painel Administrativo:** Moderação de conteúdos e gestão de usuários.
- **Integração de Pagamento:** Suporte a gateways (Stripe/Mercado Pago).
- **Responsividade:** Layout adaptável para mobile e desktop.

---

## 🛠️ Tecnologias Utilizadas

| Categoria | Tecnologia |
| :--- | :--- |
| **Backend** | Laravel 10.x, PHP 8.2 |
| **Banco de Dados** | MySQL 8.0 |
| **Frontend** | Blade Templates, Tailwind CSS, Alpine.js |
| **Armazenamento** | AWS S3 ou Local Storage |
| **Pagamentos** | Stripe API / Mercado Pago |
| **Imagens** | Intervention Image |

---

## 📦 Instalação e Configuração

Siga os passos abaixo para rodar o projeto localmente.

### 1. Pré-requisitos
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL ou PostgreSQL

### 2. Clonar o Repositório
```bash
git clone https://github.com/seu-usuario/sociedade_anonimo_com_laravel.git
cd sociedade_anonimo_com_laravel
