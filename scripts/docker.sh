#!/bin/bash

source system.sh

system.setOriginalPath

function docker.addDependencies() {
  docker.run composer install
  docker.run composer update
}

function docker.clean() {
  system.cleanVarPath
  system.cleanVendorPath
}

function docker.run() {
  docker-compose run "$1" "$2"
}

function docker.start() {
  system.cdRootPath
  docker-compose up --detach --force-recreate --remove-orphans --always-recreate-deps --build
  system.cdOriginalPath
}

function docker.stop() {
  system.cdRootPath
  sudo docker-compose down
  system.cdOriginalPath
}

command=$1
case $command in
rebuild)
  docker.stop
  docker.clean
  docker.start
  docker.addDependencies
  docker.start
  ;;
restart)
  docker.stop
  docker.start
  ;;
start)
  docker.start
  ;;
stop)
  docker.stop
  ;;
*)
  echo "Command not found"
  ;;
esac
