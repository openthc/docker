This installation document is intended for tests, demonstration, single-tenant amd small-scale productive environments.

## Requirements

- Host server with at least 2 GB of RAM
- [Docker](https://docs.docker.com/desktop/)
- [Docker Compose](https://docs.docker.com/compose/)

## Preparation

The default system is pre-configured to run in Demo mode. Service configurations are included in this repository in the `gfs/` directory. This directory is mounted into each service, and the service's initialization script copies the service config into place in the container.

```bash
git clone https://github.com/openthc/docker.git /opt/openthc/docker

cd /opt/openthc/docker

docker-compose pull
```

## Startup

Authentication and profile configuration needs to be migrated after the environment's initial boot. To do this, run the `first-time.php` initialization script in the App service. Note: The initialization script uses the service configuration found in `gfs/`. These configurations must be modified before the first boot in order to migrate user modifications.

The following services will be available on the host system using the default configuration:

- [App - http://127.0.0.1:4202](http://127.0.0.1:4202)
- [Lab Portal - http://127.0.0.1:4203](http://127.0.0.1:4203)
- [Point of Sale - http://127.0.0.1:4204](http://127.0.0.1:4204)

To login visit http://127.0.0.1:4202/auth/open

|			|						|
| ---		| ---					|
| Email		| `root@opemthc.local`	|
| Password 	| `password`			|


```bash
# Environment boot
docker-compose up -d

# Run this after the first boot
docker-compose exec app php ./sbin/first-time.php
```

