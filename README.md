# Docker Database Stack

Configure and start a local
[`cluster swarm`](https://docs.docker.com/get-started/part4/)
and a [`stack`](https://docs.docker.com/get-started/part5/) with PostgreSQL,
MySQL, and the [Adminer](https://www.adminer.org/) database manager.

All database files are stored in the `pgsql_data` and `mysql_data` folders,
owned by the user that runs the `start` script.

## Start

The `start` script read environment variables such as the database username and
password from the `.env` file, that is not versioned. To create it, run:

```
cp .env.example .env
```

Then to start the `stack`, run the script:

```
./start
```

## Stop

To stop the `stack`, use the Docker command directly:

```
docker stack rm db
```

And finally, to disable the local `cluster swarm`, run:

```
docker swarm leave
```
