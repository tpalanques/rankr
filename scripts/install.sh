#!/bin/bash

source system.sh

function cleanup() {
  system.cdOriginalPath
}

function configure() {
  system.setOriginalPath

}

function install() {
  system.update
  system.install docker
  system.install docker-ce
}

configure
install
cleanup
