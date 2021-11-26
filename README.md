# [<img src="https://raw.githubusercontent.com/arcanehub/arcanehub/24b2737ca7acbccb6e314ae02cb95b99ba9c667f/images/logo_colored.svg" height="28" />](https://github.com/arcanehub/arcanehub) ⇀ Shield

> :warning: This project under development.
> Current not working or don't work properly

**Arcane Shield** is an open source free to use ticketing/bug reporting/qna web oriented application based on Laravel PHP framework.

## Installation

#### Requirements

- PHP ^8.0
- PgSQL >=13 _(Maybe working on MySQL, but not tested)_

First you need to clone this repository:

```bash
git clone https://github.com/arcanehub/shield
cd ./shield
```

Then choose type of installation below:

- [kool.dev (preferred)](#kool-dev)
- [Manual](#manual)
- [Docker](#docker)

### [Kool dev](https://kool.dev)

Make sure you have [Docker](https://www.docker.com) and [Kool](https://kool.dev) installed.

Copy example files:
```bash
cp docker-compose.yml.example docker-compose.yml
cp kool.yml.example kool.yml
```

```
kool run setup
kool artisan migrate --seed
```

> Note that `cp` command not working properly on Windows.
> Make sure you're copied `.env.docker` file to `.env` and
> delete `cp` command in `kool.yml`

### Manual

Copy `.env.example` file to `.env` file:

```bash
cp .env.example .env
```

Then you **must** setup your database under this keys in `.env`:
```dotenv
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=shield
DB_USERNAME=
DB_PASSWORD=
```

Then install composer dependencies, generate encryption key and run all migrations with seeders:
```bash
composer install
php artian key:generate
php artisan migrate --seed
```

> :warning: `key:generate` command must be executed only **once** after installation.

#### Deployment
There is no specific notes about deployment on your server.
All you need you can find at [Laravel documentation](https://laravel.com/docs/8.x/deployment).


### Docker
> :warning: **Not tested**. At your own risk

Make sure you have [Docker](https://www.docker.com) installed.

Copy example files:
```bash
cp docker-compose.yml.example docker-compose.yml
cp .env.docker .env
```

Then run `up` command and necessary installation commands:
```bash
docker-compose up -d
docker exec shieldapp composer install
docker exec shieldapp artisan key:generate
docker exec shieldapp artisan migrate --seed
```
