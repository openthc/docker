<p align="center">
	<img src="https://cdn.openthc.com/img/logo.png" height="150" alt="OpenTHC Greenhouse">
</p>

OpenTHC is an environment of web-baed applications focused on helping Cannabis/Hemp and Organic Horticulture industry participants meet their regulatory requirements.
This repository contains the tools to start the suite of services from docker images.

---

These images are available from our [Docker Hub Profile](https://hub.docker.com/u/openthc)

![Docker Pulls openthc/app](https://img.shields.io/docker/pulls/openthc/app.svg?label=openthc%2Fapp&style=for-the-badge)
![Docker Pulls openthc/cre](https://img.shields.io/docker/pulls/openthc/cre.svg?label=openthc%2Fcre&style=for-the-badge)
![Docker Pulls openthc/lab](https://img.shields.io/docker/pulls/openthc/lab.svg?label=openthc%2Flab&style=for-the-badge)
![Docker Pulls openthc/pos](https://img.shields.io/docker/pulls/openthc/pos.svg?label=openthc%2Fpos&style=for-the-badge)
![Docker Pulls openthc/sql](https://img.shields.io/docker/pulls/openthc/sql.svg?label=openthc%2Fsql&style=for-the-badge)


## Features

OpenTHC services:

- [App](https://github.com/openthc/app)
  - Track and Trace (T&T/TnT)
  - Enterprise resource planning (ERP)
  - Regulatory compliance features for your region
- [Lab Portal](https://github.com/openthc/lab)
  - Regulatory compliance reporting
  - Laboratory Information Management Systems (LIMS)
- [Point of Sale](https://github.com/openthc/pos)
  - Front end for Retail staff
  - Business-to-Consumer regulatory compliance reporting
- [CRE](https://github.com/openthc/cre)
  - Central reporting engine
- [SQL](https://hub.docker.com/r/openthc/sql)
  - PostgreSQL database

And there are back-end "core" services that operate as well

- CRE - A dummy compliance reporting engine
- SSO - The Authentication Portal
- WWW - A Dummy Service Homepage to point to the other ones


## Installation

### Requirements

- Host server with at least 4 GB of RAM
- [Docker](https://docs.docker.com/engine/)
- [Docker Compose](https://docs.docker.com/compose/)

For single-tenant or demonstration setups: it is recommended to use the docker-compose definition. See [INSTALL.md](./INSTALL.md) for more information.

```bash
$ docker-compose pull
$ docker-compose up --detach
```


## Contributing

- Report Bugs
- Suggest Enhansements / Feature Requests
- Code Contributions

## Getting Support

- [GitHub Issues](https://github.com/openthc/docker/issues)
- [Enterprise Support](https://openthc.com/help)
