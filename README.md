
# Cursoflix API
Projeto em andamento de construção de uma API que forneça o back end de uma plataforma de cursos de educação à distância. O projeto é feito em Laravel.

## Subir a API
Para testar o projeto, siga os passos descritos abaixo

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/Jonabsfx/CursoflixAPI.git
```

```sh
cd CursoFlix
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env, configurando o BD como preferir.

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Carregar as tabelas no banco de dados
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)