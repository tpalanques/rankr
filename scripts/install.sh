#!/bin/bash

function cleanup() {
  cd "${ORIGINAL_PWD}" || exit
}

function configure() {
  ORIGINAL_PWD=$(pwd)

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
