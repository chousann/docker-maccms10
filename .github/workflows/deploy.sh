#!/bin/bash

# 定义要停止的端口号
port=8080

# 获取占用端口的进程ID
pid=$(sudo lsof -t -i:${port})

# 如果找到了进程ID，杀死该进程
if [ -n "$pid" ]; then
  sudo kill $pid
  echo "进程 $pid 已被停止..."
else
  echo "没有找到占用端口 $port 的进程。"
fi
docker compose up -d
          
