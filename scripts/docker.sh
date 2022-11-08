#!/bin/bash

source system.sh

system.setOriginalPath

function clean(){
  system.cleanVendorPath
}

function start() {
  system.cdRootPath
  docker-compose up --detach --force-recreate --remove-orphans --always-recreate-deps --build
  system.cdOriginalPath
}

function stop() {
  system.cdRootPath
  sudo docker-compose down
  system.cdOriginalPath
}

command=$1
case $command in
rebuild)
  stop
  clean
  start
  ;;
restart)
  stop
  start
  ;;
start)
  start
  ;;
stop)
  stop
  ;;
*)
  echo "Command not found"
  ;;
esac
