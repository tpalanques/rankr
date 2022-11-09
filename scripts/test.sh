#!/bin/bash

source docker.sh

function test.run() {
  docker.run phpunit
}

test.run
