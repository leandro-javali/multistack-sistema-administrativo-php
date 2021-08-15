## Projeto sistema administraivo da plataforma e-Diaristas

Desenvolvido no curso multi-stack da treinaweb

### Instalando o projeto

#### Clonar o repositório

```
git clone https://github.com/leandro-javali/multistack-sistema-administrativo-php.git
```

#### Instalar as dependências

```
composer install
```

Ou em ambiente de desenvolvimento

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Criar o usuario: Administrador

```
php artisan db:seed
```

Usuario: admin@email.com
Senha: 12345678

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
