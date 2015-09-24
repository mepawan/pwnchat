#!/bin/sh
COMMAND=$1
#check if running
if ps aux | grep [c]hat-server > /dev/null
then
    echo "[pwnChat] Running"
    RUNNING="yes"
else
    echo "[pwnChat] Not running"
    RUNNING="no"
fi

#start or stop
if [ "$COMMAND" = "stop" ]
then
    if [ $RUNNING = "yes" ]
    then
        echo "[pwnChat] stopping"
        pkill -9 -f chat-server
    fi
else
    if [ $RUNNING = "no" ]
    then
        echo "[pwnChat] start"
        nohup php chat-server.php 0<&- &> mg-chat-server.log &
    fi
fi