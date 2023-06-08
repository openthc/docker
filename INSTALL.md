This installation document is intended for tests, demonstration, single-tenant and small-scale productive environments.

## Requirements

- Host server with at least 2 GB of RAM
- [Docker](https://docs.docker.com/desktop/)
- [Docker Compose](https://docs.docker.com/compose/)

## Preparation

The default system is pre-configured to run in Demo mode. Service configurations live in the `gfs/` directory in this repository. Each service mounts the `gfs/` directory. On boot, the initialization script copies the service config into place.

```bash
git clone https://github.com/openthc/docker.git /opt/openthc/docker

cd /opt/openthc/docker

docker-compose pull
```

## Startup

After the environment's initial boot, we must migrate authentication and profile configuration. To do this, run the `first-time.php` initialization script in the App service.

```bash
# Environment boot
docker-compose up -d

# Run this after the first boot
docker-compose exec app php ./sbin/first-time.php
```

The following services will be available on the host system using the default configuration:

- [App - http://127.0.0.1:4202](http://127.0.0.1:4202)
- [Lab Portal - http://127.0.0.1:4203](http://127.0.0.1:4203)
- [Point of Sale - http://127.0.0.1:4204](http://127.0.0.1:4204)

To login visit http://127.0.0.1:4202/auth/open

|			|						|
| ---		| ---					|
| Email		| `root@openthc.local`	|
| Password 	| `password`			|


