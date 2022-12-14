#!/bin/bash

source config.sh
config.setEnvironment

system.cdOriginalPath() {
  cd "$ORIGINAL_PATH" || exit
}

system.cdRootPath() {
  cd "$ROOT_PATH" || exit
}

system.cleanVarPath() {
  rm -rf "${STORAGE_VAR_PATH}"
}

system.cleanVendorPath() {
  rm -rf "${STORAGE_VENDOR_PATH}"
}

system.setOriginalPath() {
  ORIGINAL_PATH=$(pwd)
}

system.install() {
  apt-get install -y "$1"
}

system.update() {
  apt-get update
}
