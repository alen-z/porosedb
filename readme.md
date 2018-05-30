aws dynamodb json sdk https://docs.aws.amazon.com/aws-sdk-php/v2/guide/configuration.html

mode=host allows only 1 instance per node

IAM role

open all ports

public -advertise address

default net.ipv4.tcp_keepalive_time = 7200

running compiled docker requires strech, updated docker-cli and 8GB RAM, add alen-z/libnetwork to moby/vendor/github.com/docker/libnetwork

# haproxy
```
docker run --rm -p 8081:80 porosedb
```
```
docker run --rm -p 80:80 -p 8080:8080 --net=host haproxy
```