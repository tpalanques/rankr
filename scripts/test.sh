#!/bin/bash

source docker.sh

function test.stan() {
  docker.run phpstan analyse /app -v
}
function test.unit() {
  docker.run phpunit "--colors=always"
}



command=$1
case $command in
stan)
  test.stan
  ;;
unit)
  test.unit
  ;;
*)
  echo "Command not found"
  ;;
esac
