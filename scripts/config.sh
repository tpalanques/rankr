#!/bin/bash

config.setEnvironment(){
    ROOT_PATH=".."

    # SCRIPTS
    SCRIPTS_PATH="${ROOT_PATH}/scripts"

    # STORAGE
    STORAGE_PATH="${ROOT_PATH}/storage"
    STORAGE_VAR_PATH="${STORAGE_PATH}/var"
    STORAGE_VENDOR_PATH="${STORAGE_PATH}/vendor"
}
