#!/bin/bash
IMAGE_NAME="todo-front"
container_name=$(docker ps --format "table {{.Image}}\t{{.Names}}" | grep $IMAGE_NAME | awk '{ print $2 }')
echo "Stopping todo frontend..."
echo "container_name=$container_name"
docker container stop $container_name
