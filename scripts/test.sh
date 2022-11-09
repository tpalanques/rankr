#!/bin/bash

source docker.sh

function test.run() {
  docker.run phpunit "--colors=always"
}

test.run
