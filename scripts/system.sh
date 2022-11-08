#!/bin/bash

system.cdOriginalPath(){
    cd "$ORIGINAL_PATH" || exit
}

system.setOriginalPath(){
    ORIGINAL_PATH=$(pwd)
}

system.install(){
  apt-get install -y "$1"
}

system.update(){
    apt-get update
}
