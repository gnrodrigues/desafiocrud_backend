
# Desafio crud

## Instalação

1. Instalação
```bash
composer global require laravel/installer
```

2. Rodar projeto local

```bash
php artisan serve
```

3. Rodar um servidor local MySQL exemplo (MAMP, WampServer, XAMPP ) - para desevolvimento foi usado MAMP

4. Criar um database no servidor MySQL chamado desafiocrud de acordo com .env DB_DATABASE=desafiocrud

5. Criar tabelas no banco de dados

```bash
php artisan migrate
```

5. Inserir dados nas tabelas com devidos relacionamentos

```bash
php artisan db:seedphp 
```
