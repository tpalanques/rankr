#!/bin/bash

source system.sh

function cleanup() {
  system.cdOriginalPath
}

function configure() {
  system.setOriginalPath

  APT_UPDATE="apt-get update"
  APT_INSTALL="apt-get install -y"
}

function install() {
  ${APT_UPDATE}
  ${APT_INSTALL} docker
  ${APT_INSTALL} docker-ce
}

configure
install
cleanup
