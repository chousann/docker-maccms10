#!/bin/bash

sudo apt update
if [[ ! "$(command -v git)"]]; then
  sudo apt -y install git
fi

if [[ ! "$(command -v curl)"]]; then
  sudo apt -y install curl
fi

if [[ ! "$(command -v docker)"]]; then
  curl -fsSL https://get.docker.com -o get-docker.sh
  sh get-docker.sh
fi

if [[ -n $(docker ps -q  -f "name=^maccms$")]]; then
  if [ ! -d "docker-maccms10"]; then
  else
    cd docker-maccms10
    docker compose stop
    docker compose rm
    cd ../
    rm -r ocker-maccms10
  fi
fi
          