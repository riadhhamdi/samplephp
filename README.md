# A sample application to test with OpenShift 


# Installation 
## Setup a database server 
You can setup a database server on your own. You can use the preffred setup method for that. The following method is given as an example only 


```bash
oc new-app --name pgsql --image registry.redhat.io/rhscl/postgresql-10-rhel7 \
-e POSTGRESQL_USER=pguser \
-e POSTGRESQL_PASSWORD=redhat \
-e POSTGRESQL_DATABASE=data \
-e POSTGRESQL_ADMIN_PASSWORD=redhat123
```

# Run the PHP application with the following code

```bash
oc new-app --name php-sample \
  php~https://github.com/riadhhamdi/samplephp.git \
  -e DB_HOST=172.30.188.116 \
  -e DB_PORT=5432 \
  -e DB_NAME=data \
  -e DB_USER=pguser \
  -e DB_PASSWORD=redhat
```
