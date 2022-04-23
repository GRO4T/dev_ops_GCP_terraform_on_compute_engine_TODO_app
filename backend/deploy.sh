#!/bin/bash
./stop.sh
docker build -t todo-back .
docker run -dp 8001:8001 todo-back
