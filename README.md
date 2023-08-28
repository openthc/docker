<p align="center">
	<img src="https://openthc.com/img/logo.png" height="128" alt="OpenTHC Greenhouse">
</p>

OpenTHC is an environment of web-baed applications focused on helping Cannabis/Hemp and Organic Horticulture industry participants meet their regulatory requirements.
This repository contains the tools to start the suite of services from docker images.

---

These images are available from our [Docker Hub Profile](https://hub.docker.com/u/openthc)

[![Docker Pulls openthc/app](https://img.shields.io/docker/pulls/openthc/app.svg?label=openthc%2Fapp&style=for-the-badge)](https://hub.docker.com/r/openthc/app)
[![Docker Pulls openthc/cre](https://img.shields.io/docker/pulls/openthc/cre.svg?label=openthc%2Fcre&style=for-the-badge)](https://hub.docker.com/r/openthc/cre)
[![Docker Pulls openthc/lab](https://img.shields.io/docker/pulls/openthc/lab.svg?label=openthc%2Flab&style=for-the-badge)](https://hub.docker.com/r/openthc/lab)
[![Docker Pulls openthc/pos](https://img.shields.io/docker/pulls/openthc/pos.svg?label=openthc%2Fpos&style=for-the-badge)](https://hub.docker.com/r/openthc/pos)
[![Docker Pulls openthc/sql](https://img.shields.io/docker/pulls/openthc/sql.svg?label=openthc%2Fsql&style=for-the-badge)](https://hub.docker.com/r/openthc/sql)


## Quick Start

```bash
git clone https://github.com/openthc/docker.git /opt/openthc/docker
cd /opt/openthc/docker
docker compose up -d
```

Then visit http://localhost:42010/ => http://localhost:42040/auth/open?service=app.openthc.docker.example.com


See [INSTALL.md](./INSTALL.md) for more information.


## Services

These are the services run by the OpenTHC Docker suite.

- [SQL](https://hub.docker.com/r/openthc/sql): PostgreSQL Database
- RAM: Redis
- [SSO](https://github.com/openthc/sso): Single Sign On / oAuth / Account services
- [CRE](https://github.com/openthc/cre): Compliance Reporting Engine
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


## Contributing

- Report Bugs
- Suggest Enhancements / Feature Requests
- Code Contributions


## Getting Support

- [GitHub Issues](https://github.com/openthc/docker/issues)
- [Enterprise Support](https://openthc.com/help)
