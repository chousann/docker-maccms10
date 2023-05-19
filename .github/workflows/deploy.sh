sudo apt update
sudo apt install curl
#sudo apt install git
#git clone https://github.com/chousann/docker-maccms10.git
curl -fsSL https://get.docker.com -o get-docker.sh
sh get-docker.sh
cd docker-maccms10
docker compose up -d
          