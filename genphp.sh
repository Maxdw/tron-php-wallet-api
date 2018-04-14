#!/bin/sh

#
# Run this script to generate the PHP GRPC client and proto data objects
#
# 1. Checks if grpc submodule needs initialisation
# 2. Checks if the protoc grpc_php_plugin needs to be built using make
# 3. Runs protoc and generates PHP GRPC client and proto data objects
#

cwd=$(pwd)

if [ ! -f "./modules/grpc/Makefile" ]
then
    cd ./modules/grpc
    git submodule update --init
fi

cwd=$(pwd)

if [ ! -f "./modules/grpc/bins/opt/grpc_php_plugin" ]
then
    cd ./modules/grpc
    make grpc_php_plugin
fi

protoc \
    --proto_path=modules/protocol \
    --grpc_out=src \
    --plugin=protoc-gen-grpc=./modules/grpc/bins/opt/grpc_php_plugin \
    --php_out=src \
    ./modules/protocol/api/api.proto