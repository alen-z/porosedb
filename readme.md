aws dynamodb json sdk https://docs.aws.amazon.com/aws-sdk-php/v2/guide/configuration.html

mode=host allows only 1 instance per node

IAM role

open all ports

public -advertise address

default net.ipv4.tcp_keepalive_time = 7200

running compiled docker requires strech, updated docker-cli and 8GB RAM, add alen-z/libnetwork to moby/vendor/github.com/docker/libnetwork

# haproxy
```
docker build --no-cache -t haproxy .
```
```
docker run --rm -p 8081:80 porosedb
```
```
docker run --rm -p 80:80 -p 8080:8080 --net=host haproxy
```
```dockerfile
admin@ip-172-31-34-32:~/porosedb/haproxy$ docker service create --name porosedb_web --publish published=8081,target=80,mode=host --replicas 10 porosedb
image porosedb:latest could not be accessed on a registry to record
its digest. Each node will access porosedb:latest independently,
possibly leading to different nodes running different
versions of the image.

elkzo0u55lfziqt1zeo0m7fpz
overall progress: 3 out of 10 tasks 
1/10: running   [==================================================>] 
2/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
3/10: running   [==================================================>] 
4/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
5/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
6/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
7/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
8/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
9/10: running   [==================================================>] 
10/10: no suitable node (host-mode port already in use on 3 nodes; 2 nodes not av… 
```
- `Manage Stream` should be enabled for DynamoDB.
- Deleting empty table while 0.5 listing tables takes a long time when 3/2 regions are involved and deletes only in 1 selected region!
- DynamoDB deletes quickly if Global Table is empty, Manage Stream disabled and unchecked CloudWatch alarm removal when deleting.