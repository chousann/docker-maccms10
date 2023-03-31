#!/bin/bash

set -e
#unset TMUX
#tmux attach
#tmate -S /tmp/tmate.sock display -p '#{tmate_ssh}'
MSG=$(cat mail.txt)
timeout=$((15*60))
index=0
while (( index < timeout )); do
  if [ -f /tmp/keepalive ]; then
    timeout=$((300*60))
  fi
  
  if [ ! -f /tmp/keepalive ]; then
    timeout=$((15*60))
  fi
  
  if (( $index%120 == 0 )); then
    echo $MSG
  fi
  
  if [ -f /tmp/stop ]; then
    timeout=$((0*60))
  fi
  
  sleep 1
  
  index=$(($index+1))
done
echo Waiting on tmate connection timed out!
exit 1
