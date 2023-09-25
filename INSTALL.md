# Install

Full instrucitons for installing and configuring the Docker based OpenTHC Suite.
Out of the box the system is pre-configured to run in a limited demo mode.
For full production one needs to update the configuration.


## Requirements

- Host server with at least 4 GB of RAM (prefer Debian 11)
- [Docker CLI](https://github.com/docker/cli) version 24 or newer

```bash
git clone https://github.com/openthc/docker.git /opt/openthc/docker
cd /opt/openthc/docker
```

To run our helper scripts you'll need PHP with libsodium (standard on Debian 11)

Edit YAML or ENV and run `make.php` ?
That build SQL file and Config File
That run against SQL after the first boot.


## Configuration

To make the system ready for a live environment a few changes must be made.
Networking should be updated to change the listening ports or use reverse-proxy, then update service-origin configurations.
Service Keys should be re-generated and update configurations.
Create new Contact(user) and Company and License records.

There is a helper script in `bin/` and it can use values from the `.env` file.


## Networking

To make the OpenTHC services generally available you may want to change the ports.
Then update each of the service configuration files with the new 'origin' values for the service.

Other options are to proxy to this system from an up-stream webserver such as Apache, Caddy or Nginx.
May the force be with you.

The OpenTHC Suite runs in a dedicated network on the Docker container, the subnetn `10.4.20.*` **MUST** available on your network.
To make the OpenTHC Suite availble to other devices on your network you can either configure routing to this subnet or configure DNS and a reverse proxy on the host.


### Routing

Tell your local network to route 10.4.20.* to the IP of the docker host.
This makes it function as a gateway.
You may need to enable IP forwarding in the kernel, or other firewall rules.


### DNS + Reverse Proxy

Set the names, then configure Nginx or something.
The backend can be configured to either the localhost:420* ports or on the 10-net port 80.

An example is visible in [etc/apache2-example.conf](etc/apache2-example.conf)


## Service Keys

The services use encrypted tokens to pass data to each other.
Or communicate session data and other details.


```
nano .env
nano docker-composer.yaml
docker compose up
```

## Startup

After the environment's initial boot, we must migrate authentication and profile configuration.
To do this, run the `first-time.php` initialization script in the App service.

```bash
# Environment boot
docker-compose up -d

# Run this after the first boot
docker-compose exec app php ./sbin/first-time.php
```

The following services will be available on the host system using the default configuration:

- [App - http://10.4.20.30](http://10.4.20.30)
- [Lab Portal - http://10.4.20.40](http://10.4.20.40)
- [Point of Sale - http://10.4.20.50](http://10.4.20.50)

To login visit http://10.4.20.10/auth/open
