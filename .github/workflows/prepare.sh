#!/bin/bash
cd /run/root
sudo apt update
#if [ ! "$(command -v git)" ]; then
#  sudo apt -y install git
#fi

if [ ! "$(command -v curl)" ]; then
  sudo apt -y install curl
fi

if [ ! "$(command -v lsof)" ]; then
  sudo apt -y install lsof
fi

if [ ! "$(command -v docker)" ]; then
  curl -fsSL https://get.docker.com -o get-docker.sh
  sh get-docker.sh
  mkdir -p /etc/docker
  mkdir -p /run/root/docker
  touch /etc/docker/daemon.json
  echo -e "{" > daemon.json
  echo -e "\t\"data-root\":\"/run/root/docker\"" >> daemon.json
  echo -e "}" >> daemon.json
  systemctl restart docker
fi

if [ -n $(docker ps -q  -f "name=^maccms$") ]; then
  if [ -d "/root/docker-maccms10/" ]; then
    cd docker-maccms10
    docker compose stop
    docker compose rm -f
    cd ../
    rm -r docker-maccms10
  fi
fi
   