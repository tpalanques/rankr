#!/bin/bash

source system.sh

function install.cleanup() {
  system.cdOriginalPath
}

function install.configure() {
  system.setOriginalPath

}

function install.install() {
  system.update
  system.install docker
  system.install docker-ce
  system.install docker-compose
}

install.configure
install.install
install.cleanup
