#!/bin/bash
./stop.sh
docker build -t todo-front .
docker run -dp 8000:8000 todo-front
